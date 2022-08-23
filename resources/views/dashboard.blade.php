<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-4 md:mx-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-base md:flex md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <p class="font-semibold">Hello, {{ Auth::user()->name }}</p>
                        <p class="text-sm">Here you can manage your list</p>
                        <x-jet-validation-errors class="mt-4" />
                    </div>
                    <div>
                        <livewire:create-list-modal>
                    </div>
                </div>
                <div class="bg-gray-200 bg-opacity-25">
                    <div class="border-t border-gray-200">
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-600 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr class="dark:border-gray-700">
                                        <th scope="col" class="py-3 px-6">
                                            No.
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            List
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Type
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Count
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lists as $list)
                                    <tr
                                        class="bg-white border-t dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="py-4 px-6">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="py-4 px-6 dark:text-white">
                                            {{ $list->name }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ Str::title($list->type->name) }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $list->body->count() }}
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <div
                                                class="flex justify-center items-center text-sm font-semibold text-blue-600 dark:text-blue-500">
                                                <a href="#" class="mr-4">View</a>
                                                <a href="#" class="mr-4">Edit</a>
                                                <a href="#a">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>