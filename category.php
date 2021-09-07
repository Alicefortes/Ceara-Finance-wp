<?php 
$count =0;
?>
<?php get_header();?>
<main class="container">
    <h1>Blog</h1>
    <div class="row">
        <?php $posts = get_posts(array('numberposts' => 3));
        foreach($posts as $post):?>
        <?php if ( $count == 0 ){
                echo '
                <div class="col-xl-6 primeiro">
                ';
            }?>
        <?php if ( $count == 1 ){
                echo '
                <div class="col-xl-6 segundo">
                ';
            }?>
            <a href="<?php echo $post->guid;?>">
                <img class="" <?php if(!has_post_thumbnail( $post->ID )){
                        echo "no-thumbnail";
                    }?>" 
                        src="<?php if(has_post_thumbnail( $post->ID )){
                                    echo get_the_post_thumbnail_url($post->ID);
                                    }
                                    else{
                                        echo get_template_directory_uri()."/assets/images/logo2b.png";
                                    }?>" alt="Noticia">            
                <h4><?php echo $post->post_title;?></h4>
                <img src="<?php echo get_bloginfo('template_url') ?>/images/relogio.svg" alt="relogio">
                <p>
                    <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    echo strftime('%d de %B de %Y', strtotime($post->post_date));?>
                </p>
                <p>
                    <?php $content = get_post_field( 'post_content', $post->ID );
                    $quantidade_palavras = str_word_count( strip_tags( $content ) );
                    $tempo_leitura = ceil($quantidade_palavras / 250);
                    if($tempo_leitura == 1){
                        echo $tempo_leitura." minuto de leitura";
                    }
                    else{
                        echo strval($tempo_leitura)." minutos de leitura";
                    }?>
                </p>
            </a>
        <?php if ( $count == 0 or $count == 2 ){
                echo '
                </div>
                ';
            }?>
        <?php
            $count+=1;
        ?>
        <?php
            endforeach;
        ?>
        <div>
            <h1>Categorias</h1>
            <h6>Criar menu e inserir aqui</h6>
        </div>
        <div>
            <h1>Ultimas noticias</h1>
            <div class="posts col-12 row">
            <?php $query = new WP_Query($wp_query->query_vars);?>
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
                <span class="px-xl-3 mb-xl-5 col-12 col-xl-4">
                    <a href="<?php the_permalink();?>" class="post">
                        <img src="<?php if(has_post_thumbnail( $post->ID )){
                                echo get_the_post_thumbnail_url($post->ID);
                                }
                                else{
                                    echo get_template_directory_uri()."/assets/images/logo2b.png";
                                }?>" class="post-thumbnail mb-5">
                        <h4 class="post-title mb-4"><?php the_title();?></h4>
                        <p class="post-content"><?php the_excerpt();?></p>
                        <div class="informacoes-extras">
                            <img src="<?php echo get_bloginfo('template_url') ?>/images/relogio.svg" 
                                    alt="relogio">
                            <p class="data">
                                <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                date_default_timezone_set('America/Sao_Paulo');
                                echo strftime('%d de %B de %Y', strtotime($post->post_date));?>
                            </p>
                            <p class="tempo-leitura">
                            <?php $content = get_post_field( 'post_content', $post->ID );
                                $quantidade_palavras = str_word_count( strip_tags( $content ) );
                                $tempo_leitura = ceil($quantidade_palavras / 250);
                                if($tempo_leitura == 1){
                                    echo $tempo_leitura." minuto de leitura";
                                }
                                else{
                                    echo strval($tempo_leitura)." minutos de leitura";
                                }?>
                            </p>
                        </div>
                    </a>
                </span>
            <?php endwhile; else:?>
                <h3>Postagem não encontrada</h3>
            <?php endif; wp_reset_postdata();?>
            </div>
            <div class="carrossel-posts text-center">
                <?php echo paginate_links(array(
                    'prev_text'          => __( 'Anterior' ),
                    'next_text'          => __( 'Próximo' ),
                ));?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>
