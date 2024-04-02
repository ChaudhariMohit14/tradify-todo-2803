<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-nav-link :href="route('notes.create')">
                        Create Note
                    </x-nav-link>   
                </div>
                <div class="hidden sm:flex sm:items-center lg:ms-25">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Id</th>
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Content</th>
                                    <th class="px-4 py-2">Edit</th>
                                    <th class="px-4 py-2">Delete</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($notes as $note)
                                <tr>
                                    <td class="border px-4 py-2">{{$note->id}}</td>
                                    <td class="border px-4 py-2">{{$note->title}}</td>
                                    <td class="border px-4 py-2">{{substr($note->content,0,10). '...'}}</td>
                                    <td class="border px-4 py-2">Edit</td>
                                    <td class="border px-4 py-2">Delete</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
