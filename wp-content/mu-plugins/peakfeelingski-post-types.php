<?php
/**
* Custom Posts (Customers and Products)
*/
function peakfeelingski_post_types()
{
    // customer post type
    register_post_type('customer', array(
        'hierarchical' => true,
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
        'hierarchical' => true,
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
        )
    ));

//    register_post_type('resort', array(
//        'hierarchical' => true,
//        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
//        'rewrite' => array('slug' => 'resorts'),
//        'has_archive' => true,
//        'public' => true,
//        'menu_icon' => 'dashicons-airplane',
//        'labels' => array(
//            'name' => 'Resorts',
//            'add_new_item' => 'Add New Resort',
//            'edit_item' => 'Edit Resort',
//            'all_items' => 'All Resorts',
//            'singular_name' => 'Resort',
//
//
//        )
//    ));



}

add_action('init', 'peakfeelingski_post_types');

function product_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category', array('product'), $args);

}
add_action('init', 'product_taxonomy');

add_action('init', 'peakfeelingski_post_types');

function customer_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('category', array('customer'), $args);

}
add_action('init', 'customer_taxonomy');