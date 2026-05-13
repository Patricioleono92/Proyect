@props([
    'type' => 'text',
    'placeholder' => 'Ingresar Texto',
    'color' => 'primary'
])



<input 
    type="{{ $type }}" 
    placeholder="{{ $slot }}" 
    {{ $attributes->merge([
        'class' => "input input-md input-$color"
    ]) }} />