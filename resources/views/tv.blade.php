<x-layout>
    
    <x-hero :hero="$hero"></x-hero>

    <x-strategy-driven-agency :overview="$overview"></x-strategy-driven-agency>

    <div style="margin-top:-150px">
    <x-clients :clients="$clients"></x-clients>
    </div>

    <x-why_choose_us :whyChooseUs="$whyChooseUs"></x-why_choose_us>  
 

    <x-partners :partners="$partners"></x-partners>
    
    <x-testimonials></x-testimonials>
    
    <x-statesticals :statestics="$statestics"></x-statesticals>
    
    <x-contact_form :contactUs="$contactUs"></x-contact_form>

</x-layout>