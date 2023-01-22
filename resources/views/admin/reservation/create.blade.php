<x-admin-layout>

<link rel="stylesheet" href="{{asset('/css/stylesAdmin.css')}}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{route('admin.reservation.index')}}" class="btn px-4 py-1">Back</a>
            </div>

            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.reservation.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium">First Name</label>
                            <div class="mt-1">
                                <input type="text" id="first_name" name="first_name" class="block w-full rounded">
                            </div>
                            @error('first_name')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium">Last Name</label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name" class="block w-full rounded">
                            </div>
                            @error('last_name')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" class="block w-full rounded">
                            </div>
                            @error('email')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block text-sm font-medium">Phone Number</label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" name="tel_number" class="block w-full rounded">
                            </div>
                            @error('tel_number')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium">Reservation
                                Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date" class="block w-full rounded">
                            </div>
                            @error('res_date')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium">Number Of Guests
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    class="block w-full input-lg rounded">
                            </div>
                            @error('guest_number')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="table_id" class="block text-sm font-medium">Table</label>
                            <div class="mt-1">
                                <select class="form-multiselect block w-full mt-1 selectpicker" id="table_id"
                                    name="table_id">
                                    @foreach($tables as $table)
                                    <option value="{{$table->id}}">{{$table->name}} ({{$table->guests}} guests)</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btnre px-4 py-1">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>