<?php 
$logo = get_field('header_logo', 'options');
?>
<header class="header">
	<div class="container">
        <div class="header__content">
            <div class="header__left">
                <div class="header__leftMenu"><?php wp_nav_menu(array('menu' => 'header-left-menu')); ?></div>
            </div>
            <?php if($logo): ?>
                <div class="header__logo"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>"></div>
            <?php endif; ?>
            <div class="header__right">
                <div class="header__rightMenu"><?php wp_nav_menu(array('menu' => 'header-right-menu')); ?></div>
            </div>
        </div>
    </div>
</header>
