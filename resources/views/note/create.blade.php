@extends('layouts.app')


@section('title', 'CREATE A NEW NOTE 📝')
@section('content')
    <x-containers.Container>

        <x-buttons.BackButtonComponent>
        </x-buttons.BackButtonComponent>

        <form method="POST" action="{{ route('note.store') }}">
            @csrf
            <x-containers.SectionContainerComponent>

                <x-inputs.TextInputComponent required="required" placeholder="Put the title of the note here.">
                </x-inputs.TextInputComponent>

                <x-inputs.TextAreaComponent required="required" placeholder="Describe the note here...">
                </x-inputs.TextAreaComponent>

                <x-buttons.SaveButtonComponent>
                </x-buttons.SaveButtonComponent>

            </x-containers.SectionContainerComponent>

        </form>

    </x-containers.Container>
@endsection
