
<?php get_header() ?>

    <div id="side_menu" class="p-fixed top-7_5 pgv-1 pgh-2 bd-1-gray_lighter bg-white z-10">
        <span class="title--smaller mgb-1"><?=get_the_title(get_the_ID()); ?></span>
    </div>

    <?php get_bridge('theme')->{'_c_void_CourseInfos@init'}(); ?>

    <?php get_bridge('theme')->{'_c_void_CourseAssets@init'}(); ?>

    <?php get_bridge('theme')->{'_c_void_CourseGoals@init'}(); ?>
    
    <?php get_bridge('theme')->{'_c_void_CourseSkills@init'}(); ?>
    
    <?php get_bridge('theme')->{'_c_void_CourseJobs@init'}(); ?>

<?php get_footer() ?>