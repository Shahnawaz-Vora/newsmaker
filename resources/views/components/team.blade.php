<style>
   #myContainer {
       max-width: 1200px;
       margin: 0 auto;
   }
   
   #teamSection {
       background: #f0f0f0;
       padding: 50px 0;
   }
   
   #overlay-team {
       background: rgba(0,0,0,0.7);
       position: absolute;
       top: 0;
       right: 0;
       bottom: 0;
       left: 0;
   }
   
   #iconListItem {
       display: flex;
       align-items: center;
   }
   
   #icon {
       margin-right: 10px;
   }
   
   #teamList {
       display: grid;
       grid-template-columns: repeat(3, 1fr);
       gap: 20px;
       margin-right:35px;
   }
   
   #teamMember {
       background: #fff;
       border-radius: 10px;
       padding: 20px;
       text-align: center;
       margin-top:20px;
   }
   
   #figure {
       margin-bottom: 20px;
   }
   
   #memberImage {
       width: 320px;
       height: 350px;
   }
   
   @media screen and (max-width: 1200px) {
       #memberImage {
           width: 100%;
       }
   }
   
   @media screen and (max-width: 992px) {
       #teamList {
           grid-template-columns: repeat(2, 1fr);
       }
   }
   
   @media screen and (max-width: 768px) {
       #teamList {
           grid-template-columns: 1fr;
       }
   }
   </style>
   

<section style="background-color:#F3F6FF" class="elementor-section elementor-top-section elementor-element elementor-element-2d7b1de elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2d7b1de" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
   <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element" data-id="" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
         <div class="elementor-widget-wrap elementor-element-populated">
            <section class="elementor-section elementor-inner-section elementor-element animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e9bade0" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
               <div class="elementor-container elementor-column-gap-default">
                  <div class="">
                     <div class="elementor-widget-wrap elementor-element-populated ">
                        <div class="elementor-element elementor-element-c1fa32f  elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c1fa32f" data-element_type="widget" data-widget_type="icon-list.default">
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
                        <div class="elementor-element elementor-element-0ac3c93 elementor-widget elementor-widget-jkit_heading" data-id="0ac3c93" data-element_type="widget" data-widget_type="jkit_heading.default">
                           <div class="elementor-widget-container ">
                              <div  class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_61_26_64c5bcbb4c6ee" >
                                 <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">{{$team["heading"]}}</h2>
                                 </div>
                                 <div class="heading-section-description">
                                    <p>{{$team["description"]}}</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-e9bade0 animated-fast elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e9bade0" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                  <div class="container-fluid">
                     <ul class="team-list" id="teamList">
                        @foreach(['team1', 'team2', 'team3'] as $teamKey)
                        <li class="team-member" id="teamMember">
                              <div class="member-block">
                                 <figure id="figure"><img src="{{$team[$teamKey]['image']}}" alt="{{$team[$teamKey]['name']}}" id="memberImage"></figure>
                                 <h3><a href="#">{{$team[$teamKey]['name']}}</a></h3>
                                 <p>{{$team[$teamKey]['designation']}}</p>
                              </div>
                        </li>
                        @endforeach
                     </ul>
                  </div>
            </section>
         </div>
      </div>
   </div>
</section>
