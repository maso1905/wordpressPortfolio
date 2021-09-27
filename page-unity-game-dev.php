<?php include("includes/config.php"); ?>
<?php include('includes/header.php'); ?>
<div class="back-btn"><a href="<?php echo get_page_link( get_page_by_title( "Home" )); ?>">< Home</a></div>
    <div class="top-left-sidebar"></div>
    <div class="top-right-sidebar"></div>
    <div class="page-highlighter">

        <?php query_posts( 'category_name=unity' ); ?>
        <?php while(have_posts()) : the_post(); ?>

            <section class="page-post-section">
                    <h2><?php the_title();?></h2>
                    <?php the_content(); ?>
                    <h6>Last updated on <?php echo get_the_date(); ?>
                    at <?php echo get_the_time(); ?></h6>
                    <hr>
            </section>
        <?php endwhile; ?>

    </div>
    <div class="bottom-left-sidebar"></div>  
    <div class="bottom-right-sidebar"></div>  
<?php include('includes/footer.php'); ?>
