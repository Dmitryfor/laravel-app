@props(['options' => [], 'value' => null])

<select {{ $attributes->class([ 
    'form-control', 
]) }}>

    @if ( ! empty( $options ) )
            
        @foreach ($options as $key => $option)
            
            <option value="{{ $key }}" {{ $key == $value ? 'selected' : '' }}>{{ $option }}</option>

        @endforeach

    @endif

</select>