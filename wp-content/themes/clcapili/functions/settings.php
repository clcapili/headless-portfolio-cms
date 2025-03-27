<?php 

function theme_setup() {
    add_post_type_support('page', 'excerpt');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_theme_support('disable-custom-colors');
    add_theme_support(
        'editor-color-palette',
        [
            [
                'name'  => esc_html__('White', 'clcapili'),
                'slug'  => 'white',
                'color' => '#FFFFFF',
            ],
            [
                'name'  => esc_html__('Gray 100', 'clcapili'),
                'slug'  => 'gray-100',
                'color' => '#F7F7F7',
            ],
            [
                'name'  => esc_html__('Gray 800', 'clcapili'),
                'slug'  => 'gray-800',
                'color' => '#3B3F4B',
            ],
            [
                'name'  => esc_html__('Gray 900', 'clcapili'),
                'slug'  => 'gray-900',
                'color' => '#212529',
            ],
            [
                'name'  => esc_html__('Black', 'clcapili'),
                'slug'  => 'black',
                'color' => '#000000',
            ],
            [
                'name'  => esc_html__('Blue', 'clcapili'),
                'slug'  => 'blue',
                'color' => '#0377B3',
            ],
            [
                'name'  => esc_html__('Red', 'clcapili'),
                'slug'  => 'red',
                'color' => '#F00',
            ],
            [
                'name'  => esc_html__('Orange', 'clcapili'),
                'slug'  => 'orange',
                'color' => '#EF6D22',
            ],
            [
                'name'  => esc_html__('Yellow', 'clcapili'),
                'slug'  => 'yellow',
                'color' => '#CDDC39',
            ],
            [
                'name'  => esc_html__('Green', 'clcapili'),
                'slug'  => 'green',
                'color' => '#198754',
            ],
            [
                'name'  => esc_html__('Shade Orange', 'clcapili'),
                'slug'  => 'shade-orange',
                'color' => '#BF571B',
            ],
            [
                'name'  => esc_html__('Tint Orange', 'clcapili'),
                'slug'  => 'tint-orange',
                'color' => '#FDF0E9',
            ],
            [
                'name'  => esc_html__('Tint Blue', 'clcapili'),
                'slug'  => 'tint-blue',
                'color' => '#E1EFF6',
            ],
            [
                'name'  => esc_html__('Tint Green', 'clcapili'),
                'slug'  => 'tint-green',
                'color' => '#F4F7D3',
            ]
        ]
    );
    add_theme_support('editor-font-sizes', array(
        array(
            'name' => esc_attr__('Small', 'clcapili'),
            'size' => 14,
            'slug' => 'small'
        ),
        array(
            'name' => esc_attr__('Medium', 'clcapili'),
            'size' => 16,
            'slug' => 'regular'
        ),
        array(
            'name' => esc_attr__('Large', 'clcapili'),
            'size' => 20,
            'slug' => 'medium'
        )
    ));
}
add_action('after_setup_theme', 'theme_setup');

function custom_menu() {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'custom_menu');

function add_upload_mimes($types) { 
	$types['json'] = 'text/plain';
    $types['svg'] = 'image/svg+xml';
    
	return $types;
}
add_filter('upload_mimes', 'add_upload_mimes');