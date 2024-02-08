<div class="input-text">
    <textarea {{ $disabled ?? '' }}  name="content" class="text-area" {{ $required ?? '' }} placeholder="{{ $placeholder ?? '' }}">{{ $value ?? '' }}</textarea>
    @error('content')
        <p class="error-msg"> {{ $message }} </p>
    @enderror
</div>
