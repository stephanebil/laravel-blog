@props([
    'img',
    'alt'
])
<div class="p-2 w-[50%]">
    <img src="img/{{ $img }}" alt="{{ $alt }}" class="">
</div>