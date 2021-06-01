<div id="side_menu" class="p-fixed top-7_5 pgv-1 pgh-1_5 shadow-gray_extralight-faded bg-white z-10">
    <?php if(is_singular('course')) : ?>
        <span class="title mgb-1"><?=get_the_title(get_the_ID()); ?></span>
    <?php elseif(is_taxonomy('department')) : ?>
        <?php
            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            $title = $term->name;
        ?>
        <span class="title mgb-1"><?=$title; ?></span>
    <?php endif; ?>
</div>