<div data-elementor-type="wp-page" data-elementor-id="879" class="elementor elementor-879">
   <section style="margin-top:0;padding-top:20px;padding-bottom:30px;" class="elementor-section elementor-top-section elementor-element elementor-element-52296b28 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52296b28" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" >
      <div class="elementor-background-overlay"></div>
      <div class="elementor-container elementor-column-gap-default">
         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3eed6518" data-id="3eed6518" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div class="elementor-element elementor-element-ad29081 elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ad29081" data-element_type="widget" data-widget_type="icon-list.default">
                  <div class="elementor-widget-container">
                     <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                           <span class="elementor-icon-list-icon">
                           <i aria-hidden="true" class="fas fa-dot-circle"></i>						</span>
                           <span class="elementor-icon-list-text">{{$team["title"]}}</span>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="elementor-element elementor-element-577b7d6 elementor-widget elementor-widget-jkit_heading" data-id="577b7d6" data-element_type="widget" data-widget_type="jkit_heading.default">
                  <div class="elementor-widget-container">
                     <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_879_2_64c34dcd566cc" >
                        <div class="heading-section-title  display-inline-block">
                           <h2 class="heading-title">{{$team["heading"]}}</h2>
                        </div>
                        <div class="heading-section-description">
                           <p>{{$team["description"]}}</p>
                        </div>
                     </div>
                  </div>
               </div>
               <section class="elementor-section elementor-inner-section elementor-element elementor-element-2d318883 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d318883" data-element_type="section" data-settings="{}">
                  <div class="elementor-container elementor-column-gap-default">
                     @foreach(['team1', 'team2', 'team3'] as $teamKey)
                     <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4a7b50e5 animated-fast" data-id="4a7b50e5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-6fb594a8 elementor-widget elementor-widget-image" data-id="6fb594a8" data-element_type="widget" data-widget_type="image.default">
                              <div class="elementor-widget-container">
                                 <img decoding="async" src="{{$team[$teamKey]['image']}}" title="" alt="" loading="lazy" />															
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-5cc202c6 elementor-widget elementor-widget-jkit_heading" data-id="5cc202c6" data-element_type="widget" data-widget_type="jkit_heading.default">
                              <div class="elementor-widget-container">
                                 <div  class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile- jeg_module_879_4_64c34dcd6039f" >
                                    <div class="heading-section-title  display-inline-block">
                                       <h2 class="heading-title">{{$team[$teamKey]['name']}}</h2>
                                    </div>
                                    <div class="heading-section-description">
                                       <p>{{$team[$teamKey]['designation']}}</p>
                                    </div>
                                 </div>
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
</div>