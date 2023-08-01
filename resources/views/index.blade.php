<x-layout>
    <!-- Banner -->
    <x-hero :hero="$hero"></x-hero>
    <x-hero1 :hero="$hero"></x-hero1>
    <!-- End Banner -->

    <x-clients :clients="$clients"></x-clients>

    <div style="margin-top:-40px">
        <x-services :services="$services"></x-services>
    </div>
    
    <div style="margin-top:-150px">
        <x-partners :partners="$partners"></x-partners>
    </div>

    <x-statesticals :statestics="$statestics"></x-statesticals>

    <x-testimonials></x-testimonials>

    <x-contact_form :contactUs="$contactUs"></x-contact_form>


</x-layout>