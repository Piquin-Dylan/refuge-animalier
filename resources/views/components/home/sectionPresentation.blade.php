<x-section
    title_section="section présentation"
    title_content="{{__('home.TitreSectionPrésentation')}}"
    content="{{__('home.MainContentSectionPresentation')}}"
    cta1_label="En savoir plus"
    cta1_link="{{route('about')}}"

    cta2_label="Adopter"
    cta2_link="{{route('adoption')}}"
    image="{{asset('ImageSectionPrésentation.png')}}">
</x-section>
