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
        <x-button>En savoir plus</x-button>
        <x-button>Adopter</x-button>
    </div>
    <img class="pb-16" alt="Image représentant une personne avec un animal"
         src="{{asset('ImageSectionPrésentation.png')}}">
</section>
<x-stats>100 animaux ont déjà été adopter</x-stats>
<x-stats>10 bénévoles travaillent pour le refuges</x-stats>
<x-stats>150 animaux attendent avant d’être adopter</x-stats>
</body>
</html>
