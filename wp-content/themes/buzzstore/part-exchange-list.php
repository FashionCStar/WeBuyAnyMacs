<?php
/**
 * Created by PhpStorm.
 * User: fashi
 * Date: 11/26/2018
 * Time: 11:41 AM
 */

function create_posttype()
{
    register_post_type('part_exchange',
        array(
            'labels' => array(
                'name' => __('Part Exchange'),
                'singular_name' => __('Part Exchange')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'part_exchange'),
            'supports' => array('title', 'custom-fields')
        )
    );
}

add_action('init', 'create_posttype');

add_filter('manage_part_exchange_posts_columns', 'set_custom_edit_part_exchange_columns');

add_action('manage_part_exchange_posts_custom_column', 'custom_part_exchange_column', 10, 2);

function set_custom_edit_part_exchange_columns($columns)
{
    $columns['part_name'] = __('Full Name', 'buzzstore');
    $columns['part_tel'] = __('Phone', 'buzzstore');
    $columns['part_email'] = __('Email', 'buzzstore');
    $columns['product_id'] = __('Product', 'buzzstore');
    return $columns;
}

function custom_part_exchange_column($column, $post_id)
{
    switch ($column) {
        case 'part_name' :
            echo get_post_meta($post_id, 'part_name', true);
            break;

        case 'part_tel' :
            echo get_post_meta($post_id, 'part_tel', true);
            break;
        case 'part_email' :
            echo get_post_meta($post_id, 'part_email', true);
            break;
        case 'product_id' :
            echo wc_get_product(get_post_meta($post_id, 'product_id', true))->get_title();
            break;
    }
}

function generate_part_exchange_meta_keys($post_type){
    global $wpdb;
    $query = "
        SELECT DISTINCT($wpdb->postmeta.meta_key) 
        FROM $wpdb->posts 
        LEFT JOIN $wpdb->postmeta 
        ON $wpdb->posts.ID = $wpdb->postmeta.post_id 
        WHERE $wpdb->posts.post_type = '%s' 
        AND $wpdb->postmeta.meta_key != '' 
        AND $wpdb->postmeta.meta_key NOT RegExp '(^[_0-9].+$)' 
        AND $wpdb->postmeta.meta_key NOT RegExp '(^[0-9]+$)'
    ";
    $meta_keys = $wpdb->get_col($wpdb->prepare($query, $post_type));
    set_transient('part_exchange_meta_keys', $meta_keys, 60*60*24); # create 1 Day Expiration
    return $meta_keys;
}


function custom_meta_box_markup()
{
    global $post;
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");
    $cat_id = get_post_meta($post->ID, 'cat_id', true);
    $product_id = get_post_meta($post->ID, 'product_id', true);
    $condition = get_post_meta($post->ID, 'condition', true);
    $txt_wyw = get_post_meta($post->ID, 'txt_wyw', true);
    $part_name = get_post_meta($post->ID, 'part_name', true);
    $part_address = get_post_meta($post->ID, 'part_address', true);
    $part_email = get_post_meta($post->ID, 'part_email', true);
    $part_tel = get_post_meta($post->ID, 'part_tel', true);
    $part_info = get_post_meta($post->ID, 'part_info', true);

    ?>
    <style>
        .hide_table{
            display: none;
        }
    </style>
    <div id="postcustomstuff">
        <table id="list-table">
            <thead>
            <tr>
                <th class="left">Name</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Category</label>
                    </td>
                    <td>
                        <label><?php echo get_the_category_by_ID( $cat_id ) ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Product</label>
                    </td>
                    <td>
                        <label> <?php echo wc_get_product($product_id)->get_title() ?> </label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Condition</label>
                    </td>
                    <td>
                        <label><?php echo $condition ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Tell Us What You Want</label>
                    </td>
                    <td>
                        <label><?php echo $txt_wyw  ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Name</label>
                    </td>
                    <td>
                        <label><?php echo $part_name ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Address</label>
                    </td>
                    <td>
                        <label><?php echo $part_address  ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Email</label>
                    </td>
                    <td>
                        <label><?php echo  $part_email  ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>Telephone</label>
                    </td>
                    <td>
                        <label><?php echo  $part_tel  ?></label>
                    </td>
                </tr>
                <tr style="text-align:center; font-weight:bold;">
                    <td class="center">
                        <label>More information</label>
                    </td>
                    <td>
                        <label><?php echo  $part_info  ?></label>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $("#postcustom").css({display: "none"});
        }
    </script>
    <?php
}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Part Exchange", "custom_meta_box_markup",
        "part_exchange", "normal", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

?>