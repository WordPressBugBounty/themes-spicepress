(function($) {
    $( function() {
//Js for Home page Slide Variation
       if($("#_customize-input-slide_variation").val()=='banner_image')
        {
            $("#customize-control-spnc_spsp_shortcode").hide();
            $("#customize-control-home_slider_image").show();
			$("#customize-control-slider_image_overlay").show();
			$("#customize-control-slider_overlay_section_color").show();
			$("#customize-control-home_slider_title").show();
			$("#customize-control-home_slider_discription").show();
		    $("#customize-control-home_slider_btn_txt").show();
		    $("#customize-control-home_slider_btn_link").show();
			$("#customize-control-home_slider_btn_target").show();
       }
       else
       {
            $("#customize-control-spnc_spsp_shortcode").show();
            $("#customize-control-home_slider_image").hide();
			$("#customize-control-slider_image_overlay").hide();
			$("#customize-control-slider_overlay_section_color").hide();
			$("#customize-control-home_slider_title").hide();
			$("#customize-control-home_slider_discription").hide();
		    $("#customize-control-home_slider_btn_txt").hide();
		    $("#customize-control-home_slider_btn_link").hide();
			$("#customize-control-home_slider_btn_target").hide();
       }
       
        wp.customize('slide_variation', function(control) {
        control.bind(function( slider_variation ) {
            if(slider_variation=='banner_image')
            {
            $("#customize-control-spnc_spsp_shortcode").hide();
            $("#customize-control-home_slider_image").show();
			$("#customize-control-slider_image_overlay").show();
			$("#customize-control-slider_overlay_section_color").show();
			$("#customize-control-home_slider_title").show();
			$("#customize-control-home_slider_discription").show();
		    $("#customize-control-home_slider_btn_txt").show();
		    $("#customize-control-home_slider_btn_link").show();
			$("#customize-control-home_slider_btn_target").show();
            }
            else
            {
            $("#customize-control-spnc_spsp_shortcode").show();
            $("#customize-control-home_slider_image").hide();
			$("#customize-control-slider_image_overlay").hide();
			$("#customize-control-slider_overlay_section_color").hide();
			$("#customize-control-home_slider_title").hide();
			$("#customize-control-home_slider_discription").hide();
		    $("#customize-control-home_slider_btn_txt").hide();
		    $("#customize-control-home_slider_btn_link").hide();
			$("#customize-control-home_slider_btn_target").hide();
            }
            });
    });
    });
})(jQuery)