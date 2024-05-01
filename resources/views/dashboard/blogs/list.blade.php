<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blogs') }}
        </h2>
        <a href="{{ route('blogs.create') }}" class="text-blue-500 hover:underline">NEW</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($blogs as $blog)
                        <div class="flex justify-between items-center border-b border-gray-200 py-3">
                            <span>{{ $blog->title }}</span>
                            <div>
                                <a href="{{ route('blogs.edit',$blog->id) }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Edit</a>
                                <form action="{{ route('blogs.destroy',$blog) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
