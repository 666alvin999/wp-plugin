<?php
	$args = array(
			'post_type' => 'programminglanguages',
			'post_status' => 'publish'
	);

	$string = '';
	global $query;
	$query = new WP_Query($args);

	if ($query->have_posts()) : ?>

		<div id="languages" class="programming-languages-container <?php owl-carousel ?>">
			<?php while ($query->have_posts()):
				$query->the_post();
				?>

				<div class="programming-languages-card">
					<?php
					$image = get_field("programming_language_logo");
					if (!empty($image)):; ?>
					<figure class="programming-languages-card-img">
						<img src="<?= $image['url'] ?>"
							 alt="<?= $image['alt'] ?>">
					</figure>
					<?php endif; ?>

					<?php
						$title = get_field("programming_language_name");
						if (!empty($title)): ?>
					<h3 class="programming-languages-card-title">
						<?= $title ?>
					</h3>
					<?php endif; ?>

					<?php
						$description = get_field("programming_language_description");
						if (!empty($description)): ?>
					<div class="programming-languages-card-description">
						<p><?= $description ?></p>
					</div>
					<?php endif; ?>

					<?php
						$website = get_field("programming_language_website");
						if (!empty($website)): ?>
					<a class="programming-languages-card-button"
					   href="<?= $website ?>">
						Go to website
					</a>
					<?php endif; ?>
				</div>

			<?php endwhile; ?>
		</div>

		<?php
		wp_reset_postdata();
	endif;

