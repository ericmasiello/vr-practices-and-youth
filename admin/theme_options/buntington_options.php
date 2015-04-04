<?php
return array(
	'title' => __( 'VR Practices and Youth Options', 'kazaz' ),
	'logo' => get_template_directory_uri() . '/public/img/options_panel_icon.png',
	'menus' => array(
		/* basic options end */
		/* Social media starts */
		array(
			'title' => __('Social Media Sites', 'kazaz'),
			'name' => 'social_media_sites',
			'icon' => 'font-awesome:fa fa-male',
			'controls' => array(
				array(
					'type' => 'notebox',
					'name' => 'nb_social_media_sites',
					'label' => __('How should this work?', 'kazaz'),
					'description' => __('Enter full path to your social media profiles and leave unused empty.', 'kazaz'),
					'status' => 'info',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_foursquare',
					'label' => '<i class="fa fa-foursquare fa-2x"></i> &nbsp; Foursquare',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_dribbble',
					'label' => '<i class="fa fa-dribbble fa-2x"></i> &nbsp; Dribbble',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_facebook',
					'label' => '<i class="fa fa-facebook fa-2x"></i> &nbsp; Facebook',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_flickr',
					'label' => '<i class="fa fa-flickr fa-2x"></i> &nbsp; Flickr',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_github',
					'label' => '<i class="fa fa-github fa-2x"></i> &nbsp; Github',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_google',
					'label' => '<i class="fa fa-google-plus fa-2x"></i> &nbsp; Google+',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_instagram',
					'label' => '<i class="fa fa-instagram fa-2x"></i> &nbsp; Instagram',
					'default' => 'http://instagram.com',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_linkedin',
					'label' => '<i class="fa fa-linkedin fa-2x"></i> &nbsp; LinkedIn',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_pinterest',
					'label' => '<i class="fa fa-pinterest fa-2x"></i> &nbsp; Pinterest',
					'default' => 'http://pinterest.com',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_tumblr',
					'label' => '<i class="fa fa-tumblr fa-2x"></i> &nbsp; Tumblr',
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_twitter',
					'label' => '<i class="fa fa-twitter fa-2x"></i> &nbsp; Twitter',
					'default' => 'http://twitter.com',
				),
				array(
					'type' => 'textbox',
					'name' => 'sm_youtube',
					'label' => '<i class="fa fa-youtube fa-2x"></i> &nbsp; YouTube',
					'default' => '',
				),
			),
		),
		/* Social media ends */
		/* contact options start */
		array(
			'title' => __('Contact', 'kazaz'),
			'name' => 'contact_options',
			'icon' => 'font-awesome:fa fa-envelope',
			'controls' => array(
				/* google maps starts */
				/*array(
					'type' => 'section',
					'title' => __('Google Maps', 'kazaz'),
					'name' => 'google_maps_settings',
					'description' => __('Make your Contact page show up Google Map.', 'kazaz'),
					'fields' => array(
						array(
							'type' => 'toggle',
							'name' => 'show_google_map',
							'label' => __('Show GoogleMap on Contact page?', 'kazaz'),
							'default' => 1,
						),
						array(
							'type' => 'textbox',
							'name' => 'gmap_title',
							'label' => __('Google Map title', 'kazaz'),
							'description' => __('Enter the title for your map', 'kazaz'),
							'default' => 'Office Address',
							'dependency' => array(
								'field' => 'show_google_map',
								'function' => 'vp_dep_boolean',
							),
						),
						array(
							'type' => 'textbox',
							'name' => 'gmap_lat',
							'label' => __('Location Latitude', 'kazaz'),
							'description' => __('Enter the map location latitude', 'kazaz'),
							'default' => 37.782231,
							'dependency' => array(
								'field' => 'show_google_map',
								'function' => 'vp_dep_boolean',
							),
						),
						array(
							'type' => 'textbox',
							'name' => 'gmap_lon',
							'label' => __('Location Longitude', 'kazaz'),
							'description' => __('Enter the map location longitude', 'kazaz'),
							'default' => -122.400679,
							'dependency' => array(
								'field' => 'show_google_map',
								'function' => 'vp_dep_boolean',
							),
						),
						array(
							'type'  => 'slider',
							'name'  => 'gmap_zoom',
							'label' => __('Map Zoom level', 'kazaz'),
							'min'   => 3,
							'max'   => 19,
							'default' => 15,
							'dependency' => array(
								'field' => 'show_google_map',
								'function' => 'vp_dep_boolean',
							),
						),
						array(
							'type' => 'upload',
							'name' => 'gmap_marker',
							'label' => __('Upload custom Marker', 'kazaz'),
							'description' => __('Should be transparent PNG up to 32x32px', 'kazaz'),
							'dependency' => array(
								'field' => 'show_google_map',
								'function' => 'vp_dep_boolean',
							),
						),
					),
				),*/
				/* google maps ends */
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
						/*
						array(
							'type' => 'textbox',
							'name' => 'contact_address',
							'label' => __('Company or private address', 'kazaz'),
							'default' => '795 Folsom Ave, Suite 600',
						),
						array(
							'type' => 'textbox',
							'name' => 'contact_city',
							'label' => __('City', 'kazaz'),
							'default' => 'San Francisco',
						),
						array(
							'type' => 'textbox',
							'name' => 'contact_state',
							'label' => __('State - if any', 'kazaz'),
							'default' => 'CA',
						),
						array(
							'type' => 'textbox',
							'name' => 'contact_zip',
							'label' => __('Location ZIP code', 'kazaz'),
							'default' => '94107',
						),
						array(
							'type' => 'textbox',
							'name' => 'contact_country',
							'label' => __('Residence Country', 'kazaz'),
							'default' => 'USA',
						),*/
						array(
							'type' => 'textbox',
							'name' => 'contact_phone_1',
							'label' => __('Contact phone', 'kazaz'),
							'default' => '(123) 456-7890',
						),/*
						array(
							'type' => 'textbox',
							'name' => 'contact_phone_2',
							'label' => __('Contact phone 2 (or Fax)', 'kazaz'),
							'default' => '(123) 456-7891',
						),
						array(
							'type' => 'textbox',
							'name' => 'contact_email',
							'label' => __('Email address', 'kazaz'),
							'description' => __('BEWARE: This email address will also be used to receive Contact-form inquiries!', 'kazaz'),
							'default' => 'info@buntington.com',
						),*/
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
				/* post summary end */
				/* sidebar position start */
				/*array(
					'type' => 'section',
					'title' => __('Content Sidebar positioning', 'kazaz'),
					'name' => 'content_sidebar_positioning',
					'description' => __('Where do you like to have Sidebar floated on pages that have Sidebar?', 'kazaz'),
					'fields' => array(
						array(
							'type' => 'select',
							'name' => 'sidebar_position',
							'label' => __('Sidebar position', 'kazaz'),
							'items' => array(
								array(
									'value' => 'right',
									'label' => __('Sidebar on Right', 'kazaz'),
								),
								array(
									'value' => 'left',
									'label' => __('Sidebar on Left', 'kazaz'),
								),
							),
							'default' => 'right',
						),
					),
				),*/
				/* sidebar position end */
				/* error page image starts */
				array(
					'type' => 'section',
					'title' => __('Call to Action', 'kazaz'),
					'name' => 'call_to_action',
					'description' => __('Upload photo that will be shown whenever page not found.', 'kazaz'),
					'fields' => array(
						array(
							'type' => 'upload',
							'name' => 'call_to_action_image',
							'label' => __('Upload Call to Action image', 'kazaz'),
							'description' => __('This is the image that will appear beside your featured image in the page template "Call to Action".', 'kazaz'),
						),
						array(
							'type' => 'textbox',
							'name' => 'call_to_action_text',
							'label' => __('Alt text used with image', 'kazaz'),
							'default' => __('Join Us', 'kazaz'),
						),
						array(
							'type' => 'textbox',
							'name' => 'call_to_action_url',
							'label' => __('Call to action URL', 'kazaz'),
							'default' => __('http://', 'kazaz'),
						)
					),
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
				/* error page image ends */
				/* copyright info starts */
				array(
					'type' => 'section',
					'title' => __('Copyright text', 'kazaz'),
					'name' => 'copyright_text',
					'description' => __('Enter copyright information here!', 'kazaz'),
					'fields' => array(
						array(
							'type' => 'textarea',
							'name' => 'theme_copyright',
							'label' => __('Footer message', 'kazaz'),
							'description' => __('Your message will show up in theme\'s post-footer.', 'kazaz'),
							'default' => '',
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
				// addthis
				/*array(
					'type' => 'section',
					'title' => __('Posts sharing with AddThis', 'kazaz'),
					'name' => 'share_with_addthis',
					'fields' => array(
						array(
							'type' => 'notebox',
							'name' => 'nb_addthis',
							'label' => __('What is AddThis?', 'kazaz'),
							'description' => __('This is the largest Sharing and Social Data platform. See more details here: http://www.addthis.com/ . Sign In or create an account first then copy-paste generated code ( https://www.addthis.com/get/sharing ).', 'kazaz'),
							'status' => 'info',
						),
						array(
							'type' => 'toggle',
							'name' => 'use_addthis',
							'label' => __('Use AddThis service?', 'kazaz'),
						),
						array(
							'type' => 'textarea',
							'name' => 'addthis_code',
							'label' => __('Paste AddThis code here', 'kazaz'),
							'dependency' => array(
								'field' => 'use_addthis',
								'function' => 'vp_dep_boolean',
							),
						),
					),
				),*/
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
		/* API Keys start */
		array(
			'title' => __('API Keys', 'kazaz'),
			'name' => 'api_keys',
			'icon' => 'font-awesome:fa fa-key',
			'controls' => array(
				array(
					'type' => 'notebox',
					'name' => 'nb_keys',
					'label' => __('How to obtain API Keys?', 'kazaz'),
					'description' => __('Flickr API Key can be obtained here http://www.flickr.com/services/api/misc.api_keys.html and for the Twitter API Key you should register your application here https://dev.twitter.com/apps/new', 'kazaz'),
					'status' => 'info',
				),
				/* Flickr key starts */
				array(
					'type' => 'section',
					'title' => __('Flickr API key', 'kazaz'),
					'name' => 'flickr_auth',
					'fields' => array(
						array(
							'type' => 'textbox',
							'name' => 'flickr_key',
							'label' => __('Enter your Flickr API key', 'kazaz'),
							'description' => __('It will be needed for Flickr Widget!', 'kazaz'),
							'default' => '',
						),
						/*
						array(
							'type' => 'textbox',
							'name' => 'flickr_secret_code',
							'label' => __('Enter your Flickr API secret code', 'kazaz'),
							'description' => __('It will be needed for Flickr Widget!', 'kazaz'),
							'default' => '',
						),
						*/
					),
				),
				/* Flickr key ends */
				/* Twitter key starts */
				array(
					'type' => 'section',
					'title' => __('Twitter OAuth and Access Token', 'kazaz'),
					'name' => 'twitter_auth',
					'fields' => array(
						array(
							'type' => 'textbox',
							'name' => 'twitter_consumer_key',
							'label' => __( 'Enter your Twitter Consumer key', 'kazaz' ),
							'description' => __('It will be needed for OAuth settings!', 'kazaz'),
						),
						array(
							'type' => 'textbox',
							'name' => 'twitter_consumer_secret',
							'label' => __( 'Enter your Twitter Consumer secret key', 'kazaz' ),
							'description' => __('It will be needed for OAuth settings as well!', 'kazaz'),
						),
						array(
							'type' => 'textbox',
							'name' => 'twitter_access_token',
							'label' => __( 'Enter your Twitter Access Token', 'kazaz' ),
							'description' => __('It will be needed to sign requests with your own Twitter account!', 'kazaz'),
						),
						array(
							'type' => 'textbox',
							'name' => 'twitter_access_token_secret',
							'label' => __( 'Enter your Twitter Access Token secret', 'kazaz' ),
							'description' => __('It will be needed to sign requests with your own Twitter account as well!', 'kazaz'),
						),
					),
				),
				/* Twitter key ends */
			),
		),
		/* API Keys end */
	)
);

/**
 *EOF
 */