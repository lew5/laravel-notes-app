<div class="input-text" >
    <input {{ $disabled ?? '' }} name="title" type="text" value="{{ $value ?? '' }}" {{ $required ?? '' }} placeholder="{{ $placeholder ?? '' }}">
    @error('content')
        <p class="error-msg"> {{ $message }} </p>
    @enderror
</div>
