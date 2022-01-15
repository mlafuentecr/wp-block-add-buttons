<?php 


// Enqueue JS/CSS for the buttons block (front-end)
function add_block_btns() {
  $blockPath = '/src/js/block-text-highlight-button.js';
  $blockCssPath = '/src/css/block-text-highlight-button.css';
  wp_enqueue_script('block-buttons', get_template_directory_uri() . $blockPath, ['wp-blocks'], '1.0' , true);
  //wp_enqueue_style('mdlui-buttons',  get_template_directory_uri() . $blockCssPath, [], '1.0');
}

add_action('enqueue_block_assets', 'add_block_btns');

// Enqueue block styles for editor (back-end)
function add_css_editor() {
  $blockCssPath = '/src/css/block-text-highlight-button.css';
  wp_enqueue_style('block-buttons', get_template_directory_uri() . $blockPath, __FILE__);
}

add_action('enqueue_block_editor_assets', 'add_css_editor');
