
<div data-elementor-type="wp-page" data-elementor-id="32" class="elementor elementor-32">
    <section style="padding-top:0px;" class="elementor-section elementor-top-section elementor-element elementor-element-385ca13d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="385ca13d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-217ea5d9" data-id="217ea5d9" data-element_type="column" data-settings="{}">
                <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-34e9afd elementor-widget elementor-widget-jkit_heading" data-id="34e9afd" data-element_type="widget" data-widget_type="jkit_heading.default">
                    <div class="elementor-widget-container">
                        <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_32_2_64c34dfb0a73f" >
                            <div class="heading-section-title  display-inline-block">
                            <h2 class="heading-title">{{$faqs['heading']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-279a99f8 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget elementor-widget-elementskit-accordion" data-id="279a99f8" data-element_type="widget" data-widget_type="elementskit-accordion.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con" >
                            <div class="elementskit-accordion accoedion-primary" id="accordion-64c34dfb13f80">
                                @foreach ($faqs['faqs'] as $faqKey => $faq)
                                    @if ($loop->index < $loop->count / 2)
                                    <div class="elementskit-card">
                                        <div class="elementskit-card-header" id="primaryHeading-{{ $faqKey }}">
                                            <a href="#collapse-{{ $faqKey }}" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#collapse-{{ $faqKey }}" aria-expanded="false" aria-controls="collapse-{{ $faqKey }}">
                                                <span class="ekit-accordion-title">{{ $faq['question'] }}</span>
                                                <div class="ekit_accordion_icon_group">
                                                    <div class="ekit_accordion_normal_icon">
                                                        <!-- Normal Icon -->
                                                        <i aria-hidden="true" class="icon-open icon-right icon icon-down-arrow1"></i>
                                                    </div>
                                                    <div class="ekit_accordion_active_icon">
                                                        <!-- Active Icon -->
                                                        <i aria-hidden="true" class="icon-closed icon-right icon icon-up-arrow1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapse-{{ $faqKey }}" class="collapse" aria-labelledby="primaryHeading-{{ $faqKey }}" data-parent="#accordion-64c34dfb16c3a">
                                            <div class="elementskit-card-body ekit-accordion--content">
                                                {{ $faq['answer'] }}
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                <!-- .elementskit-card END -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4a5ec5a2 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget elementor-widget-elementskit-accordion" data-id="4a5ec5a2" data-element_type="widget" data-widget_type="elementskit-accordion.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con" >
                            <div class="elementskit-accordion accoedion-primary" id="accordion-64c34dfb16c3a">
                                @foreach ($faqs['faqs'] as $faqKey => $faq)
                                    @if ($loop->index >= $loop->count / 2)
                                    <div class="elementskit-card">
                                        <div class="elementskit-card-header" id="primaryHeading-{{ $faqKey }}">
                                            <a href="#collapse-{{ $faqKey }}" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#collapse-{{ $faqKey }}" aria-expanded="false" aria-controls="collapse-{{ $faqKey }}">
                                                <span class="ekit-accordion-title">{{ $faq['question'] }}</span>
                                                <div class="ekit_accordion_icon_group">
                                                    <div class="ekit_accordion_normal_icon">
                                                        <!-- Normal Icon -->
                                                        <i aria-hidden="true" class="icon-open icon-right icon icon-down-arrow1"></i>
                                                    </div>
                                                    <div class="ekit_accordion_active_icon">
                                                        <!-- Active Icon -->
                                                        <i aria-hidden="true" class="icon-closed icon-right icon icon-up-arrow1"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapse-{{ $faqKey }}" class="collapse" aria-labelledby="primaryHeading-{{ $faqKey }}" data-parent="#accordion-64c34dfb16c3a">
                                            <div class="elementskit-card-body ekit-accordion--content">
                                                {{ $faq['answer'] }}
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                <!-- .elementskit-card END -->
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
        
     