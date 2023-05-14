<?php
/**
 * Register a custom post type called "job".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_jobs_cpt() {
	$labels = array(
		'name'                  => _x( 'Jobs', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Job', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Jobs', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Job', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Job', 'softuni' ),
		'new_item'              => __( 'New Job', 'softuni' ),
		'edit_item'             => __( 'Edit Job', 'softuni' ),
		'view_item'             => __( 'View Job', 'softuni' ),
		'all_items'             => __( 'All Jobs', 'softuni' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'job' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'job', $args );

    flush_rewrite_rules();
}
add_action( 'init', 'softuni_jobs_cpt' );
