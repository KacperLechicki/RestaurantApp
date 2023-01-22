<x-guest-layout>
    <link rel="stylesheet" href="{{asset('./css/stylesFront.css')}}">

    <!-- RESERVATION FORM -->
    <div class="reserv-box-stepTwo">
        <div class="left-panel">
            <div class="left-panel-shadow"></div>
        </div>
        <div class="right-panel-two">
            <h3 class="titleRes">Make Reservation</h3>
            <form method="POST" action="{{route('reservation.store.step.two')}}" enctype="multipart/form-data">
                @csrf
                <div class="info-input">
                    <label for="table_id">Table</label>
                    <select class="form-multiselect block w-full mt-1 selectpicker" id="table_id" name="table_id">
                        @foreach($tables as $table)
                        <option value="{{$table->id}}">{{$table->name}} ({{$table->guests}} guests)</option>
                        @endforeach
                    </select>
                </div>
                <div class="buttons">
                    <a href="{{route('reservation.step.one')}}">Previous</a>
                    <button type="submit">Submit</button>
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