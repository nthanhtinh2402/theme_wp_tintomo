<?php get_header()?>
<div class="breadcrumbs">
    <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p  id="breadcrumbs">','</p>' );}?>
    </div>
</div>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="main__content">
                    
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h1 class="news-title"><?php the_title()?></h1>

                        <?php setpostview(get_the_id());?>
                        <p class="news-meta">
                            <span>Tác Giả: <?php the_author()?></span> 
                            <span>Ngày đăng: <?php echo get_the_date()?></span>
                            <span>Lượt xem: <?php echo getpostviews(get_the_id());?> views</span>
                            
                        </p>
                        <article>
                            <?php the_content( )?>
                        </article>
                        <div class="tag">
                           <p><?php the_tags('Từ Khoá:')?></p> 
                        </div>
                        <div class="main__title">
                            <h2>bài viết liên quan</h2>
                        </div>  
                        <ul class="related-posts">
                            <?php
                                $categories = get_the_category($post->ID);
                                if ($categories) 
                                {
                                    $category_ids = array();
                                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                            
                                    $args=array(
                                    'category__in' => $category_ids,
                                    'post__not_in' => array($post->ID),
                                    'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                                    'caller_get_posts'=>1
                                    );
                                    $my_query = new wp_query($args);
                                    if( $my_query->have_posts() ) 
                                    {
                                        echo '<ul class="related-posts">';
                                        while ($my_query->have_posts())
                                        {
                                            $my_query->the_post();
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
                                                            <span>Lượt xem: 1.431 views</span>
                                                        </p>   
                                                        <p class="description"><?php the_excerpt()?></p>
                                                    </div>
                                                </li>
                                            <?php
                                        }
                                        echo '</ul>';
                                    }
                                }
                            ?>
                        </ul>
                    <?php endwhile; else : ?>
                    <?php endif; ?>
                    
                </div>
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
<?php get_footer()?>
<?php wp_footer(); ?>
</body>
</html>