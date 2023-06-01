<?php get_header(); ?>
<div class="content flex w-full justify-center">
<img class="left-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-left"][0] ); ?>"></img>
    <img class="right-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-right"][0] ); ?>"></img>

    <div class="inner-content max-w-4xl ml-24 md:mx-24 p-4 flex flex-col items-center">
        <h1 class="text-center text-4xl p-2 my-8"><?php the_title(""); ?></h1>
        <div class="divider w-full h-[1px] max-w-2xl bg-black mb-8"></div>

        <div class="gallery grid grid-cols-3 gap-4">
            <?php
            use FileBird\Classes\Tree;
            use FileBird\Classes\Helpers as Helpers;

            $folders = Tree::getFolders( null );

            foreach ($folders as $folder) {
                $folder_id = $folder["id"];
                $folder_name = $folder["text"];
                $image_id = Helpers::getAttachmentIdsByFolderId( $folder_id )[0];
                $image_url = wp_get_attachment_image_src($image_id)[0];
                ?>

                    <div class="flex flex-col border-4 border-[#85A392] text-center">
                        <h3 class="text-2xl "><?php echo $folder_name; ?></h3>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $folder_name; ?>">
                    </div>

                <?php

            }

            ?>
        </div>

        
    </div>

</div>
<?php get_footer(); ?>