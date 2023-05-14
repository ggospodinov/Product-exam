<li class="product-card">
				<div class="product-primary">
					<h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="product-meta">
						<a class="meta-shockcode" href="#">Code: 650204111</a>
						<span class="meta-price">$ 179.99</span>
					</div>
					<a class="meta-company"><?php the_category(); ?></a>
                       <span class="meta-date"><?php the_date(); ?></span>
					</div>
				<div class="product-logo">
					<div class="product-logo-box">
                        <?php
                        if( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } else {
                            echo '<img src="images/washing-machine.jpg" alt="default thumbnail">';
                        
                        }
                        ?>
					</div>
				</div>
			</li>