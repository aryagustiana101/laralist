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
                            <table class="w-full text-sm text-left text-gray-600 ">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
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

                                    @forelse ($lists as $list)
                                    <tr class="bg-white border-t hover:bg-gray-50">
                                        <td class="py-4 px-6">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $list->name }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ Str::title($list->type->name) }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $list->body->count() }}
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex justify-center items-center">
                                                <a href="#" class="mr-4">View</a>
                                                <livewire:update-list-modal :list="$list">
                                                    <livewire:delete-list-modal :list="$list">
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="bg-white border-t hover:bg-gray-50">
                                        <td class="py-4 px-6" colspan="5">
                                            <p class="text-center text-gray-600 font-semibold">You have no list</p>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>