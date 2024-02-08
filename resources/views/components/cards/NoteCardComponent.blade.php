<!-- NoteCardComponent.blade.php -->
<div class="note-card">
    <div>
        <x-links.LinkComponent :title="$title" :url="$url">
        </x-links.LinkComponent>
    </div>
    <x-buttons.ButtonGroupComponent>
        <x-buttons.EditButtonComponent :href="$href">
        </x-buttons.EditButtonComponent>
        <x-buttons.DeleteButtonComponent :id="$id">
        </x-buttons.DeleteButtonComponent>
    </x-buttons.ButtonGroupComponent>
</div>
