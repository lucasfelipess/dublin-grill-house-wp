<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
	
	}

	public static function food_restaurant_elementor_setup_widgets(){

	set_theme_mod( 'food_restaurant_elementor_header_advertisement_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' );

	set_theme_mod('food_restaurant_elementor_social_links_settings', array(
		array(
			"link_text" => "fab fa-instagram",
			"link_url" => "www.instagram.com"
		),
		array(
			"link_text" => "fab fa-twitter",
			"link_url" => "www.twitter.com"
		),
		array(
			"link_text" => "fab fa-youtube",
			"link_url" => "www.youtube.com"
		),
		array(
			"link_text" => "fab fa-linkedin-in",
			"link_url" => "www.linkedin.com"
		)
	));

	function insert_custom_contact_and_subscribe_forms()
			{
				$existing_form = get_page_by_title('Table Reservation', OBJECT, 'wpcf7_contact_form');
				if ($existing_form) {
					return;
				}

				// Form title
				$contact_form_title = 'Table Reservation';

				// Table Reservation 7 form content
              $contact_form_content = <<<'EOT'
              <div class="date"><label> Date [text* text-795 class:walcf7-datepicker placeholder "13-08-2024"] </label></div>
              <div class="time"><label> Time [text* text-818 class:walcf7-timepicker placeholder "08.00 PM"]</label></div>
              <div class="select"><label>Person [select* OpenThisSelectMenu class:form-select "01" "02" "03" "04" "05" "06" "07" "08" "09" "10"]</label></div>   
              <div class="phone-number"><label>Phone No [text PhoneNumber placeholder "+1234567890"]</label></div>   
              <div class="email"><label>Mail [email* email-680 class:form-control placeholder "xyz@example.com"]</label></div>
              <div class="button-form"><button type="submit" class="btn btn-appointment">Book Now</button></div>
            EOT;

				// Insert the new Table Reservation post
				$contact_post_id = wp_insert_post(array(
					'post_title'  => $contact_form_title,
					'post_type'   => 'wpcf7_contact_form',
					'post_status' => 'publish',
				));

				// If post created successfully, update form and mail settings
				if ($contact_post_id && !is_wp_error($contact_post_id)) {
					// Form fields
					update_post_meta($contact_post_id, '_form', $contact_form_content);

					// Email settings (admin notification)
					update_post_meta($contact_post_id, '_mail', array(
						'subject'   => 'Table Reservation from [first-name]',
						'sender'    => '[first-name] <[email-address]>',
						'body'      => "You have received a new booking request:\n\n" .
									"Name: [first-name]\n" .
									"Email: [email-address]\n" .
									"Package: [select-package]\n" .
									"Date: [safari-date]\n" .
									"Adults: [adult-number]\n" .
									"Children: [child-number]\n\n" ,
						'recipient' => get_option('admin_email'),
						'use_html'  => true,
					));

					// Auto-reply settings (user notification)
					update_post_meta($contact_post_id, '_mail_2', array(
						'active'    => true,
						'subject'   => 'Thank you for booking with us, [first-name]!',
						'sender'    => get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
						'body'      => "Hi [first-name],\n\nThank you for booking your safari adventure with us!\n\nHere are your booking details:\n" .
									"Package: [select-package]\nDate: [safari-date]\nAdults: [adult-number]\nChildren: [child-number]\n\n" .
									"We will contact you soon with confirmation details.\n\nBest regards,\n" . get_bloginfo('name'),
						'recipient' => '[email-address]',
						'use_html'  => true,
					));
				}
			}
			insert_custom_contact_and_subscribe_forms();


	$food_restaurant_elementor_product_image_gallery = array();
	$food_restaurant_elementor_product_ids = array();

	$food_restaurant_elementor_product_category= array(
		'Product Category'       => array(
			'French Salad',
			'Chicken Korma',
			'Chines Noodles'
		),
	);

	$food_restaurant_elementor_k = 1;
	foreach ( $food_restaurant_elementor_product_category as $food_restaurant_elementor_product_cats => $food_restaurant_elementor_products_name ) { 
	// Insert porduct cats Start
	$content = 'This is sample product category';
	$food_restaurant_elementor_parent_category	=	wp_insert_term(
	$food_restaurant_elementor_product_cats, // the term
	'product_cat', // the taxonomy
		array(
		'description'=> $content,
		'slug' => str_replace( ' ', '-', $food_restaurant_elementor_product_cats)
		)
	);

// -------------- create subcategory END -----------------

	$food_restaurant_elementor_n=1;
	// create Product START
	foreach ( $food_restaurant_elementor_products_name as $key => $food_restaurant_elementor_product_title ) {
	$content = '
		<div class="main_content">
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>';

	// Create post object
	$food_restaurant_elementor_my_post = array(
		'post_title'    => wp_strip_all_tags( $food_restaurant_elementor_product_title ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'product',
		'post_category' => [$food_restaurant_elementor_parent_category['term_id']]
	);

	// Insert the post into the database

	$food_restaurant_elementor_uqpost_id = wp_insert_post($food_restaurant_elementor_my_post);
	wp_set_object_terms( $food_restaurant_elementor_uqpost_id, str_replace( ' ', '-', $food_restaurant_elementor_product_cats), 'product_cat', true );

	$food_restaurant_elementor_product_price = array('$49','$39','$59');
	$food_restaurant_elementor_product_regular_price = array('$49','$39','$59');
	
	update_post_meta( $food_restaurant_elementor_uqpost_id, '_regular_price', $food_restaurant_elementor_product_regular_price[$food_restaurant_elementor_n-1] );
	update_post_meta( $food_restaurant_elementor_uqpost_id, '_price', $food_restaurant_elementor_product_price[$food_restaurant_elementor_n-1] );
	// update_post_meta( $food_restaurant_elementor_uqpost_id, '_sale_price', $food_restaurant_elementor_product_sale_price[$food_restaurant_elementor_n-1] );
	array_push( $food_restaurant_elementor_product_ids,  $food_restaurant_elementor_uqpost_id );

	// Now replace meta w/ new updated value array
	$food_restaurant_elementor_image_url = get_template_directory_uri().'/assets/images/product/'.$food_restaurant_elementor_product_cats.'/' . str_replace(' ', '_', strtolower($food_restaurant_elementor_product_title)).'.png';
	$food_restaurant_elementor_image_name  = $food_restaurant_elementor_product_title.'.png';
	$food_restaurant_elementor_upload_dir = wp_upload_dir();
	// Set upload folder
	$food_restaurant_elementor_image_data = file_get_contents(esc_url($food_restaurant_elementor_image_url));
	// Get image data
	$unique_file_name = wp_unique_filename($food_restaurant_elementor_upload_dir['path'], $food_restaurant_elementor_image_name);
	// Generate unique name
	$food_restaurant_elementor_filename = basename($unique_file_name);
	// Create image file name
	// Check folder permission and define file location
	if (wp_mkdir_p($food_restaurant_elementor_upload_dir['path'])) {
	$food_restaurant_elementor_file = $food_restaurant_elementor_upload_dir['path'].'/'.$food_restaurant_elementor_filename;
	} else {
	$food_restaurant_elementor_file = $food_restaurant_elementor_upload_dir['basedir'].'/'.$food_restaurant_elementor_filename;
	}
	
	file_put_contents($food_restaurant_elementor_file, $food_restaurant_elementor_image_data);
	// Check image file type
	$wp_filetype = wp_check_filetype($food_restaurant_elementor_filename, null);
	// Set attachment data
	$attachment = array(
		'post_mime_type' => $wp_filetype['type'],
		'post_title'     => sanitize_file_name($food_restaurant_elementor_filename),
		'post_type'      => 'product',
		'post_status'    => 'inherit',
	);

	// Create the attachment
	$food_restaurant_elementor_attach_id = wp_insert_attachment($attachment, $food_restaurant_elementor_file, $food_restaurant_elementor_uqpost_id);

	// Define attachment metadata
	$attach_data = wp_generate_attachment_metadata($food_restaurant_elementor_attach_id, $food_restaurant_elementor_file);

	// Assign metadata to attachment
	wp_update_attachment_metadata($food_restaurant_elementor_attach_id, $attach_data);
	if ( count( $food_restaurant_elementor_product_image_gallery ) < 3 ) {
		array_push( $food_restaurant_elementor_product_image_gallery, $food_restaurant_elementor_attach_id );
	}
	// // And finally assign featured image to post
	set_post_thumbnail($food_restaurant_elementor_uqpost_id, $food_restaurant_elementor_attach_id);
	++$food_restaurant_elementor_n;
	}
	// Create product END
	++$food_restaurant_elementor_k;
	}
	// Add Gallery in first simple product and second variable product START
	$food_restaurant_elementor_product_image_gallery = implode( ',', $food_restaurant_elementor_product_image_gallery );
	foreach ( $food_restaurant_elementor_product_ids as $food_restaurant_elementor_product_id ) {
	update_post_meta( $food_restaurant_elementor_product_id, 'food_restaurant_elementor_product_image_gallery', $food_restaurant_elementor_product_image_gallery );
	}
}

}
 