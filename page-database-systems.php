<?php include("includes/config.php"); ?>
<?php include('includes/header.php'); ?>
<div class="back-btn"><a href="<?php echo get_page_link( get_page_by_title( "Home" )); ?>">< Home</a></div>
    <div class="top-left-sidebar"></div>
    <div class="top-right-sidebar"></div>
    <div class="page-highlighter">
        <?php 
            if (have_posts()) {
                while(have_posts()) {
                    ?>
                        <section class="page-title-section">
                            <h2><?php the_title(); ?></h2>
                        </section>
                   
                        <section class="db-page-post-section">
                            <?php
                                query_posts( 'category_name=database' );
                                the_post();
                                the_content();
                                get_post_date();
                            ?>
                        </section>
                    <?php
                }
            }
        ?>  
    </div>
    <div class="bottom-left-sidebar"></div>  
    <div class="bottom-right-sidebar"></div>  
<?php include('includes/footer.php'); ?>
