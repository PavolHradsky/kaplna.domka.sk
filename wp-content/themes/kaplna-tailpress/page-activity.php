<?php get_header(); ?>

<h1 class="text-4xl text-center p-2 my-8">Detske Stretka</h1>
<div class="male-stretka content w-full md:h-full md:min-h-[80vh] flex flex-col md:flex-row gap-1">
    

    <?php 
        $args = array('category_name' => 'male-stretka', 'order' => 'ASC', 'posts_per_page' => 10);
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
                    <a href="<?php the_permalink(); ?>" class="bg-secondary px-3 py-1 rounded-md">Citaj dalej</a>
                </div>
            </div>

        <?php $count++;
        } ?>


</div>

<h1 class="text-4xl text-center p-2 my-8">Animatorske Stretka</h1>
<div class="velke-stretka content w-full md:h-full md:min-h-[80vh] flex flex-col md:flex-row gap-1">
    

    <?php 
        $args = array('category_name' => 'velke-stretka', 'order' => 'ASC', 'posts_per_page' => 10);
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
                    <a href="<?php the_permalink(); ?>" class="bg-secondary px-3 py-1 rounded-md">Citaj dalej</a>
                </div>
            </div>

        <?php $count++;
        } ?>


</div>

<h1 class="text-4xl text-center p-2 my-8">Akcie cez rok</h1>
<div class="akcie content w-full md:h-full md:min-h-[80vh] flex flex-col md:flex-row gap-1">
    

    <?php 
        $args = array('category_name' => 'akcie', 'order' => 'ASC', 'posts_per_page' => 10);
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
                    <a href="<?php the_permalink(); ?>" class="bg-secondary px-3 py-1 rounded-md">Citaj dalej</a>
                </div>
            </div>

        <?php $count++;
        } ?>


</div>

<script>
    let items = document.querySelectorAll(".male-stretka .item");
    [].forEach.call(items, item => {
        item.addEventListener('click', () => {
            if(!item.classList.contains('active')){
                [].forEach.call(items, item => {
                    if(item.classList.contains('active')){
                        item.classList.remove('active');
                        item.classList.add('inactive');
                    }
                })
                item.classList.add('active');
                item.classList.remove('inactive');
            }
        })
    });
    
    let items2 = document.querySelectorAll(".velke-stretka .item");
    [].forEach.call(items2, item => {
        item.addEventListener('click', () => {
            if(!item.classList.contains('active')){
                [].forEach.call(items2, item => {
                    if(item.classList.contains('active')){
                        item.classList.remove('active');
                        item.classList.add('inactive');
                    }
                })
                item.classList.add('active');
                item.classList.remove('inactive');
            }
        })
    });

    let items3 = document.querySelectorAll(".akcie .item");
    [].forEach.call(items3, item => {
        item.addEventListener('click', () => {
            if(!item.classList.contains('active')){
                [].forEach.call(items3, item => {
                    if(item.classList.contains('active')){
                        item.classList.remove('active');
                        item.classList.add('inactive');
                    }
                })
                item.classList.add('active');
                item.classList.remove('inactive');
            }
        })
    });

</script>

<?php get_footer(); ?>