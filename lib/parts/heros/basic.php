<section <?php echo $classes; echo $feat_img;?>>
    <div class="hero__wrapper">
        <div class="container text-center relative">
            <img class="hero__shadow desk-only" src="http://linen-hare-191650.hostingersite.com/wp-content/uploads/2026/01/text-shadow-e1767596693846.png" alt="">
            <h1 class="hero__title"><?php echo $title; ?></h1>
            <?php if(!empty($hero['content'])):?>
            <div class="hero__content"><?php echo $hero['content'];  ?></div>
            <?php endif; ?>
        </div>
        <?php echo getSVG('curve'); ?>
    </div>
    <?php if($hero['float_image']) : ?>
        <div class="hero__float-image" >
            <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
            <?php echo getIMG($hero['float_image']['ID']); ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php if($hero['usps']) : ?>
<div class="hero__usps relative">
    <div class="container">
        <div class="hero__usps--wrapper flex flex-col md:flex-row justify-center align-center">
            <?php foreach($hero['usps'] as $usp) : ?>
                <div class="hero__usps--block text-center">
                    <div class="hero__usps--icon">
                        <?php echo getIMG($usp['icon']['ID']); ?>
                    </div>
                    <div class="hero__usps--text">
                        <?php echo $usp['text']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php echo getSVG('bottom-curve'); ?>
</div>
<?php endif; ?>