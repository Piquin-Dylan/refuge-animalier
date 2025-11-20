
@props([
    'title_section',
    'title_content',
    'content',
    'cta1' => null,
    'cta2'=> null,
    'image'=>null
])


<section class="pb-6  pl-5 pr-5 sectionFlex ">
    <div class="max-w-content">
        {{$slot}}
        <h2 class="hidden">{{$title_section}}</h2>
        <p class="font-bold pb-4 text-title">{{$title_content}}</p>
        <p class="text-subtitle">{{$content}}</p>
        <div class="flex gap-8 justify-center pt-5 pb-5">
            <x-button class="cta1">{{$cta1}}</x-button>
            <x-button class="cta2">{{$cta2}}</x-button>
        </div>
    </div>
    <img class=" lg:max-w-image lg:max-h-image" alt="Image représentant une personne avec un animal"
         src="{{$image}}">
</section>
