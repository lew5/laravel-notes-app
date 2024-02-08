@extends('layouts.app')

@section('title', "NOTE #$note->id")

@section('content')

    <x-containers.Container>

        <x-buttons.BackButtonComponent>
        </x-buttons.BackButtonComponent>

        <form>
            <x-containers.SectionContainerComponent>

                <x-inputs.TextInputComponent disabled="disabled" :value="$note->title">
                </x-inputs.TextInputComponent>

                <x-inputs.TextAreaComponent disabled="disabled" :value="$note->content">
                </x-inputs.TextAreaComponent>
                <p class="created_at">Created at {{ $note->created_at }}</p>
                <pc class="updated_at">Updated at {{ $note->updated_at }}</pc>

            </x-containers.SectionContainerComponent>

        </form>

    </x-containers.Container>

@endsection
