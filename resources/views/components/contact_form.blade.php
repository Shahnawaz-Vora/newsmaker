<section class=" mt-5 elementor-section elementor-top-section elementor-element elementor-element-3a8d25b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a8d25b8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-190cbdc3" data-id="190cbdc3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
             <div class="elementor-element elementor-element-22bc5744 elementor-widget elementor-widget-jkit_heading" data-id="22bc5744" data-element_type="widget" data-widget_type="jkit_heading.default">
                <div class="elementor-widget-container">
                   <div  class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_26_2_64c34f882580d" >
                      <div class="heading-section-title  display-inline-block">
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
                   <style>/*! elementor - v3.14.0 - 26-06-2023 */
                      .elementor-widget-google_maps .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps .elementor-custom-embed{line-height:0}.elementor-widget-google_maps iframe{height:300px}
                   </style>
                   <div class="elementor-custom-embed">
                      <iframe loading="lazy"
                         src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
                         title="London Eye, London, United Kingdom"
                         aria-label="London Eye, London, United Kingdom"
                         ></iframe>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2f2ed563 elementor-invisible" data-id="2f2ed563" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
          <div class="elementor-widget-wrap elementor-element-populated">
             <div class="elementor-element elementor-element-243ad118 elementor-widget elementor-widget-metform" data-id="243ad118" data-element_type="widget" data-widget_type="metform.default">
                <div class="elementor-widget-container">
                   <div id="mf-response-props-id-838" data-previous-steps-style="" data-editswitchopen="" data-response_type="alert" data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check" data-messageposition="top" class="mf-scroll-top-no">
                      <div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="838" >
                         <div class="elementor-widget-container">
                            <div
                               id="metform-wrap-243ad118-838"
                               class="mf-form-wrapper"
                               data-form-id="838"
                               data-action="https://advanture.icu/socialseven/wp-json/metform/v1/entries/insert/838"
                               data-wp-nonce="aac02e2279"
                               data-form-nonce="cb581192db"
                               data-quiz-summery = "false"
                               data-save-progress = "false"
                               data-form-type="general-form"
                               data-stop-vertical-effect=""
                               ></div>
                            <!----------------------------- 
                               * controls_data : find the the props passed indie of data attribute
                               * props.SubmitResponseMarkup : contains the markup of error or success message
                               * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
                               --------------------------- -->
                            <script type="text/mf" class="mf-template">
                               function controls_data (value){
                                   let currentWrapper = "mf-response-props-id-838";
                                   let currentEl = document.getElementById(currentWrapper);
                                   
                                   return currentEl ? currentEl.dataset[value] : false
                               }
                               
                               
                               let is_edit_mode = '' ? true : false;
                               let message_position = controls_data('messageposition') || 'top';
                               
                               
                               let message_successIcon = controls_data('successicon') || '';
                               let message_errorIcon = controls_data('erroricon') || '';
                               let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
                               let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';
                               
                               let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;
                               
                               
                               return html`
                                   <form
                                       className="metform-form-content"
                                       ref=${parent.formContainerRef}
                                       onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }
                                   
                                       >
                               
                               
                                       ${is_dummy_markup ? message_position === 'top' ?  props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
                                       ${is_dummy_markup ? ' ' :  message_position === 'top' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}
                               
                                       <!--------------------------------------------------------
                                       *** IMPORTANT / DANGEROUS ***
                                       ${html``} must be used as in immediate child of "metform-form-main-wrapper"
                                       class otherwise multistep form will not run at all
                                       ---------------------------------------------------------->
                               
                                       <div className="metform-form-main-wrapper" key=${'hide-form-after-submit'} ref=${parent.formRef}>
                                       ${html`
                                                   <div data-elementor-type="wp-post" key="2" data-elementor-id="838" className="elementor elementor-838">
                                                       <section className="elementor-section elementor-top-section elementor-element elementor-element-165522ac elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="165522ac" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                           <div className="elementor-container elementor-column-gap-default">
                                       <div className="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6920512" data-id="6920512" data-element_type="column">
                               <div className="elementor-widget-wrap elementor-element-populated">
                                                   <div className="elementor-element elementor-element-41761b14 elementor-widget elementor-widget-heading" data-id="41761b14" data-element_type="widget" data-widget_type="heading.default">
                                   <div className="elementor-widget-container">
                               <style key="1">/*! elementor - v3.14.0 - 26-06-2023 */
                               .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h3 className="elementor-heading-title elementor-size-default">Send your Query Here</h3>		</div>
                                   </div>
                                   <section className="elementor-section elementor-inner-section elementor-element elementor-element-a220eab elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a220eab" data-element_type="section">
                                           <div className="elementor-container elementor-column-gap-default">
                                       <div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-11aa9a7d" data-id="11aa9a7d" data-element_type="column">
                               <div className="elementor-widget-wrap elementor-element-populated">
                                                   <div className="elementor-element elementor-element-1412962c elementor-widget elementor-widget-mf-text" data-id="1412962c" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-first-name&quot;}" data-widget_type="mf-text.default">
                                   <div className="elementor-widget-container">
                               
                               <div className="mf-input-wrapper">
                                               <label className="mf-input-label" htmlFor="mf-input-text-1412962c">
                                       ${ parent.decodeEntities(`First Name`) } 					<span className="mf-input-required-indicator">*</span>
                                   </label>
                               
                               <input
                                   type="text"
                                   className="mf-input mf-conditional-input"
                                   id="mf-input-text-1412962c"
                                   name="mf-first-name"
                                   placeholder="${ parent.decodeEntities(`First name here`) } "
                                                       onInput=${parent.handleChange}
                                       onBlur=${parent.handleChange}
                                       aria-invalid=${validation.errors['mf-first-name'] ? 'true' : 'false'}
                                       ref=${el =>{
                                                                   parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)
                                       }}
                                                   />
                               
                                               <${validation.ErrorMessage}
                                       errors=${validation.errors}
                                       name="mf-first-name"
                                       as=${html`<span className="mf-error-message"></span>`}
                                       />
                               
                                       </div>
                               
                                   </div>
                                   </div>
                                       </div>
                               </div>
                                   <div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ef17e7e" data-id="4ef17e7e" data-element_type="column">
                               <div className="elementor-widget-wrap elementor-element-populated">
                                                   <div className="elementor-element elementor-element-61a10b06 elementor-widget elementor-widget-mf-text" data-id="61a10b06" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-last-name&quot;}" data-widget_type="mf-text.default">
                                   <div className="elementor-widget-container">
                               
                               <div className="mf-input-wrapper">
                                               <label className="mf-input-label" htmlFor="mf-input-text-61a10b06">
                                       ${ parent.decodeEntities(`Last Name`) } 					<span className="mf-input-required-indicator">*</span>
                                   </label>
                               
                               <input
                                   type="text"
                                   className="mf-input mf-conditional-input"
                                   id="mf-input-text-61a10b06"
                                   name="mf-last-name"
                                   placeholder="${ parent.decodeEntities(`Last name here`) } "
                                                       onInput=${parent.handleChange}
                                       onBlur=${parent.handleChange}
                                       aria-invalid=${validation.errors['mf-last-name'] ? 'true' : 'false'}
                                       ref=${el =>{
                                                                   parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)
                                       }}
                                                   />
                               
                                               <${validation.ErrorMessage}
                                       errors=${validation.errors}
                                       name="mf-last-name"
                                       as=${html`<span className="mf-error-message"></span>`}
                                       />
                               
                                       </div>
                               
                                   </div>
                                   </div>
                                       </div>
                               </div>
                                               </div>
                               </section>
                                   <section className="elementor-section elementor-inner-section elementor-element elementor-element-58872c49 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="58872c49" data-element_type="section">
                                           <div className="elementor-container elementor-column-gap-default">
                                       <div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4b329f37" data-id="4b329f37" data-element_type="column">
                               <div className="elementor-widget-wrap elementor-element-populated">
                                                   <div className="elementor-element elementor-element-437fb88e elementor-widget elementor-widget-mf-email" data-id="437fb88e" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
                                   <div className="elementor-widget-container">
                               
                               <div className="mf-input-wrapper">
                                               <label className="mf-input-label" htmlFor="mf-input-email-437fb88e">
                                       ${ parent.decodeEntities(`Email Address`) } 					<span className="mf-input-required-indicator">*</span>
                                   </label>
                               
                               <input 
                                   type="email" 
                                    
                                   defaultValue="" 
                                   className="mf-input mf-conditional-input" 
                                   id="mf-input-email-437fb88e" 
                                   name="mf-email" 
                                   placeholder="${ parent.decodeEntities(`Add email`) } " 
                                    
                                   onBlur=${parent.handleChange} onFocus=${parent.handleChange} aria-invalid=${validation.errors['mf-email'] ? 'true' : 'false' } 
                                   ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
                                               />
                               
                                           <${validation.ErrorMessage} 
                                   errors=${validation.errors} 
                                   name="mf-email" 
                                   as=${html`<span className="mf-error-message"></span>`}
                               />
                               
                                       </div>
                               
                               </div>
                                   </div>
                                       </div>
                               </div>
                                   <div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-634eb011" data-id="634eb011" data-element_type="column">
                               <div className="elementor-widget-wrap elementor-element-populated">
                                                   <div className="elementor-element elementor-element-6bbd225f elementor-widget elementor-widget-mf-text" data-id="6bbd225f" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-subject&quot;}" data-widget_type="mf-text.default">
                                   <div className="elementor-widget-container">
                               
                               <div className="mf-input-wrapper">
                                               <label className="mf-input-label" htmlFor="mf-input-text-6bbd225f">
                                       ${ parent.decodeEntities(`Subject`) } 					<span className="mf-input-required-indicator">*</span>
                                   </label>
                               
                               <input
                                   type="text"
                                   className="mf-input mf-conditional-input"
                                   id="mf-input-text-6bbd225f"
                                   name="mf-subject"
                                   placeholder="${ parent.decodeEntities(`How can we help you?`) } "
                                                       onInput=${parent.handleChange}
                                       onBlur=${parent.handleChange}
                                       aria-invalid=${validation.errors['mf-subject'] ? 'true' : 'false'}
                                       ref=${el =>{
                                                                   parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)
                                       }}
                                                   />
                               
                                               <${validation.ErrorMessage}
                                       errors=${validation.errors}
                                       name="mf-subject"
                                       as=${html`<span className="mf-error-message"></span>`}
                                       />
                               
                                       </div>
                               
                                   </div>
                                   </div>
                                       </div>
                               </div>
                                               </div>
                               </section>
                                   <section className="elementor-section elementor-inner-section elementor-element elementor-element-2dabcf02 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2dabcf02" data-element_type="section">
                                           <div className="elementor-container elementor-column-gap-default">
                                       <div className="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-70d2df28" data-id="70d2df28" data-element_type="column">
                               <div className="elementor-widget-wrap elementor-element-populated">
                                                   <div className="elementor-element elementor-element-47fb4ca0 elementor-widget elementor-widget-mf-textarea" data-id="47fb4ca0" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-comment&quot;}" data-widget_type="mf-textarea.default">
                                   <div className="elementor-widget-container">
                               
                               <div className="mf-input-wrapper">
                                               <label className="mf-input-label" htmlFor="mf-input-text-area-47fb4ca0">
                                       ${ parent.decodeEntities(`Comments / Questions`) } 					<span className="mf-input-required-indicator">*</span>
                                   </label>
                               
                               <textarea className="mf-input mf-textarea mf-conditional-input" id="mf-input-text-area-47fb4ca0"
                                   name="mf-comment" 
                                   placeholder="${ parent.decodeEntities(`Comments`) } "
                                   cols="30" rows="10"
                                                       onInput=${ parent.handleChange }
                                       aria-invalid=${validation.errors['mf-comment'] ? 'true' : 'false'}
                                       ref=${ el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
                                                   ></textarea>
                               
                                               <${validation.ErrorMessage}
                                       errors=${validation.errors}
                                       name="mf-comment"
                                       as=${html`<span className="mf-error-message"></span>`}
                                       />
                                                   </div>
                               
                                   </div>
                                   </div>
                                   <div className="elementor-element elementor-element-3acc7e64 mf-btn--left elementor-widget elementor-widget-mf-button" data-id="3acc7e64" data-element_type="widget" data-widget_type="mf-button.default">
                                   <div className="elementor-widget-container">
                                       <div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
                                               <button type="submit" className="metform-btn metform-submit-btn " id="">
                                       <span>${ parent.decodeEntities(`Send Message`) } </span>
                                   </button>
                                       </div>
                                            </div>
                                   </div>
                                       </div>
                               </div>
                                               </div>
                               </section>
                                       </div>
                               </div>
                                               </div>
                               </section>
                                               </div>
                                               `}
                                       </div>
                               
                                       ${is_dummy_markup ? message_position === 'bottom' ? props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
                                       ${is_dummy_markup ? ' ' : message_position === 'bottom' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}
                                   
                                   </form>
                               `
                            </script>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>