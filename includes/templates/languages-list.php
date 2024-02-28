<?php
	$args = array(
			'post_type' => 'programminglanguages',
			'post_status' => 'publish'
	);

	$string = '';
	global $query;
	$query = new WP_Query($args);

	if ($query->have_posts()) : ?>

		<div id="languages">
			<?php while ($query->have_posts()):
				$query->the_post();
				?>

				<div class="language-card">
					<figure>
						<?= wp_get_attachment_image(get_field("programming_language_logo"), 'full', '', array('class' => 'language-logo')) ?>
					</figure>

					<h3 class="language-name">
						<?= get_field("programming_language_name") ?>
					</h3>

					<div class="language-description">
						<h4 class="language-discription-title"></h4>

						<p><?= get_field("programming_language_description") ?></p>
					</div>

					<div class="language-website">
						<a href="<?= get_field("programming_language_website") ?>">
							Go to website
						</a>
					</div>
				</div>

			<?php endwhile; ?>
		</div>

		<?php
		wp_reset_postdata();
	endif;

