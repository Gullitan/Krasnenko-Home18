 <!DOCTYPE HTML>
<html>
<head>
    <title>Free Skokov Website Template | Blog :: w3layouts</title>
    <link href="http://skokow-test.loc/wp-content/themes/skokov_theme_test/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <link href="http://skokow-test.loc/wp-content/themes/skokov_theme_test/css/elastislide.css" rel="stylesheet" type="text/css" media="all"/>


    <link href="http://skokow-test.loc/wp-content/themes/skokov_theme_test/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
</head>
<body>
<header class="header">
    <div class="wrap">
        <div class="logo">
            <?php if (get_theme_mod('logo')) :
                echo '<img src="' . esc_url(get_theme_mod('logo')) . '">';
            else:
                echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
            endif; ?>
        </div>
        <div class="cssmenu">

            <?php wp_nav_menu('primary'); ?>

        </div>
        <div class="clear"></div>
    </div>
</header>
<div class="banner">
    <div class="wrap">
        <h2>Blog</h2>
        <div class="clear"></div>
    </div>
</div>