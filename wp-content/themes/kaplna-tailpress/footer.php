
</div>
<?php do_action( 'tailpress_content_end' ); ?>
    <footer class="w-full flex flex-col items-center absolute bottom-0">
        <div class="upper-footer <?php echo defined("FULL_WIDTH") ? 'w-full' : 'w-[calc(100%-3rem)] 2xs:w-[calc(100%-6rem)] ml-12 2xs:ml-24'; ?> md:w-full max-w-4xl md:mx-24 md:p-10 px-4 md:px-20 flex justify-evenly gap-4 md:gap-10 pb-4">
            <a href="https://kaplna.domka.sk/"><img class="w-36" src="<?php echo get_template_directory_uri(); ?>/resources/imgs/logo-kaplna.png" alt="kaplna"></a>
            <a href="https://www.domka.sk/" target="_blank"><img class="w-36" src="<?php echo get_template_directory_uri(); ?>/resources/imgs/logo-domka.png" alt="domka"></a>
            <a href="https://saleziani.sk/" target="_blank"><img class="w-36" src="<?php echo get_template_directory_uri(); ?>/resources/imgs/logo-saleziani.png" alt="saleziani"></a>
        </div>
        <div class="bottom-footer w-full bg-primary-hover flex justify-center items-center gap-10 px-10 py-3">
            <a href="https://www.facebook.com/kaplna.mladych" target="%blank"><img class="w-8" src="<?php echo get_template_directory_uri(); ?>/resources/imgs/fb.png" alt="facebook"></a>
            <a href="https://www.instagram.com/kaplna_mladych/" target="%blank"><img class="w-8" src="<?php echo get_template_directory_uri(); ?>/resources/imgs/ig.webp" alt="instagram"></a>
            <p>KaPlná Mladých 2024</p>
            <a href="https://github.com/PavolHradsky" target="%blank">&copy; Pvol Hradský</a>
        </div>
    </footer>
</body>
<?php wp_footer(); ?>
</html>