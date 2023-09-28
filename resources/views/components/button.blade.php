@props(['color' => 'primary', 'size' => ''])

<button type="submit" {{ $attributes->class([
    "btn btn-{$color}",
    $size ? "btn-" . $size : "",
])->merge([
    'type'  => 'button'
]) }}>

    {{ $slot }}

 </button>