<?php
add_action('wp_ajax_get_products', 'get_products');

function get_products()
{
    global $wpdb; // this is how you get access to the database

    $cat_id = intval($_POST['cat_id']);

    $args = array(
        'post_type' => 'product',
        'orderby'   => 'title',
        'post_status' => 'publish',
        'posts_per_page' => -1,

        'tax_query' => array(
            array(
                'taxonomy'  => 'product_cat',
                'field'     => 'id',
                'terms'     => $cat_id
            ),
        )
    );


    $res = new WP_Query($args);

    echo json_encode($res->posts);

    wp_die(); // this is required to terminate immediately and return a proper response
}

add_action('wp_ajax_part_exchange', 'part_exchange');

function part_exchange()
{
    global $wpdb; // this is how you get access to the database
    $current_time = date('m/d/Y h:i:s a');

    $now = new DateTime();
    $now->format('Y-m-d H:i:s');

    $data['cat_id'] = intval($_POST['cat_id']);
    $data['product_id'] = intval($_POST['product_id']);
    $data['condition'] = $_POST['condition'];
    $data['txt_wyw'] = $_POST['txt_wyw'];
    $data['part_name'] = $_POST['part_name'];
    $data['part_address'] = $_POST['part_address'];
    $data['part_email'] = $_POST['part_email'];
    $data['part_tel'] = $_POST['part_tel'];
    $data['part_info'] = $_POST['part_info'];
    $data['post_date'] = $now->format('Y-m-d H:i:s');
    $data['post_title'] = "Part Exchange".' &ndash; '.$data['post_date'];

    $my_post = array(
        'post_title'    => $data['post_title'],
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'part_exchange',
        'meta_input'   => array(
            'cat_id' => $data['cat_id'],
            'product_id' => $data['product_id'],
            'condition' => $data['condition'],
            'txt_wyw' => $data['txt_wyw'],
            'part_name' => $data['part_name'],
            'part_address' => $data['part_address'],
            'part_email' => $data['part_email'],
            'part_tel' => $data['part_tel'],
            'part_info' => $data['part_info'],
        ),
    );

// Insert the post into the database

    $last_postId = wp_insert_post( $my_post );
    add_post_meta($last_postId,'key','value');

    echo json_encode($last_postId);

    wp_die(); // this is required to terminate immediately and return a proper response
}