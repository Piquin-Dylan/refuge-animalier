<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
<header>
    <x-nav></x-nav>
</header>
<section class="pl-5 pr-5">
    <h2 class="hidden">Section présentation refuge</h2>
    <p class="font-bold pb-4">{{__('home.TitleSectionPresentation')}}</p>
    <p class="">{{__('home.MainContentSectionPresentation')}}</p>
    <div class="flex gap-8 justify-center pt-5 pb-5">
        <x-button>{{__('home.LearnMore')}}</x-button>
        <x-button>{{__('home.Adoption')}}</x-button>
    </div>
    <img class="pb-16" alt="Image représentant une personne avec un animal"
         src="{{asset('ImageSectionPrésentation.png')}}">
</section>
<x-footer></x-footer>

</body>
</html>
