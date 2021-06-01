			<footer id="footer" class="full-width bg-gray_lighter">
				<div class="content-empty size-100 pgb-5" style="background: url('<?=get_template_directory_uri().'/assets/svg/footer-shape.svg'; ?>') no-repeat bottom;"></div>
				<div class="row pgt-4 pgb-2_5">
					<div class="column-4 layout-row align-start-center">
						<?php if($src = wp_get_attachment_url(get_field('_footer_logo_id', 'option'))) : ?>
							<div class="size-20 mgr-2_5">
								<img src="<?=$src; ?>" alt="logo" class="size-100 height-auto">	
							</div>
						<?php endif; ?>
						<?php if($coords = get_field('_coords', 'option')) : ?>
							<div class="flex layout-column">
								<?php foreach($coords as $coord) : ?>
									<span class="small lh-2"><?=$coord['content']; ?></span>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="column-3 offset-2">
						<?php if($title = get_field('_footer_links_title', 'option')) : ?>
							<span class="title mgb-1"><?=$title; ?></span>
						<?php endif; ?>
						<?php if($links = get_field('_footer_links', 'option')) : ?>
							<?php foreach($links as $link_array) : ?>
								<?php foreach($link_array as $link) : ?>
									<a href="<?=$link['url']; ?>" target="<?=$link['target']; ?>" class="mgb-0_5 fz-14 hvr-text-blue"><?=$link['title']; ?></a>
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