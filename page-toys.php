<?php
/*
Template Name: Игрушки
*/
?>

<?php get_header(); ?>

<div class="toys">
    <div class="container">
        <h2 class="subtitle">
            <a href="<?php echo get_category_link( get_category_by_slug('soft_toys')->term_id ); ?>">Все развивающие игрушки</a>
        </h2>

        <div class="toys__wrapper">
            <?php
                $soft_toys_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'soft_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, 
                ) );

                global $post;

                foreach( $soft_toys_posts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="toys__item" style="background-image: url(<?php
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        }
                    ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>                        
                            </div>
                            <a href="<?php echo get_permalink() ?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                    <?php
                    }
                wp_reset_postdata();
            ?>
        </div>
        <h2 class="subtitle"><a href="<?php echo get_category_link( get_category_by_slug('edu_toys')->term_id ); ?>">Развивающие игрушки </a></h2>
        <div class="toys__wrapper">
            <?php
                $edu_toys_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'edu_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, 
                ) );

                global $post;

                foreach( $edu_toys_posts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="toys__item" style="background-image: url(<?php
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        }
                    ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>                        
                            </div>
                            <a href="<?php echo get_permalink() ?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                    <?php
                    }
                wp_reset_postdata();
            ?>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...!
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>