<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Slides') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">

                                <button type="button"class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <a href="{{ route('slides.create') }}">Create slide </a>
                                </button>
                            <table class="w-full">
                                    <thead class="bg-white border-b">
                                    @if($slides && count($slides) > 0)
                                        <tr>
                                            <th class="px-6 py-4 text-sm font-medium text-left text-gray-900">ID</th>
                                            <th class="px-6 py-4 text-sm font-medium text-left text-gray-900">Title</th>
                                            <th class="px-6 py-4 text-sm font-medium text-left text-gray-900">Image</th>
                                            <th class="px-6 py-4 text-sm font-medium text-left text-gray-900">Subtite</th>
                                            <th class="px-6 py-4 text-sm font-medium text-left text-gray-900 ">Edit</th>
                                            <th class="px-6 py-4 text-sm font-medium text-left text-gray-900 ">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($slides as $slide)
                                            <tr class="bg-gray-100 border-b">
                                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $slide->id }}</td>
                                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{ $slide->title }}</td>
                                                <td  class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{ $slide->image }}
                                                <img src="{{ asset('storage/slides/'.$slide->image) }}" width="250px" alt="{{ $slide->title }}">
                                                </td>
                                                <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">{{ $slide->subtitle }}</td>
                                                <td > <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('slides.edit', $slide) }}"> Edit</a></td>
                                                <td>
                                            <form  action="{{ route('slides.destroy', $slide) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                            </form></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                                        @else
                                        <p>0 Slides</p>
                                        @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

