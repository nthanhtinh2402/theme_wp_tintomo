<div class="main__sidebar">
    <div class="news__top__views">
        <div class="main__title">
            <h2>Bài Viết Xem nhiều</h2>
        </div>      
        <ul class="news__top__views-content">

            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <li class="article">
                    <div class="news__top__views-content-thumb ">
                        <a href="<?php the_permalink()?>">
                            <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                        </a>
                    </div>
                    <p class="">
                        <a href="<?php the_permalink()?>"><?php the_title()?></a>       
                    </p>
                </li>
			<?php endwhile; wp_reset_postdata(); ?>                   
        </ul>
    </div>

    <div class="page__network">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftintuctomo&tabs&min-width=100&height=70&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

</div>