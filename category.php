<?php 
$count =0;
?>
<?php get_header();?>
<main>
    <div class="ultimos pt-5 pb-5">
        <div class="container bolder">
            <h1>Blog</h1>
            <div class="row mt-5">
                <?php $posts = get_posts(array('numberposts' => 3));
                foreach($posts as $post):?>
                <?php if ( $count == 0 ){
                        echo '
                        <div class="col-xl-6 col-lg-6 col-6 primeiro">
                        ';
                    }?>
                <?php if ( $count == 1 ){
                        echo '
                        <div class="col-xl-6 col-lg-6 col-md-12 segundo">
                        ';
                    }?>
                    <a href="<?php echo $post->guid;?>">
                        <div class="banner">
                            <img class="thumb" <?php if(!has_post_thumbnail( $post->ID )){
                                    echo "no-thumbnail";
                                }?>" 
                                    src="<?php if(has_post_thumbnail( $post->ID )){
                                                echo get_the_post_thumbnail_url($post->ID);
                                                }
                                                else{
                                                    echo get_template_directory_uri()."/assets/images/logo2.svg";
                                                }?>" alt="Noticia">  
                                                  
                            <div class="infos">
                                <h6><?php the_category(', ');?></h6>
                                <h4><?php if (strlen($post->post_title) > 60) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 60) . '...'; } else {
                                        the_title();} 
                                    ?></h4>
                                <div class="date">
                                    <span class="material-icons">schedule</span>
                                    <h6>
                                        <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                        date_default_timezone_set('America/Sao_Paulo');
                                        echo strftime('%d/%m/%Y', strtotime($post->post_date));?>
                                    </h6>
                                    <h6>
                                    <?php $content = get_post_field( 'post_content', $post->ID );
                                    $quantidade_palavras = str_word_count( strip_tags( $content ) );
                                    $tempo_leitura = ceil($quantidade_palavras / 250);
                                    if($tempo_leitura == 1){
                                        echo $tempo_leitura." minuto de leitura";
                                    }
                                    else{
                                        echo strval($tempo_leitura)." minutos de leitura";
                                    }?>
                                    </h6>
                                </div>
                            </div>
                            <div class="teste">
                            </div>        
                        </div>
                    </a><br>
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
            </div>
        </div>
    </div>
    <div class="catepost">
        <div class="container">
            <div class="bolder pt-5">
                <h1>Categorias</h1>
                <section class="section-categoria col-xl-12 col-12 row justify-content-between">
                    <div class="categoria-item col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4">
                        <a href="<?php echo get_home_url() . "/category/geral"?>">
                            <span class="material-icons">done</span>
                            <h5>Geral</h5>
                        </a>   
                    </div>
                    <div class="categoria-item col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4">
                        <a href="<?php echo get_home_url() . "/category/noticias"?>">
                            <span class="material-icons">feedback</span>
                            <h5>Notícias</h5>
                            <svg>
                            </svg>
                        </a>
                    </div>
                    <div class="categoria-item col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4">
                        <a href="<?php echo get_home_url() . "/category/artigos"?>">
                            <span class="material-icons">article</span>
                            <h5>Artigos</h5>
                        </a>
                    </div>
                    <div class="categoria-item col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4">
                        <a href="<?php echo get_home_url() . "/category/?"?>">
                            <span class="material-icons">help</span>
                            <h5>Icognita</h5>
                        </a>
                    </div>
                </section>
            </div>
            <div class="bolder pt-5">
                <h1>Ultimas noticias</h1>
                <div class="posts col-12 row">
                <?php $query = new WP_Query($wp_query->query_vars);?>
                <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
                    <span class="px-xl-3 mb-xl-5 col-12 col-sm-6 col-lg-4 col-xl-4">
                        <a href="<?php the_permalink();?>" class="post">
                            <img src="<?php if(has_post_thumbnail( $post->ID )){
                                    echo get_the_post_thumbnail_url($post->ID);
                                    }
                                    else{
                                        echo get_template_directory_uri()."/assets/images/logo2.svg";
                                    }?>" class="post-thumbnail mb-5">
                            <h4 class="post-title mb-4"><?php the_title();?></h4>
                            <p class="post-content"><?php the_excerpt();?></p>
                            <div class="informacoes-extras">
                            <span class="material-icons">schedule</span>
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
    </div>
</main>
<?php get_footer();?>
