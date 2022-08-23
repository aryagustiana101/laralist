<div>
    <button type="button" class="text-right text-sm font-semibold text-blue-600 mr-4" wire:click='open'>Edit</button>

    <form method="POST" action="{{ route('lists.basic.update', [$this->list->id, $this->basic->id]) }}">
        @method('PUT')
        @csrf
        <x-jet-dialog-modal wire:model="show">

            <x-slot name="title">
                Create New Basic List
            </x-slot>

            <x-slot name="content">
                <div class="mt-4">
                    <x-jet-label for="title" value="{{ __('Basic List Title') }}" />
                    <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                        :value="$this->basic->title" />
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