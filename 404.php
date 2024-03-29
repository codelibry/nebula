<?php get_header(); ?>

<section class="errorBlock">
        <div class="container">
                <div class="errorBlock__content">
                        <h1 class="errorBlock__title"><?php _e('404','wsig');?></h1>
                        <h4 class="errorBlock__subtitle"><?php _e("Ooops! <br>This page wasn't found.","nebula");?></h4>
                        <div class="errorBlock__button"><a href="<?php echo get_home_url(  ) ?>" class="btn btn--blue btn--small font--weight--700">Go Home</a></div>
                </div>
        </div>
</section>

<?php get_footer(); ?>