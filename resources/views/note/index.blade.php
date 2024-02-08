@extends('layouts.app')

@section('title', 'MY NOTES 📝')

@section('content')
    <x-containers.Container>

        <x-buttons.NewNoteButtonComponent :url="route('note.create')">
        </x-buttons.NewNoteButtonComponent>

        <x-containers.SectionContainerComponent>
            @forelse ($notes as $note)
                <x-cards.NoteCardComponent title="{{ $note->title }}" href="{{ route('note.edit', $note->id) }}" url="{{ route('note.show', $note->id) }}" id="{{ $note->id }}">
                </x-cards.NoteCardComponent>

            @empty
                <p>There are no saved notes yet.</p>
            @endforelse
        </x-containers.SectionContainerComponent>

    </x-containers.Container>
@endsection
