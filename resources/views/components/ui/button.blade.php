@props([
    'color' => 'primary',
    'type' => 'button'
])

<button 
   type="{{ $type }}" 
   {{ $attributes->merge([
   'class' => "btn btn-outline btn-$color" ]) }} >
    {{ $slot }}
</button>