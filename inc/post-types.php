<?php

// Metabox and Custom Post Type/Taxonomies Frameworks
require_once locate_template('/inc/custom-content-and-taxonomies/sld-custom-content-and-taxonomies.php');


//************ Custom Post Types ************

// Default Values
//  'show_ui' => true,
//  'public' => true,
//  'supports' => array('title', 'editor', 'thumbnail'),
//  'publicly_queryable' => true,
//  'query_var' => true,
//  'exclude_from_search' => false,
//  'capability_type' => 'post',
//  'has_archive' => true,
//  'rewrite' => array('slug' => $post_type_slug, 'with_front' => false),


//Example
//sld_register_post_type('cliente',
//  array(
//    'public' => true,
//    'show_ui' => true,
//    'supports' => array('title', 'editor', 'thumbnail'),
//    'exclude_from_search' => false,
//    'has_archive' => 'obras',
//    'rewrite' => array(
//      'slug' => 'obras',
//      'with_front' => false
//    ),
//    'show_in_menu' => true
//  )
//,'obras');


//************* METABOXES ********************

$prefix = '_cmb_'; // Prefix for all fields

//Cliente
add_filter( 'cmb_meta_boxes', 'qmd_metaboxes' );
function qmd_metaboxes( $meta_boxes ) {
  global $prefix;

  // EXAMPLE
  //$meta_boxes[] = array(
  //  'id' => 'cliente_metabox',
  //  'title' => 'Atributos',
  //  'pages' => array('cliente'), // post type
  //  'context' => 'normal',
  //  'priority' => 'high',
  //  'show_names' => true, // Show field names on the left
  //  'fields' => array(
  //    array(
  //      'name' => 'Nome',
  //      'desc' => 'Nome do cliente',
  //      'id' => $prefix . 'nome',
  //      'type' => 'text_medium'
  //    ),
  //  ),
  //);

  return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

  if ( ! class_exists( 'cmb_Meta_Box' ) )
    require_once locate_template('/inc/metabox/init.php');

}

