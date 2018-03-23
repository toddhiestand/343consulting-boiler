<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_books',
		'title' => 'Books',
		'fields' => array (
			array (
				'key' => 'field_56c65cc91058b',
				'label' => 'Basic Info',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_56c641fd7be00',
				'label' => 'Book Theme Color',
				'name' => 'book_theme_color',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_56c648615a6da',
				'label' => 'Book Template',
				'name' => 'book_template',
				'type' => 'select',
				'choices' => array (
					'book1' => 'New Hotness',
					'book2' => 'Old School',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_56c51acee97e6',
				'label' => 'Book Cover',
				'name' => 'book_cover',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_56c64a7b74612',
				'label' => 'Purchase Links',
				'name' => 'purchase_links',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_56c64a8c74613',
						'label' => 'Platform',
						'name' => 'platform',
						'type' => 'select',
						'column_width' => '',
						'choices' => array (
							'amazon' => 'Amazon',
							'bn' => 'Barnes & Noble',
							'tn' => 'Thomas Nelson',
							'bam' => 'BAM',
							'cbd' => 'CBD',
							'fcs' => 'Family Christian Stores',
							'mardel' => 'Mardel',
							'parable' => 'Parable',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_56c64b56390e9',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => 8,
				'layout' => 'table',
				'button_label' => 'Add Store',
			),
			array (
				'key' => 'field_56c51b445c593',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56c51ae76e645',
				'label' => 'Endorsements',
				'name' => 'endorsements',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_56c51b025c592',
						'label' => 'Endorsement',
						'name' => 'endorsement',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Endorsement',
			),
			array (
				'key' => 'field_56c65c4c2640a',
				'label' => 'Single View',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_56c65c542640b',
				'label' => 'Intro Text',
				'name' => 'intro_text',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_56c65c622640c',
				'label' => 'Chapter Resources',
				'name' => 'chapter_resources',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56c648615a6da',
							'operator' => '==',
							'value' => 'book1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_56c65c6c2640d',
						'label' => 'Resource Name',
						'name' => 'resource_name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_56c65c7d2640e',
						'label' => 'Resource Content',
						'name' => 'resource_content',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Resource',
			),
			array (
				'key' => 'field_56cb4ebd6053c',
				'label' => 'Book Trailer',
				'name' => 'book_trailer',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_56cbf26c3e698',
				'label' => 'Video Slider',
				'name' => 'video_slider',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_56c648615a6da',
							'operator' => '==',
							'value' => 'book2',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_56cbf2783e699',
						'label' => 'Video',
						'name' => 'video',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Video',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'books',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_guest-blogger',
		'title' => 'Guest Blogger',
		'fields' => array (
			array (
				'key' => 'field_55ca242119826',
				'label' => 'Add Guest Blogger Info?',
				'name' => 'add_guest_blogger_info',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_55ca23ef19823',
				'label' => 'Guest Blogger Name',
				'name' => 'guest_blogger_name',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55ca242119826',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55ca240319824',
				'label' => 'Guest Blogger Bio',
				'name' => 'guest_blogger_bio',
				'type' => 'wysiwyg',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55ca242119826',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55ca240e19825',
				'label' => 'Guest Blogger Image',
				'name' => 'guest_blogger_image',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_55ca242119826',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'image-square',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_posts',
		'title' => 'Posts',
		'fields' => array (
			array (
				'key' => 'field_56d4e4829731a',
				'label' => 'Feature Title',
				'name' => 'feature_title',
				'type' => 'select',
				'choices' => array (
					'New' => 'New',
					'Popular' => 'Popular',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
