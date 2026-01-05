<?php
$section_header = get_sub_field( 'section_header' );
$sec_heading = $section_header['heading'];
$sec_content = $section_header['content'];
$blocks = get_sub_field( 'blocks' );
$cta = get_sub_field('cta');
$float_image = get_sub_field('float_image');
$attr = buildAttr( array( 'id' => $id, 'class' => $classList ) );
?>

<?php if ( $blocks ) : ?>
	<section <?php echo $attr; ?>>
		
		<div class="container">
            <div class="section-header">
                <div class="section-header__content text-center">
                    <?php if ( ! empty( $sec_heading ) ) : ?>
                        <h2 class="section-title position-relative">
                            <?php echo $sec_heading; ?>
                        </h2>
                    <?php endif; ?>

                    <?php if ( ! empty( $sec_content ) ) : ?>
                        <div class="section-header__text position-relative">
                            <?php echo $sec_content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
			<div class="image-content-blocks__wrapper relative">
				<?php if(!empty($float_image)) : ?>
					<div class="image-content-blocks__float-image">
						<?php echo getIMG($float_image['ID']); ?>
					</div>
				<?php endif; ?>
				<?php foreach ( $blocks as $index => $block ) : ?>
					<div class="image-content-blocks__block">
						<div class="lg:flex items-center <?php if ( $index%2 != 0 )
							echo 'lg:flex-row-reverse'; ?>">
							<div class="col col--image">
								<div class="image-content-blocks__block--image">
									<?php
                                     $image = $block['image'];
                                     if ( ! empty( $image ) ) : 
                                    ?>
										<?php echo getIMG( $image['ID'], 'xl' ); ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="col col--content">
								<div class="content 
                                <?php if ( $index%2 != 0 ):
							            echo 'pl-5'; 
                                    else : 
                                        echo "pr-5"; 
                                    endif;
                            ?>">
									<?php 
                                    if ( ! empty( $block['content'] ) ) :
										echo $block['content']; 
                                    endif;
                                    ?>
								</div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>