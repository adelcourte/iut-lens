
<?php get_header() ?>
    
    <?php require_once(dirname( __FILE__ ) . '/assets/views/_components/side_menu.php'); ?>

    <?php get_bridge('theme')->{'_c_void_CourseInfos@init'}(); ?>

    <?php get_bridge('theme')->{'_c_void_CourseAssets@init'}(); ?>

    <?php get_bridge('theme')->{'_c_void_CourseGoals@init'}(); ?>
    
    <?php get_bridge('theme')->{'_c_void_CourseSkills@init'}(); ?>
    
    <?php get_bridge('theme')->{'_c_void_CourseJobs@init'}(); ?>

<?php get_footer() ?>