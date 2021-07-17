<?php 
    //Custom Shortcodes
    function daliaomar_programs_list(){
        $args = [
            'post_type' => 'program',
            'posts_per_page' => -1
        ];
        $query = new WP_Query($args);
        $Programs = '<div class="container"><div class="row">';
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                $Programs .= '
                <div class="col-4">
                    <div class="single-program-page-item" style="background-image:url('.get_the_post_thumbnail_url().')">
                        <img src="'.get_field('color_image').'" />
                        <div class="single-program-card-content">
                            <h3>'.get_the_title().'</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 program-content">
                    <h2>'.get_the_title().'</h2>
                    '.get_the_content().'
                    <br>
                    <div class="text-center">
                        <a href="#" class="book-now-btn">BOOK NOW</a>
                    </div>
                </div>';
            }
            $Programs .= '</div></div>';
        }else{
            return "There are no programs to show at the moment";
        }
        return $Programs;
    }
    function daliaomar_programs_single(){
        if(isset($_GET['program'])){
            $ProgramSlug = $_GET['program'];
            $args = array(
                'name' => $the_slug,
                'post_type'   => 'program',
                'post_status' => 'publish',
                'numberposts' => 1
            );
            $my_posts = get_posts($args);
            while($my_posts->have_posts()){
                return '
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="single-program-page-item" style="background-image:url('.get_the_post_thumbnail_url().')">
                                <img src="'.get_field('color_image').'" />
                                <div class="single-program-card-content">
                                    <h3>'.get_the_title().'</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 program-content">
                            <h2>'.get_the_title().'</h2>
                            '.get_the_content().'
                            <br>
                            <div class="text-center">
                                <a href="#" class="book-now-btn">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        }else{
            exit('Please Choose a program');
        }
    }
    add_shortcode('daliaomar_programs_list', 'daliaomar_programs_list');
    add_shortcode('daliaomar_programs_single', 'daliaomar_programs_single');
?>