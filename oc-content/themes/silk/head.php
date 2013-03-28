<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title><?php echo meta_title(); ?></title>
<meta name="description" content="<?php
if(osc_search_category()!=null && is_array(osc_search_category())) {
    if(count(osc_search_category())==1) {
        $category = Category::newInstance()->findByPrimaryKey(current(osc_search_category()));
        echo $category['s_description'];
    }
}
?>" />

<script type="text/javascript">
    var fileDefaultText = '<?php echo osc_esc_js( __('No file selected', 'modern') ); ?>';
    var fileBtnText     = '<?php echo osc_esc_js( __('Choose File', 'modern') ); ?>';
</script>

<?php
osc_enqueue_style('style', osc_current_web_theme_url('style.css'));
osc_enqueue_style('tabs', osc_current_web_theme_url('tabs.css'));

osc_register_script('jquery-uniform', osc_current_web_theme_js_url('jquery.uniform.js'), 'jquery');
osc_register_script('global', osc_current_web_theme_js_url('global.js'));

osc_enqueue_script('jquery');
osc_enqueue_script('jquery-ui');
osc_enqueue_script('jquery-uniform');
osc_enqueue_script('tabber');
osc_enqueue_script('global');
?>

<?php osc_run_hook('header'); ?>