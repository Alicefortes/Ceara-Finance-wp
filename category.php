<?php 
    $posts = get_posts();
?>

<?php get_header();?>
<?php $query = new WP_Query($wp_query->query_vars);?>
<?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
            
<a href="<?php the_permalink();?>" class="">
    <?php the_title();?>
    <?php the_excerpt();?>
</a>
<?php endwhile; else:?>
    <h3>Postagem não encontrada</h3>
<?php endif; wp_reset_postdata();?>

<?php echo paginate_links(array(
    'prev_text'          => __( 'Anterior' ),
    'next_text'          => __( 'Próximo' ),
    ));?>
<?php get_footer();?>
