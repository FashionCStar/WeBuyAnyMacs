<?php
/**
 * Created by PhpStorm.
 * User: fashi
 * Date: 11/26/2018
 * Time: 11:41 AM
 */

function create_posttype() {
    register_post_type( 'part_exchange',
        array(
            'labels' => array(
                'name' => __( 'Part Exchange' ),
                'singular_name' => __( 'Part Exchange' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'part_exchange'),
            'supports' => array( 'title', 'custom-fields' )
        )
    );
}

add_action( 'init', 'create_posttype' );

add_filter('manage_part_exchange_posts_columns', 'set_custom_edit_part_exchange_columns' );

add_action( 'manage_part_exchange_posts_custom_column' , 'custom_part_exchange_column', 10, 2 );

function set_custom_edit_part_exchange_columns($columns) {
    $columns['part_name'] = __( 'Full Name', 'buzzstore' );
    $columns['part_tel'] = __( 'Phone', 'buzzstore' );
    $columns['part_email'] = __( 'Email', 'buzzstore' );
    $columns['product_id'] = __( 'Product', 'buzzstore' );
    return $columns;
}

function custom_part_exchange_column( $column, $post_id ) {
    switch ( $column ) {
        case 'part_name' :
            echo get_post_meta( $post_id , 'part_name' , true);
            break;

        case 'part_tel' :
            echo get_post_meta( $post_id , 'part_tel' , true );
            break;
        case 'part_email' :
            echo get_post_meta( $post_id , 'part_email' , true );
            break;
        case 'product_id' :
            echo wc_get_product( get_post_meta( $post_id , 'product_id' , true ))->get_title();
            break;

    }
}


?>