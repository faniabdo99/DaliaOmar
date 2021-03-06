<?php 
    //Custom Shortcodes
    function daliaomar_programs_list(){
        $args = [
            'post_type' => 'program',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ];
        $query = new WP_Query($args);
        $Programs = '<div class="container">';
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                $TheSlug = get_post_field( 'post_name', get_post() ); 
                $Programs .= '
                <div class="row align-items-center single-program-container" id="'.$TheSlug.'">
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="single-program-page-item" style="background:url('.get_the_post_thumbnail_url().') center top no-repeat;background-size:cover;">
                            <img src="'.get_field('color_image').'" />
                            <div class="single-program-card-content text-center text-uppercase">
                                <h3>'.get_the_title().'</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 program-content">
                        <h2>'.get_the_title().'</h2>
                        <br>
                        '.get_the_content().'
                        <br>
                        <div class="text-center">
                            <a href="'.get_the_permalink().'" class="book-now-btn">BOOK NOW</a>
                        </div>
                    </div>
                </div>';
            }
            $Programs .= '</div>';
        }else{
            return "There are no programs to show at the moment";
        }
        return $Programs;
    }
    function daliaomar_programs_single(){
        global $post;
        return '
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-4 offset-lg-4">
                    <div class="single-program-page-item" style="background:url('.get_the_post_thumbnail_url().') center top no-repeat;background-size:cover;">
                        <img src="'.get_field('color_image').'" />
                        <div class="single-program-card-content text-center text-uppercase">
                            <h3 class="text-center">'.get_the_title().'</h3>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-8 col-12 program-content">
                    <h2 class="program-selected">PROGRAM SELECTED</h2>
                </div> -->
            </div>
        </div>';
    }
    add_shortcode('daliaomar_programs_list', 'daliaomar_programs_list');
    add_shortcode('daliaomar_programs_single', 'daliaomar_programs_single');
?>