<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// load libs
!version_compare(PHP_VERSION, '5.3.10', '=>') or die('Your host needs to use PHP 5.3.10 or higher to run JBlank Template');
require_once dirname(__FILE__) . '/libs/template.php';

/************************* runtime configurations *********************************************************************/
$tpl = JBlankTemplate::getInstance();
$tpl
    // enable or disable debug mode. Default in Joomla configuration.php
    //->debug(true)

    // include CSS files if it's not empty
    // compile less *.file to CSS and cache it
    // compile scss *.file to CSS and cache it (experimental!)
    ->css(array(
        // 'template.css', // from jblank/css folder
        //'template.less', // from jblank/less folder
        // 'template.scss',// from jblank/scss folder
        // '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', // any external lib (you can use http:// or https:// urls)
    ))

    // include JavaScript files
    ->js(array(
        //'template.js',
    ))


    // exclude css files from system or components (experimental!)
    ->excludeCSS(array(
        // 'regex pattern or filename',
        //  '\/media\/zoo\/applications\/jbuniversal\/assets\/css\/jbzoo\.css',
        //  '\/modules\/mod_jbzoo_fly\/assets\/css\/flickity\.min\.css',
        //  '\/media\/zoo\/applications\/jbuniversal\/assets\/css\/jbzoo\.blog\.css',
        //  '\/media\/zoo\/applications\/jbuniversal\/assets\/css\/jbzoo\.news\.css',
        //  'jbzoo\.css',
    ))

    // exclude JS files from system or components (experimental!)
    ->excludeJS(array(
        // 'regex pattern or filename',
        // 'mootools',             // remove Mootools lib
        // 'media\/jui\/js',       // remove jQuery lib
        // 'media\/system\/js',    // remove system libs
        // '\/media\/zoo\/applications\/jbuniversal\/assets\/js\/jquery\.jbzootools\.min\.js',    // remove system libs
        // '\/components\/com_zoo\/assets\/js\/default\.js',    // remove system libs
    ))

    // set custom generator
    ->generator('')// null for disable

    // set HTML5 mode (for <head> tag)
    ->html5(true)

    // add custom meta tags
    ->meta(array(
        // template customization
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
        '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">',

        // apple icons
// '<link rel="apple-touch-icon" sizes="57x57" href="' . $tpl->img . '/apple-touch-icon-57x57.png">',
// '<link rel="apple-touch-icon" sizes="60x60" href="' . $tpl->img . '/apple-touch-icon-60x60.png">',
// '<link rel="apple-touch-icon" sizes="72x72" href="' . $tpl->img . '/apple-touch-icon-72x72.png">',
// '<link rel="apple-touch-icon" sizes="76x76" href="' . $tpl->img . '/apple-touch-icon-76x76.png">',
// '<link rel="apple-touch-icon" sizes="114x114" href="' . $tpl->img . '/apple-touch-icon-114x114.png">',
// '<link rel="apple-touch-icon" sizes="120x120" href="' . $tpl->img . '/apple-touch-icon-120x120.png">',
// '<link rel="apple-touch-icon" sizes="144x144" href="' . $tpl->img . '/apple-touch-icon-144x144.png">',
// '<link rel="apple-touch-icon" sizes="152x152" href="' . $tpl->img . '/apple-touch-icon-152x152.png">',
// '<link rel="apple-touch-icon" sizes="180x180" href="' . $tpl->img . '/apple-touch-icon-180x180.png">',
// '<link rel="icon" type="image/png" href="' . $tpl->img . '/favicon-32x32.png" sizes="32x32">',
// '<link rel="icon" type="image/png" href="' . $tpl->img . '/android-chrome-192x192.png" sizes="192x192">',
// '<link rel="icon" type="image/png" href="' . $tpl->img . '/favicon-96x96.png" sizes="96x96">',
// '<link rel="icon" type="image/png" href="' . $tpl->img . '/favicon.ico">',
// '<link rel="mask-icon" href="' . $tpl->img . '/safari-pinned-tab.svg" color="#5bbad5">',
// '<meta name="msapplication-TileColor" content="#da532c">',
// '<meta name="msapplication-TileImage" content="' . $tpl->img . '/mstile-144x144.png">',
// '<meta name="theme-color" content="#C11C2A">',

    ));

/************************* your php code below this line **************************************************************/

// if (App::getInstance('zoo')->jbrequest->getSystem('category') == "8") {
//   $tpl->css('video.css');

// }

// if (App::getInstance('zoo')->jbrequest->getSystem('category') == "15") {
//   $tpl->css('video.css');
// }



// // mobile detect using (just for example!)
// if ($tpl->isMobile()) {
//    $tpl->js('fastclick.min.js');
//    // $tpl->css('media-mobile.less'); // css only for mobiles

// } elseif ($tpl->isTablet()) {
//     $tpl->css('media-tablet.less'); // css only for tablets
// }

// if (!$tpl->isMobile()) {
//     $tpl->js('pace.min.js');
// }


// USE IT ON YOUR OWN --> RISK <-- THIS IS EXPERIMENTAL FEATURES!
// After that all assets files will be included
/*
$tpl
    // merge css with compress (second arg)
    ->merge('css', true)
    // merge js with compress (second arg)
    ->merge('js', true);
*/
