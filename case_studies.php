<?php
/*
Template Name: Case Studies
*/
?>
<?php get_header(); ?>
<?php
$title = get_field('hero_title_image');
$image = get_field('hero_image');
$top_text = get_field('hero_top_text');
$bottom_text = get_field('hero_bottom_text');
?>
<section class="caseStudies_hero">
    <div class="container">
        <div class="caseStudies_heroScroll text--size--20 text--color--white text--uppercase font--weight--700">SCROLL TO DISCOVER</div>
        <div class="caseStudies_heroRow row">
            <?php if ($image) : ?>
                <div class="caseStudies_heroImage col-md-5"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>"></div>
            <?php endif; ?>
            <?php if ($title || $top_text || $bottom_text) : ?>
                <div class="caseStudies_heroContent__wrapper col-md-7">
                    <?php if ($title) : ?>
                        <div class="caseStudies_heroContent__image"><img src="<?php echo $title['url'] ?>" alt="<?php echo $title['title']; ?>"></div>
                    <?php endif; ?>
                    <?php if ($top_text || $bottom_text) : ?>
                        <div class="caseStudies_heroContent">
                            <?php if ($top_text) : ?>
                                <div class="caseStudies_heroContent__topText">
                                    <?php echo $top_text; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($bottom_text) : ?>
                                <div class="caseStudies_heroContent__bottomText"><?php echo $bottom_text; ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$pain_title = get_field('pain_title', false, false);
$pain_text = get_field('pain_text');
$pain_image = get_field('pain_image');
$challenge_title = get_field('challenge_title', false, false);
$challenge_text = get_field('challenge_text');
$challenge_image = get_field('challenge_image');
?>
<section class="pain__challenge">
    <div class="container">
        <?php if ($pain_title || $pain_text || $pain_image) : ?>
            <div class="pain__blockWrapper pain__challengeBlock__wrapper">
                <div class="pain__block pain__challengeBlock">
                    <?php if ($pain_title) : ?>
                        <h2 class="pain__blockTitle pain__challengeTitle h1"><?php echo $pain_title; ?></h2>
                    <?php endif; ?>
                    <?php if ($pain_text) : ?>
                        <div class="pain__blockText pain__challengeText text--size--24"><?php echo $pain_text; ?></div>
                    <?php endif; ?>
                    <?php if ($pain_image) : ?>
                        <div class="pain__blockImage pain__challengeImage"><img src="<?php echo $pain_image['url']; ?>" alt="<?php echo $pain_image['title']; ?>"></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($challenge_title || $challenge_text || $challenge_image) : ?>
            <div class="challenge__blockWrapper pain__challengeBlock__wrapper">
                <div class="challenge__block pain__challengeBlock">
                    <?php if ($challenge_title) : ?>
                        <h2 class="challenge__blockTitle pain__challengeTitle h1"><?php echo $challenge_title; ?></h2>
                    <?php endif; ?>
                    <?php if ($challenge_text) : ?>
                        <div class="challenge__blockText pain__challengeText text--size--24">
                            <?php echo $challenge_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($challenge_image) : ?>
                        <div class="challenge__blockImage pain__challengeImage"><img src="<?php echo $challenge_image['url']; ?>" alt="<?php echo $challenge_image['title']; ?>"></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
$title = get_field('solution_title');
$solutions_list = get_field('solutions_list'); ?>
<section class="solutionBlock">
    <div class="container">
        <?php if ($title) : ?>
            <h2 class="solutionBlock__title h1 text--center"><?php echo $title; ?></h2>
        <?php endif; ?>
        <div class="solutionBlock__image">
            <img class="desk" src="<?php echo get_template_directory_uri() . '/assets/images/solutions/solution_image_desk.svg' ?>" alt="">
            <img class="tablet" src="<?php echo get_template_directory_uri() . '/assets/images/solutions/solution_image_tablet.svg' ?>" alt="">
            <!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/solution_image.png' ?>" alt=""> -->
            <div class="solutionBlock__list">
                <?php while (have_rows('solutions_list')) : the_row();
                    $title_inner = get_sub_field('subtitle');
                    $text = get_sub_field('content');
                    $icon = get_sub_field('icon');
                    $color = get_sub_field('color'); ?>
                    <div class="solutions__column">
                        <div class="solutions__item <?php echo $color ?>">
                            <div class="solutions__itemIcon">
                                <img class="icon" src="<?php echo $icon['url']; ?>" alt="">
                            </div>
                            <?php if ($title_inner || $text) : ?>
                                <div class="solutions__itemLine <?php echo $color ?>"></div>
                                <div class="solutions__itemContent">
                                    <?php if ($title) : ?>
                                        <div class="solutions__itemTitle text--size--20 text--uppercase text--color--<?php echo $color ?>"><?php echo $title_inner; ?></div>
                                    <?php endif; ?>
                                    <?php if ($text) : ?>
                                        <div class="solutions__itemText text--size--20 text--color--white"><?php echo $text; ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
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
<?php if (have_rows('text_blocks')) : ?>
    <section class="textCards">
        <div class="container">
            <div class="textCards__list">
                <?php while (have_rows('text_blocks')) : the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    ?>
                    <div class="textCards__item">
                        <?php if ($title) : ?>
                            <h2 class="textCards__itemTitle font--weight--700 text--color--cian"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <div class="textCards__itemText text--size--24">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php
$title = get_field('robot_block_title', false, false);
$text = get_field('robot_block_text');
$image = get_field('robot_block_image');
if ($title || $text || $image) :
?>
    <section class="robotBlock">
        <div class="container">
            <div class="robotBlock__contentWrapper">
                <div class="robotBlock__content">
                    <?php if ($image) : ?>
                        <div class="robotBlock__contentImage"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>"></div>
                    <?php endif; ?>
                    <?php if ($title) : ?>
                        <h2 class="robotBlock__contentTitle">
                            <?php echo $title; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <div class="robotBlock__contentText text--size--24"><?php echo $text; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php
$title = get_field('case_studies_title');
$list = get_field('case_studies_list');
?>
<?php if (have_rows('case_studies_list')) : ?>
    <section class="caseStudies">
        <div class="container">
            <h2 class="caseStudies__title h1"><?php echo $title ?></h2>
            <div class="caseStudies__slider">
                <?php foreach ($list as $item) :
                    $icon = $item['icon'];
                    $main_content = $item['main_content'];
                    $btn = $item['button']; ?>
                    <div class="caseStudies__sliderItem">
                        <?php if ($icon) : ?>
                            <div class="caseStudies__sliderItem__image">
                                <img src="<?php echo $icon['url'] ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <div class="caseStudies__sliderItem__text text--size--24 content-block">
                            <?php echo $main_content ?>
                        </div>
                        <?php if ($btn) : ?>
                            <div class="caseStudies__sliderItem__button">
                                <a href="<?php echo $btn['url']; ?>" class="btn btn--turquoise" target="<?php echo $btn['target']; ?>">
                                    <?php echo $btn['title']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
        $lets_work_title = get_field('lets_work_title', false, false);
        $lets_work_text = get_field('lets_work_text');
        $button = get_field('lets_work_button');
        ?>
        <div class="letsWork_case">
            <div class="container">
                <?php if ($lets_work_title) : ?>
                    <h2 class="letsWork_case__title h1"><?php echo $lets_work_title; ?></h2>
                <?php endif; ?>
                <?php if ($lets_work_text) : ?>
                    <div class="letsWork_case__text text--size--24 content-block"><?php echo $lets_work_text; ?></div>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <div class="letsWork_case__button">
                        <a href="<?php echo $button['url'] ?>" class="btn"><?php echo $button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>