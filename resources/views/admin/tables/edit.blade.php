<x-admin-layout>

<link rel="stylesheet" href="{{asset('/css/stylesAdmin.css')}}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{route('admin.tables.index')}}" class="btn px-4 py-1">Back</a>
            </div>


            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.tables.update', $table->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="block w-full rounded"
                                    value="{{$table->name}}">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guests" class="block text-sm font-medium">Number Of Guests</label>
                            <div class="mt-1">
                                <input type="number" id="guests" name="guests" class="block w-full rounded"
                                    value="{{$table->guests}}">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="block text-sm font-medium">Status</label>
                            <div class="mt-1">
                                <select class="form-multiselect block w-full mt-1 selectpicker rounded" id="status"
                                    name="status">
                                    @foreach(App\Enums\TableStatus::cases() as $status)
                                    <option value="{{$status->value}}" @selected($table->status->value ==
                                        $status->value)>{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="location" class="block text-sm font-medium">Location</label>
                            <div class="mt-1">
                                <select class="form-multiselect block w-full mt-1 selectpicker rounded" id="location"
                                    name="location">
                                    @foreach(App\Enums\TableLocation::cases() as $location)
                                    <option value="{{$location->value}}" @selected($table->location->value ==
                                        $location->value) >{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn px-4 py-1">Save changes</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>