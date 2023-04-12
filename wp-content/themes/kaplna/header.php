<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Kaplna Domka</title>
</head>
<body class="min-h-screen font-eczar relative pb-40">
    <div class="sticky top-0 z-50">
        <header class="flex bg-[#85A392] p-3 gap-5 items-center justify-between">
            <div class="hamburger flex flex-col gap-1 cursor-pointer p-3 group">
                <div class="line h-1 w-6 bg-[#FDD998] group-hover:bg-[#F5B971] rounded-full"></div>
                <div class="line h-1 w-6 bg-[#FDD998] group-hover:bg-[#F5B971] rounded-full"></div>
                <div class="line h-1 w-6 bg-[#FDD998] group-hover:bg-[#F5B971] rounded-full"></div>
            </div>
            <h3 class="text-white text-xl text-center grow">„S každým sa zhováraj tak, aby si sa stal jeho priateľom.“<span class="text-sm">don&#160Bosco</span></h3>
            <a class="h-14 aspect-square" href="<?php echo get_home_url() ?>"><img src="<?php echo wp_get_attachment_image_url(125) ?>" alt="logo kaplna"></a>
        </header>
        <nav class="bg-[#85A392] absolute h-[calc(100vh-3.5rem)] p-3 hidden px-6">
            <ul class="text-gray-800 text-2xl capitalize flex flex-col gap-3">
            <?php
            
            $getMenu = wp_get_nav_menu_items( 'Navigation');
            $count = count($getMenu);
            $i = 0;
            foreach($getMenu as $item){
                if( $i < $count-2 ) {
                    echo '<a href="' . $item->url . '"><li class="text-[#FDD998] px-3 rounded-lg hover:text-[#F5B971] max-w-xl">' . $item->title . '</li></a>';
                } else {
                    echo '<a href="' . $item->url . '"><li class="bg-[#FDD998] text-[#DF3636] text-center mx-6 px-3 rounded-lg hover:bg-[#F5B971] max-w-xl">' . $item->title . '</li></a>';
                }
                $i++;
            }
            ?>
            </ul>
        </nav>
    </div>
