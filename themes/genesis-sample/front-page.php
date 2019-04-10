<?php

add_filter('genesis_site_title_wrap', 'filter_front_page_site_title_wrap');

function filter_front_page_site_title_wrap() {
    return 'h2';
}

add_filter('genesis_seo_title', 'filter_front_page_site_title_html');

function filter_front_page_site_title_html($html) {
    $site_name = get_bloginfo('name');
    $new_html = '<span class="site-logo"></span>' . $site_name;

    return str_replace( $site_name, $new_html, $html);;
}

genesis();