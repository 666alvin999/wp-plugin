<?php
	$args = array(
			'post_type' => 'programminglanguages',
			'post_status' => 'publish'
	);

	$string = '';
	global $query;
	$query = new WP_Query($args);

	if ($query->have_posts()) : ?>

		<div id="languages" class="programming-languages-container">
			<?php while ($query->have_posts()):
				$query->the_post();
				?>

				<div class="programming-languages-card">
					<figure class="programming-languages-card-img">
                        <img src="<?= get_field("programming_language_logo")['url'] ?>" alt="<?= get_field("programming_language_logo")['alt'] ?>">
                    </figure>

					<h3 class="programming-languages-card-title">
						<?= get_field("programming_language_name") ?>
					</h3>

					<div class="programming-languages-card-description">
						<p><?= get_field("programming_language_description") ?></p>
					</div>

                    <a class="programming-languages-card-button" href="<?= get_field("programming_language_website") ?>">
                        Go to website
                    </a>
				</div>

			<?php endwhile; ?>
		</div>

		<?php
		wp_reset_postdata();
	endif;

