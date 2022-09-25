@props([
    'titleblog',
    'titledescription',
    'titledescriptiondate',
    'imgblog',
    'altblog',
    'introblog',
    'textblog',
    'textblog2',
    'numreplies',
    
])


<div class="bg-white w-[300px] md:w-full px-4">
    <h2 class="specialfont text-center pt-4 text-2xl uppercase">{{ $titleblog }}</h2>
    <p class="specialfont text-center py-4">{{ $titledescription }}<span class="text-gray-500">{{ $titledescriptiondate }}</span></p>
    <img class="w-full" src="img/{{ $imgblog }}" alt="{{ $altblog }}">
    <p class=" py-6"><span class="font-bold">{{ $introblog }}</span>{{ $textblog }}  </p>
    <p class="">{{ $textblog2 }}  </p>
    <div class="">
        <div class="flex justify-between py-12">
            <p class="border border-gray-300 px-3 py-2 font-bold"><i class="fa-sharp fa-solid fa-thumbs-up"></i> like</p>
            <p class="bg-black px-3 py-2 text-gray-100">Replies <span class="bg-gray-100 px-2 ml-2 text-black">{{ $numreplies }}</span></p>
        </div>
    </div>
    <div class="">
    {{ $slot }}
    </div>
</div>