<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8c63f4e9c2954bc69536840bf87006d
{
    public static $files = array (
        '4940672e65e7c6c88ed7150711580427' => __DIR__ . '/..' . '/codeinwp/gutenberg-animation/load.php',
        '121493e618f7dac5b708da14e4109f9a' => __DIR__ . '/..' . '/codeinwp/gutenberg-css/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tubalmartin\\CssMin\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tubalmartin\\CssMin\\' => 
        array (
            0 => __DIR__ . '/..' . '/tubalmartin/cssmin/src',
        ),
    );

    public static $classMap = array (
        'ThemeIsle\\GutenbergBlocks\\Base_Block' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/class-base-block.php',
        'ThemeIsle\\GutenbergBlocks\\Base_CSS' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/class-base-css.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\Block_Frontend' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/class-block-frontend.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\Blocks\\Advanced_Column_CSS' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/blocks/class-advanced-column-css.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\Blocks\\Advanced_Columns_CSS' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/blocks/class-advanced-columns-css.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\Blocks\\Advanced_Heading_CSS' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/blocks/class-advanced-heading-css.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\Blocks\\Button_Group_CSS' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/blocks/class-button-group-css.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\Blocks\\Font_Awesome_Icons_CSS' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/blocks/class-font-awesome-icons-css.php',
        'ThemeIsle\\GutenbergBlocks\\CSS\\CSS_Handler' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/css/class-css-handler.php',
        'ThemeIsle\\GutenbergBlocks\\Main' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/class-main.php',
        'ThemeIsle\\GutenbergBlocks\\Plugins\\Options_Settings' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/plugins/class-options-settings.php',
        'ThemeIsle\\GutenbergBlocks\\Render\\About_Author_Block' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/render/class-about-author-block.php',
        'ThemeIsle\\GutenbergBlocks\\Render\\Google_Map_Block' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/render/class-google-map-block.php',
        'ThemeIsle\\GutenbergBlocks\\Render\\Plugin_Card_Block' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/render/class-plugin-card-block.php',
        'ThemeIsle\\GutenbergBlocks\\Render\\Posts_Grid_Block' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/render/class-posts-grid-block.php',
        'ThemeIsle\\GutenbergBlocks\\Render\\Sharing_Icons_Block' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/render/class-sharing-icons-block.php',
        'ThemeIsle\\GutenbergBlocks\\Server\\Plugin_Card_Server' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/server/class-plugin-card-server.php',
        'ThemeIsle\\GutenbergBlocks\\Server\\Template_Library_Server' => __DIR__ . '/..' . '/codeinwp/gutenberg-blocks/inc/server/class-template-library-server.php',
        'tubalmartin\\CssMin\\Colors' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Colors.php',
        'tubalmartin\\CssMin\\Command' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Command.php',
        'tubalmartin\\CssMin\\Minifier' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Minifier.php',
        'tubalmartin\\CssMin\\Utils' => __DIR__ . '/..' . '/tubalmartin/cssmin/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8c63f4e9c2954bc69536840bf87006d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8c63f4e9c2954bc69536840bf87006d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita8c63f4e9c2954bc69536840bf87006d::$classMap;

        }, null, ClassLoader::class);
    }
}
