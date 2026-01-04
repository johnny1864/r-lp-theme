<?php

$blocks = get_sub_field( 'blocks' );
$cta = get_sub_field('cta');
$attr = buildAttr( array( 'id' => $id, 'class' => $classList ) );
?>

<?php if ( $blocks ) : ?>
	<section <?php echo $attr; ?>>
		
			<div class="full-width-image-content-blocks__wrapper">
				<?php foreach ( $blocks as $index => $block ) : ?>
					<div class="full-width-image-content-blocks__block">
                        <div class="container">
                            <hr>
                        </div>
						<div class="lg:flex items-center <?php if ( $index%2 == 0 )
							echo 'lg:flex-row-reverse'; ?>">
							<div class="col col--image">
								<div class="full-width-image-content-blocks__block--image">
									<?php
                                     $image = $block['image'];
                                     if ( ! empty( $image ) ) : 
                                    ?>
										<?php echo getIMG( $image['ID'], 'xl' ); ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="col col--content">
								<div class="full-width-image-content-blocks__content 
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
	
	</section>
<?php endif; ?>