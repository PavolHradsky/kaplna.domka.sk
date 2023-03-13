<?php get_header(); ?>
<div class="content flex flex-col lg:max-w-3xl mx-10 lg:mx-auto py-10">
    <div class="posts flex flex-col gap-4">
        <h1>Home (blog)</h1>
        <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post( );
                ?>

                <div class="post-container rounded-lg border-[#85A392] border-4 p-3 flex">
                    <div class="post-content">
                        <h2 class="text-2xl text-[#333333]"><?php the_title(); ?></h2>
                        <p class="mb-4 text-[#333333]"><?php echo get_the_excerpt( ); ?></p>
                        <a class="p-2 bg-[#FDD998] hover:bg-[#F5B971] text-[#333333] w-auto rounded-lg" href="<?php the_permalink( ); ?>">Citaj dalej</a>
                    </div>
                    <img class="rounded-lg max-w-[10rem] object-cover ml-8" src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
                </div>
                
                <?php
            } // end while
        } // end if
        ?>
        <div class="nav-previous alignleft"><?php next_posts_link( 'next' ); ?></div>

        <div class="nav-next alignright"><?php previous_posts_link( 'prev' ); ?></div>
    </div>
</div>
<?php get_footer(); ?>