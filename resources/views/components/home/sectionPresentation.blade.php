<section class="pl-5 pr-5 flex justify-center  flex-col max-w-section lg:flex-row lg:gap-content ">
    <div class="max-w-content">
        <h2 class="hidden">Section de présentation</h2>
        <p class="font-bold pb-4 text-title">{{__('home.TitleSectionPresentation')}}</p>
        <p class="text-subtitle">{{__('home.MainContentSectionPresentation')}}</p>
        <div class="flex gap-8 justify-center pt-5 pb-5">
            <x-button>{{__('home.LearnMore')}}</x-button>
            <x-button>{{__('home.Adoption')}}</x-button>
        </div>
    </div>

    <img class=" lg:max-w-image lg:max-h-image" alt="Image représentant une personne avec un animal"
         src="{{asset('ImageSectionPrésentation.png')}}">
</section>
