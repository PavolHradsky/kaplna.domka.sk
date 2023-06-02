<?php get_header(); ?>
<div class="content flex w-full justify-center">
<img class="left-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover left-0 -z-10" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-left"][0] ); ?>"></img>
<img class="right-img w-24 xl:w-[14%] 2xl:w-1/5 h-screen fixed object-cover right-0 -z-10 hidden md:block" src="<?php echo wp_get_attachment_url( get_post_meta(get_page_by_path("news")->ID)["img-right"][0] ); ?>"></img>

<div class="overlay w-full h-full fixed hidden bg-half-black-transparent z-30 flex justify-center top-0 ">
    <div class="content w-5/6 max-w-2xl mt-3 ">
        <div class="flex justify-between">
            <p class="image-counter text-white"></p>
            <div class="hide-btn cursor-pointer flex flex-col justify-center relative">
                <div class="line w-6 h-1 rounded-sm bg-white rotate-45"></div>
                <div class="line w-6 h-1 rounded-sm bg-white -rotate-45 -mt-1"></div>
            </div>
        </div>
        <div class="container flex items-center w-full">
            <div class="prev flex flex-col justify-center h-20 cursor-pointer w-1/12">
                <div class="w-10 h-1 rounded-sm bg-white -rotate-45 origin-left"></div>
                <div class="w-10 h-1 rounded-sm bg-white rotate-45 origin-left mt-[-0.3rem] "></div>
            </div>
            <img class="w-10/12" id="main-img" src="" alt="">
            <div class="next flex flex-col justify-center h-20 cursor-pointer w-1/12">
                <div class="w-10 h-1 rounded-sm bg-white -rotate-45 origin-right mb-[-0.2rem]"></div>
                <div class="w-10 h-1 rounded-sm bg-white rotate-45 origin-right"></div>
            </div>
        </div>
        <div class="thumbnails flex gap-4 mt-4 overflow-x-scroll">
        </div>
    </div>
</div>


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

                    <div id="<?php echo $folder_id ?>" class="gallery-item flex flex-col border-4 border-[#85A392] text-center cursor-pointer">
                        <h3 class="text-2xl "><?php echo $folder_name; ?></h3>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $folder_name; ?>">
                    </div>

                <?php

            }
            $folders = Tree::getFolders( null );

            foreach ($folders as $folder) {
                $folder_id = $folder["id"];
                $folder_name = $folder["text"];
                $image_id = Helpers::getAttachmentIdsByFolderId( $folder_id )[0];
                $image_url = wp_get_attachment_image_src($image_id)[0];
                ?>

                    <div id="<?php echo $folder_id ?>" class="gallery-item flex flex-col border-4 border-[#85A392] text-center">
                        <h3 class="text-2xl "><?php echo $folder_name; ?></h3>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $folder_name; ?>">
                    </div>

                <?php

            }
            $folders = Tree::getFolders( null );

            foreach ($folders as $folder) {
                $folder_id = $folder["id"];
                $folder_name = $folder["text"];
                $image_id = Helpers::getAttachmentIdsByFolderId( $folder_id )[0];
                $image_url = wp_get_attachment_image_src($image_id)[0];
                ?>

                    <div id="<?php echo $folder_id ?>" class="gallery-item flex flex-col border-4 border-[#85A392] text-center">
                        <h3 class="text-2xl "><?php echo $folder_name; ?></h3>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $folder_name; ?>">
                    </div>

                <?php

            }

            ?>
        </div>

        
    </div>

</div>

<script>
    const galleryItems = document.querySelectorAll(".gallery-item")
    const overlay = document.querySelector(".overlay")
    const hideBtn = document.querySelector(".hide-btn")
    const mainImg = overlay.querySelector("#main-img")
    let imageCounter = overlay.querySelector(".image-counter")
    let thumbnails = overlay.querySelector(".thumbnails")
    let imagesIds = []
    let imagesUrls = []
    let counter = 0
    hideBtn.addEventListener('click', (e) => {
        if(!overlay.classList.contains("hidden")) {
            overlay.classList.add("hidden")
        }
        mainImg.src = ""
        thumbnails.innerHTML = ""
        counter = 0
        imagesUrls = []
        imagesIds = []
    });
    
    [].forEach.call(galleryItems, (item) => {
        const itemId = +item.id
        item.addEventListener('click', async ()=>{
            counter = 0
            if(overlay.classList.contains("hidden")) {
                overlay.classList.remove("hidden")

                let response = await fetch(`https://kaplna.domka.local/wp-json/filebird/public/v1/attachment-id/?folder_id=${itemId}`, {
                    method: "GET",
                    withCredentials: true,
                    headers: {
                        "Authorization": "Bearer lHUQL3JN9lDRpe7mcnu84F74QM0VK3vLkkFzxvkR",
                        "Content-Type": "application/json"
                    }
                })
                let data = await response.json()
                if(response.status != 200 || data.data.attachment_ids.length == 0){
                    overlay.classList.add("hidden")
                    return
                }
                imagesIds = data.data.attachment_ids
                imageCounter.innerHTML = `1/${imagesIds.length}`

                response = await fetch(`https://kaplna.domka.local/wp-json/wp/v2/media/${imagesIds[counter]}`)
                data = await response.json() 
                mainImg.src = data.source_url

                imagesIds.forEach(async imageId => {
                    response = await fetch(`https://kaplna.domka.local/wp-json/wp/v2/media/${imageId}`)
                    data = await response.json() 
                    let img = document.createElement("img")
                    img.src = data.source_url
                    imagesUrls.push(data.source_url)
                    img.className = "h-14 cursor-pointer"
                    thumbnails.appendChild(img)
                    img.addEventListener("click", ()=>{
                        mainImg.src = img.src
                        counter = imagesUrls.indexOf(mainImg.src)
                        imageCounter.innerHTML = `${counter+1}/${imagesIds.length}`
                    })
                })
            }
        })
    })

    document.querySelector(".prev").addEventListener('click', ()=>{
        counter -= 1
        if(counter < 0){
            counter = imagesUrls.length-1
        }
        mainImg.src = imagesUrls[counter]
        imageCounter.innerHTML = `${counter+1}/${imagesIds.length}`
    })
    document.querySelector(".next").addEventListener('click', ()=>{
        counter += 1
        if(counter >= imagesUrls.length){
            counter = 0
        }
        mainImg.src = imagesUrls[counter]
        imageCounter.innerHTML = `${counter+1}/${imagesIds.length}`
    })
</script>

<?php get_footer(); ?>