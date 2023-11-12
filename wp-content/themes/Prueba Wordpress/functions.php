<?php

function prueba_wordpress_scripts(){
  //Archivos CSS
  wp_register_style('style_theme', get_stylesheet_directory_uri().'/style.css', array(), '1.0', false);
  wp_register_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), '5.3.0', false);
  wp_register_style('tables_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), '5.3.0', false);
  wp_register_style('data_buttons', 'https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css', array(), '2.3.3', false);
  wp_register_style('data_tables', 'https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css', array(), '1.13.1', false);

  //Archivos jS
  wp_register_script('script_custom', get_stylesheet_directory_uri().'/sources/js/custom-script.js', array('jquery'), '1.0', true);
  wp_register_script('script_tables_jszip', 'https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js', array('jquery'), '2.5.0', true);
  wp_register_script('script_tables_pdfmake', 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js', array('jquery'), '0.1.36', true);
  wp_register_script('script_tables_fonts', 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js', array('jquery'), '0.1.36', true);
  wp_register_script('script_tables_jquery', 'https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js', array('jquery'), '1.13.1', true);
  wp_register_script('script_tables_bootstrap', 'https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js', array('jquery'), '1.13.1', true);
  wp_register_script('script_tables_buttons', 'https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js', array('jquery'), '2.3.3', true);
  wp_register_script('script_tables_buttons_bootstrap', 'https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js', array('jquery'), '2.3.3', true);
  wp_register_script('script_tables_buttons_html', 'https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js', array('jquery'), '2.3.3', true);
  wp_register_script('script_tables_buttons_print', 'https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js', array('jquery'), '2.3.3', true);
  wp_register_script('script_tables_bootstrap_bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);

  wp_enqueue_style('style_theme');
  wp_enqueue_style('font_awesome');
  wp_enqueue_style('tables_bootstrap');
  wp_enqueue_style('data_buttons');
  wp_enqueue_style('data_tables');

  wp_enqueue_script('script_custom');
  wp_enqueue_script('script_tables_jszip');
  wp_enqueue_script('script_tables_pdfmake');
  wp_enqueue_script('script_tables_fonts');
  wp_enqueue_script('script_tables_jquery');
  wp_enqueue_script('script_tables_bootstrap');
  wp_enqueue_script('script_tables_buttons');
  wp_enqueue_script('script_tables_buttons_bootstrap');
  wp_enqueue_script('script_tables_buttons_html');
  wp_enqueue_script('script_tables_buttons_print');
  wp_enqueue_script('script_tables_bootstrap_bundle');
}
add_action('wp_enqueue_scripts','prueba_wordpress_scripts');

?>