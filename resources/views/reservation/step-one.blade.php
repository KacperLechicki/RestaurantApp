<x-guest-layout>
    <link rel="stylesheet" href="{{asset('./css/stylesFront.css')}}">

    <!-- RESERVATION FORM -->
    <div class="reserv-box-stepOne">
        <div class="left-panel">
            <div class="left-panel-shadow"></div>
        </div>
        <div class="right-panel">
            <h3 class="titleRes">Make Reservation</h3>
            <form method="POST" action="{{route('reservation.store.step.one')}}">
                @csrf
                <div class="info-input">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="John" value="{{$reservation->first_name ?? ''}}">
                </div>
                <div class="info-input">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Brown" value="{{$reservation->last_name ?? ''}}">
                </div>
                <div class="info-input">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="john@gmail.com" value="{{$reservation->email ?? ''}}">
                </div>
                <div class="info-input">
                    <label for="tel_number">Phone Number</label>
                    <input type="number" id="tel_number" name="tel_number" placeholder="555 555 555" value="{{$reservation->tel_number ?? ''}}">
                </div>
                <div class="info-input">
                    <label for="res_date">Reservation
                        Date(3pm-10pm)</label>
                    <input type="datetime-local" id="res_date" name="res_date" value="{{$reservation->res_date ?? ''}}" min="{{$minDate->format('Y-m-d\TH:i:s')}}" max="{{$maxDate->format('Y-m-d\TH:i:s')}}">
                </div>
                <div class="info-input">
                    <label for="guest_number">Number Of Guests
                    </label>
                    <input type="number" id="guest_number" name="guest_number" placeholder="1" value="{{$reservation->guest_number ?? ''}}">
                </div>
                <div class="buttons">
                    <button type="submit">Next</button>
                </div>
            </form>
        </div>
    </div>


    <footer class="footer">
        <div class="wrapper">
        </div>
        <p class="footer__bottom-text">&copy; <span class="footer__year">2023</span> Bite Me</p>
    </footer>
</x-guest-layout>