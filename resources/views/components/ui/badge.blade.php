@props([
    'color' => 'success',
    'size' => 'xs'
])

<div {{ $attributes->merge([
    'class' => "badge badge-$color badge-$size" 
]) }} ></div>