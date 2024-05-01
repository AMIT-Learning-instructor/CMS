<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('blog') }}
                            </h2>
                        </header>
                    
                        <form method="post" action="{{ isset($blog) ? route('blogs.update',$blog) : route('blogs.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                            @csrf
                            @isset($blog)
                                @method('PUT')
                            @endisset
                    
                            <div>
                                <x-input-label for="title" :value="__('Blog Title')" />
                                @if (isset($blog))
                                    
                                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" 
                                    required autofocus :value="old('title', $blog->title)"   autocomplete="title" />
                                @else
                                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" 
                                    required autofocus autocomplete="title" />
                                    
                                @endif
                               
                            </div>
                            <div>
                                <x-input-label for="content" :value="__('Blog content')" />
                                @if (isset($blog))
                                {{-- class="mt-1 block w-full"  --}}
                                    <textarea name="content" id="content" class="mt-1 block w-full" cols="30" rows="10">{{ $blog->content }}</textarea>
                                   
                                @else
                                    <textarea name="content" id="content" class="mt-1 block w-full" cols="30" rows="10"></textarea>
                                   
                                @endif
                               
                            </div>
                            <div>
                                <x-input-label for="image" :value="__('Blog image')" />
                                <input type="file" name="image" id="image" accept="image/png, image/jpeg" >
                            </div>
                            <div>
                                <x-input-label for="category_id" :value="__('Blog category')" />
                                <select name="category_id" id="category_id">

                                    @foreach ($categories as $cat )
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                 
                            <div class="flex items-center gap-4">
                                @if (isset($blog))
                                    
                                <x-primary-button>
                                    {{ __('Update') }}
                                </x-primary-button>
                                @else
                                <x-primary-button>
                                    {{ __('Save') }}
                                </x-primary-button>
                                    
                                @endif
                             
                            </div>
                        </form>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
