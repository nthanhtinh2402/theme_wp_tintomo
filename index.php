<?php get_header()?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="main__content">
                    <?php get_template_part('topstory')?>
                    <div class="main__title">
                        <h2>bài viết liên quan</h2>
                    </div>  
                    <?php get_template_part('related')?>
                </div>
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
<?php get_footer()?>
<?php wp_footer(); ?>
</body>
</html>