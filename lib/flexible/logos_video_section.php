<?php
$logos = get_sub_field( 'logos' );
$heading = get_sub_field('heading');
$video_iframe = get_sub_field('video_iframe');
$attr = buildAttr( array( 'id' => $id, 'class' => $classList ) );
?>

<div <?php echo $attr; ?>> 
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
            <h2 class="text-center">
            <?php echo $heading; ?>
            </h2>
        <?php endif; ?>

        <?php if(!empty($video_iframe)) : ?>
            <div class="video-section__iframe relative">
            <?php echo $video_iframe; ?>
            </div>
        <?php endif; ?>
        
     </div>
    </section>
</div>