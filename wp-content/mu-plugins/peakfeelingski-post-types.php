<?php
/**
* Custom Posts (Customers and Products)
*/
function peakfeelingski_post_types()
{
    // customer post type
    register_post_type('customer', array(
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'customers'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-universal-access',
        'labels' => array(
            'name' => 'Customers',
            'add_new_item' => 'Add New Customer',
            'edit_item' => 'Edit Customer',
            'all_items' => 'All Customers',
            'singular_name' => 'Customer',


        )
    ));
        // product post type
    register_post_type('product', array(
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'products'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-cart',
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product',
                'taxonomies' => array('lift pass', 'accommodation', 'ski hire', 'ski school', 'childcare','extras'),
        )
    ));



}

add_action('init', 'peakfeelingski_post_types');

