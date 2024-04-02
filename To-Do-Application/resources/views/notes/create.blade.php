<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('notes.store') }}">
        @csrf

        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="content" :value="__('Content')" />
            <textarea class="form-control block mt-1 w-full" aria-label="With textarea" name="content"></textarea>
        </div>

        <div class="mt-4">
            <x-input-label for="user_id" :value="__('UserID')" />
            <textarea class="form-control block mt-1 w-full" aria-label="With textarea" name="user_id"></textarea>
        </div>

        
        <!-- Target Date -->
        <div class="mt-4">
            <x-input-label for="target" :value="__('Target Time')" />

            <x-text-input id="target" class="block mt-1 w-full"
                            type="date"
                            name="target" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
