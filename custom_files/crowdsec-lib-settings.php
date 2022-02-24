<?php

use CrowdSecBouncer\Constants;

$crowdSecStandaloneBouncerConfig = [
    'api_url' => 'http://crowdsec:8080', // [FILL ME] Set the LAPI URL here. Example in the docker-compose dev context, use http://crowdsec:8080
    'api_key' => 'REPLACE_API_KEY',
    'debug_mode' => true, // [FILL ME] Set to true to enable debug log
    'display_errors' => true, // [FILL ME] Set to true to stop the process and display errors if any
    'log_directory_path' => __DIR__.'/.logs', // [FILL ME] Important note: be sur this path won't be publicly accessible!
    'fs_cache_path' => __DIR__.'/.cache', // [FILL ME] Important note: be sur this path won't be publicly accessible!

    'bouncing_level' => Constants::BOUNCING_LEVEL_NORMAL,

    'stream_mode' => false,

    'cache_system' => Constants::CACHE_SYSTEM_PHPFS,
    'redis_dsn' => '',
    'memcached_dsn' => '',

    'clean_ip_cache_duration' => 1,
    'bad_ip_cache_duration' => 1,
    'fallback_remediation' => Constants::REMEDIATION_CAPTCHA,
    'max_remediation_level' => Constants::REMEDIATION_BAN,

    'hide_mentions' => false,
    'trust_ip_forward' => '',
    'trust_ip_forward_array' => ['REPLACE_PROXY_IP'],

    'theme_color_text_primary' => 'black',
    'theme_color_text_secondary' => '#AAA',
    'theme_color_text_button' => 'white',
    'theme_color_text_error_message' => '#b90000',
    'theme_color_background_page' => '#eee',
    'theme_color_background_container' => 'white',
    'theme_color_background_button' => '#626365',
    'theme_color_background_button_hover' => '#333',

    'theme_text_captcha_wall_tab_title' => 'Oops..',
    'theme_text_captcha_wall_title' => 'Hmm, sorry but...',
    'theme_text_captcha_wall_subtitle' => 'Please complete the security check.',
    'theme_text_captcha_wall_refresh_image_link' => 'refresh image',
    'theme_text_captcha_wall_captcha_placeholder' => 'Type here...',
    'theme_text_captcha_wall_send_button' => 'CONTINUE',
    'theme_text_captcha_wall_error_message' => 'Please try again.',
    'theme_text_captcha_wall_footer' => '',

    'theme_text_ban_wall_tab_title' => 'Oops..',
    'theme_text_ban_wall_title' => '🤭 Oh!',
    'theme_text_ban_wall_subtitle' => 'This page is protected against cyber attacks and your IP has been banned by our system.',
    'theme_text_ban_wall_footer' => '',
    'theme_custom_css' => '',

    'geolocation' => [
        'save_in_session' => true,
        'test_public_ip' => '210.249.74.42', // JP
        'enabled' => false,
        'type' => 'maxmind',
        'maxmind' => [
            'database_type' => 'country',
            'database_path' => '/var/www/html/my-own-modules/crowdsec-php-lib/tests/GeoLite2-Country.mmdb'
        ]
    ]
];
