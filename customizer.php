<?php
//for more info: https://codex.wordpress.org/Theme_Customization_API

add_action("customize_register", "security_customize_register");

function security_customize_register($wp_customize) {
    /** social media * */
    $wp_customize->add_section("social_media", array(
        "title" => __("Social media", "delmarva"),
        "priority" => 100,
    ));


    $wp_customize->add_setting("facebook_url", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "facebook_url", array(
        'label' => __('Facebook URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'facebook_url'
            )
    ));

    $wp_customize->add_setting("facebook_icon", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "facebook_icon", array(
        'label' => __('Facebook Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'facebook_icon'
            )
    ));


    $wp_customize->add_setting("instagram_url", array(
        "default" => "",
    ));


    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "instagram_url", array(
        'label' => __('Instagram URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'instagram_url'
            )
    ));

    $wp_customize->add_setting("instagram_icon", array(
        "default" => "",
    ));


    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "instagram_icon", array(
        'label' => __('Instagram Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'instagram_icon'
            )
    ));

    $wp_customize->add_setting("twitter_url", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "twitter_url", array(
        'label' => __('Twitter URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'twitter_url'
            )
    ));

    $wp_customize->add_setting("twitter_icon", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "twitter_icon", array(
        'label' => __('Twitter Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'twitter_icon'
            )
    ));

    $wp_customize->add_setting("youtube_url", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "youtube_url", array(
        'label' => __('YouTube URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'youtube_url'
            )
    ));

    $wp_customize->add_setting("youtube_icon", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "youtube_icon", array(
        'label' => __('YouTube Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'youtube_icon'
            )
    ));

    $wp_customize->add_setting("pinterest_url", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "pinterest_url", array(
        'label' => __('Pinterest URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'pinterest_url'
            )
    ));

    $wp_customize->add_setting("pinterest_icon", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "pinterest_icon", array(
        'label' => __('Pinterest Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'pinterest_icon'
            )
    ));


    $wp_customize->add_setting("linkedin_url", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "linkedin_url", array(
        'label' => __('LinkedIn URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'linkedin_url'
            )
    ));

    $wp_customize->add_setting("linkedin_icon", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "linkedin_icon", array(
        'label' => __('LinkedIn Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'linkedin_icon'
            )
    ));

    $wp_customize->add_setting("google_url", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "google_url", array(
        'label' => __('Google Plus URL', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'google_url'
            )
    ));

    $wp_customize->add_setting("google_icon", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "google_icon", array(
        'label' => __('Google Plus Icon', 'delmarva'),
        'section' => 'social_media',
        'settings' => 'google_icon'
            )
    ));

    /*     * * end of social media ** */

    /** site info * */
    $wp_customize->add_section("site_info", array(
        "title" => __("Site info", "delmarva"),
        "priority" => 100,
    ));

    $wp_customize->add_setting("request_quote", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "request_quote", array(
        'label' => __('Request quote link', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'request_quote'
            )
    ));

    $wp_customize->add_setting("request_quote_text", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "request_quote_text", array(
        'label' => __('Request quote text', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'request_quote_text'
            )
    ));

    $wp_customize->add_setting("address", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "address", array(
        'label' => __('Address', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'address'
            )
    ));

    $wp_customize->add_setting("phone_number", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "phone_number", array(
        'label' => __('Phone number', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'phone_number'
            )
    ));

    $wp_customize->add_setting("header_image", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "header_image", array(
        'label' => __('Header image', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'header_image'
            )
    ));

    $wp_customize->add_setting("header_back_image", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize, "header_back_image", array(
        'label' => __('Header background image', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'header_back_image'
            )
    ));

    $wp_customize->add_setting("background_color", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize, "background_color", array(
        'label' => __('Background Color', 'delmarva'),
        'section' => 'site_info',
        'settings' => 'background_color'
            )
    ));

    /** end of site info * */
    /** Fonts section start* */
    $wp_customize->add_panel('site_fonts_panel', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => "Site Fonts"
    ));

    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_section("header_fonts_$i", array(
            "title" => __("Heading $i", "delmarva"),
            "priority" => 100,
            "panel" => 'site_fonts_panel'
        ));

        $wp_customize->add_setting("header_font_family_$i", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "header_font_family_$i", array(
            'label' => __('Font Family', 'delmarva'),
            'section' => "header_fonts_$i",
            'settings' => "header_font_family_$i",
            'type' => 'select',
            'choices' => array(
                'Alfa Slab One' => 'Alfa Slab One',
                'ChunkFive' => 'Chunk Five',
                'League Gothic' => 'LeagueGothic-Regular',
                'League Gothic Italic' => 'LeagueGothic-Italic',
                'League Gothic Condensed' => 'LeagueGothic-CondensedRegular',
                'League Gothic Condensed Italic' => 'LeagueGothic-CondensedItalic',
                'Montserrat-Black' => 'Montserrat-Black',
                'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
                'Montserrat-Bold' => 'Montserrat-Bold',
                'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
                'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
                'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
                'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
                'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
                'Montserrat-Italic' => 'Montserrat-Italic',
                'Montserrat-Light' => 'Montserrat-Light',
                'Montserrat-LightItalic' => 'Montserrat-LightItalic',
                'Montserrat-Medium' => 'Montserrat-Medium',
                'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
                'Montserrat-Regular' => 'Montserrat-Regular',
                'Montserrat-SemiBold' => 'Montserrat-SemiBold',
                'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
                'Montserrat-Thin' => 'Montserrat-Thin',
                'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
                'Oswald-Bold' => 'Oswald-Bold',
                'Oswald-ExtraLight' => 'Oswald-ExtraLight',
                'Oswald-Light' => 'Oswald-Light',
                'Oswald-Medium' => 'Oswald-Medium',
                'Oswald-Regular' => 'Oswald-Regular',
                'Oswald-SemiBold' => 'Oswald-SemiBold',
            )
                )
        ));

        $wp_customize->add_setting("header_fonts_size_$i", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "header_fonts_size_$i", array(
            'label' => __('Font size(px)', 'delmarva'),
            'section' => "header_fonts_$i",
            'settings' => "header_fonts_size_$i"
                )
        ));

        $wp_customize->add_setting("header_fonts_weight_$i", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "header_fonts_weight_$i", array(
            'label' => __('Font weight', 'delmarva'),
            'section' => "header_fonts_$i",
            'settings' => "header_fonts_weight_$i",
            'type' => 'select',
            'choices' => array(
                'bold' => 'Bold',
                'bolder' => 'Bolder',
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
                'inherit' => 'Inherit'
            )
                )
        ));

        $wp_customize->add_setting("header_title_style_$i", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "header_title_style_$i", array(
            'label' => __('Header title Style', 'delmarva'),
            'section' => "header_fonts_$i",
            'settings' => "header_title_style_$i",
            'type' => 'select',
            'choices' => array(
                'normal' => 'Normal',
                'italic' => 'Italic',
                'oblique' => 'Oblique',
                'inherit' => 'Inherit'
            )
                )
        ));

        $wp_customize->add_setting("header_color_$i", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control(
                $wp_customize, "header_color_$i", array(
            'label' => __('Color', 'delmarva'),
            'section' => "header_fonts_$i",
            'settings' => "header_color_$i"
                )
        ));
    }
    
    /*blog title styles*/
    $wp_customize->add_section("blog_title", array(
            "title" => __("Blog Title", "delmarva"),
            "priority" => 100,
            "panel" => 'site_fonts_panel'
        ));

        $wp_customize->add_setting("blog_title_font_family", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "blog_title_font_family", array(
            'label' => __('Font Family', 'delmarva'),
            'section' => "blog_title",
            'settings' => "blog_title_font_family",
            'type' => 'select',
            'choices' => array(
                'Alfa Slab One' => 'Alfa Slab One',
                'ChunkFive' => 'Chunk Five',
                'League Gothic' => 'LeagueGothic-Regular',
                'League Gothic Italic' => 'LeagueGothic-Italic',
                'League Gothic Condensed' => 'LeagueGothic-CondensedRegular',
                'League Gothic Condensed Italic' => 'LeagueGothic-CondensedItalic',
                'Montserrat-Black' => 'Montserrat-Black',
                'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
                'Montserrat-Bold' => 'Montserrat-Bold',
                'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
                'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
                'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
                'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
                'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
                'Montserrat-Italic' => 'Montserrat-Italic',
                'Montserrat-Light' => 'Montserrat-Light',
                'Montserrat-LightItalic' => 'Montserrat-LightItalic',
                'Montserrat-Medium' => 'Montserrat-Medium',
                'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
                'Montserrat-Regular' => 'Montserrat-Regular',
                'Montserrat-SemiBold' => 'Montserrat-SemiBold',
                'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
                'Montserrat-Thin' => 'Montserrat-Thin',
                'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
                'Oswald-Bold' => 'Oswald-Bold',
                'Oswald-ExtraLight' => 'Oswald-ExtraLight',
                'Oswald-Light' => 'Oswald-Light',
                'Oswald-Medium' => 'Oswald-Medium',
                'Oswald-Regular' => 'Oswald-Regular',
                'Oswald-SemiBold' => 'Oswald-SemiBold',
            )
                )
        ));

        $wp_customize->add_setting("blog_title_fonts_size", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "blog_title_fonts_size", array(
            'label' => __('Font size(px)', 'delmarva'),
            'section' => "blog_title",
            'settings' => "blog_title_fonts_size"
                )
        ));

        $wp_customize->add_setting("blog_title_fonts_weight", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "blog_title_fonts_weight", array(
            'label' => __('Font weight', 'delmarva'),
            'section' => "blog_title",
            'settings' => "blog_title_fonts_weight",
            'type' => 'select',
            'choices' => array(
                'bold' => 'Bold',
                'bolder' => 'Bolder',
                '100' => '100',
                '200' => '200',
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
                '800' => '800',
                '900' => '900',
                'inherit' => 'Inherit'
            )
                )
        ));

        $wp_customize->add_setting("blog_title_style", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "blog_title_style", array(
            'label' => __('Blog title Style', 'delmarva'),
            'section' => "blog_title",
            'settings' => "blog_title_style",
            'type' => 'select',
            'choices' => array(
                'normal' => 'Normal',
                'italic' => 'Italic',
                'oblique' => 'Oblique',
                'inherit' => 'Inherit'
            )
                )
        ));

        $wp_customize->add_setting("blog_title_color", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control(
                $wp_customize, "blog_title_color", array(
            'label' => __('Color', 'delmarva'),
            'section' => "blog_title",
            'settings' => "blog_title_color"
                )
        ));
    
    $wp_customize->add_setting("blog_title_text_transform", array(
            "default" => "",
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "blog_title_text_transform", array(
            'label' => __('Text Transform', 'delmarva'),
            'section' => "blog_title",
            'settings' => "blog_title_text_transform",
            'type' => 'select',
            'choices' => array(
                'none' => 'None',
                'capitalize' => 'Capitalize',
                'uppercase' => 'Uppercase',
                'lowercase' => 'Lowercase',
                'initial' => 'Initial',
                'inherit' => 'Inherit',
            )
                )
        ));
    
    




    $wp_customize->add_section("site_fonts", array(
        "title" => __("Other site fonts", "delmarva"),
        "priority" => 100,
        "panel" => 'site_fonts_panel'
    ));

    $wp_customize->add_setting("header_1", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "header_1", array(
        'label' => __('Header 1 sfont', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'header_1',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'League Gothic' => 'LeagueGothic-Regular',
            'League Gothic Italic' => 'LeagueGothic-Italic',
            'League Gothic Condensed' => 'LeagueGothic-CondensedRegular',
            'League Gothic Condensed Italic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("header_number", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "header_number", array(
        'label' => __('Header mobile number', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'header_number',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("body_font", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "body_font", array(
        'label' => __('Body font', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'body_font',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("footer_heading", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "footer_heading", array(
        'label' => __('Footer heading', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'footer_heading',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("footer_sub_heading", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "footer_sub_heading", array(
        'label' => __('Footer sub heading', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'footer_sub_heading',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("footer_text", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "footer_text", array(
        'label' => __('Footer text', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'footer_text',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("footer_number", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "footer_number", array(
        'label' => __('Footer Mobile Number', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'footer_number',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("page_title_font", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "page_title_font", array(
        'label' => __('Page title font', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'page_title_font',
        'type' => 'select',
        'choices' => array(
            'Alfa Slab One' => 'Alfa Slab One',
            'ChunkFive' => 'Chunk Five',
            'LeagueGothic-Regular' => 'LeagueGothic-Regular',
            'LeagueGothic-Italic' => 'LeagueGothic-Italic',
            'LeagueGothic-CondensedRegular' => 'LeagueGothic-CondensedRegular',
            'LeagueGothic-CondensedItalic' => 'LeagueGothic-CondensedItalic',
            'Montserrat-Black' => 'Montserrat-Black',
            'Montserrat-BlackItalic' => 'Montserrat-BlackItalic',
            'Montserrat-Bold' => 'Montserrat-Bold',
            'Montserrat-BoldItalic' => 'Montserrat-BoldItalic',
            'Montserrat-ExtraBold' => 'Montserrat-ExtraBold',
            'Montserrat-ExtraBoldItalic' => 'Montserrat-ExtraBoldItalic',
            'Montserrat-ExtraLight' => 'Montserrat-ExtraLight',
            'Montserrat-ExtraLightItalic' => 'Montserrat-ExtraLightItalic',
            'Montserrat-Italic' => 'Montserrat-Italic',
            'Montserrat-Light' => 'Montserrat-Light',
            'Montserrat-LightItalic' => 'Montserrat-LightItalic',
            'Montserrat-Medium' => 'Montserrat-Medium',
            'Montserrat-MediumItalic' => 'Montserrat-MediumItalic',
            'Montserrat-Regular' => 'Montserrat-Regular',
            'Montserrat-SemiBold' => 'Montserrat-SemiBold',
            'Montserrat-SemiBoldItalic' => 'Montserrat-SemiBoldItalic',
            'Montserrat-Thin' => 'Montserrat-Thin',
            'Montserrat-ThinItalic' => 'Montserrat-ThinItalic',
            'Oswald-Bold' => 'Oswald-Bold',
            'Oswald-ExtraLight' => 'Oswald-ExtraLight',
            'Oswald-Light' => 'Oswald-Light',
            'Oswald-Medium' => 'Oswald-Medium',
            'Oswald-Regular' => 'Oswald-Regular',
            'Oswald-SemiBold' => 'Oswald-SemiBold',
        )
            )
    ));

    $wp_customize->add_setting("page_title_font_size", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "page_title_font_size", array(
        'label' => __('Page title font size(px)', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'page_title_font_size'
            )
    ));

    $wp_customize->add_setting("page_title_weight", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "page_title_weight", array(
        'label' => __('page title weight', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'page_title_weight',
        'type' => 'select',
        'choices' => array(
            'bold' => 'Bold',
            'bolder' => 'Bolder',
            '100' => '100',
            '200' => '200',
            '300' => '300',
            '400' => '400',
            '500' => '500',
            '600' => '600',
            '700' => '700',
            '800' => '800',
            '900' => '900',
            'inherit' => 'Inherit'
        )
            )
    ));

    $wp_customize->add_setting("page_title_style", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize, "page_title_style", array(
        'label' => __('page title Style', 'delmarva'),
        'section' => 'site_fonts',
        'settings' => 'page_title_style',
        'type' => 'select',
        'choices' => array(
            'normal' => 'Normal',
            'italic' => 'Italic',
            'oblique' => 'Oblique',
            'inherit' => 'Inherit'
        )
            )
    ));

    /* fonts section end */
}