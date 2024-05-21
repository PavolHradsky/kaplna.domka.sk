<?php get_header(  ); ?>

<div class="content flex w-full justify-center">
<img class="left-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("support-us")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("support-us")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content max-w-4xl ml-12 2xs:ml-24 md:mx-24 p-4 flex flex-col items-center mb-10">
        <h2 class="text-center text-4xl p-2 my-2 w-full py-6"><?php the_title(""); ?></h2>
        <div class="divider mx-auto h-[1px] w-4/5 bg-text-gray mb-4"></div>

        <p class="mb-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, alias dicta numquam porro hic iste explicabo temporibus! Aspernatur optio, quod expedita facilis pariatur ratione! Consequatur perferendis repellendus quos necessitatibus dignissimos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, architecto veniam voluptas quae necessitatibus in natus sint quos magnam beatae iste aliquam tempora repellendus perferendis laboriosam magni est harum nisi?</p>
        <h3 class="border-4 border-primary px-4 py-2 text-xl mb-4">IBAN: SK00 0000 0000 0012 1248</h3>
        <h3 class="text-2xl self-start pl-4">DAKUJEME</h3>
    </div>

</div>

<?php get_footer(  ); ?>