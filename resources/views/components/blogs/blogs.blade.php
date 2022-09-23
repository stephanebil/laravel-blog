@props([
    'titleblog',
    'titledescription',
    'titledescriptiondate',
    'imgblog',
    'altblog',
    'introblog',
    'textblog',
    'numreplies',
    
])


<div class="bg-white w-[300px] md:w-full">
    <h2 class="specialfont text-center pt-4 text-2xl uppercase">{{ $titleblog }}</h2>
    <p class="specialfont text-center py-4">{{ $titledescription }}<span class="text-gray-500">{{ $titledescriptiondate }}</span></p>
    <img class="px-4 w-full" src="img/{{ $imgblog }}" alt="{{ $altblog }}">
    <p class="px-4 py-6"><span class="font-bold">{{ $introblog }}</span>{{ $textblog }}  </p>
    <div class="px-4">
        <div class="flex justify-between align-center py-12">
            <p class="border border-gray-300 px-3 py-2 font-bold"><i class="fa-sharp fa-solid fa-thumbs-up"></i> like</p>
            <p class="bg-black px-3 py-2 text-gray-100">Replies <span class="bg-gray-100 px-1 ml-2 text-black">{{ $numreplies }}</span></p>
        </div>
    </div>
    <div class="">
    {{ $slot }}
    </div>
</div>