<div class="main__content__topstory">
    <div class="main__title">
        <h2>Tin mới nhất</h2>
    </div>  
    <?php 
        $args = array(
            'posts_per_page' => 1, 
            'post_type' => 'post', 
            'post_status' => 'publish',
            );
    ?>
    <?php $getposts = new WP_query($args); ?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="main__content__topstory-news-items">
            <div class="thumb-art-topstory">
                <a href="<?php the_permalink()?>">            
                    <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                </a>
            </div>
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
    <?php endwhile; wp_reset_postdata(); ?>

    
    <div class="newstrending">
        <?php 
            $args = array(
                'posts_per_page' => 3, 
                'post_status' => 'publish', 
                'post_type' => 'post', 
                'offset'=> 1,
            );
        ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>   
            <div class="newstrending-item">
                <div class="news-items">
                    <div class="thumb-art">
                        <a href="<?php the_permalink()?>">
                            <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                        </a>
                    </div>
                    <h3 class="news-title">
                        <a href="<?php the_permalink()?>"><?php the_title()?></a>
                    </h3>
                    <p class="news-meta">
                        <span>Tác Giả: <?php the_author()?></span> 
                        <span>Ngày đăng: <?php echo get_the_date()?></span>
                        <span>Lượt xem: <?php echo getpostviews(get_the_id());?></span>
                    </p>   
                </div>
            </div>     
        <?php endwhile; wp_reset_postdata(); ?>
    </div>  
</div>