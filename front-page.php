<?php get_header(); ?>
<?php
$text = get_field('hero_text');
$color_text = get_field('hero_color_text');
$button = get_field('hero_btn');
$image = get_field('hero_image');
$image_dark = get_field('hero_image_dark');
?>
<section class="hero">
    <div class="container">
        <div class="row hero_content">
            <div class="hero__textWrapper col-lg-8 col-md-8 col-12">
                <?php if ($text) : ?>
                    <div class="hero__text text--size--50 font--weight--100 ">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($color_text) : ?>
                    <div class="hero__color__text text--size--28">
                        <?php echo $color_text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <div class="hero__button">
                        <a href="<?php echo $button['url']; ?>" class="btn btn--default"><?php echo $button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($image || $image_dark) : ?>
                <div class="hero__image col-lg-4 col-md-4 col-12">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    <img class="dark" src="<?php echo $image_dark['url']; ?>" alt="<?php echo $image_dark['title']; ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$title = get_field('guidelines_title');
$text = get_field('guidelines_text');
$button = get_field('guidelines_button');
$testimonial_image = get_field('guidelines_testimonial_image');
$testimonial_image_dark = get_field('guidelines_testimonial_image_dark');
$testimonial_title = get_field('guidelines_testimonial_title', false, false);
$testimonial_text = get_field('guidelines_testimonial_text');
$testimonial_owner = get_field('guidelines_testimonial_owner');
?>
<section class="guidelines">
    <div class="container">
        <div class="guidelines__main">
            <?php if ($title || $text) : ?>
                <div class="guidelines__top gs_reveal gs_reveal_fromLeft">
                    <?php if ($title) : ?>
                        <h2 class="guidelines__title h1 font--weight--100 "><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="guidelines__text"><?php echo $text; ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($testimonial_image || $testimonial_image_dark || $testimonial_title || $testimonial_text || $testimonial_owner) : ?>
                <div class="guidelines__testimonial gs_reveal gs_reveal_fromRight" id="case_study">
                    <?php if ($testimonial_image || $testimonial_image_dark) : ?>
                        <div class="guidelines__testimonialRobbot">
                            <img src="<?php echo $testimonial_image['url'] ?>" alt="<?php echo $testimonial_image['title']; ?>">
                            <img class="dark" src="<?php echo $testimonial_image_dark['url'] ?>" alt="<?php echo $testimonial_image_dark['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($testimonial_title) : ?>
                        <h3 class="guidelines__testimonialTitle h2 font--weight--100"><?php echo $testimonial_title; ?></h3>
                    <?php endif; ?>
                    <?php if ($testimonial_text) : ?>
                        <div class="guidelines__testimonialText"><?php echo $testimonial_text; ?></div>
                    <?php endif; ?>
                    <!-- <div class="guidelines__readMore">Read more...</div> -->
                    <?php if ($testimonial_owner) : ?>
                        <div class="guidelines__testimonialOwner">
                            <?php echo $testimonial_owner; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($button) :
                $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                <div class="guidelines__btn gs_reveal">
                    <a href="<?php echo $button['url']; ?>" class="btn" target="<?php echo esc_attr($link_target); ?>"><?php echo $button['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$title = get_field('about_services_title', false, false);
$text = get_field('about_services_text');
$under_cards_text = get_field('under_cards_text');
$button = get_field('about_services_btn');
?>

<section class="services gs_reveal gs_reveal_fromLeft" id="solutions">
    <div class="container">
        <div class="services__inner">
            <?php if ($title || $text) : ?>
                <div class="services__top ">
                    <?php if ($title) : ?>
                        <h2 class="services__topTitle h1 font--weight--100"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="services__topText">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if (have_rows('about_services_cards')) : ?>
                <div class="services__cards row">
                    <?php while (have_rows('about_services_cards')) : the_row(); ?>
                        <?php
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $image_dark = get_sub_field('image_dark');
                        $text = get_sub_field('text');
                        ?>
                        <div class="services__cardsItem__wrapper col-sm-3 col-6">
                            <div class="services__cardsItem">
                                <?php if ($image || $image_dark) : ?>
                                    <div class="services__cardsItem__image">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>">
                                        <img class="dark" src="<?php echo $image_dark['url'] ?>" alt="<?php echo $image_dark['title']; ?>">
                                    </div>
                                <?php endif; ?>
                                <?php if ($title) : ?>
                                    <h3 class="services__cardsItem__title font--weight--400"><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="services__cardsItem__text"><?php echo $text; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="services__text">
                <?php echo $under_cards_text ?>
            </div>
            <!-- <div class="services__text__readMore">Read more...</div> -->
            <?php if ($button) :
                $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                <div class="services__btn">
                    <a href="<?php echo $button['url']; ?>" class="btn btn--default" target="<?php echo esc_attr($link_target); ?>"><?php echo $button['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$pain = get_field('problem');
$solution = get_field('solution');
$pain_title = $pain['title'];
$pain_text = $pain['text'];
$pain_image = $pain['image'];
$pain_image_dark = $pain['image_dark'];
$pain_tablet_image = $pain['tablet_image'];
$pain_tablet_image_dark = $pain['tablet_image_dark'];
$solution_title = $solution['title'];
$solution_text = $solution['text'];
$solution_image = $solution['image'];
$solution_image_dark = $solution['image_dark'];
$solution_tablet_image = $solution['tablet_image'];
$solution_tablet_image_dark = $solution['tablet_image_dark'];
?>
<section class="pain__solution">
    <div class="container">
        <?php if ($pain_title || $pain_text || $pain_image) : ?>
            <div class="pain__wrapper pain__solutionBlock__wrapper gs_reveal gs_reveal_fromLeft">
                <div class="pain pain__solutionBlock">
                    <?php if ($pain_image && $pain_tablet_image) : ?>
                        <div class="pain__image">
                            <img src="<?php echo $pain_image['url']; ?>" alt="<?php echo $pain_image['title']; ?>">
                            <img class="dark" src="<?php echo $pain_image_dark['url']; ?>" alt="<?php echo $pain_image_dark['title']; ?>">
                        </div>
                        <div class="pain__image tablet">
                            <img src="<?php echo $pain_tablet_image['url']; ?>" alt="<?php echo $pain_tablet_image['title']; ?>">
                            <img class="dark" src="<?php echo $pain_tablet_image_dark['url']; ?>" alt="<?php echo $pain_tablet_image_dark['title']; ?>">
                        </div>
                    <?php elseif ($pain_tablet_image) : ?>
                        <div class="pain__image no-desktop">
                            <img src="<?php echo $pain_tablet_image['url']; ?>" alt="<?php echo $pain_tablet_image['title']; ?>">
                            <img class="dark" src="<?php echo $pain_tablet_image_dark['url']; ?>" alt="<?php echo $pain_tablet_image_dark['title']; ?>">
                        </div>
                    <?php elseif ($pain_image) : ?>
                        <div class="pain__image no-tablet">
                            <img src="<?php echo $pain_image['url']; ?>" alt="<?php echo $pain_image['title']; ?>">
                            <img class="dark" src="<?php echo $pain_image_dark['url']; ?>" alt="<?php echo $pain_image_dark['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($pain_title) : ?>
                        <div class="pain__solutionTitle"><?php echo $pain_title; ?></div>
                    <?php endif; ?>
                    <?php if ($pain_text) : ?>
                        <div class="pain__solutionText"><?php echo $pain_text; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($solution_image || $solution_text || $solution_title) : ?>
            <div class="solution__wrapper pain__solutionBlock__wrapper gs_reveal gs_reveal_fromRight">
                <div class="solution pain__solutionBlock">
                    <?php if ($solution_image && $solution_tablet_image) : ?>
                        <div class="solution__image">
                            <img src="<?php echo $solution_image['url']; ?>" alt="<?php echo $solution_image['title']; ?>">
                            <img class="dark" src="<?php echo $solution_image_dark['url']; ?>" alt="<?php echo $solution_image_dark['title']; ?>">
                        </div>
                        <div class="solution__image tablet">
                            <img src="<?php echo $solution_tablet_image['url']; ?>" alt="<?php echo $solution_tablet_image['title']; ?>">
                            <img class="dark" src="<?php echo $solution_tablet_image_dark['url']; ?>" alt="<?php echo $solution_tablet_image_dark['title']; ?>">
                        </div>
                    <?php elseif ($solution_tablet_image) : ?>
                        <div class="solution__image no-desktop">
                            <img src="<?php echo $solution_tablet_image['url']; ?>" alt="<?php echo $solution_tablet_image['title']; ?>">
                            <img class="dark" src="<?php echo $solution_tablet_image_dark['url']; ?>" alt="<?php echo $solution_tablet_image_dark['title']; ?>">
                        </div>
                    <?php elseif ($solution_image) : ?>
                        <div class="solution__image no-tablet">
                            <img src="<?php echo $solution_image['url']; ?>" alt="<?php echo $solution_image['title']; ?>">
                            <img class="dark" src="<?php echo $solution_image_dark['url']; ?>" alt="<?php echo $solution_image_dark['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($solution_title) : ?>
                        <div class="pain__solutionTitle"><?php echo $solution_title; ?></div>
                    <?php endif; ?>
                    <?php if ($solution_text) : ?>
                        <div class="pain__solutionText"><?php echo $solution_text; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
$title = get_field('lets_work_title', false, false);
$text = get_field('lets_work_text');
$button = get_field('lets_work_button');
?>
<section class="letsWork gs_reveal">
    <div class="container">
        <div class="letsWork__wrapper">
            <?php if ($title) : ?>
                <h2 class="letsWork__title h1"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if ($text) : ?>
                <div class="letsWork__text"><?php echo $text; ?></div>
                <!-- <div class="letsWork__text__readMore">Read more...</div> -->
            <?php endif; ?>
            <?php if ($button) : ?>
                <div class="letsWork__button">
                    <a href="<?php echo $button['url'] ?>" class="btn btn--default"><?php echo $button['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
$title = get_field('list_section__title', false, false);
$left_img = get_field('list_section__left_img');
$left_img_dark = get_field('list_section__left_img_dark');
$list_section_button = get_field('list_section__button');

if ($title || have_rows('list_section__blocks') || have_rows('list_section__rows')) : ?>
    <section class="list_section" id="about">
        <div class="container">
            <div class="list_section__wrapper gs_reveal">
                <div class="list_section__top ">
                    <?php if ($title) : ?>
                        <h2 class="list_section__title h1 font--weight--100"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if (have_rows('list_section__blocks')) :
                        while (have_rows('list_section__blocks')) : the_row();
                            $text = get_sub_field('text');
                            $img = get_sub_field('img');
                            $img_dark = get_sub_field('img_dark');
                            $subtitle = get_sub_field('add_subtitle'); ?>
                            <div class="list_section__inner">
                                <?php if ($img) : ?>
                                    <div class="img_block">
                                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
                                        <img class="dark" src="<?php echo $img_dark['url'] ?>" alt="<?php echo $img_dark['title'] ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="content-block_main">
                                    <div class="content-block text--size--20">
                                        <?php echo $text ?>
                                    </div>
                                    <?php if ($subtitle) : ?>
                                        <div class="button_block">
                                            <div class="btn btn--white">
                                                <span><?php echo $subtitle ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (have_rows('list_section__rows') || $left_img) : ?>
                    <div class="list_section__bottom">
                        <div class="left_img ">
                            <img src="<?php echo $left_img['url'] ?>" alt="<?php echo $left_img['title'] ?>">
                            <img class="dark" src="<?php echo $left_img_dark['url'] ?>" alt="<?php echo $left_img_dark['title'] ?>">
                        </div>
                        <?php if (have_rows('list_section__rows')) : ?>
                            <div class="list_section__bottom-rows">
                                <ul>
                                    <?php while (have_rows('list_section__rows')) : the_row();
                                        $text = get_sub_field('content');
                                        $subtitle = get_sub_field('subtitle'); ?>
                                        <li class="inner_block">
                                            <div class="subtitle">
                                                <h3 class="text--size--20"><?php echo $subtitle ?></h3>
                                            </div>
                                            <div class="content-block text--size--20">
                                                <?php echo $text ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>

                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($list_section_button) : ?>
                    <a href="<?php echo $list_section_button['url'] ?>" class="btn btn--default">
                        <?php echo $list_section_button['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$testimonials_title = get_field('testimonials_text');
$testimonials_row = get_field('testimonials')
?>
<section class="testimonials">
    <div class="container">
        <div class="testimonials__main">
            <?php if ($testimonials_title || $testimonials_row) : ?>
                <div class="testimonials__top">
                    <?php if ($testimonials_title) : ?>
                        <h2 class="testimonials__title h1 font--weight--100 text--center"><?php echo $testimonials_title; ?></h2>
                    <?php endif; ?>
                    <?php if ($testimonials_row) : ?>
                        <div class="testimonials__rows">
                            <?php foreach ($testimonials_row as $item) :
                                $output = apply_filters('the_content', $item->post_content); ?>
                                <div class="testimonials__item content-block">
                                    <blockquote><?php echo $item->post_content; ?></blockquote>
                                    <h3 class="author font--weight--100 text--center"><?php echo get_the_title($item->ID); ?></h3>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>