<?php
/* Sidebar file, returned when function get_sidebar() is called. */
?>

<?php
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'sidebar',
        'id'   => '',
        'description'   => 'Generic sidebar area - used wherever get_sidebar() is called.',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ));
}
?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
<?php endif; ?>