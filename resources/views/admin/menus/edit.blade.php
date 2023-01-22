<x-admin-layout>

    <link rel="stylesheet" href="{{asset('/css/stylesAdmin.css')}}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="ebtn px-4 py-1">Back</a>
            </div>


            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.menus.update', $menu->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="einput block w-full rounded"
                                    value="{{$menu->name}}">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium">Price</label>
                            <div class="mt-1">
                                <input type="number" id="price" name="price" class="einput block w-full rounded"
                                    value="{{$menu->price}}">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium">Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image" class="einput block w-full rounded">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <div class="mt-1">
                                <input type="text" id="description" name="description"
                                    class="einput block w-full input-lg rounded" value="{{$menu->description}}">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="ebtn ebtn-save px-4 py-1">Save changes</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>