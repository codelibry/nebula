<?php get_header(); ?>
<?php
$text = get_field('hero_text');
$color_text = get_field('hero_color_text');
$button = get_field('hero_btn');
$image = get_field('hero_image');

?>
<section class="hero">
    <div class="container">
        <div class="row hero_content">
            <div class="hero__textWrapper col-lg-8 col-md-8 col-12">
                <?php if ($text) : ?>
                    <div class="hero__text text--size--54 font--weight--100">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($color_text) : ?>
                    <div class="hero__color__text text--size--32 text--color--pink">
                        <?php echo $color_text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <div class="hero__button">
                        <a href="<?php echo $button['url']; ?>" class="btn btn--default"><?php echo $button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($image) : ?>
                <div class="hero__image col-lg-4 col-md-4 col-12">
                    <img src="<?php echo $image['url']; ?>" alt="">
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
$testimonial_title = get_field('guidelines_testimonial_title', false, false);
$testimonial_text = get_field('guidelines_testimonial_text');
$testimonial_owner = get_field('guidelines_testimonial_owner');
?>
<section class="guidelines">
    <div class="container">
        <div class="guidelines__main">
            <?php if ($title || $text) : ?>
                <div class="guidelines__top">
                    <?php if ($title) : ?>
                        <h2 class="guidelines__title "><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="guidelines__text"><?php echo $text; ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($testimonial_image || $testimonial_title || $testimonial_text || $testimonial_owner) : ?>
                <div class="guidelines__testimonial">
                    <?php if ($testimonial_image) : ?>
                        <div class="guidelines__testimonialRobbot"><img src="<?php echo $testimonial_image['url'] ?>" alt="<?php echo $testimonial_image['title']; ?>"></div>
                    <?php endif; ?>
                    <?php if ($testimonial_title) : ?>
                        <h3 class="guidelines__testimonialTitle h2 font--weight--100"><?php echo $testimonial_title; ?></h3>
                    <?php endif; ?>
                    <?php if ($testimonial_text) : ?>
                        <div class="guidelines__testimonialText"><?php echo $testimonial_text; ?></div>
                    <?php endif; ?>
                    <div class="guidelines__readMore">Read more...</div>
                    <?php if ($testimonial_owner) : ?>
                        <div class="guidelines__testimonialOwner">
                            <?php echo $testimonial_owner; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($button) : ?>
                <div class="guidelines__btn">
                    <a href="<?php echo $button['url']; ?>" class="btn"><?php echo $button['title']; ?></a>
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

<section class="services">
    <div class="container">
        <div class="services__inner">
            <?php if ($title || $text) : ?>
                <div class="services__top">
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
                        $text = get_sub_field('text');
                        ?>
                        <div class="services__cardsItem__wrapper col-sm-3 col-6">
                            <div class="services__cardsItem">
                                <?php if ($image) : ?>
                                    <div class="services__cardsItem__image"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title']; ?>"></div>
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
            <div class="services__text"><?php echo $under_cards_text ?></div>
            <div class="services__btn">
                <a href="<?php echo $button['url']; ?>" class="btn btn--default"><?php echo $button['title']; ?></a>
            </div>
        </div>
    </div>
</section>
<?php
$pain = get_field('problem');
$solution = get_field('solution');
$pain_title = $pain['title'];
$pain_text = $pain['text'];
$pain_image = $pain['image'];
$pain_tablet_image = $pain['tablet_image'];
$solution_title = $solution['title'];
$solution_text = $solution['text'];
$solution_image = $solution['image'];
$solution_tablet_image = $solution['tablet_image'];
?>
<section class="pain__solution">
    <div class="container">
        <?php if ($pain_title || $pain_text || $pain_image) : ?>
            <div class="pain__wrapper pain__solutionBlock__wrapper">
                <div class="pain pain__solutionBlock">
                    <?php if ($pain_image && $pain_tablet_image) : ?>
                        <div class="pain__image"><img src="<?php echo $pain_image['url']; ?>" alt="<?php echo $pain_image['title']; ?>"></div>
                        <div class="pain__image tablet"><img src="<?php echo $pain_tablet_image['url']; ?>" alt="<?php echo $pain_tablet_image['title']; ?>"></div>
                    <?php elseif ($pain_tablet_image) : ?>
                        <div class="pain__image no-desktop"><img src="<?php echo $pain_tablet_image['url']; ?>" alt="<?php echo $pain_tablet_image['title']; ?>"></div>
                    <?php elseif ($pain_image) : ?>
                        <div class="pain__image no-tablet"><img src="<?php echo $pain_image['url']; ?>" alt="<?php echo $pain_image['title']; ?>"></div>
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
            <div class="solution__wrapper pain__solutionBlock__wrapper">
                <div class="solution pain__solutionBlock">
                    <?php if ($solution_image && $solution_tablet_image) : ?>
                        <div class="solution__image"><img src="<?php echo $solution_image['url']; ?>" alt="<?php echo $solution_image['title']; ?>"></div>
                        <div class="solution__image tablet"><img src="<?php echo $solution_tablet_image['url']; ?>" alt="<?php echo $solution_tablet_image['title']; ?>"></div>
                    <?php elseif ($solution_tablet_image) : ?>
                        <div class="solution__image no-desktop"><img src="<?php echo $solution_tablet_image['url']; ?>" alt="<?php echo $solution_tablet_image['title']; ?>"></div>
                    <?php elseif ($solution_image) : ?>
                        <div class="solution__image no-tablet"><img src="<?php echo $solution_image['url']; ?>" alt="<?php echo $solution_image['title']; ?>"></div>
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
<section class="letsWork">
    <div class="container">
        <div class="letsWork__wrapper">
            <?php if ($title) : ?>
                <h2 class="letsWork__title"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if ($text) : ?>
                <div class="letsWork__text"><?php echo $text; ?></div>
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
$list_section_button = get_field('list_section__button');

if ($title || have_rows('list_section__blocks') || have_rows('list_section__rows')) : ?>
    <section class="list_section">
        <div class="container">
            <div class="list_section__wrapper">
                <div class="list_section__top">
                    <?php if ($title) : ?>
                        <h2 class="list_section__title h1 font--weight--100"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if (have_rows('list_section__blocks')) :
                        while (have_rows('list_section__blocks')) : the_row();
                            $text = get_sub_field('text');
                            $img = get_sub_field('img');
                            $button = get_sub_field('add_button'); ?>
                            <div class="list_section__inner">
                                <?php if ($img) : ?>
                                    <div class="img_block">
                                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="content-block_main">
                                    <div class="content-block text--size--24">
                                        <?php echo $text ?>
                                    </div>
                                    <?php if ($button) : ?>
                                        <div class="button_block">
                                            <a href="<?php echo $button['url']; ?>" class="btn btn--white">
                                                <span><?php echo $button['title']; ?></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (have_rows('list_section__rows') || $left_img) : ?>
                    <div class="list_section__bottom">
                        <div class="left_img">
                            <img src="<?php echo $left_img['url'] ?>" alt="<?php echo $left_img['title'] ?>">
                        </div>
                        <?php if (have_rows('list_section__rows')) : ?>
                            <div class="list_section__bottom-rows">
                                <ul>
                                    <?php while (have_rows('list_section__rows')) : the_row();
                                        $text = get_sub_field('content');
                                        $subtitle = get_sub_field('subtitle'); ?>
                                        <li class="inner_block">
                                            <div class="subtitle">
                                                <h3 class="text--size--24"><?php echo $subtitle ?></h3>
                                            </div>
                                            <div class="content-block text--size--24">
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

<?php get_footer(); ?>