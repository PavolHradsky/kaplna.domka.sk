<?php get_header(); ?>
<div class="content flex flex-col lg:max-w-3xl mx-10 lg:mx-auto py-10">
    <div class="posts flex flex-col gap-4">
        <h1>THIS IS HOME PAGE</h1>
        <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post( );
                ?>

                <div class="post-container p-3">
                    <h2 class="text-text-gray text-5xl mb-3"><?php the_title(); ?></h2>
                    <img class="rounded-lg" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
                    <p class="mb-4 text-text-gray"><?php the_content( ); ?></p>
                    <a class="text-secondary-hover hover:text-primary" href='<?php the_author_url(); ?>'><?php the_author(); ?></a>
                    <p><?php the_date(); ?></p>
                </div>
                
                <?php
            } // end while
        } // end if
        ?>
    </div>
</div>
<?php get_footer(); ?>