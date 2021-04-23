<?php 

    //カスタムヘッダー
    // add_theme_support(
    //     'custom-header', 
    //     array(
    //         'default-image' => '%s/img/lake.jpeg',
    //     )
    // );
    add_theme_support(
        'custom-header');
    
    //カスタムメニュー
    register_nav_menus(
        array(
            'place_global' => 'グローバル', 
            'place_utility' => 'ユーティリティ',
        )
    );