<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($list->name) }}
        </h2>
    </x-slot>

    <div class="py-12 mx-4 md:mx-0">
        <div class="max-w-3xl mb-8 mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-sky-50 to-blue-50 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-base md:flex md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <p class="font-semibold">{{ $list->name }}</p>
                        <p class="text-sm">Total list: {{ $list->body->count() }}</p>
                        <x-jet-validation-errors class="mt-4" />
                    </div>
                    <div>
                        @if ($list->type->id == App\Helpers\Constant::LIST_TYPE['basic'])
                        <livewire:create-basic-list-modal :list="$list">
                            @endif
                    </div>
                </div>
            </div>
        </div>

        @foreach ($list->body as $body)
        <div class="max-w-3xl mx-auto mb-3 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md sm:rounded-lg">
                <div class="p-4 text-base md:flex md:justify-between">
                    <div class="mb-2 text-center md:text-start md:mb-0">
                        <p class="font-semibold">{{ $body->title }}</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <livewire:update-basic-list-modal :list="$list" :basic="$body">
                            <livewire:delete-basic-list-modal :list="$list" :basic="$body">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</x-app-layout>