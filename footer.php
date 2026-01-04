<?php global $global, $site_logo;
    $footer = get_field('footer', 'option');

    if(!empty($footer['site_logo'])) $site_logo = getIMG( $footer['site_logo']['ID'], 'md', false, array('alt' => get_bloginfo( 'name' ), 'lazy' => false));
?>

</main>

<footer class="gfooter">
    <div class="gfooter__content">
        <div class="container">
            
        </div>
    </div>

    <div class="gfooter__bottom">
        <div class="container">
            <div class="gfooter__copy">
                <p class="copy">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<div class="pdm-lightbox pdm-lightbox--reset">
    <div class="pdm-lightbox__container">
        <button class="pdm-lightbox__close" type="button">Close Popup</button>
        <div class="pdm-lightbox__content"></div>
    </div>
</div>

<?php wp_footer(); ?>

<?php echo get_field('body_scripts_bottom', 'option'); ?>
</body>

</html>