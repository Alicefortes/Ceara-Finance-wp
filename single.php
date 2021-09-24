<?php get_header(); ?>

<main>
    <!--Post title-->
    <section class="post-title">
        <div class="container">
            <div class="row">
                <div class="back-button">
                    <a href="javascript:window.history.back();">
                        <div>
                            <span class="material-icons">arrow_back_ios</span>
                        </div>
                        <div>
                            <p>Voltar</p>
                        </div>
                    </a>
                </div>
                <div>
                    <h1>
                        <?php 
                        the_title(); 
                        ?>
                    </h1>
                </div>
                <div class="post-info">
                    <div class="post-data">
                        <div>
                            <span class="material-icons">schedule</span>
                        </div>
                        <div>
                            <h6>
                                <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                date_default_timezone_set('America/Sao_Paulo');
                                echo strftime('%d/%m/%Y', strtotime($post->post_date));?>
                            </h6>
                        </div>
                    </div>

                    <div>
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

                    <div>
                        <h6><?php the_category(', ');?></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Post content-->
    <section class="post-content">
        <div class="container">
            <div class="row">
                <div class="content">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>

    <!--Share-->
    <section class="post-share">
        <div class="container">
            <div class="row">
                <?php
                    $wplogoutURL = urlencode(get_the_permalink());
                    $wplogoutTitle = urlencode(get_the_title());
                    $wplogoutImage= urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
                ?>
                <div class="social-wrapper">
                    <span class="hide-on-mobile">Compartilhe nas redes:</span>
                    <a class="social-sharing social-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $wplogoutURL; ?>" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#FFFF">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                        <span>Facebook</span> 
                    </a>

                    <a class="social-sharing social-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $wplogoutTitle;?>&amp;url=<?php echo $wplogoutURL;?>&amp;via=wplogout" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#FFFF">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                        <span>Twitter</span>
    
                    </a>
                    
                    <a class="social-sharing social-linkedin" href="https://www.linkedin.com/shareArticle?url=<?php echo $wplogoutURL; ?>&amp;title=<?php echo $wplogoutTitle; ?>&amp;mini=true" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#FFFF">
                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                        </svg>
                        <span>Linkedin</span>
                        
                    </a>

                    <a class="social-sharing social-whatsapp" href="https://api.whatsapp.com/send?text=<?php echo $wplogoutTitle; echo " "; echo $wplogoutURL;?>" target="_blank" rel="nofollow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="#FFFF">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>whatsapp</span>
                        
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>
