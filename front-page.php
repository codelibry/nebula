<?php get_header(); ?>
<?php
$text = get_field('hero_text');
$button = get_field('hero_btn');
$image = get_field('hero_image');

?>
<section class="hero">
    <div class="container">
        <div class="row hero_content">
            <div class="hero__textWrapper col-lg-8 col-md-8 col-12">
                <?php if ($text) : ?>
                    <div class="hero__text">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <div class="hero__button">
                        <a href="<?php echo $button['url']; ?>" class="btn"><?php echo $button['title']; ?></a>
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
$testimonial_title = get_field('guidelines_testimonial_title');
$testimonial_text = get_field('guidelines_testimonial_text');
$testimonial_owner = get_field('guidelines_testimonial_owner');
?>
<section class="guidelines">
    <div class="container">
        <?php if ($title || $text) : ?>
            <div class="guidelines__top">
                <?php if ($title) : ?>
                    <div class="guidelines__title"><?php echo $title; ?></div>
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
                    <div class="guidelines__testimonialTitle"><?php echo $testimonial_title; ?></div>
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
</section>
<?php
$title = get_field('about_services_title');
$text = get_field('about_services_text');
$under_cards_text = get_field('under_cards_text');
$button = get_field('about_services_btn');
?>

<section class="services">
    <div class="container">
        <?php if ($title || $text) : ?>
            <div class="services__top">
                <?php if ($title) : ?>
                    <div class="services__topTitle"><?php echo $title; ?></div>
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
                                <div class="services__cardsItem__title"><?php echo $title; ?></div>
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
            <a href="<?php echo $button['url']; ?>" class="btn"><?php echo $button['title']; ?></a>
        </div>
    </div>
</section>
<?php $logo = get_field('logo'); ?>
<?php if ($logo) : ?>
    <section class="logo">
        <div class="container">
            <div class="logo__wrapper">
                <img src="<?php echo $logo['url']; ?>" alt="">
            </div>
        </div>
    </section>
<?php endif; ?>
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
$title = get_field('lets_work_title');
$text = get_field('lets_work_text');
$button = get_field('lets_work_button');
?>
<section class="letsWork">
    <div class="front_dark_bg"></div>
    <div class="container">
        <?php if ($title) : ?>
            <div class="letsWork__title"><?php echo $title; ?></div>
        <?php endif; ?>
        <?php if ($text) : ?>
            <div class="letsWork__text"><?php echo $text; ?></div>
        <?php endif; ?>
        <?php if ($button) : ?>
            <div class="letsWork__button">
                <a href="<?php echo $button['url'] ?>" class="btn"><?php echo $button['title']; ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
$title = get_field('processes_title');
$button = get_field('processes_button');
$image = get_field('processes_image');
?>
<section class="processes">
    <div class="container">
        <?php if ($title) : ?>
            <div class="processes__title"><?php echo $title; ?></div>
        <?php endif; ?>
        <div class="processes__content">
            <?php if (have_rows('processes')) : ?>
                <div class="processes__list row">
                    <?php $i = 1;
                    while (have_rows('processes')) : the_row(); ?>
                        <?php
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        ?>
                        <?php if ($i == 1 || $i == 3 || $i == 4) : ?>
                            <div class="processes__column col-lg-4 col-12">
                            <?php endif; ?>
                            <div class="processes__item">
                                <div class="processes__itemNumber"><?php echo $i; ?></div>
                                <?php if ($title || $text) : ?>
                                    <div class="processes__itemContent">
                                        <?php if ($title) : ?>
                                            <div class="processes__itemTitle"><?php echo $title; ?></div>
                                        <?php endif; ?>
                                        <?php if ($text) : ?>
                                            <div class="processes__itemText"><?php echo $text; ?></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if ($i == 2 || $i == 3 || $i == 5) : ?>
                            </div>
                        <?php endif; ?>
                    <?php $i++;
                    endwhile; ?>
                </div>
                <div class="processes__image">
                </div>
            <?php endif; ?>
        </div>
        <?php if ($button) : ?>
            <div class="processes__button"><a href="<?php echo $button['url']; ?>" class="btn"><?php echo $button['title']; ?></a></div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>