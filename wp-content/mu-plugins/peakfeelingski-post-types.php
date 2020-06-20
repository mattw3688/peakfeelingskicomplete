<?php
/**
* Custom Posts (Customers and Products)
*/
function peakfeelingski_post_types()
{
    register_post_type('customer', array(
        'rewrite' => array('slug' => 'customers'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-universal-access',
        'labels' => array(
            'name' => 'Customers',
            'add_new_item' => 'Add New Customer',
            'edit_item' => 'Edit Customer',
            'all_items' => 'All Customers',
            'singular_name' => 'Customer'

        )
    ));
    register_post_type('product', array(
        'rewrite' => array('slug' => 'products'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-cart',
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product'

        )
    ));



}

add_action('init', 'peakfeelingski_post_types');