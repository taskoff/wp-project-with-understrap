<div class="listing-container">
    <?php 
            $args = array(
                'posts_per_page'   => -1, // -1 here will return all posts
                'post_type'        => 'books', //your custom post type
                'post_status'      => 'publish',
            );
            $projects = get_posts( $args );

            foreach ($projects as $project) {
                printf('<div class="listing-item-container">
                            <div class="listing-item-img">%s</div>
                            <div class="listing-item-title"><a href="%s">%s</a></div>
                            <div class="listing-item-excerpt"><a href="%s">%s</a></div>
                        </div>', get_the_post_thumbnail($project->ID),
                        get_permalink($project->ID), 
                        $project->post_title, 
                        get_permalink($project->ID),
                        get_the_excerpt($project->ID));

                // printf('<div class="listing-item-img">%s</div>',
                // get_the_post_thumbnail($project->ID));
                // printf('<div class="listing-item-title"><a href="%s">%s</a></div>',
                //         get_permalink($project->ID),
                //         $project->post_title); 
                // printf('<div class="listing-item-title"><a href="%s">%s</a></div>',
                // get_permalink($project->ID),
                // get_the_excerpt($project->ID)); 

                        // get_post_meta($post->ID, 'Mood', true);
                };
            
    ?>

</div>

