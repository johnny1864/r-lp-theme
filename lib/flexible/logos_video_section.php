<?php
$logos = get_sub_field( 'logos' );
$heading = get_sub_field('heading');
$video_iframe = get_sub_field('video_iframe');
$cover_image = get_sub_field('video_cover_image');
$attr = buildAttr( array( 'id' => $id, 'class' => $classList ) );
?>

<div <?php echo $attr; ?>> 
    <?php echo getSVG('wave'); ?>
    <?php if ( $logos ) : ?>  
        <div class="container">
            <div class="logos-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ( $logos as $logo ) : ?>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center h-full">
                            <?php echo getIMG( $logo['ID'] ); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <section class="video-section">
     <div class="container">
        <?php if(!empty($heading)) : ?>
            <h2 class="text-center video-section__title">
            <?php echo $heading; ?>
            </h2>
        <?php endif; ?>

        <?php if(!empty($video_iframe)) : ?>
            <div class="video-section__iframe video-embed relative">
                <?php // echo $video_iframe; ?>

                <?php if($cover_image) : ?>
                    <?php echo getIMG($cover_image['ID']); ?>
                <?php endif; ?>
                <button class="video-embed__play video-section__play" aria-label="Play Video">
                    <?php echo getSVG('play', false, false); ?> 
                </button>            
            </div>
        <?php endif; ?>
        
     </div>
    </section>
</div>