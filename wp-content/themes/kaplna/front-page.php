<?php get_header(); ?>
<?php get_header(); ?>
<div class="content flex w-full justify-center">
    <img class="left-img w-24 xl:w-1/6 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("home")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-24 xl:w-1/6 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("home")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content w-full max-w-4xl ml-24 md:mx-24 p-4 flex flex-col items-center">
        <h1 class="text-center text-4xl p-2 my-8"><?php the_title(""); ?></h1>
        <div class="divider w-full h-[1px] max-w-2xl bg-black mb-4"></div>
        

    </div>

</div>
<?php get_footer(); ?>
<?php get_footer(); ?>