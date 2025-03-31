<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <div class="footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
                    alt="<?php bloginfo('name'); ?> Logo">
            </div>
            <div class="footer__contact">
                <button class="footer__contact-button">Зв'язатися з нами</button>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__copyright">
                <p>© <?php bloginfo('name'); ?>. Всі права захищені. 2018-<?php echo date('Y'); ?></p>
            </div>
            <div class="footer__legal">
                <a href="<?php echo get_privacy_policy_url(); ?>">Політика конфіденційності</a>
                <a href="<?php echo home_url('/terms'); ?>">Договір публічної оферти</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>