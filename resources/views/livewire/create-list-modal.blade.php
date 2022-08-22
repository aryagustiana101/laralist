<div>
    <x-jet-button type="button" wire:click="open">
        {{ __('Create List') }}
    </x-jet-button>

    <form method="POST" action="{{ route('test') }}">
        @csrf
        <x-jet-dialog-modal wire:model="show">

            <x-slot name="title">
                Create New List
            </x-slot>

            <x-slot name="content">
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('List Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="list_type_id" value="{{ __('List Type') }}" />
                    <select name="list_type_id" id="list_type_id"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        wire:model='selectedListType'>
                        @foreach ($listTypes as $listType)
                        <option value="{{ $listType->id }}">{{ Str::title($listType->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div
                    class="{{ $this->selectedListType == App\Helpers\Constant::LIST_TYPE['goal'] ? 'block' : 'hidden' }}">
                    <div class="mt-4">
                        <x-jet-label for="range_start_time" value="{{ __('Range Start Time') }}" />
                        <x-jet-input id="range_start_time" class="block mt-1 w-full" type="datetime-local"
                            name="range_start_time" />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="range_end_time" value="{{ __('Range End Time') }}" />
                        <x-jet-input id="range_end_time" class="block mt-1 w-full" type="datetime-local"
                            name="range_end_time" />
                    </div>
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="close">
                    Cancel
                </x-jet-secondary-button>
                <x-jet-button class="ml-2" type="submit">
                    Submit
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </form>
</div>