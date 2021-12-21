<ul class="related-posts">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php
            $args = array(
                 
                'post_status' => 'publish', 
                'post_type' => 'post', 
                'offset'=> 5,
            );
        ?>
        <li class="article">
                <div class="article__thumbnail">
                    <a href="<?php the_permalink()?>">
                        <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                    </a>
                </div>
                <div class="article__item">
                    <h3 class="news-title">
                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                    </h3>
                    <p class="news-meta">
                        <span>Tác Giả: <?php the_author()?></span> 
                        <span>Ngày đăng: <?php echo get_the_date()?></span>
                        <span>Lượt xem: <?php echo getpostviews(get_the_id());?></span>
                    </p>   
                    <p class="description"><?php the_excerpt()?></p>
                </div>
        </li>
    <?php endwhile;?>
    <?php endif; ?>
    
    <?php if(paginate_links()!='') {?>

	<div class="next-page">
		<?php
		global $wp_query;
		$big = 999999999;
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'prev_text'    => __('«'),
			'next_text'    => __('»'),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
			) );
	    ?>
	</div>
    <?php } ?>   
    
</ul>