<?php get_header(); ?>
<div class="content flex w-full justify-center">
<img class="left-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("home")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("home")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content w-full max-w-4xl ml-12 2xs:ml-24 md:mx-24 p-4 flex flex-col items-center">
        <h2 class="text-center text-4xl p-2 my-2 w-full py-6">Najbližšie akcie</h2>
        <div class="divider mx-auto h-[1px] w-4/5 bg-text-gray mb-4"></div>
        
        <div class="calendar w-full overflow-x-scroll sm:overflow-auto">
            <?php if ( shortcode_exists( 'pretty_google_calendar' ))  {
                echo do_shortcode("[pretty_google_calendar gcal='de734m5nif6ofdq5r17noimjn0@group.calendar.google.com' locale='sk']");
            } ?>
        </div>

        <h2 class="text-center text-4xl p-2 my-2 w-full py-6">Dôležité oznamy</h2>
        <div class="divider mx-auto h-[1px] w-4/5 bg-text-gray mb-4"></div>

        <div class="news flex flex-col items-center">
            <?php 
            $args = array('category_name' => 'oznamy', 'posts_per_page' => 10);
            $posts = get_posts( $args );
            $count = 0;
            $left = "";
            $right = "";
            $mobile = "";
            $i = 0;
            foreach ($posts as $i => $post) :
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $content = get_the_content();
                $permalink = get_the_permalink();
                $cats = get_the_category();
                $long = in_array("dlhe", array_map(fn($item): string => $item->slug , $cats));
                $bg = $long ? "bg-primary" : "";
            ?>
            <div class='card p-4 max-w-md'>
                <?php if($i != 0): ?><div class="divider mx-auto h-[1px] w-3/5 bg-text-gray mb-4"></div><?php endif; ?>
                <h3 class='text-secondary text-2xl mb-4 text-center'><?php echo $title; ?></h3>
                <?php if( $long ): ?>
                    <p class='mb-4'><?php echo $excerpt; ?>
                    <a href='<?php echo $permalink; ?>' class='bg-primary hover:bg-primary-hover px-3 py-1 rounded-full inline-block'>Čítaj ďalej</a>
                    </p> 
                <?php else: ?>
                    <p class='mb-4'><?php echo $content; ?></p>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>
        
        <h2 class="text-center text-4xl p-2 my-2 w-full py-6">Novinky</h2>
        <div class="divider mx-auto h-[1px] w-4/5 bg-text-gray mb-4"></div>

        <?php 
        // $args = array('category_name' => 'o-nas', 'order' => 'ASC', 'posts_per_page' => 10);
        $args = array('category__not_in' => get_category_by_slug("oznamy")->term_id, 'posts_per_page' => 10);
        $posts = get_posts( $args );
        $count = 0;
        $left = "";
        $right = "";
        $mobile = "";
        $i = 0;
        foreach ($posts as $post) {
            $title = get_the_title();
            $excerpt = get_the_excerpt();
            $permalink = get_the_permalink();
            $border = rand(0, 1) ? "border-4" : "";
            $template = "<div class='card {$border} border-primary p-4'>
                <h3 class='text-text-gray text-2xl mb-4'>{$title}</h3>
                <p class='mb-4'>{$excerpt}</p>
                <a href='{$permalink}' class='bg-primary hover:bg-primary-hover px-3 py-1 rounded-full'>Čítaj ďalej</a>
            </div>";
            if ($i%2==0) {
                $left .= $template;
            } else {
                $right .= $template;
            }
            $mobile .= $template;
            $i++;
        }?>
        <div class="news hidden md:flex gap-4">
            <div id="left" class="col-1 w-1/2 flex flex-col gap-4">
                <?php echo $left; ?>
            </div>
            <div id="right" class="col-1 w-1/2 flex flex-col gap-4">
                <?php echo $right; ?>
            </div>
        </div>
        
        <div id="mobile" class="news flex flex-col md:hidden gap-4">
            <?php echo $mobile; ?>
        </div>

        <button id="more" class='bg-primary-hover hover:bg-primary py-2 px-10 mt-4 text-2xl uppercase '>Viac</button>



    </div>

</div>
<?php get_footer(); ?>