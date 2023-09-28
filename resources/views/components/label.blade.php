@props(['requried' => false])

<label {{ $attributes->class([ 'mb-2', $requried ? 'requried' : '' ]) }}>
    
    {{ $slot }}

</label>