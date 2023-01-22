<x-admin-layout>

<link rel="stylesheet" href="{{asset('/css/stylesAdmin.css')}}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="btn px-4 py-1">Back</a>
            </div>

            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.menus.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" class="input-ct block w-full rounded">
                            </div>
                            @error('name')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium">Price</label>
                            <div class="mt-1">
                                <input type="number" id="price" name="price" class="input-ct block w-full rounded">
                            </div>
                            @error('price')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium">Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image" class="input-ct block w-full rounded">
                            </div>
                            @error('image')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <div class="mt-1">
                                <input type="text" id="description" name="description"
                                    class="input-ct block w-full input-lg rounded">
                            </div>
                            @error('description')
                            <div class="text-sm error">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn px-4 py-1">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>