<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased font-eczar relative pb-64 sm:pb-80' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>


<div id="page" class="min-h-screen">

	<?php do_action( 'tailpress_header' ); ?>

    <div class="sticky top-0 z-20">
        <header class="flex bg-primary p-3 gap-5 items-center justify-between">
            <div class="hamburger flex flex-col gap-2 cursor-pointer p-3 group">
                <div class="line h-0.5 w-8 bg-text-gray rounded-full"></div>
                <div class="line h-0.5 w-8 bg-text-gray rounded-full"></div>
                <div class="line h-0.5 w-8 bg-text-gray rounded-full"></div>
            </div>
            <h3 class="text-text-gray hidden 2xs:block text-xl text-center grow">„S každým sa zhováraj tak, aby si sa stal jeho priateľom.“<span class="text-sm">don&#160Bosco</span></h3>
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                ?>
                <a class="h-14 aspect-square drop-shadow-lg" href="<?php echo get_home_url() ?>"> <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="logo"> </a>
                <?php
            }?>
        </header>
        <nav class="bg-primary absolute h-[calc(100vh-3.5rem)] p-3 hidden px-6">
            <ul class="text-gray-800 text-2xl capitalize flex flex-col gap-3">
            <?php
            
            $getMenu = wp_get_nav_menu_items( 'Navigation');
            $count = count($getMenu);
            $i = 0;
            foreach($getMenu as $item){
                if( $i < $count-2 ) {
                    echo '<a href="' . $item->url . '"><li class="text-text-gray px-3 rounded-lg hover:text-secondary-hover max-w-xl">' . $item->title . '</li></a>';
                } else {
                    echo '<a href="' . $item->url . '"><li class="bg-secondary text-primary text-center mx-6 px-3 rounded-lg hover:bg-secondary-hover max-w-xl">' . $item->title . '</li></a>';
                }
                $i++;
            }
            ?>
            </ul>
        </nav>
    </div>
    <?php do_action( 'tailpress_content_start' ); ?>
