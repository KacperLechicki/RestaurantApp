<x-admin-layout>

<link rel="stylesheet" href="{{asset('/css/stylesAdmin.css')}}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.tables.create')}}" class="btn px-4 py-1">New Table</a>
            </div>

            <div>
                <table class="w-full text-left">
                    <thead class="uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="dicenter flex items-center">
                                    guests
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="dicenter flex items-center">
                                    status
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="dicenter flex items-center">
                                    location
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            @foreach ($tables as $table)
                        <tr class="border-b">
                            <th scope="row" class="px-6 py-4 font-medium" id="long">
                                {{$table->name}}
                            </th>
                            <td class="px-6 py-4" id="long">
                                {{$table->guests}}
                            </td>
                            <td class="px-6 py-4" id="long">
                                {{$table->status}}
                            </td>
                            <td class="px-6 py-4" id="long">
                                {{$table->location}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href="{{route('admin.tables.edit', $table->id)}}" class="btne px-4 py-1">Edit</a>
                                    <form class="" method='POST' action="{{route('admin.tables.destroy', $table->id)}}"
                                        onsubmit="return confirm('Are you sure you want to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-1 btnd">Delete</button>
                                    </form>
                                </div>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>