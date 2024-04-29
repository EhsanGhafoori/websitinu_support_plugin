<?php

// footer


function websitino_footer_first_page()
{

    if (get_bloginfo("language") == 'en-US') {
?>
<style>
    
@font-face {
	font-family: Righteous-Regular;
	font-style: normal;
	font-weight: 500;
	src: url('/wp-content/plugins/websitino_support_plugin-main/assets/fonts/ttf/Righteous-Regular.ttf');
	src: url('/wp-content/plugins/websitino_support_plugin-main/assets/fonts/ttf/Righteous-Regular?#iefix') format('embedded-opentype');
}

.Righteous-Regular {
    font-family: Righteous-Regular !important;
}

</style>
        <p style="border-style: solid;
        border-width: 1px 0px 0px 0px;
        border-color: rgb(139 139 139 / 10%); text-align: center; padding-bottom:10px; padding-top:10px; margin-bottom:0px; font-family: 'Lexend Deca', Sans-serif !important;  background-color:#ffffff;">

            All rights reserved for

            <a href="<?php echo site_url() ?>">
                <span style="color: #000; font-weight: bold;">
                    <?php echo strtoupper(get_bloginfo()) ;?>.
                </span>
            </a>
            Created by
            <span style="color: #000; ">
                <a style="color: #000; font-family:Righteous-Regular ;" href="https://www.websitino.com/" target="_blank" rel="noopener">
                    Websitino
                </a>
            </span>
            © 2015
        </p>
    <?php
    } else {
    ?>
        <p class="footer-container text-center" style=" border-top: 1px solid rgba(255,255,255,0.15); color:rgba(255,255,255,0.8); padding-bottom:10px; padding-top:10px; margin-bottom:0px; background-color:#ffffff;">

            تمامی حقوق برای
            <a href="<?php echo site_url() ?>">
                <span style="color: #000;"><?php echo get_bloginfo(); ?>
                </span>
            </a>
            محفوظ است.


            طراحی شده توسط
            <span style="color: #000; ">
                <a style="color: #000;" href="https://www.websitino.com/" target="_blank" rel="noopener">
                    وبسایتینو
                </a>
            </span>
            © 2021
        </p>
<?php
    }
}
add_action('wp_footer', 'websitino_footer_first_page');
?>