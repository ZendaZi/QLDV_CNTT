<x-jet-action-section>
    <x-slot name="title">
        {{ __('Xóa nhóm') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Xóa vĩnh viễn nhóm này.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Khi một nhóm bị xóa, tất cả tài nguyên và dữ liệu của nhóm đó sẽ bị xóa vĩnh viễn. Trước khi xóa nhóm này, vui lòng tải xuống bất kỳ dữ liệu hoặc thông tin nào liên quan đến nhóm này mà bạn muốn giữ lại.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Xóa nhóm') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Xóa nhóm') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Bạn có chắc chắn muốn xóa nhóm này không? Khi một nhóm bị xóa, tất cả tài nguyên và dữ liệu của nhóm đó sẽ bị xóa vĩnh viễn.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Hủy') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Xóa nhóm') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
