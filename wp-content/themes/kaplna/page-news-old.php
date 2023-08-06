<?php get_header(); ?>
<div class="content flex w-full justify-center">
<img class="left-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content w-full max-w-4xl ml-24 md:mx-24 p-4 flex flex-col items-center">
        <h1 class="text-center text-4xl p-2 my-8"><?php Aktuality ?></h1>
        <div class="divider w-full h-[1px] max-w-2xl bg-black mb-4"></div>
        <?php 
        // $args = array('category_name' => 'o-nas', 'order' => 'ASC', 'posts_per_page' => 10);
        $args = array('posts_per_page' => 10);
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
            $bg = rand(0, 1) ? "bg-primary" : "";
            $template = "<div class='card border-4 border-primary {$bg} rounded-xl p-4'>
                <h3 class='text-text-gray text-2xl mb-4'>{$title}</h3>
                <p class='mb-4'>{$excerpt}</p>
                <a href='{$permalink}' class='bg-secondary px-3 py-1 rounded-md'>Citaj dalej</a>
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
            <div class="col-1 w-1/2 flex flex-col gap-4">
                <?php echo $left; ?>
            </div>
            <div class="col-1 w-1/2 flex flex-col gap-4">
                <?php echo $right; ?>
            </div>
        </div>
        
        <div class="news flex flex-col md:hidden gap-4">
            <?php echo $mobile; ?>
        </div>
        <div class="nav-previous alig-left"><?php next_posts_link( 'next' ); ?></div>

        <div class="nav-next alig-right"><?php previous_posts_link( 'prev' ); ?></div>
        <div class="navigation"><p><?php posts_nav_link(); ?></p></div>

    </div>

</div>
<?php get_footer(); ?>