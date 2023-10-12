<?php
/**
 * @package  XProCodeBoil
 */
namespace Inc\Base;


/**
 *
 */
class CustomPostTypes
{

    public function register()
    {
        
        add_action('init', array($this, 'register_skills_post_type'));
        add_action('init', array($this, 'register_projects_post_type'));

    }

    public function register_skills_post_type() {
      $labels = array(
          'name' => __('Skills'),
          'singular_name' => __('Skill'),
          'add_new' => __('Add New Skill'),
          'add_new_item' => __('Add New Skill'),
          'edit_item' => __('Edit Skill'),
          'new_item' => __('New Skill'),
          'view_item' => __('View Skill'),
          'search_items' => __('Search Skills'),
          'not_found' => __('No skills found'),
          'not_found_in_trash' => __('No skills found in Trash'),
          'parent_item_colon' => '',
          'menu_name' => __('Skills')
      );
  
      $args = array(
          'labels' => $labels,
          'public' => true,
          'has_archive' => true,
          'publicly_queryable' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'my-skills'),
          'capability_type' => 'post',
          'hierarchical' => false,
          'supports' => array('title'),
      );
  
      register_post_type('skills', $args);
  }

  function register_projects_post_type() {
    $labels = array(
        'name' => __('Projects'),
        'singular_name' => __('Project'),
        'add_new' => __('Add New Project'),
        'add_new_item' => __('Add New Project'),
        'edit_item' => __('Edit Project'),
        'new_item' => __('New Project'),
        'view_item' => __('View Project'),
        'search_items' => __('Search Projects'),
        'not_found' => __('No projects found'),
        'not_found_in_trash' => __('No projects found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => __('Projects')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'projects'),  // Change the slug here
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'),
    );

    register_post_type('projects', $args);

  }

}
