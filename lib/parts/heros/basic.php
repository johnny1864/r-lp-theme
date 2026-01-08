<section <?php echo $classes; echo $feat_img;?>>
    <div class="hero__wrapper">
        <div class="container text-center relative">
            <img class="hero__shadow desk-only" src="http://linen-hare-191650.hostingersite.com/wp-content/uploads/2026/01/text-shadow-e1767596693846.png" alt="">
            <h1 class="hero__title"><?php echo $title; ?></h1>
            <?php if(!empty($hero['content'])):?>
            <div class="hero__content"><?php echo $hero['content'];  ?></div>
            <?php endif; ?>
        </div>
       
    </div>
     <?php echo getSVG('curve'); ?>
    <?php if($hero['float_image']) : ?>
        <div class="hero__float-image desk-only" >
            <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
            <?php echo getIMG($hero['float_image']['ID']); ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php if($hero['usps']) : ?>
<div class="hero__usps relative">
    <div class="container">
        <div class="hero__usps--wrapper swiper">
            <div class="swiper-wrapper">
                <?php foreach ($hero['usps'] as $usp) : ?>
                    <div class="hero__usps--block swiper-slide text-center">
                        <div class="hero__usps--icon">
                            <?php echo getIMG($usp['icon']['ID']); ?>
                        </div>
                        <div class="hero__usps--text">
                            <?php echo $usp['text']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Arrows -->
            <div class="swiper-button-prev mob-only"></div>
            <div class="swiper-button-next mob-only"></div>

            <!-- Dots -->
            <div class="swiper-pagination mob-only"></div>
        </div>
    </div>
    <?php echo getSVG('bottom-curve'); ?>
</div>
<?php endif; ?>