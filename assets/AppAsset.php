<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600&amp;display=swap",
        "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap",
        "https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap",
        "/frontend-files/css/animate.css",
        "frontend-files/css/aos.css",
        "frontend-files/css/bootstrap.min.css",
        "frontend-files/css/bootstrap-select.min.css",
        "frontend-files/css/custom-animate.css",
        "frontend-files/css/fancybox.min.css",
        "frontend-files/css/flaticon.css",
        "frontend-files/css/font-awesome.min.css",
        "frontend-files/css/imp.css",
        "frontend-files/css/jquery-ui.css",
        "frontend-files/css/magnific-popup.css",
        "frontend-files/css/owl.css",
        "frontend-files/css/rtl.css",
        "frontend-files/css/scrollbar.css",
        "frontend-files/css/icomoon.css",
        "frontend-files/css/jquery.bootstrap-touchspin.css",
        "frontend-files/css/nice-select.css",
        "frontend-files/css/twentytwenty.css",
        "frontend-files/css/module-css/header-section.css",
        "frontend-files/css/module-css/banner-section.css",
        "frontend-files/css/module-css/about-section.css",
        "frontend-files/css/module-css/blog-section.css",
        "frontend-files/css/module-css/fact-counter-section.css",
        "frontend-files/css/module-css/faq-section.css",
        "frontend-files/css/module-css/contact-page.css",
        "frontend-files/css/module-css/breadcrumb-section.css",
        "frontend-files/css/module-css/team-section.css",
        "frontend-files/css/module-css/partner-section.css",
        "frontend-files/css/module-css/testimonial-section.css",
        "frontend-files/css/module-css/services-section.css",
        "frontend-files/css/module-css/project-section.css",
        "frontend-files/css/module-css/footer-section.css",
        "frontend-files/css/style.css",
        "frontend-files/css/responsive.css",
        "frontend-files/images/favicon/apple-touch-icon.png",
        "frontend-files/images/favicon/favicon-32x32.png",
        "frontend-files/images/favicon/favicon-16x16.png",
        ];
    public $js = [
        "frontend-files/js/jquery.js",
        "frontend-files/js/aos.js",
        "frontend-files/js/appear.js",
        "frontend-files/js/bootstrap.bundle.min.js",
        "frontend-files/js/bootstrap-select.min.js",
        "frontend-files/js/isotope.js",
        "frontend-files/js/jquery.countTo.js",
        "frontend-files/js/jquery.easing.min.js",
        "frontend-files/js/jquery.enllax.min.js",
        "frontend-files/js/jquery.fancybox.js",
        "frontend-files/js/jquery.magnific-popup.min.js",
        "frontend-files/js/jquery.paroller.min.js",
        "frontend-files/js/jquery-ui.js",
        "frontend-files/js/map-script.js",
        "frontend-files/js/owl.js",
        "frontend-files/js/pagenav.js",
        "frontend-files/js/parallax.min.js",
        "frontend-files/js/scrollbar.js",
        "frontend-files/js/TweenMax.min.js",
        "frontend-files/js/validation.js",
        "frontend-files/js/wow.js",
        "frontend-files/js/jquery-sidebar-content.js",
        "frontend-files/js/jquery.twentytwenty.js",
        "frontend-files/js/jquery.event.move.js",
        "frontend-files/js/element-in-view.js",
        "frontend-files/js/knob.js",
        "frontend-files/js/jquery.bootstrap-touchspin.js",
        "frontend-files/js/jquery.nice-select.min.js",
        "frontend-files/js/tilt.jquery.js",
        "frontend-files/js/custom.js",
    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
