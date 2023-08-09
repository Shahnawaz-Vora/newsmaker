<section style="margin-bottom:0;padding-bottom:0" class=" elementor-section elementor-top-section elementor-element elementor-element-2d7b1de elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2d7b1de" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c4a57f2" data-id="c4a57f2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
         <div class="elementor-widget-wrap elementor-element-populated" style="padding-top:50px;padding-bottom:0px;">
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-e9bade0 animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e9bade0" data-element_type="section" data-settings="{}">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="">
                     <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c1fa32f  elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c1fa32f" data-element_type="widget" data-widget_type="icon-list.default">
                           <div class="elementor-widget-container ">
                              <ul class="elementor-icon-list-items">
                                 <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fas fa-dot-circle"></i>						</span>
                                    <span class="elementor-icon-list-text">{{$services["title"]}}</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="elementor-element elementor-element-0ac3c93 elementor-widget elementor-widget-jkit_heading" data-id="0ac3c93" data-element_type="widget" data-widget_type="jkit_heading.default">
                           <div class="elementor-widget-container ">
                              <div  class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_61_26_64c5bcbb4c6ee" >
                                 <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">{{$services["heading"]}}</h2>
                                 </div>
                                 <div class="heading-section-description">
                                    <p>{{$services["description"]}}</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-5097af0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5097af0" data-element_type="section">
               <div class="elementor-container elementor-column-gap-default row ">
                  @foreach ($services["services"] as $service)
                  <div class="elementor-element elementor-element-80b5dd5 animated-fast" data-id="80b5dd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                     <div class="elementor-widget-wrap elementor-element-populated" style="margin-bottom:20px;">
                           <div class="elementor-element elementor-element-976b3a3 elementor-widget elementor-widget-jkit_heading" data-id="976b3a3" data-element_type="widget" data-widget_type="jkit_heading.default">
                              <div class="elementor-widget-container">
                                 <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_61_28_64c5bcbb58e79" >
                                       <div class="heading-section-title  display-inline-block">
                                          <h2 class="heading-title">{{$service["serviceHeading"]}}</h2>
                                       </div>
                                       <div class="heading-section-description">
                                          <p>{{$service["serviceDescription"]}}</p>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-18ee336 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="18ee336" data-element_type="widget" data-widget_type="image.default">
                              <div class="elementor-widget-container pb-4">
                                 <img width="251" height="157" src="{{$service["serviceImage"]}}" class="attachment-full size-full wp-image-1299" alt="" decoding="async" loading="lazy" />                                                          
                              </div>
                           </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </section>
         </div>
      </div>
   </div>
</section>