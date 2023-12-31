<style>
        .owl-stage-outer {
            padding: 30px 0;
         }

         .owl-nav {
            display: none;
         }

         .owl-dots {
         text-align: center;
         }

         .owl-dots span {
         position: relative;
         height: 10px;
         width: 10px;
         border-radius: 50%;
         display: inline-block;
         background: #fff;
         border: 2px solid #01b0f8;
         margin: 0 5px;
         }

         .owl-dots .active span {
         background: #01b0f8;
         box-shadow: none;
         height: 12px;
         width: 12px;
         /* margin-bottom: -1px; */
         }

         #testimonial-section .card {
            background: #fff;
            /* box-shadow: 0 8px 30px -7px #c9dff0; */
            margin: 0 20px;
            padding: 0 10px;
            border-radius: 20px;
            border: 0;
            height:480px;

            .card-img-top {
            max-width: 100px;
            border-radius: 50%;
            margin: 15px auto 0;
            box-shadow: 0 8px 20px -4px #95abbb;
            width: 100px;
            height: 100px;
            }

            h5 {
            color: #01b0f8;
            font-size: 21px;
            line-height: 1.3;

            span {
                  font-size: 18px;
                  color: #666666;
            }
            }

            p {
            font-size: 18px;
            color: #555;
            padding-bottom: 15px;
            }
         }

         //apply on all active class need to find the actual active in carousel
         /* .active {
            opacity: 0.5;
            transition: all 0.3s;
         } */


         

         .center {
            opacity: 1;

            h5 {
            font-size: 24px;

            span {
                  font-size: 20px;
            }
            }

            .card-img-top {
            max-width: 100%;
            height: 120px;
            width: 120px;
            }
         }
         }
         @media (max-width: 767px) {
         .gtco-testimonials {
            margin-top: 20px;
         }
         }

         .owl-carousel {
         .owl-nav button {
            &.owl-next, &.owl-prev {
            outline: 0;
            }
         }

         button.owl-dot {
            outline: 0;
         }
         }

         @media (max-width: 1399px) {
            #testimonial-section .card {
            height: 550px;
            }
        }
        
        @media (max-width: 900px) {
            #testimonial-section .card {
            height: 580px;
            }
        }

        #designation{
            font-size:18px;
            font-weight: normal;
        }
        #clientName{
            font-size:25px;
            line-height: 1.2;
        }

</style>
<section id="testimonial-section" class="elementor-section elementor-top-section elementor-element elementor-element-5f47435 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5f47435" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-00d6567" data-id="00d6567" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated" style="background-color:#FFFFFF">
                <div class="elementor-background-overlay"></div>
                <div class="col-xl-4"></div>
                <div class="col-xl-4" style="text-align: center; margin-top: -8%; z-index: 1; margin-bottom: 5%; font-family: inherit;">
                    <div class="elementor-element  elementor-element-0ac3c93 elementor-widget elementor-widget-jkit_heading" data-id="0ac3c93" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container ">
                        <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_61_26_64c62cc7d7c7c" >
                            <div class="heading-section-title  display-inline-block" style="text-align: center">
                                <h2 class="heading-title mt-3" style="color:white;">Testimonials</h2>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4"></div>
                <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top:-5%;margin-bottom:-5%">
                    @foreach ($testimonials as $testimonial)
                    <div>
                        <div class="card text-center"><img class="card-img-top" src="{{asset('asset/images/user.png')}}" alt="">
                            <div class="card-body">
                            <h5 id="clientName">{{ucwords(strtolower(trim($testimonial["clientName"])))}}<br />
                                <span id="designation"> {{ucwords(strtolower(trim($testimonial["clientDesignation"] . ", " . $testimonial["clientCompanyName"])))}} </span>
                            </h5>
                            <p class="card-text">{{$testimonial["message"]}}</p>
                            </div>
                        </div>
                    </div>   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 </section>
 <script>
    (function () {
       "use strict";

       var carousels = function () {
          $(".owl-carousel1").owlCarousel({
             loop: true,
             center: true,
             margin: 0,
             responsiveClass: true,
             nav: false,
             responsive: {
             0: {
                items: 1,
                nav: false
             },
             680: {
                items: 2,
                nav: false,
                loop: false
             },
             1400: {
                items: 3,
                nav: true
             }
             }
          });
       };

       (function ($) {
          carousels();
       })(jQuery);
    })();
 </script>