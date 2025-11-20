
@props([
    
])


<section class="pb-6">
    <h2 class="text-4xl pb-5 pt-4 pl-5 font-bold">Nos animaux</h2>
    <div class="flex flex-col items-center gap-4 pl-5 md:flex-row lg:flex-row lg:gap-6">
        <x-button>Tout les animaux</x-button>
        <x-button>Chien</x-button>
        <x-button>Chat</x-button>
    </div>
    <div class="flex flex-col items-center gap-4 pt-4 lg:flex-row lg:pl-5">
        <div class=" p-6 bg-white rounded-2xl flex gap-4 flex-col items-center">
            <img src="{{asset('Sans titre-1 5.png')}}" alt="">
            <span  class="text-2xl font-bold ">Rex</span>
            <div class="flex gap-5 justify-center">
                <span>Mâle</span>
                <span>2 ans</span>
            </div>
            <button>Adopter</button>
        </div>
        <div class=" p-6 bg-white rounded-2xl flex gap-4 flex-col items-center">
            <img src="{{asset('Sans titre-1 5.png')}}" alt="">
            <span  class="text-2xl font-bold ">Rex</span>
            <div class="flex gap-5 justify-center">
                <span>Mâle</span>
                <span>2 ans</span>
            </div>
            <button>Adopter</button>
        </div>
    </div>
</section>

