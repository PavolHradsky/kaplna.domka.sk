<?php get_header(  ); ?>

<div class="content flex w-full justify-center">
<img class="left-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content max-w-4xl md:mx-24 w-full p-4 flex flex-col items-center">
        <h1 class="text-center text-4xl p-2 my-8"><?php the_title(""); ?></h1>
        <div class="divider w-full h-[1px] max-w-2xl bg-black mb-8"></div>

        <iframe class="w-full h-[800px] md:h-[600px] mb-8" src="https://docs.google.com/forms/d/e/1FAIpQLSdEw77PL8qU8FdmUlR4sygG5EgnswgnALuQXrKJWNr0BXufIA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Načítava sa…</iframe>
    </div>

</div>

<?php get_footer(  ); ?>