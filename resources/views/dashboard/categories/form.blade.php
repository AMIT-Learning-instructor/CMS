<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Category') }}
                            </h2>
                        </header>
                    
                        <form method="post" action="{{ isset($category) ? route('categories.update',$category) : route('categories.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @isset($category)
                                @method('PUT')
                            @endisset
                    
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                @if (isset($category))
                                    
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" 
                                    required autofocus :value="old('name', $category->name)"   autocomplete="name" />
                                @else
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" 
                                    required autofocus autocomplete="name" />
                                    
                                @endif
                               
                            </div>
                    
                 
                            <div class="flex items-center gap-4">
                                @if (isset($category))
                                    
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
