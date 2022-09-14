<div class="max-w-3xl mx-auto mb-3 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md sm:rounded-lg">
        <div class="p-4 text-base md:flex md:justify-between">
            <div class="mb-2 text-center flex justify-center items-center md:text-start md:mb-0">
                <x-jet-checkbox class="mr-3" />
                <p class="font-semibold">{{ $this->basic->title }}</p>
            </div>
            <div class="flex justify-center items-center">
                <livewire:update-basic-list-modal :list="$this->list" :basic="$this->basic">
                    <livewire:delete-basic-list-modal :list="$this->list" :basic="$this->basic">
            </div>
        </div>
    </div>
</div>