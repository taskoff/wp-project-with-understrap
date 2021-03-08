<div class="testimonials-listing-container">
    <?php 
            $args = array(
                'posts_per_page'   => 3, // -1 here will return all posts
                'post_type'        => 'testimonials', //your custom post type
                'post_status'      => 'publish',
            );
            $projects = get_posts( $args );

            foreach ($projects as $project) {
                printf('<div class="listing-item-container">
                            <div class="listing-item-img">%s</div>
                            <div class="listing-item-text">
                            <div class="listing-item-title">%s</div>
                            <div class="listing-item-excerpt"><span>"</span>%s<span>"</span></div>
                            </div>
                        </div>', get_the_post_thumbnail($project->ID),
                        // get_permalink($project->ID), 
                        // $project->post_title,
                        get_post_meta($project->ID, 'Name', true),
                        // get_permalink($project->ID),
                        $project->post_content);
            };
            
    ?>

</div>