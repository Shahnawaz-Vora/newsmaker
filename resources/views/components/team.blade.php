<style>
    .our-webcoderskull .row.heading h2 {
        display: none;
    }

    .padding-lg {
        display: block;
        padding-top: 60px;
        padding-bottom: 60px;
    }
    /* Add custom styles for the cards */
    .our-webcoderskull .cnt-block {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 30px 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
        margin-bottom: 20px;
        flex: 1;
    }

    .our-webcoderskull .cnt-block figure {
        width: 148px;
        height: 148px;
        border-radius: 100%;
        margin-bottom: 15px;
    }

    .our-webcoderskull .cnt-block img {
        width: 100%;
        height: 100%;
        border-radius: 100%;
    }

    .our-webcoderskull .cnt-block h3 {
        color: #2a2a2a;
        font-size: 20px;
        font-weight: 500;
        padding: 6px 0;
        text-transform: uppercase;
    }

    .our-webcoderskull .cnt-block p {
        color: #2a2a2a;
        font-size: 13px;
        line-height: 20px;
        font-weight: 400;
    }

    .our-webcoderskull .cnt-block .follow-us {
        margin: 20px 45px 0px 0px;
    }

    .our-webcoderskull .cnt-block .follow-us li {
        display: inline-block;
        width: auto;
        margin: 0 5px;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa {
        font-size: 24px;
        color: #767676;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa:hover {
        color: #025a8e;
    }

    /* Create a row of cards with equal height and space between them */
    .our-webcoderskull .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .our-webcoderskull .col-12,
    .our-webcoderskull .col-md-6,
    .our-webcoderskull .col-lg-3 {
        /* padding: 10px; */
    }

</style>
<section class="elementor-section elementor-top-section elementor-element elementor-element-52296b28 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52296b28" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
       <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3eed6518" data-id="3eed6518" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-6bb5ac2 elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="6bb5ac2" data-element_type="widget" data-widget_type="icon-list.default">
                <div class="elementor-widget-container">
                   <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                         <span class="elementor-icon-list-icon">
                         <i aria-hidden="true" class="fas fa-dot-circle"></i>						</span>
                         <span class="elementor-icon-list-text">{{$team['title']}}</span>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="elementor-element elementor-element-56643de elementor-widget elementor-widget-jkit_heading" data-id="56643de" data-element_type="widget" data-widget_type="jkit_heading.default">
                <div class="elementor-widget-container">
                   <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1262_9_64c2a450afde0" >
                      <div class="heading-section-title  display-inline-block">
                         {{-- <h2 class="heading-title">{{$team['heading']}}</h2> --}}
                      </div>
                      <div class="heading-section-description">{{$team['heading']}}</div>
                   </div>
                </div>
             </div>
             <section class="our-webcoderskull" style="width: 100%">
                <div class="container-fluid " style="padding-left:0px;padding-right:9%;">
                   <ul class="row">
                      <li class="col-12 col-md-6 col-lg-4 mb-5">
                         <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="{{$team['team1Image']}}" class="img-responsive" alt=""></figure>
                            <h3><a href="#">Mohamed Yousef
                               </a>
                            </h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                         </div>
                      </li>
                      <li class="col-12 col-md-6 col-lg-4 mb-5">
                         <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="{{$team['team2Image']}}" class="img-responsive" alt=""></figure>
                            <h3><a href="#">Mohamed Yousef
                               </a>
                            </h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                         </div>
                      </li>
                      <li class="col-12 col-md-6 col-lg-4 mb-5">
                         <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="{{$team['team3Image']}}" class="img-responsive" alt=""></figure>
                            <h3><a href="#">Mohamed Yousef
                               </a>
                            </h3>
                            <p>Freelance Web Developer</p>
                            <ul class="follow-us clearfix">
                               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                         </div>
                      </li>
                   </ul>
                </div>
             </section>
          </div>
       </div>
    </div>
 </section>