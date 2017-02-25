<?php
    get_header();
?>
<main class="main">
    <main class="project-wrapper">
        <div class="project">
            <div class="blog-left">
                <div class="blog-bg">
                    <h4>"Lorem ipsum dolor sit consectetuer adipiscing elit, sed diam"</h4>
                    <span class="author">adipiscing</span>
                    <div class="clear"></div>
                </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blog-img">
                    <a href="single.html">
                        <?php the_post_thumbnail(); ?>
                        <div class="blog-desc">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?>
                            </p>
                            <div class="comment">
                                <span class="icon"><img src="http://skokow-test.loc/wp-content/themes/skokov_theme_test/images/b-heart.png" title="likes" alt=""/>15</span>
                                <div class="comment-desc"><a href="#"><?php the_author(); ?></a> / <a href="#"><?php comments_number(); ?></a> /
                                    <a class="date" href="#"><?php the_date();?></a></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div>
            <div class="clear"></div>
            <ul class="dc_pagination dc_paginationA dc_paginationA06">
                <li><a href="#" class="previous">Previous</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" class="current">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">19</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#" class="next">Next</a></li>
            </ul>
        </div>
        <div class="project-sidebar">
            <div class="project-list">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('search_box');
                ?>
            </div>
            <div class="project-list">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('blog-list');
                ?>
            </div>
            <div class="project-list">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('blog-archive');
                ?>
                <div class="clear"></div>
            </div>
            <div class="project-list1">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('popularpost');
                ?>
            </div>
            <div class="project-list2">
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('tags');
                ?>
            </div>
        </div>
</main>

<?php
    get_footer();
?>

