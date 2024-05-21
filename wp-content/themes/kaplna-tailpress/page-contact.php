<?php get_header(  ); ?>

<div class="content flex w-full justify-center">
<img class="left-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("contact")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-12 2xs:w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("contact")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content max-w-4xl ml-12 2xs:ml-24 md:mx-24 p-4 flex flex-col items-center">
        <h2 class="text-center text-4xl p-2 my-2 w-full py-6"><?php the_title(""); ?></h2>
        <div class="divider mx-auto h-[1px] w-4/5 bg-text-gray mb-4"></div>

        <?php the_content(); ?>

        <!-- <div class='card border-4 border-primary bg-primary text-white p-4 flex gap-4 mb-4'>
            <img class="rounded-full" src="https://picsum.photos/200">
            <div class="content flex flex-col h-full justify-between">
                <div class="first">
                    <h4 class="text-lg">Predseda strediska</h4>
                    <h3 class="text-2xl">Bruno Sagan</h3>
                </div>
                <div class="second">
                    <p class="text-lg">email: example@example.example</p>
                    <p class="text-lg">tel: 0969420669</p>
                </div>
            </div>
        </div>

        <div class='card border-primary p-4 flex flex-row-reverse text-right gap-4 mb-4'>
            <img class="rounded-full" src="https://picsum.photos/200">
            <div class="content flex flex-col h-full justify-between">
                <div class="first">
                    <h4 class="text-lg">Predseda strediska</h4>
                    <h3 class="text-2xl">Bruno Sagan</h3>
                </div>
                <div class="second">
                    <p class="text-lg">email: example@example.example</p>
                    <p class="text-lg">tel: 0969420669</p>
                </div>
            </div>
        </div>

        <div class='card border-4 border-primary bg-primary text-white p-4 flex gap-4 mb-4'>
            <img class="rounded-full" src="https://picsum.photos/200">
            <div class="content flex flex-col h-full justify-between">
                <div class="first">
                    <h4 class="text-lg">Predseda strediska</h4>
                    <h3 class="text-2xl">Bruno Sagan</h3>
                </div>
                <div class="second">
                    <p class="text-lg">email: example@example.example</p>
                    <p class="text-lg">tel: 0969420669</p>
                </div>
            </div>
        </div>

        <div class='card border-primary p-4 flex flex-row-reverse text-right gap-4 mb-4'>
            <img class="rounded-full" src="https://picsum.photos/200">
            <div class="content flex flex-col h-full justify-between">
                <div class="first">
                    <h4 class="text-lg">Predseda strediska</h4>
                    <h3 class="text-2xl">Bruno Sagan</h3>
                </div>
                <div class="second">
                    <p class="text-lg">email: example@example.example</p>
                    <p class="text-lg">tel: 0969420669</p>
                </div>
            </div>
        </div> -->
    </div>

</div>

<?php get_footer(  ); ?>