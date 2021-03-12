<?php get_header(); ?>
    <section id="about" class="about">
        <div class="container">            
            <div class="about__inner">   
                <h3 class="about__h3"><?php the_field('about__h3'); ?></h3>               
                <p class="about__text"><?php the_field('about__text'); ?></p>
            </div>
        </div>
    </section>
    <section id="skills" class="skills">
        <div class="container">
            <div class="skills__inner">
                <h3 class="skills__h3"><?php the_field('skills__h3'); ?></h3>
                <div class="skills__bottom">
                    <div class="skills__left">                        
                        <img class="skills__img" src="<?php the_field('skills__img'); ?>" alt="">
                    </div>
                    <div class="skills__right">
                        <table class="skills__table">
                            <tr class="skills__table-row">
                                <td class="skills__table-left"><?php the_field('skills__table-left-colum-1-row'); ?></td><td class="skills__table-right"><?php the_field('skills__table-right-colum-1-row'); ?></td>
                            </tr>                            
                            <tr class="skills__table-row">
                                <td class="skills__table-left"><?php the_field('skills__table-left-colum-2-row'); ?></td><td class="skills__table-right skills__table-right--graph-html"></td>
                            </tr>
                            <tr class="skills__table-row">
                                <td class="skills__table-left"><?php the_field('skills__table-left-colum-3-row'); ?></td><td class="skills__table-right"><?php the_field('skills__table-right-colum-3-row'); ?></td>
                            </tr>
                            <tr class="skills__table-row">
                                <td class="skills__table-left"><?php the_field('skills__table-left-colum-4-row'); ?></td><td class="skills__table-right skills__table-right--graph-wordpress"></td>
                            </tr>
                            <tr class="skills__table-row">
                                <td class="skills__table-left"><?php the_field('skills__table-left-colum-5-row'); ?></td><td class="skills__table-right"><?php the_field('skills__table-right-colum-5-row'); ?></td>
                            </tr>  
                        </table>          
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="portfolio__inner">
                <h3 class="portfolio__h3"><?php the_field('portfolio__h3'); ?></h3>
                <div class="portfolio__bottom">
                    <div class="portfolio__left">
                        <p class="portfolio__work"><?php the_field('portfolio__work'); ?></p>
                        <p class="portfolio__text"><?php the_field('portfolio__text'); ?></p>
                    </div>
                    <div class="portfolio__right">  
                        <div class="zoom-gallery">
                            <a href="<?php the_field('zoom-gallery--1'); ?>" title="site 1" style="width:150px;height:150px;">
                                <img src="<?php the_field('zoom-gallery--1'); ?>" width="150" height="150">
                            </a>
                            <a href="<?php the_field('zoom-gallery--2'); ?>" title="site 2" style="width:150px;height:150px;">
                                <img src="<?php the_field('zoom-gallery--2'); ?>" width="150" height="150">
                            </a>      
                            <a href="<?php the_field('zoom-gallery--3'); ?>" title="site 3" style="width:150px;height:150px;">
                                <img src="<?php the_field('zoom-gallery--3'); ?>" width="150" height="150">
                            </a>
                            <a href="<?php the_field('zoom-gallery--4'); ?>" title="site 4" style="width:150px;height:150px;">
                                <img src="<?php the_field('zoom-gallery--4'); ?>" width="150" height="150">
                            </a>                                                     
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </section>   
<?php get_footer(); ?>