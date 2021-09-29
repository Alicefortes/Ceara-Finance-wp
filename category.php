<?php 
$count =0;
?>
<?php get_header();?>
<main>
    <!--Ultimos posts-->
    <div class="ultimos pb-5" id="ultimas">
        <div class="container bolder">
            <h1>Últimas notícias</h1>
            <div class="row mt-5">
                <?php $posts = get_posts(array('numberposts' => 3));
                foreach($posts as $post):?>
                <?php if ( $count == 0 ){
                    echo '
                    <div class="col-xl-6 col-lg-6 col-12 primeiro">
                    ';
                }?>
                <?php if ( $count == 1 ){
                    echo '
                    <div class="col-xl-6 col-lg-6 col-md-12 segundo">
                    ';
                }?>
                <a href="<?php echo $post->guid;?>">
                    <div class="banner">
                        <img class="thumb" 
                            <?php if(!has_post_thumbnail( $post->ID )){
                                echo "no-thumbnail";
                            }?>" 
                            src="<?php if(has_post_thumbnail( $post->ID )){
                                echo get_the_post_thumbnail_url($post->ID);
                            }
                                else{
                                    echo get_template_directory_uri()."/assets/images/logo2.svg";
                            }?>" 
                            alt="Noticia"
                        >  
                                                  
                        <div class="infos">
                            <h6><?php the_category(', ');?></h6>
                            <h3>
                                <a href="<?php the_permalink() ?>" >
                                <h3>
                                    <?php if (strlen($post->post_title) > 45) {
                                    echo substr(the_title($before = '', $after = '', FALSE), 0, 45) . '...'; } 
                                    else {
                                    the_title();} 
                                    ?>
                                </h3>
                                </a>
                            </h3>
                            <div class="date">
                                <div class="data">
                                    <span class="material-icons">schedule</span>
                                    <h6>
                                        <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                        date_default_timezone_set('America/Sao_Paulo');
                                        echo strftime('%d/%m/%Y', strtotime($post->post_date));?>
                                    </h6>
                                </div>
                                <div class="time">
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
        <!--Categorias-->
        <div id="categorias">
            <div class="container">
                <div class="bolder pb-5">
                    <h1 class="mb-5">Categorias</h1>
                    <section class="row cats">
                        <div class="categoria-item col-xl-2 col-lg-2 col-md-5 col-sm-5 col-11">
                            <a href="<?php echo get_home_url() . "/category/geral"?>">
                                <span class="material-icons-outlined">done</span>
                                <h5>Geral</h5>
                            </a>   
                        </div>
                        <div class="categoria-item col-xl-2 col-lg-2 col-md-5 col-sm-5 col-11">
                            <a href="<?php echo get_home_url() . "/category/noticias"?>">
                                <span class="material-icons-outlined">feedback</span>
                                <h5>Notícias</h5>
                            </a>
                        </div>
                        <div class="categoria-item col-xl-2 col-lg-2 col-md-5 col-sm-5 col-11">
                            <a href="<?php echo get_home_url() . "/category/artigos"?>">
                                <span class="material-icons-outlined">article</span>
                                <h5>Artigos</h5>
                            </a>
                        </div>
                        <div class="categoria-item col-xl-2 col-lg-2 col-md-5 col-sm-5 col-11">
                            <a href="<?php echo get_home_url() . "/category/eventos"?>">
                                <span class="material-icons-outlined">event</span>
                                <h5>Eventos</h5>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        
        <!--Blog-->
        <div id="blog">
            <div class="container">
                <div class="bolder pb-5">
                    <h1 class="mb-5">
                        <?php
                        if ( is_category('geral') == true ){
                            echo 'Geral';
                        }
                        elseif ( is_category('noticias') == true ){
                            echo 'Notícias';
                        }
                        elseif ( is_category('artigos') == true ){
                            echo 'Artigos';
                        }
                        elseif ( is_category('eventos') == true ){
                            echo 'Eventos';
                        }
                        ?>
                    </h1>
                    <div class="posts row">
                        <?php $query = new WP_Query($wp_query->query_vars);?>
                        <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 postagens mt-3">
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
                                </div>
                                    <div class="infos mt-3 mb-3">
                                        <h6><?php the_category(', ');?></h6>
                                        <a href="<?php the_permalink() ?>" >
                                            <h3>
                                                
                                                <?php if (strlen($post->post_title) > 45) {
                                                    echo substr(the_title($before = '', $after = '', FALSE), 0, 45) . '...'; } 
                                                    else {
                                                    the_title();} 
                                                ?>
                                                
                                            </h3>
                                            <div class="text-teste">
                                                <?php the_excerpt();?>
                                            </div>
                                        </a>
                                    </div>      
                                
                            </a><br>
                        </div>
                        <?php endwhile; else:?>
                            <h3>Postagem não encontrada</h3>
                        <?php endif; wp_reset_postdata();?>
                    </div>
                    <div class="carrossel-posts text-center mt-5 mb-3">
                        <?php echo paginate_links(array(
                            'prev_text'          => __( 'Anterior' ),
                            'next_text'          => __( 'Próximo' ),
                        ));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>