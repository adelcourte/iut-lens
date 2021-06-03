			<section class="mgb-0 pgv-2_5 full-width bg-blue">
				<div class="row">
					<div class="column-5 offset-1">
						<?php if($title = get_field('_visit_title', 'option')) : ?>
							<span class="title--extra text-white mgb-2"><?=$title; ?></span>
						<?php endif; ?>
						<?php if($link = get_field('_visit_link', 'option')) : ?>
							<a href="<?=$link['url']; ?>" target="<?$link['target']; ?>" class="button--white"><?=$link['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<footer id="footer" class="full-width bg-gray_lighter">
				<div class="row pgt-5 pgb-2_5">
					<div class="column-4 layout-row">
						<?php if($src = wp_get_attachment_url(get_field('_footer_logo_id', 'option'))) : ?>
							<div class="size-20 mgr-2_5">
								<img src="<?=$src; ?>" alt="logo" class="size-100 height-auto">	
							</div>
						<?php endif; ?>
						<?php if($coords = get_field('_coords', 'option')) : ?>
							<div class="flex layout-column">
								<?php foreach($coords as $coord) : ?>
									<spans class="lh-1_5"><?=$coord['content']; ?></spans>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="column-3 offset-2">
						<?php if($title = get_field('_footer_links_title', 'option')) : ?>
							<span class="title--small--bold mgb-1"><?=$title; ?></span>
						<?php endif; ?>
						<?php if($links = get_field('_footer_links', 'option')) : ?>
							<?php foreach($links as $link_array) : ?>
								<?php foreach($link_array as $link) : ?>
									<a href="<?=$link['url']; ?>" target="<?=$link['target']; ?>" class="mgb-0_5 title--smaller hvr-text-blue"><?=$link['title']; ?></a>
								<?php endforeach; ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
					<div class="column-3">
						
					</div>
				</div>
				<?php wp_footer(); ?>
			</footer>
		</main>
	</body>
</html>