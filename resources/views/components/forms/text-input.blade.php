@props([
    'type'=>'text'
])

<input type="{{ $type }}" {{ $attributes
->class([
    'input_field'
    ]) }}>
