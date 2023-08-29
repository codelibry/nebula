<?php
$logo = get_field('footer_logo', 'options');
$logo_dark = get_field('footer_logo_dark', 'options');
$contact = get_field('contact_text', 'options');
$email = get_field('footer_email', 'options');
$phone_number = get_field('footer_phone_number', 'options');
$copywriting = get_field('footer_copywriting', 'options');

?>
<footer class="footer">
    <div class="footer__main">
        <div class="container">
            <div class="footer__content row">
                <?php if ($logo) : ?>
                    <div class="footer__logo col-md-2 col-12">
                        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>">
                        <img class="dark" src="<?php echo $logo_dark['url'] ?>" alt="<?php echo $logo_dark['title']; ?>">
                    </div>
                <?php endif; ?>
                <div class="footer__menuWrapper col-sm-6 col-12">
                    <div class="footer__menuTitle footer-title">INFORMATION</div>
                    <div class="footer__menu"><?php wp_nav_menu(array('menu' => 'footer-menu')); ?></div>
                </div>
                <?php if ($contact) : ?>
                    <div class="footer__contact col-sm-6 col-12">
                        <div class="footer__contactTitle footer-title text--uppercase">Contact</div>
                        <div class="footer__contactText"><?php echo $contact ?></div>
                    </div>
                <?php endif; ?>
                <div class="footer__goUpBtn col-sm-2 col-12">
                    <a href="#"><span>go up</span>
                        <div>
                            <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 13L13 2L24 13" stroke="#98A9D8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="footer__bottom">
                <?php if ($copywriting) : ?>
                    <div class="footer__copywriting"><?php echo $copywriting; ?></div>
                <?php endif; ?>
                <?php if (have_rows('footer_icons', 'options')) : ?>
                    <div class="footer__icons">
                        <?php while (have_rows('footer_icons', 'options')) : the_row(); ?>
                            <?php
                            $icon = get_sub_field('icon', 'options');
                            $icon_dark = get_sub_field('icon_dark', 'options');
                            $link = get_sub_field('link', 'options');
                            if ($icon && $link) :
                            ?>
                                <div class="footer__icon">
                                    <a href="<?php echo $link['url']; ?>" target="_blank">
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['title']; ?>">
                                        <img class="dark" src="<?php echo $icon_dark['url'] ?>" alt="<?php echo $icon_dark['title'] ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ($email && $phone_number) : ?>
                    <div class="footer__text">
                        <?php if ($email) : ?>
                            <div class="footer__email"><a href="mailto:<?php echo $email; ?>"></a><?php echo $email; ?></div>
                        <?php endif; ?>
                        <?php if ($phone_number) : ?>
                            <div class="footer__phone"><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>