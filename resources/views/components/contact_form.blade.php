<style>
    .form-control {
        padding: 10px;
        margin-bottom: 10px;
    }
    label{
        margin-left: 5px;
    }
    .form-select{
        padding: 10px;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        /* Hide the section in mobile view */
        #contactUs {
            display: none;
        }
    }
    
    
</style>
<section id="contactUs" style="background-color: #FFFFFF; padding-top: 20px;" class="pt-5 pb-5 elementor-section elementor-top-section elementor-element elementor-element-3a8d25b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a8d25b8" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-22bc5744 elementor-widget elementor-widget-heading" data-id="22bc5744" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-heading align-left align-tablet- align-mobile- jeg_module_26_2_64c34f882580d">
                                <div class="heading-section-title display-inline-block">
                                    <h2 class="heading-title">Contact us Anytime</h2>
                                </div>
                                <div class="heading-section-description">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-111869f elementor-widget elementor-widget-google_maps" data-id="111869f" data-element_type="widget" data-widget_type="google_maps.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-widget-google_maps .elementor-widget-container { overflow: hidden; }
                                .elementor-widget-google_maps .elementor-custom-embed { line-height: 0; }
                                .elementor-widget-google_maps iframe { height: 300px;width: 100%; }
                            </style>
                            <div class="elementor-custom-embed">
                                <iframe loading="lazy"
                                    src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                                    title="London Eye, London, United Kingdom"
                                    aria-label="London Eye, London, United Kingdom"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-6" style="background-color:#F4F7FF;">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-243ad118 elementor-widget elementor-widget-metform" data-id="243ad118" data-element_type="widget" data-widget_type="metform.default">
                        <div class="elementor-widget-container">
                            <!-- Your contact form goes here -->
                            <form class="metform-form-content p-5" action="/contact/submit" method="post">
                                @csrf
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="form-group col-md-6">
                                        <label class="mf-input-label" for="first-name">First Name <span class="mf-input-required-indicator">*</span></label>
                                        <input
                                            type="text"
                                            class="form-control mf-input mf-conditional-input"
                                            id="first-name"
                                            name="mf-first-name"
                                            placeholder="First name here"
                                            required
                                            style="background-color:#FFFFFF;"
                                        />
                                    </div>

                                    <!-- Last Name -->
                                    <div class="form-group col-md-6">
                                        <label class="mf-input-label" for="last-name">Last Name <span class="mf-input-required-indicator">*</span></label>
                                        <input
                                            type="text"
                                            class="form-control mf-input mf-conditional-input"
                                            id="last-name"
                                            name="mf-last-name"
                                            placeholder="Last name here"
                                            style="background-color:#FFFFFF;"
                                            required
                                        />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group col-md-6">
                                        <label class="mf-input-label" for="email">Email Address <span class="mf-input-required-indicator">*</span></label>
                                        <input
                                            type="email"
                                            class="form-control mf-input mf-conditional-input"
                                            id="email"
                                            name="mf-email"
                                            placeholder="Add email"
                                            style="background-color:#FFFFFF;"
                                            required
                                        />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="mf-input-label" for="mobile">Mobile Number <span class="mf-input-required-indicator">*</span></label>
                                        <input
                                            type="text"
                                            class="form-control mf-input mf-conditional-input"
                                            id="mobile"
                                            name="mf-mobile"
                                            placeholder="Mobile Number"
                                            style="background-color:#FFFFFF;"
                                            required
                                        />
                                    </div>

                                    {{-- Company Name --}}
                                    <div class="form-group col-md-12">
                                        <label class="mf-input-label" for="Company">Company Name <span class="mf-input-required-indicator">*</span></label>
                                        <input
                                            type="text"
                                            class="form-control mf-input mf-conditional-input"
                                            id="Company"
                                            name="mf-Company"
                                            placeholder="Company Name"
                                            style="background-color:#FFFFFF;"
                                            required
                                        />
                                    </div>

                                    <!-- Subject -->
                                    <div class="form-group col-md-12">
                                        <label class="mf-input-label" for="subject">Subject <span class="mf-input-required-indicator">*</span></label>
                                        <select class="form-select mf-input mf-conditional-input" id="subject" name="mf-subject" required>
                                            <option value="">Select a Subject</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Public Relation">Public Relation</option>
                                            <option value="TV Interview">TV Interview</option>
                                        </select>
                                    </div>

                                    <!-- Comments / Questions -->
                                    <div class="form-group col-md-12 mb-2">
                                        <label class="mf-input-label" for="comments">Comments / Questions <span class="mf-input-required-indicator">*</span></label>
                                        <textarea
                                            class="form-control mf-input mf-textarea mf-conditional-input"
                                            id="comments"
                                            name="mf-comment"
                                            placeholder="Comments"
                                            style="background-color:#FFFFFF"
                                            rows="5"
                                            required
                                        ></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary metform-btn metform-submit-btn">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
