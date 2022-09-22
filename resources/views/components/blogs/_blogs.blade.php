@props([
    'titleblog',
    'titledescription',
    'titledescriptiondate',
    'imgblog',
    'altblog',
    'introblog',
    'altblog',
    'introblog',
    'numreplies',
    'imgauthor',
    'nameauthor',


])


<div class="bg-white w-[300px] md:w-full">
    <h2 class="specialfont text-center pt-4 text-2xl uppercase">{{ $titleblog }}Title Heading</h2>
    <p class="specialfont text-center py-4">{{ $titledescription }}Title description, <span class="text-gray-500">{{ $titledescriptiondate }}May 2, 2016</span></p>
    <img class="px-4 w-full" src="img/{{ $imgblog }}girl_hat.jpeg" alt="{{ $altblog }}girl hat">
    <p class="px-4 py-6"><span class="font-bold">{{ $introblog }}More hats,</span>{{ $textblog }}  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt dolorem quibusdam deleniti, neque quidem aspernatur est, accusantium sapiente culpa eligendi ipsa aut ratione modi perspiciatis similique! Voluptates deserunt repellendus consectetur expedita recusandae facilis doloribus, dignissimos obcaecati dolores sint quos, consequuntur repudiandae quibusdam molestiae perspiciatis! Dignissimos obcaecati molestias numquam unde ut magni, excepturi asperiores repellendus quam laudantium distinctio odit, suscipit accusantium in ullam ducimus eaque et voluptas veritatis id ratione eos reiciendis quaerat expedita. Ad, in. Voluptatum consectetur dolore velit nesciunt, vel ratione, saepe officiis iste qui consequuntur ipsum quidem enim voluptatibus dignissimos molestias placeat? Voluptate suscipit doloribus atque fugit?</p>
    <div class="px-4">
        <div class="flex justify-between align-center py-12">
            <p class="border border-gray-300 px-3 py-2 font-bold"><i class="fa-sharp fa-solid fa-thumbs-up"></i> like</p>
            <p class="bg-black px-3 py-2 text-gray-100">Replies <span class="bg-gray-100 px-1 ml-2 text-black">{{ $numreplies }}1</span></p>
        </div>
    </div>
    <div class="w-[90%] md:w-[95%] bg-gray-200 h-[1px] mx-4"></div>
    <div class="px-4 py-10">
        <img src="img/{{ $imgauthor }}avatar_smoke.jpeg" alt="{{ $nameauthor }}" class="w-[75px]">
        <p class="specialfont text-lg font-medium pt-2">{{ $nameauthor }}George <span class="text-base font-normal text-gray-500">{{ $dateauthor }}May 3, 2015,  6:32 PM</span></p>
        <p class="pt-4">{{ $commentauthor }}great blog bost! Following</p>
    </div>
</div>