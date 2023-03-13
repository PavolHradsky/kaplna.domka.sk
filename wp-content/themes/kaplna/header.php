<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>Kaplna</title>
</head>
<body class="min-h-screen">
    <div class="sticky top-0 z-50">
        <header class="flex bg-[#85A392] p-3 gap-5 items-center justify-between">
            <div class="hamburger flex flex-col gap-1 cursor-pointer p-3 group">
                <div class="line h-1 w-6 bg-[#FDD998] group-hover:bg-[#F5B971] rounded-full"></div>
                <div class="line h-1 w-6 bg-[#FDD998] group-hover:bg-[#F5B971] rounded-full"></div>
                <div class="line h-1 w-6 bg-[#FDD998] group-hover:bg-[#F5B971] rounded-full"></div>
            </div>
            <h3 class="text-white text-xl text-center grow">„S každým sa zhováraj tak, aby si sa stal jeho priateľom.“<span class="text-sm">don&#160Bosco</span></h3>
            <a class="h-14 aspect-square" href="<?php echo get_home_url() ?>"><img src="<?php echo wp_get_attachment_image_url(24) ?>" alt="logo kaplna"></a>
        </header>
        <nav class="bg-[#85A392] absolute h-screen p-3 hidden w-full sm:w-1/2"> <!--min-w-full-->
            <ul class="text-gray-800 text-xl capitalize flex flex-col gap-3">
            <?php
            // Get wordpress menu and do a custom output
            $getMenu = wp_get_nav_menu_items( 'Navigation'); // Where menu1 can be ID, slug or title
            foreach($getMenu as $item){
                echo '<a href="' . $item->url . '"><li class="bg-[#FDD998] px-3 py-1 rounded-lg hover:bg-[#F5B971] max-w-xl">' . $item->title . '</li></a>';
                // echo '<li><a href="' . $item->url . '">' . $item->title . '</a></li>';
            }
            ?>
            </ul>
        </nav>
    </div>