<footer id="contact" class="footer">
        <div class="container">
            <div class="footer__inner">
                <h3 class="footer__h3"><?php the_field('footer__h3'); ?></h3>
                <div class="footer__bottom">
                    <div class="footer__socials">
                        <a class="footer__facebook" href="<?php the_field('footer__facebook-link'); ?>"><img class="footer__img" src="<?php the_field('footer__facebook-img'); ?>" alt=""></a>
                        <a class="footer__linkedin" href="<?php the_field('footer__linkedin-link'); ?>"><img class="footer__img" src="<?php the_field('footer__linkedin-img'); ?>" alt=""></a>
                        <a class="footer__github" href="<?php the_field('footer__github-link'); ?>"><img class="footer__img" src="<?php the_field('footer__github-img'); ?>" alt=""></a>
                    </div>
                    <div class="footer__contacts">
                        <a class="footer__email" href="mailto:<?php the_field('footer__email'); ?>">Email - <?php the_field('footer__email'); ?></a>
                        <a class="footer__phone" href="tel:<?php the_field('footer__phone-world'); ?>">Phone - <?php the_field('footer__phone-site'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.min.js"></script> -->
</body>
</html>