<div>
    <button type="button" class="text-right text-sm font-semibold text-blue-600" wire:click='open'>Delete</button>

    <form method="POST" action="{{ route('lists.destroy' , $this->list->id) }}">
        @method('DELETE')
        @csrf
        <x-jet-dialog-modal wire:model="show">
            <x-slot name="title">
                {{ __('Delete List') }}
            </x-slot>
            <x-slot name="content">
                <div class="mt-4 text-base">
                    Are you sure want to delete this list?
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="close">
                    No
                </x-jet-secondary-button>
                <x-jet-button class="ml-2" type="submit">
                    Yes
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </form>
</div>