@extends('layouts.app')


@section('title', 'EDIT NOTE 📝')
@section('content')
    <x-containers.Container>

        <x-buttons.BackButtonComponent>
        </x-buttons.BackButtonComponent>

        <form method="POST" action="{{ route('note.update', $note->id) }}">
            @method('PUT')
            @csrf
            <x-containers.SectionContainerComponent>

                <x-inputs.TextInputComponent :value="$note->title" :required=true placeholder="Put the title of the note here.">
                </x-inputs.TextInputComponent>

                <x-inputs.TextAreaComponent :value="$note->content" required="required" placeholder="Describe the note here...">
                </x-inputs.TextAreaComponent>

                <x-buttons.UpdateButtonComponent>
                </x-buttons.UpdateButtonComponent>

            </x-containers.SectionContainerComponent>

        </form>

    </x-containers.Container>
@endsection
