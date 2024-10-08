<?php get_header(  ); ?>

<div class="content flex w-full justify-center">
    <img class="left-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10 block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("newsletter")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("newsletter")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content max-w-4xl ml-12 2xs:ml-24 md:mx-24 w-full p-4 flex flex-col items-center">
        <h2 class="text-center text-4xl p-2 my-2 w-full py-6"><?php the_title(""); ?></h2>
        <div class="divider mx-auto h-[1px] w-4/5 bg-text-gray mb-4"></div>

        <iframe class="w-full h-[800px] md:h-[600px] mb-8" src="https://docs.google.com/forms/d/e/1FAIpQLSdEw77PL8qU8FdmUlR4sygG5EgnswgnALuQXrKJWNr0BXufIA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Načítava sa…</iframe>
    </div>

</div>

<?php get_footer(  ); ?>