<style>
    /* Styling for the "Contact Us Anytime" heading */
    .jkit-heading .heading-title {
        font-size: 30px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .jkit-heading .heading-section-description p {
        font-size: 16px;
        color: #777;
    }

    /* Styling for the contact form inputs and labels */
    .metform-form-content {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .mf-input-wrapper {
        margin-bottom: 20px;
    }

    .mf-input-label {
        display: block;
        font-size: 14px;
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
    }

    .mf-input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .mf-textarea {
        resize: vertical;
    }

    .metform-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .metform-btn:hover {
        background-color: #0056b3;
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
        .elementor-container.elementor-column-gap-default {
            flex-direction: column;
        }

        .elementor-column {
            width: 100%;
        }

        .metform-form-content {
            max-width: 100%;
        }
    }

    /* Style for the custom dropdown */
    .mf-input-dropdown {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .mf-input-dropdown select {
        width: 100%;
        padding: 12px 16px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        appearance: none;
        background-image: linear-gradient(45deg, transparent 50%, #007bff 50%), linear-gradient(135deg, #007bff 50%, transparent 50%);
        background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px);
        background-size: 5px 5px, 5px 5px;
        background-repeat: no-repeat;
    }

    .mf-input-dropdown select::-ms-expand {
        display: none;
    }

    .mf-input-dropdown::after {
        content: "\25BC";
        position: absolute;
        top: 50%;
        right: 12px;
        transform: translateY(-50%);
    }

    /* Style for the selected option */
    .mf-input-dropdown select option:checked {
        background-color: #007bff;
        color: #fff;
    }
</style>

<section class="mt-5 elementor-section elementor-top-section elementor-element elementor-element-3a8d25b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a8d25b8" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-190cbdc3" data-id="190cbdc3" data-element_type="column" data-settings='{"background_background":"classic"}'>
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
                            .elementor-widget-google_maps iframe { height: 300px; }
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
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2f2ed563" data-id="2f2ed563" data-element_type="column" data-settings='{"background_background":"classic"}'>
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-243ad118 elementor-widget elementor-widget-metform" data-id="243ad118" data-element_type="widget" data-widget_type="metform.default">
                    <div class="elementor-widget-container">
                        <!-- Your contact form goes here -->
                        <form
                            class="metform-form-content"
                            action="https://advanture.icu/socialseven/wp-json/metform/v1/entries/insert/838"
                            method="post"
                        >
                            <div class="mf-form-wrapper">
                                <!-- First Name -->
                                <div class="mf-input-wrapper">
                                    <label class="mf-input-label" for="mf-input-text-1412962c">First Name <span class="mf-input-required-indicator">*</span></label>
                                    <input
                                        type="text"
                                        class="mf-input mf-conditional-input"
                                        id="mf-input-text-1412962c"
                                        name="mf-first-name"
                                        placeholder="First name here"
                                        required
                                    />
                                </div>

                                <!-- Last Name -->
                                <div class="mf-input-wrapper">
                                    <label class="mf-input-label" for="mf-input-text-61a10b06">Last Name <span class="mf-input-required-indicator">*</span></label>
                                    <input
                                        type="text"
                                        class="mf-input mf-conditional-input"
                                        id="mf-input-text-61a10b06"
                                        name="mf-last-name"
                                        placeholder="Last name here"
                                        required
                                    />
                                </div>

                                <!-- Email Address -->
                                <div class="mf-input-wrapper">
                                    <label class="mf-input-label" for="mf-input-email-437fb88e">Email Address <span class="mf-input-required-indicator">*</span></label>
                                    <input
                                        type="email"
                                        class="mf-input mf-conditional-input"
                                        id="mf-input-email-437fb88e"
                                        name="mf-email"
                                        placeholder="Add email"
                                        required
                                    />
                                </div>

                                <!-- Subject -->
                                <div class="mf-input-wrapper">
                                    <label class="mf-input-label" for="mf-input-dropdown-6bbd225f">Subject <span class="mf-input-required-indicator">*</span></label>
                                    <div class="mf-input-dropdown">
                                        <select class="mf-input mf-conditional-input" id="mf-input-dropdown-6bbd225f" name="mf-subject" required>
                                            <option value="">Select a Subject</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Public Relation">Public Relation</option>
                                            <option value="TV Interview">TV Interview</option>
                                        </select>
                                    </div>
                                </div>
                                

                                <!-- Comments / Questions -->
                                <div class="mf-input-wrapper">
                                    <label class="mf-input-label" for="mf-input-text-area-47fb4ca0">Comments / Questions <span class="mf-input-required-indicator">*</span></label>
                                    <textarea
                                        class="mf-input mf-textarea mf-conditional-input"
                                        id="mf-input-text-area-47fb4ca0"
                                        name="mf-comment"
                                        placeholder="Comments"
                                        rows="10"
                                        required
                                    ></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="metform-btn metform-submit-btn">
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
