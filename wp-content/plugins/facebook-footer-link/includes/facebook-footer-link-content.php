<?php

function ffl_add_footer($content){

    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a target="_blank" href="http://www.facebook.com">Face de plouque</a>';
    $footer_output .= '</div>';

    return $content . $footer_output;
}

add_filter('the_content', 'ffl_add_footer');