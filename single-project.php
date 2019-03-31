<?php
/**
 * Template Name: Single Project Template
 * Template Post Type: project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Misfit
 */

get_header();
?>

<div id="primary">
  <div class="container">

    <section class="project-page">

      <?php while (have_posts()) : the_post(); ?>

        <h1 class="project-page__title"><?php the_title(); ?></h1>
        
        <div class="project-page__meta">          
        <h3 class="project-page__meta__client"><?php the_field('client_name'); ?></h3>
        <ul class="project-page__meta__category-list">
          <?php
          foreach (get_categories() as $category){
            echo "<li>";
            echo $category->name;
            echo "</li>";
          } ?>
        </ul>
        </div>

      <?php

        the_content(); ?>

        <a href="<?php echo get_home_url(); ?>/portfolio" class="btn btn--medium btn--secondary btn--back">See all projects</a>


        <?php
        // RELATED PROJECTS
        //get the taxonomy terms of custom post type
        $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );

        //query arguments
        $args = array(
            'post_type' => 'project',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $customTaxonomyTerms
                )
            ),
            'post__not_in' => array ($post->ID),
        );

        //the query
        $relatedPosts = new WP_Query( $args );

        //loop through query
        if($relatedPosts->have_posts()){
            echo '<h2 class="related-posts-title">Related projects</h2> <div class="related-posts">';
            while($relatedPosts->have_posts()){ 
              $relatedPosts->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="portfolio-item">
              <div class="portfolio-item__content">
                <div class="portfolio-item__content__image">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="portfolio-item__content__title">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
            </a>

        <?php }
            echo '</div>';
        } else {
            //no posts found
        }

        //restore original post data
        wp_reset_postdata();


      endwhile;
      ?>

    </section>

  </div>
</div>

<?php
get_footer();