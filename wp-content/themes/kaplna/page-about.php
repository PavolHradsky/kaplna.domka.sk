<?php get_header(); ?>

<div class="content w-full h-screen flex">
    <div class="active item bg-orange-400 grow transition-all flex flex-col items-center">
        <div class="title origin-left transition-transform w-fit">
            <h3>Hello World</h3>
        </div>
        <div class="inner-content flex flex-col items-center">
            <p class="w-80 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#">Citaj dalej</a>
        </div>
    </div>
    <div class="item bg-orange-500 w-24 cursor-pointer transition-all flex flex-col items-center">
        <div class="title origin-left rotate-90 translate-x-1/2 transition-transform w-fit">
            <h3>Hello World</h3>
        </div>
        <div class="inner-content hidden flex-col items-center">
            <p class="w-80 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#">Citaj dalej</a>
        </div>
    </div>
    <div class="item bg-orange-600 w-24 cursor-pointer transition-all flex flex-col items-center">
        <div class="title origin-left rotate-90 translate-x-1/2 transition-transform w-fit">
            <h3>Hello World</h3>
        </div>
        <div class="inner-content hidden flex-col items-center">
            <p class="w-80 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#">Citaj dalej</a>
        </div>
    </div>
    <div class="item bg-orange-700 w-24 cursor-pointer transition-all flex flex-col items-center">
        <div class="title origin-left rotate-90 translate-x-1/2 transition-transform w-fit">
            <h3>Hello World</h3>
        </div>
        <div class="inner-content hidden flex-col items-center">
            <p class="w-80 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#">Citaj dalej</a>
        </div>
    </div>
    <div class="item bg-orange-800 w-24 cursor-pointer transition-all flex flex-col items-center">
        <div class="title origin-left rotate-90 translate-x-1/2 transition-transform w-fit">
            <h3>Hello World</h3>
        </div>
        <div class="inner-content hidden flex-col items-center">
            <p class="w-80 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, incidunt officiis tenetur ipsa dicta nisi. Consequatur ipsum quo itaque, iusto, quas tempore eligendi officia laboriosam, minima magnam culpa reiciendis quod.</p>
            <a href="#">Citaj dalej</a>
        </div>
    </div>
</div>

<script>
    let items = document.querySelectorAll(".item");
    [].forEach.call(items, item => {
        item.addEventListener('click', () => {
            if(!item.classList.contains('active')){
                [].forEach.call(items, item => {
                    if(item.classList.contains('active')){
                        item.classList.remove('active');
                        item.classList.remove('grow');
                        item.classList.add('w-24');
                        item.classList.add('cursor-pointer');
                        item.querySelector('.inner-content').classList.add('hidden');
                        item.querySelector('.inner-content').classList.remove('flex');
                        item.querySelector('.title').classList.add('rotate-90');
                        item.querySelector('.title').classList.add('translate-x-1/2');
                    }
                })
                item.classList.remove('w-24');
                item.classList.add('grow');
                item.classList.add('active');
                item.classList.remove('cursor-pointer');
                item.querySelector('.inner-content').classList.remove('hidden');
                item.querySelector('.inner-content').classList.add('flex');
                item.querySelector('.title').classList.remove('rotate-90');
                item.querySelector('.title').classList.remove('translate-x-1/2');
            }
        })
    });
</script>

<?php get_footer(); ?>