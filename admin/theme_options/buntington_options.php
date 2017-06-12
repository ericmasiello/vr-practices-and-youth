<?php
return array(
    'title' => __( 'VR Practices and Youth Options', 'kazaz' ),
    'logo' => get_template_directory_uri() . '/public/img/vrandyouth.svg',
    'menus' => array(
        /* basic options end */		
        /* contact options start */
        array(
            'title' => __('Contact', 'kazaz'),
            'name' => 'contact_options',
            'icon' => 'font-awesome:fa fa-envelope',
            'controls' => array(
                /* personal contact starts */
                array(
                    'type' => 'section',
                    'title' => __('Contact details', 'kazaz'),
                    'name' => 'contact_details',
                    'description' => __('The data you enter here will be used for both Google Maps and Quick Contact widget', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'contact_name',
                            'label' => __('Company or private name', 'kazaz'),
                            'default' => '',
                        ),						
                        array(
                            'type' => 'textbox',
                            'name' => 'contact_form_id',
                            'label' => __('Contact Form ID', 'kazaz'),
                            'default' => '',
                        ),
                    ),
                ),
                /* personal contact ends */
            ),
        ),
        /* contact options end */
        /* common options start */
        array(
            'title' => __('Other Things...', 'kazaz'),
            'name' => 'other_options',
            'icon' => 'font-awesome:fa fa-rocket',
            'controls' => array(
                /* posts page*/
                array(
                    'type' => 'section',
                    'title' => __('Posts page settings', 'kazaz'),
                    'name' => 'post_page_settings',
                    'description' => __('Posts page is a Custom Template that can be used to display Blog posts.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'select',
                            'name' => 'posts_page_layout',
                            'label' => __('Posts page layout', 'kazaz'),
                            'items' => array(
                                array(
                                    'value' => 'stacked',
                                    'label' => __('Stacked', 'kazaz'),
                                ),
                                array(
                                    'value' => 'grid',
                                    'label' => __('Grid', 'kazaz'),
                                ),
                            ),
                            'default' => 'grid',
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'posts_page_num_of_posts',
                            'label' => __('Number of posts per page', 'kazaz'),
                            'default' => 6,
                        ),
                    ),
                ),
                /* posts page end */
                /* page comments */
                array(
                    'type' => 'section',
                    'title' => __('Enable Page Comments', 'kazaz'),
                    'name' => 'disable_page_comments',
                    'description' => __('Page comments are enabled by default. Disable if needed.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'toggle',
                            'name' => 'use_page_comments',
                            'label' => __('Enable Page Comments', 'kazaz'),
                            'default' => 'true',
                        ),
                    ),
                ),
                /* page comments end */
                /* post summary start */
                array(
                    'type' => 'section',
                    'title' => __('Post summary length', 'kazaz'),
                    'name' => 'post_summary',
                    'description' => __('Trim post summary to N number of words. If post excerpt exists this setting will be ignored!', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'post_summary_primal',
                            'label' => __('Trim post summary for Category and Index page', 'kazaz'),
                            'default' => '24',
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'post_summary_secondary',
                            'label' => __('Trim post summary for Search, Archive and Tag pages', 'kazaz'),
                            'default' => '24',
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'post_summary_more',
                            'label' => __('READ MORE tag', 'kazaz'),
                            'default' => __('Read More', 'kazaz'),
                        ),
                    ),
                ),				
                /* error page image starts */

                array(
                    'type' => 'section',
                    'title' => __('Footer Logo/Image 1', 'kazaz'),
                    'name' => 'footer_logos',
                    'description' => __('Upload the image you would like to appear in the footer.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'footer_logo_0',
                            'label' => __('Footer Logo', 'kazaz'),
                            'description' => __('This image will appear in the footer.', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_link_0',
                            'label' => __('Hyperlink', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_text_0',
                            'label' => __('Alt text used with image', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                    )
                ),

                array(
                    'type' => 'section',
                    'title' => __('Footer Logo/Image 2', 'kazaz'),
                    'name' => 'footer_logos',
                    'description' => __('Upload the image you would like to appear in the footer.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'footer_logo_1',
                            'label' => __('Footer Logo', 'kazaz'),
                            'description' => __('This image will appear in the footer.', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_link_1',
                            'label' => __('Hyperlink', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_text_1',
                            'label' => __('Alt text used with image', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                    )
                ),

                array(
                    'type' => 'section',
                    'title' => __('Footer Logo/Image 3', 'kazaz'),
                    'name' => 'footer_logos',
                    'description' => __('Upload the image you would like to appear in the footer.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'footer_logo_2',
                            'label' => __('Footer Logo', 'kazaz'),
                            'description' => __('This image will appear in the footer.', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_link_2',
                            'label' => __('Hyperlink', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_text_2',
                            'label' => __('Alt text used with image', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                    )
                ),

                array(
                    'type' => 'section',
                    'title' => __('Footer Logo/Image 4', 'kazaz'),
                    'name' => 'footer_logos',
                    'description' => __('Upload the image you would like to appear in the footer.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'footer_logo_3',
                            'label' => __('Footer Logo', 'kazaz'),
                            'description' => __('This image will appear in the footer.', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_link_3',
                            'label' => __('Hyperlink', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_text_3',
                            'label' => __('Alt text used with image', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                    )
                ),

                array(
                    'type' => 'section',
                    'title' => __('Footer Logo/Image 5', 'kazaz'),
                    'name' => 'footer_logos',
                    'description' => __('Upload the image you would like to appear in the footer.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'footer_logo_4',
                            'label' => __('Footer Logo', 'kazaz'),
                            'description' => __('This image will appear in the footer.', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_link_4',
                            'label' => __('Hyperlink', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_logo_text_4',
                            'label' => __('Alt text used with image', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                    )
                ),

                array(
                    'type' => 'section',
                    'title' => __('Footer Contact Form', 'kazaz'),
                    'name' => 'footer_contact_form',
                    'fields' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_contact_title',
                            'label' => __('Form Title', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        ),
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_contact_instructions',
                            'label' => __('Form Instructions', 'kazaz'),
                            'default' => __('', 'kazaz'),
                        )
                    )
                ),

                array(
                    'type' => 'section',
                    'title' => __('Footer Message', 'kazaz'),
                    'name' => 'footer_extra',
                    'description' => __('Enter a message you would like to have appear in the footer of your site', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'footer_message',
                            'label' => __('Footer Message', 'kazaz'),
                            'description' => __('This message will apepar in the footer of your site.', 'kazaz'),
                        )
                    )
                ),

                /* error page image starts */
                array(
                    'type' => 'section',
                    'title' => __('404 Error Image', 'kazaz'),
                    'name' => '404_error_image',
                    'description' => __('Upload photo that will be shown whenever page not found.', 'kazaz'),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => '404_image',
                            'label' => __('Upload 404 Error page image', 'kazaz'),
                            'description' => __('That image will show up on top of 404 error page content.', 'kazaz'),
                        ),
                    ),
                ),
                /* copyright info ends */
            ),
        ),
        /* common options end */
        /* Code starts */
        array(
            'title' => __('Code', 'kazaz'),
            'name' => 'javascript_codes',
            'icon' => 'font-awesome:fa fa-code',
            'controls' => array(
                // google analytics
                array(
                    'type' => 'section',
                    'title' => __('Google Analytics', 'kazaz'),
                    'name' => 'google_analytics',
                    'fields' => array(
                        array(
                            'type' => 'toggle',
                            'name' => 'use_ga',
                            'label' => __('Use Google Analytics?', 'kazaz'),
                        ),
                        array(
                            'type' => 'textarea',
                            'name' => 'ga_code',
                            'label' => __('Paste Google Analytics code here', 'kazaz'),
                            'dependency' => array(
                                'field' => 'use_ga',
                                'function' => 'vp_dep_boolean',
                            ),
                        ),
                    ),
                ),				
            ),
        ),
        /* Code ends */
    )
);

/**
 *EOF
 */