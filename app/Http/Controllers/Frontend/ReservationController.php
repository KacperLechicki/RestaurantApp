<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function stepOne(Request $request) {
        $reservation = $request->session()->get('reservation');

        $minDate = Carbon::today();
        $maxDate = Carbon::now()->addWeek();

        return view('reservation.step-one', compact('reservation', 'minDate', 'maxDate'));
    }

    public function storeStepOne(Request $request) {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'tel_number' => ['required'],
            'guest_number' => ['required'],
        ]);

        if(empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservation.step.two');
    }

    public function stepTwo(Request $request) {
        $reservation = $request->session()->get('reservation');
        $res_table_id = Reservation::orderBy('res_date')->get()->filter(function($value) use($reservation) {
            return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
        })->pluck('table_id');
        $tables = Table::where('status', TableStatus::Available)->where('guests', '>=', $reservation->guest_number)->whereNotIn('id', $res_table_id)->get();

        return view('reservation.step-two', compact('reservation', 'tables'));
    }

    public function storeStepTwo(Request $request) {
        $validated = $request->validate([
            'table_id' => ['required']
        ]);

        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        return to_route('thankyou');
    }

}
