
<a class="cursor-pointer" href="{{route('about')}}"><button  {{ $attributes->merge(['type' => 'button']) }} class="rounded-lg bg-white p-4 w-48 font-extrabold text-regal-orange">
        {{ $slot }}
    </button></a>
