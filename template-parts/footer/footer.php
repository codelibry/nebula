<?php 
$logo = get_field('footer_logo', 'options');
$contact = get_field('contact_text', 'options');
$email = get_field('footer_email', 'options');
$phone_number = get_field('footer_phone_number', 'options');
$copywriting = get_field('footer_copywriting', 'options');

?>
<footer class="footer">
    <div class="container">
        <div class="footer__content row">
            <?php if($logo): ?>
                <div class="footer__logo col-lg-2 col-12">
                    <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>">
                </div>
            <?php endif; ?>
            <div class="footer__menuWrapper col-lg-6 col-12">
                <div class="footer__menuTitle footer-title">INFORMATION</div>
                <div class="footer__menu"><?php wp_nav_menu(array('menu' => 'footer-menu')); ?></div>
            </div>
            <?php if($contact): ?>
                <div class="footer__contact col-lg-2 col-12">
                    <div class="footer__contactTitle footer-title">Contact</div>
                    <div class="footer__contactText"><?php echo $contact ?></div>
                </div>
            <?php endif; ?>
            <div class="footer__goUpBtn col-lg-2 col-12">
                <a href="#"><span>go up</span><img src="<?php echo get_template_directory_uri() . '/assets/images/to_top.svg' ?>" alt=""></a>
            </div>
        </div>
        <div class="footer__bottom">
            <?php if($copywriting): ?>
                <div class="footer__copywriting"><?php echo $copywriting; ?></div>
            <?php endif; ?>
            <?php if(have_rows('footer_icons', 'options')): ?>
                <div class="footer__icons">
                    <?php while(have_rows('footer_icons', 'options')): the_row(); ?>
                        <?php 
                        $icon = get_sub_field('icon', 'options');
                        $link = get_sub_field('link', 'options');
                        if($icon && $link):
                        ?>
                            <div class="footer__icon">
                                <a href="<?php echo $link['url']; ?>" target="_blank"><img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['title']; ?>"></a> 
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if($email && $phone_number): ?>
                <div class="footer__text">
                    <?php if($email): ?>
                        <div class="footer__email"><a href="mailto:<?php echo $email; ?>"></a><?php echo $email; ?></div>
                    <?php endif; ?>
                    <?php if($phone_number): ?>
                        <div class="footer__phone"><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
