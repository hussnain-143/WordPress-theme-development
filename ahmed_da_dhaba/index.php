<?php get_header();?>
<div class=post-container>
    <div class="posts">
        <?php if(is_home()|| is_category() ||is_search()){?>
        <?php if (have_posts()) {   // condition have the post
            while (have_posts()) {  // while loop check the post avaliable
                the_post();  
                ?>
                <main class="content">
                <h3 class="post-title"><?php the_title()?></h3>
                <p class="post-content"><?php the_content()?></p>
                </main>
        <?php
        }
        }
    }
?>
    </div>
    <?php
    if(is_page('About Us')){
        ?>
            <?php if (have_posts()) {   // condition have the post
            while (have_posts()) {  // while loop check the post avaliable
                the_post();  
                ?>
                <main class="about-page">
                <p class="page-content"><?php the_content()?></p>
                </main>
        <?php
        }
        }
    }
    ?>
    <?php get_sidebar();?>   
</div>
<div class="paginate">
    <?php echo paginate_links(); ?>
</div>
<?php get_footer();?>