@props(['name' => ''])

<div class="form-check">

    <label class="form-check-label" for="{{ $name }}">{{ $slot }}</label>

    <input class="form-check-input" {{ $attributes->merge([
        'value'     => 1,
        'checked'   => !! request()->old($name),
    ]) }} name="{{ $name }}" type="checkbox" id="{{ $name }}">

</div>