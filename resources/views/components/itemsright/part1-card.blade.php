@props ([
    'img',
    'name',
    'description',
])



<div class="flex items-center bg-white hover:bg-gray-400">
    <img src="img/{{ $img }}" alt="{{ $name }}" class=" w-[22%] md:w-[15%] lg:w-[22%] p-2">
    <div class="">
        <p class="text-xl">{{ $name }}</p>
        <p class="">{{ $description }}</p>
    </div>
</div>
