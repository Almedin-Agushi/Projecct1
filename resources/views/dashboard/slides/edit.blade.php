<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Slides') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="table-responsive">
                    {{-- <form action="{{ route('slides.update', ['slide' => $slide->id]) }}" method="POST" enctype="multipart/form-data" class="p-6 bg-white rounded-lg shadow-md">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <span>Current Image</span>
                            <img src="{{ asset('storage/slides/'.$slide->image) }}" width="250px" alt="{{ $slide->title }}" id="current-image">
                            <button class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-500 hover:text-white hover:border-transparent" onclick="hideImage()">
                                <i class="fas fa-eye-slash"></i>
                            </button>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 font-medium" for="product-image">New Image</label>
                            <input class="w-full p-2 border border-gray-400" value="{{ $slide->image }}" type="file" id="product-image" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                    </form> --}}


                    <form action="{{ route('slides.update', $slide) }}" method="POST" enctype="multipart/form-data" class="p-6 bg-white rounded-lg shadow-md" >
                        @csrf
                        @method('PUT')
                        <h2 class="mb-4 text-lg font-medium">Edit Product</h2>
                                <div class="mb-6">
                                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Product Name</label>
                                    <input type="text" name="title" value="{{ $slide->title }}"  class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product Name" required>
                                </div>
                                <div class="mb-6">
                                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Subtitle</label>
                                    <input type="text" name="subtitle" value="{{ $slide->subtitle }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Subtitle" required>
                                </div>

                                <span>Current Img</span>
                                <img src="{{ asset('storage/slides/'.$slide->image) }}" width="250px" alt="{{ $slide->title }}">
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this photo?')">
                                    <i class="fas fa-trash"></i> <!-- Add the icon for deleting the photo here -->dsad
                                  </button>

                            <div class="mb-4">
                                <label class="block mb-2 font-medium" for="product-image">Current Image</label>
                                <input class="w-full p-2 border border-gray-400" value="{{ $slide->image }}" type="file" id="product-image" name="image" accept="image/*">
                            </div>
                            <form  action="{{ route('slides.destroy', $slide) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </form>

                        <!-- <button type="submit">Update</button> -->
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

