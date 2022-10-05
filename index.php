<?php 
/**
 * Plugin Name:       ObjectPassing 
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ammar
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 add_action('woocommerce_after_add_to_cart_form' , 'print_categories') ;
 function print_categories(){
     global $product;
     
    
 
    $terms = get_the_terms( $post->ID, 'product_cat' );

        $nterms = get_the_terms( $post->ID, 'product_tag'  );

        foreach (array_slice($terms,1,1)  as $term  ) {                    

            $product_cat_id = $term->term_id;              

            $product_cat_name = $term->name;    

        }

      $id= $product-> get_ID();
    $title = $product->post->post_title;
    $pro_detail=[$id,$title,$product_cat_name] ; 
    foreach($pro_detail as $detail) 
    {
        echo $detail . " "; 
    }
 }  