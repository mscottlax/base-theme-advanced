<?php

/**
 * The Page Title Shortcode
 *
 * This shortcode will allow us to customize the title of a page
 *
 * @param $atts array The attributes for the shortcode
 * @param $content string The content of the shortcode
 * @return string The final html/content for the shortcode
 */
function pageTitleFunc( $attributes ) {
    $attr = shortcode_atts( array(
        'title' => ''
    ), $attributes );

    $returnHtml = "";

    $returnHtml .= "<header class=\"page-header\">";
    if(isset($attr['title']) && !empty($attr['title'])) {
        $returnHtml .= "<h1 class=\"page-title\">{$attr['title']}</h1>";
    } else {
        $returnHtml .= "<h1 class=\"page-title\">". get_the_title(). "</h1>";
    }

    $returnHtml .= "</header>";

    return $returnHtml;
}

add_shortcode( 'page_title', 'pageTitleFunc' );

/**
 * Load shortcode 'sb_button' to visual composer
 */
if(function_exists('vc_map')) {
    add_action( 'init', 'pageTitle_integrateWithVC' );
}

function pageTitle_integrateWithVC() {
    vc_map([
        "name" => __('Page Title'),
        "base" => 'page_title',
        "class" => '',
        "category" => __('Content'),
        'description' => 'Set a Page Title',
        "params" => [
            [
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Page Title"),
                "param_name" => "title",
                "value" => "",
                "description" => __("Enter the title of the page. Leave blank to use the title in the Wordpress Admin")
            ]
        ]
    ]);
}

/**
 * The Sebo Button Shortcode
 *
 * This shortcode will allow us to style the buttons in our theme like Twitter Bootstrap 3.0.
 *
 * @param $atts array The attributes for the shortcode
 * @param $content string The content of the shortcode
 * @return string The final html/content for the shortcode
 */
function sbButtonFunc( $attributes, $content ) {
    $attr = shortcode_atts( array(
        'centered' => '',
        'style' => 'default',
        'size' => '',
        'full_width' => '',
        'link' => '',
        'text' => '',
        'target' => '_self',
        'disabled' => ''
    ), $attributes );
    $style = strtolower($attr['style']);
    $classes = "btn btn-{$style}";
    $button = "";
    $returnHtml = "";

    $classes .= $attr['size'];

    $classes .= $attr['disabled'];

    if($attr['disabled'] == 'yes') {
        $classes .= " disabled";
    }

    if(isset($attr['link']) && !empty($attr['link'])) {
        $classes .= $attr['disabled'];
        $button = "<a class=\"{$classes}\" href=\"{$attr['link']}\" target=\"{$attr['target']}\">{$attr['text']}</a>";
    } else {
        $disabled = "";
        if($attr['disabled'] == ' disabled')
            $disabled = " disabled=\"disabled\"";
        $button = "<button class=\"{$classes}\"{$disabled}>{$attr['text']}</button>";
    }

    if($attr['centered'] == 'yes') {
        $returnHtml = "<div class=\"text-center\">{$button}</div>";
    } else {
        $returnHtml = $button;
    }

    return $returnHtml;
}
add_shortcode( 'sb_button', 'sbButtonFunc' );

/**
 * Load shortcode 'sb_button' to visual composer
 */
if(function_exists('vc_map')) {
    add_action( 'init', 'sbButton_integrateWithVC' );
}

function sbButton_integrateWithVC() {
    vc_map([
        "name" => __('Sebo Button'),
        "base" => 'sb_button',
        "class" => '',
        "category" => __('Content'),
        'description' => 'Bootstrap 3.0 Button Style',
        "params" => [
            [
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Button Text"),
                "param_name" => "text",
                "value" => "Text on the button",
                "description" => __("Please enter the text for the button")
            ],
            [
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => __("Link"),
                "param_name" => "link",
                "value" => "",
                "description" => __("Please enter the link for the button")
            ],
            [
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Style"),
                "param_name" => "style",
                "value" => [
                    "Default" => "default",
                    "Primary" => "primary",
                    "Success" => "success",
                    "Warning" => "warning",
                    "Danger" => "danger"
                ],
                "description" => __("Please enter the text for your button")
            ],
            [
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Size"),
                "param_name" => "size",
                "value" => [
                    "Default" => "",
                    "Large" => " btn-lg",
                    "Small" => " btn-sm",
                    "Extra Small" => " btn-xs"
                ],
                "description" => __("What size would you like for your button?")
            ],
            [
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Full Width"),
                "param_name" => "full_width",
                "value" => [
                    "No" => "",
                    "Yes" => " btn-block"
                ],
                "description" => __("Do you want you button to fill the entire width of the element that contains it?")
            ],
            [
                "type" => "checkbox",
                "holder" => "div",
                "class" => "",
                "heading" => __("Center Button"),
                "param_name" => "centered",
                "value" => [
                    "Yes" => "yes"
                ],
                "description" => __("Would you like to center the button? Doesn't work if the full width option is enabled.")
            ],
            [
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Open New Page"),
                "param_name" => "target",
                "value" => [
                    "No" => "_self",
                    "Yes" => "_blank"
                ],
                "description" => __("Would you like your link to open in a new tab or page?")
            ],
            [
                "type" => "checkbox",
                "holder" => "div",
                "class" => "",
                "heading" => __("Disabled"),
                "param_name" => "disabled",
                "value" => [
                    "Yes" => " disabled"
                ],
                "description" => __("Would you like your button to be disabled?")
            ],
        ]
    ]);
}
//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Your_Gallery extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Single_Img extends WPBakeryShortCode {
    }
}