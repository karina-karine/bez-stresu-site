<?php
function bez_stresu_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'Головне меню',
        'footer' => 'Меню в футері'
    ));
}
add_action('after_setup_theme', 'bez_stresu_setup');

function my_theme_scripts()
{
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

function bez_stresu_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bez_stresu_scripts');

// Schema.org розмітка
function bez_stresu_schema()
{
    if (is_front_page()) {
        $schema = array(
            "@context" => "https://schema.org",
            "@type" => "EducationalOrganization",
            "name" => get_bloginfo('name'),
            "description" => get_bloginfo('description'),
            "url" => home_url(),
            "telephone" => "+380990000000",
            "foundingDate" => "2018",
            "address" => array(
                "@type" => "PostalAddress",
                "addressCountry" => "UA"
            ),
            "sameAs" => array(
                "https://instagram.com/bez_stresu.ua",
                "https://t.me/bez_stresu"
            )
        );

        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
    }
}
add_action('wp_head', 'bez_stresu_schema');