<?php get_header(); ?>

<h1 class="text-4xl text-center p-2 my-8"><?php the_title(""); ?></h1>
<div class="content w-full md:h-full md:min-h-[80vh] flex flex-col md:flex-row gap-1">
    

    <?php 
        $args = array('category_name' => 'o-nas', 'order' => 'ASC', 'posts_per_page' => 10);
        $posts = get_posts( $args );
        $count = 0;
        foreach ($posts as $post) { ?>

            <div class="<?php echo ($count == 0 ? 'active' : 'inactive') ?> item transition-all duration-300 flex flex-col items-center justify-between md:min-h-[35rem] bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0) 50%), url('<?php echo the_post_thumbnail_url(); ?>');">
                <div class="wrapper flex flex-col items-center justify-center md:justify-start">
                    <div class="title origin-left transition-transform w-fit text-3xl">
                        <h3><?php echo the_title(); ?></h3>
                    </div>
                </div>
                <div class="inner-content flex-col gap-6 items-center bg-half-white-transparent w-full p-6 text-center">
                    <p class="md:max-w-[20rem] lg:max-w-[30rem] xl:max-w-[40rem]"><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="bg-primary hover:bg-primary-hover px-3 py-1 rounded-full">Čítaj ďalej</a>
                </div>
            </div>

        <?php $count++;
        } ?>


    <!-- <div class="active item bg-orange-400 transition-all flex flex-col items-center justify-between h-[30rem]">
        <div class="wrapper flex flex-col items-center">
            <div class="title origin-left transition-transform w-fit text-3xl">
                <h3>Hello World</h3>
            </div>
        </div>
        <div class="inner-content flex-col gap-6 items-center bg-half-white-transparent w-full p-6">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#" class="bg-secondary px-3 py-1 rounded-full">Citaj dalej</a>
        </div>
    </div>
    <div class="inactive item bg-orange-500 transition-all flex flex-col items-center justify-between h-[30rem]">
        <div class="wrapper flex flex-col items-center">
            <div class="title origin-left transition-transform w-fit text-3xl">
                <h3>Hello World</h3>
            </div>
        </div>
        <div class="inner-content flex-col gap-6 items-center bg-half-white-transparent w-full p-6">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#" class="bg-secondary px-3 py-1 rounded-full">Citaj dalej</a>
        </div>
    </div>
    <div class="inactive item bg-orange-600 transition-all flex flex-col items-center justify-between h-[30rem]">
        <div class="wrapper flex flex-col items-center">
            <div class="title origin-left transition-transform w-fit text-3xl">
                <h3>Hello World</h3>
            </div>
        </div>
        <div class="inner-content flex-col gap-6 items-center bg-half-white-transparent w-full p-6">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#" class="bg-secondary px-3 py-1 rounded-full">Citaj dalej</a>
        </div>
    </div>
    <div class="inactive item bg-orange-700 transition-all flex flex-col items-center justify-between h-[30rem]">
        <div class="wrapper flex flex-col items-center">
            <div class="title origin-left transition-transform w-fit text-3xl">
                <h3>Hello World</h3>
            </div>
        </div>
        <div class="inner-content flex-col gap-6 items-center bg-half-white-transparent w-full p-6">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#" class="bg-secondary px-3 py-1 rounded-full">Citaj dalej</a>
        </div>
    </div>
    <div class="inactive item bg-orange-800 transition-all flex flex-col items-center justify-between h-[30rem]">
        <div class="wrapper flex flex-col items-center">
            <div class="title origin-left transition-transform w-fit text-3xl">
                <h3>Hello World</h3>
            </div>
        </div>
        <div class="inner-content flex-col gap-6 items-center bg-half-white-transparent w-full p-6">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#" class="bg-secondary px-3 py-1 rounded-full">Citaj dalej</a>
        </div>
    </div> -->
</div>

<script>
    let items = document.querySelectorAll(".item");
    [].forEach.call(items, item => {
        item.addEventListener('click', () => {
            if(!item.classList.contains('active')){
                [].forEach.call(items, item => {
                    if(item.classList.contains('active')){
                        item.classList.remove('active');
                        item.classList.add('inactive');
                        // item.classList.remove('grow');
                        // item.classList.add('w-24');
                        // item.classList.add('cursor-pointer');
                        // item.querySelector('.inner-content').classList.add('hidden');
                        // item.querySelector('.inner-content').classList.remove('flex');
                        // item.querySelector('.title').classList.add('rotate-90');
                        // item.querySelector('.title').classList.add('translate-x-1/2');
                    }
                })
                // item.classList.remove('w-24');
                // item.classList.add('grow');
                item.classList.add('active');
                item.classList.remove('inactive');
                // item.classList.remove('cursor-pointer');
                // item.querySelector('.inner-content').classList.remove('hidden');
                // item.querySelector('.inner-content').classList.add('flex');
                // item.querySelector('.title').classList.remove('rotate-90');
                // item.querySelector('.title').classList.remove('translate-x-1/2');
            }
        })
    });
</script>

<?php get_footer(); ?>