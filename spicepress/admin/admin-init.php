<?php
if ( is_admin() ){
   require ST_TEMPLATE_DIR . '/admin/inc/class-spicethemes-about-page.php';
}
require ST_TEMPLATE_DIR . '/admin/inc/plugin-include-control.php';
require ST_TEMPLATE_DIR . '/admin/inc/include-companion.php';

$spicepress_theme=wp_get_theme();
global $spicepress_importer_filepath, $spicepress_importer_pro_filepath, $spicepress_importer_new_filepath;
//print_r($spicepress_importer_filepath);
     if($spicepress_theme->name =='SpicePress' || 'SpicePress Child' == $spicepress_theme->name || 'SpicePress child' == $spicepress_theme->name){

        $spicepress_demo_link='https://spicethemes.com/spice-spicepress-importer/';

        $spicepress_importer_filepath= array(
           'spicepress-gutenberg'=>array(
            'title'=>esc_html__('SpicePress Gutenberg','spicepress'),
            'slug'=>'spicepress-gutenberg',
            'categories'=>'Gutenberg',
            'content'=>$spicepress_demo_link.'spicepress-gutenberg/content.xml',
            'customizer'=>$spicepress_demo_link.'spicepress-gutenberg/customizer.dat',
            'widget'=>$spicepress_demo_link.'spicepress-gutenberg/widget.wie',
            'image'=>$spicepress_demo_link.'spicepress-gutenberg/spicepress-gutenberg.jpg',
            'demo_link'=>'https://demo-spicepress.spicethemes.com/block-startersite-1/',
            'plugin'=>'wpcf7-sb',
            'status'=>'new',
           ),           
           'spice-bussiness'=>array(
            'title'=>esc_html__('Spice Bussiness','spicepress'),
            'slug'=>'spice-bussiness',
            'categories'=>'Gutenberg',
            'content'=>$spicepress_demo_link.'spice-bussiness/content.xml',
            'customizer'=>$spicepress_demo_link.'spice-bussiness/customizer.dat',
            'widget'=>$spicepress_demo_link.'spice-bussiness/widget.wie',
            'image'=>$spicepress_demo_link.'spice-bussiness/spice-bussiness.jpg',
            'demo_link'=>'https://demo-spicepress.spicethemes.com/block-startersite-2/',
            'plugin'=>'wpcf7-sb',
            'status'=>'new',
           ),
           
        );
       
        $spicepress_importer_pro_filepath= array(
            'spicepress-pro-gutenberg'=>array(
            'title'=>esc_html__('SpicePress Pro Gutenberg','spicepress'),
            'slug'=>'spicepress-pro-gutenberg',
            'categories'=>'Gutenberg',
            'content'=>$spicepress_demo_link.'spicepress-pro-gutenberg/content.xml',
            'customizer'=>$spicepress_demo_link.'spicepress-pro-gutenberg/customizer.dat',
            'widget'=>$spicepress_demo_link.'spicepress-pro-gutenberg/widget.wie',
            'image'=>$spicepress_demo_link.'spicepress-pro-gutenberg/spicepress-pro-gutenberg.jpg',
            'demo_link'=>'https://demo-spicepress.spicethemes.com/pro-block-startersite-1/',
            'plugin'=>'wpcf7-sbp-ssp-woo',
            'status'=>'new',
           ),
           'spice-tech-pro'=>array(
            'title'=>esc_html__('Spice Tech Pro','spicepress'),
            'slug'=>'spice-tech-pro',
            'categories'=>'Gutenberg',
            'content'=>$spicepress_demo_link.'spice-tech-pro/content.xml',
            'customizer'=>$spicepress_demo_link.'spice-tech-pro/customizer.dat',
            'widget'=>$spicepress_demo_link.'spice-tech-pro/widget.wie',
            'image'=>$spicepress_demo_link.'spice-tech-pro/spice-tech-pro.jpg',
            'demo_link'=>'https://demo-spicepress.spicethemes.com/pro-block-startersite-2/',
            'plugin'=>'wpcf7-sbp-woo-ssp',
            'status'=>'new',
           ),  
        );
    }