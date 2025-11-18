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
<body class="bg-regal-baige">
<header>
    <x-nav></x-nav>
</header>
<section class="pl-5 pr-5">
    <h2 class="hidden">Section présentation refuge</h2>
    <p class="font-bold pb-4">{{__('about.TitleSectionHistory')}}</p>
    <p class="">{{__('about.ContentsSectionHistory')}}</p>
    <div class="flex gap-8 justify-center pt-5 pb-5">
        <x-button>{{__('about.ContactUs')}}</x-button>
        <x-button>{{__('home.Adoption')}}</x-button>
    </div>
    <img class="pb-16" alt="Image représentant une personne avec un animal"
         src="{{asset('2ff44c5a-dc9b-4054-a1c0-295df6c0b96e 1.png')}}">
</section>
<section class="p-5">
    <h2 class="pb-4">L’histoire du refuge</h2>
    <p>Le refuge Les Pattes Heureuses a vu le jour grâce à Élise Martin, amoureuse des animaux depuis toujours. Tout a commencé dans un petit terrain à la campagne, avec quelques bénévoles et une dizaine d’animaux recueillis. Aujourd’hui, le refuge accueille chaque année plus de 200 chiens et chats, et compte une belle équipe de bénévoles dévoués.</p>
</section>

<section class="p-5">
    <h2>Nos équipes</h2>


</section>
<x-footer></x-footer>
</body>
</html>
