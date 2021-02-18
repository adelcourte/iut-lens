	</body>
	<footer>
		<div class="row">
			<div class="column-3">
				<?php if($src = wp_get_attachment_url(get_field('_footer_logo_id', 'option'))) : ?>
					<img src="<?=$src; ?>" alt="logo" class="size-25 height-auto mgb-1">
				<?php endif; ?>
				<?php if($coords = get_field('_footer_coords', 'option')) : ?>
					<?php foreach($coords as $coord) : ?>
						<span class="small mgb-0_5"><?=$coord['title']; ?></span>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="column-3 offset-3">
				<?php if($title = get_field('_footer_links_title', 'option')) : ?>
					<span class="title--smaller mgb-1"><?=$title; ?></span>
				<?php endif; ?>
				<?php if($links = get_field('_footer_links', 'option')) : ?>
					<?php foreach($links as $link_array) : ?>
						<?php foreach($link_array as $link) : ?>
							<a href="<?=$link['url']; ?>" target="<?=$link['target']; ?>" class="mgb-0_5 fz-14"><?=$link['title']; ?></a>
						<?php endforeach; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="column-3">
				
			</div>
		</div>
	</footer>
</html>