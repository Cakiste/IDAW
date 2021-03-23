<?php
/*
Plugin Name: carrousel
Description: Permet de gerer un joli slider en homepage
Author: Thomas
Version: 1.0
*/
add_action("init","caroussel_init");
add_action('add_meta_boxes','caroussel_metaboxes');
add_action('save_post','caroussel_savepost',10,2);
function caroussel_init() {
    $labels = array(
    'name' => 'Slide',
    'singular_name' => 'Slide',
    'add_new' => 'Ajouter une Slide',
    'add_new_item' =>'Ajouter une nouvelle Slide',
    'edit_item'=> 'Editer une Slide',
    'new_item' => 'Nouvelle Slide',
    'view_item' => 'Voir la Slide',
    'search_items' => 'Rechercher une Slide',
    'not_found' => 'Aucune Slide',
    'not_found_in_thrash' => 'Aucune Slide dans la corbeille',
    'parent_item_colon' => '',
    'menu_name' => 'Slides'
    );

    register_post_type('slide',array(
        'public' => true,
        'publicly_queryable' => false,
        'labels' => $labels,
        'capability_type' => 'post',
        'supports' => array('title','thumbnail')
    ));

    add_image_size('slider',1000,300);
}

function caroussel_metaboxes(){
    add_meta_box('caroussel','Lien','caroussel_metabox','slide','normal','high');
}

function caroussel_metabox($object){
    ?>
    <div class="meta-box-item-title">
        <h4>Lien de ce slide</h4>
    </div>
    <div class="meta-box-item-content">
        <input type="text" name=caroussel_link style="width:100%;" value ="<?= esc_attr(get_post_meta($object->ID,'_link',true));?>">
    </div>
    <?php
}

function caroussel_savepost($post_id,$post){
    if(!isset($_POST['caroussel_link'])){
        return $post_id;
    }
    update_post_meta($post_id,'_link',$_POST['caroussel_link']);
}

function caroussel_show($limit = 10) {
    wp_enqueue_script('caroufredsel',plugins_url().'/caroussel/js/jquery.carouFredSel-6.2.1-packed.js',array('jquery'),null,"6.2.1",true);
    add_action('wp_footer','caroussel_script',30);
    $slides = new WP_query("post_type=slide&posts_per_page=$limit");
    echo '<div id="caroussel">';
    while($slides->have_posts()){
        $slides->the_post();
        global $post;
        the_post_thumbnail('slider',array('style' => 'height:300px!important'));
    }
    echo '</div>';
}

function caroussel_script(){
    ?>
    <script type = "text/javascript">
        (function($){
            $('#caroussel').caroufredsel();
        })(jQuery);
        </script>
        <?php
}