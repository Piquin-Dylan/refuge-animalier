<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    @endif
</head>
<header>
    <x-nav/>
</header>
<body class="bg-regal-baige">
<section class="pl-5 pr-5">
    <h2 class="hidden">Section de présentation</h2>
    <p class="font-bold pb-4">{{__('home.TitleSectionPresentation')}}</p>
    <p class="">{{__('home.MainContentSectionPresentation')}}</p>
    <div class="flex gap-8 justify-center pt-5 pb-5">
        <x-button>{{__('home.LearnMore')}}</x-button>
        <x-button>{{__('home.Adoption')}}</x-button>
    </div>
    <img class="pb-16" alt="Image représentant une personne avec un animal"
         src="{{asset('ImageSectionPrésentation.png')}}">
</section>
<x-stats>{{__('home.ContentStat1')}}</x-stats>
<x-stats>{{__('home.ContentStat2')}}</x-stats>
<x-stats>{{__('home.ContentStat3')}}</x-stats>

<section>
    <h2 class="text-4xl pb-4 pt-4 pl-5 font-bold">Nos animaux</h2>
    <div class="flex flex-col items-center gap-4">
    <x-button>Tout les animaux</x-button>
    <x-button>Chien</x-button>
    <x-button>Chat</x-button>
    </div>
    <div class="flex flex-col items-center gap-4 pt-4">
    <img src="{{asset('IMG_6401-scaled 1.png')}}">
    <img src="{{asset('IMG_6401-scaled 1.png')}}">
    <img src="{{asset('IMG_6401-scaled 1.png')}}">
    <img src="{{asset('IMG_6401-scaled 1.png')}}">
    </div>
</section>
<section class="pl-5 pr-5">
    <h2 class="hidden">Section devenir bénévole</h2>
    <p class="font-bold pb-4">{{__('home.TitleSectionVolunteer')}}</p>
    <p class="">{{__('home.ContentSectionVolunteer')}}</p>
    <div class="flex gap-8 justify-center pt-5 pb-5">
        <x-button>{{__('home.CtaBecomeVolunteer')}}</x-button>
    </div>
    <img class="pb-16" alt="Image représentant une personne avec un animal"
         src="{{asset('1200x680_sc_gettyimages-1768484161.webp')}}">
</section>
</body>
</html>
