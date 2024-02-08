<!-- DeleteButtonComponent.blade.php -->
<form class="delete-form" method="POST" action="{{ route('note.destroy', $id) }}">
    @method('DELETE')
    @csrf
    <input class="delete-button" type="submit" value="Delete">
</form>
{{-- {{ route('note.delete', $note) }} --}}
