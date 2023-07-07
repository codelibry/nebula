<?php
$logo = get_field('header_logo', 'options');
$btn = get_field('header_button', 'options');
?>
<header class="header">
    <div class="container">
        <div class="header__content">
            <div class="header__left">
                <div class="header__leftMenu"><?php wp_nav_menu(array('menu' => 'header-left-menu')); ?></div>
            </div>
            <?php if ($logo) : ?>
                <div class="header__logo"><a href="<?php echo get_home_url() ?>"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>"></a></div>
            <?php endif; ?>
            <div class="header__right">
                <div class="header__rightMenu"><?php wp_nav_menu(array('menu' => 'header-right-menu')); ?></div>
                <?php if ($btn) : ?>
                    <div class="header-btn"><a href="<?php echo $btn['url']; ?>"><?php echo $btn['title']; ?></a></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="header__mobile">
            <div class="container">
                <?php if ($btn) : ?>
                    <div class="header__phone"><a href="<?php echo $btn['url']; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/phone_icon.svg' ?>" alt=""></a></div>
                <?php endif; ?>
                <?php if ($logo) : ?>
                    <div class="header__mobileLogo"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>"></div>
                <?php endif; ?>
                <div class="header__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="header__mobileMenu">
            <?php wp_nav_menu(array('menu' => 'header-left-menu')); ?>
            <?php wp_nav_menu(array('menu' => 'header-right-menu')); ?>
            <div class="header__burgerClose">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>