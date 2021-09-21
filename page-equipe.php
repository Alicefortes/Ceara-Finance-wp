<?php get_header(); ?>
<main>
    <div class="banner">
        <video width="100%" autoplay muted loop id="video-back">
            <source src="<?php echo get_bloginfo('template_url') ?>/assets/images/equipe/equipe.mp4" type="video/mp4">
        </video>
        <div class="black-one">
        </div>
        <div class="container">
            <div class="banner-text bold">
                <h1>
                    "As pessoas se unem por um propósito, e essa parceria é baseada na necessidade 
                    de cooperar para alcançá-lo"
                </h1>
                <h5 style="text-align:end;">-Roger Scruton</h5><br>
                <h5>
                    Os membros do Ceará Finance encorpam os valores da instituição e são nossa 
                    promessa de desenvolvimento e inovação.
                </h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="diretoria">
                <h1>Conheça a Ceará Finance</h1>
                <h2 class="text-center">Diretoria</h2>
                <div class="owl-carousel owl-theme">
                    <?php
                        # teste para mostrar os membros criados pelo admin
                        $args = array (
                        'post_type' => 'membros',
                        'category_name' => 'diretoria'
                        );
                        $tech_posts = new WP_Query($args);
                        if($tech_posts->have_posts()) :
                    ?>
                    <?php while ($tech_posts->have_posts()) : $tech_posts->the_post(); ?>
                    <div class="item card-owl col-12 mt-5 mb-5"> 
                        <div class="member col-12">
                            <div class="section-member">
                                <div class="img-member">
                                    <div class="member-banner col-xl-12 col-lg-12 col-md-12"> 
                                        <img class="member-thumb" <?php if(!has_post_thumbnail( $post->ID )){
                                                echo "no-thumbnail";
                                            }?>" 
                                            src="<?php if(has_post_thumbnail( $post->ID )){
                                                echo get_the_post_thumbnail_url($post->ID);
                                            }
                                                else{
                                                    echo get_template_directory_uri()."/assets/images/logo2.svg";
                                                }?>" alt="Noticia">
                                    </div>
                                </div>
                                <div class="infos">
                                    <h3><?php the_title();?></h3>
                                    <?php the_content();?>
                                    <a href="<?php echo get_the_excerpt()?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
            <div id="analistas">
                <h2 class="text-center">Analistas</h2>
                <div class="row mt-5 mb-5" style="display:flex; margin-left: 0px; margin-top: 1rem;">
                
                    <?php
                        # teste para mostrar os membros criados pelo admin
                        $args = array (
                        'post_type' => 'membros',
                        'posts_per_page' => 8,
                        'category_name' => 'analistas'
                        );
                        $tech_posts = new WP_Query($args);
                        if($tech_posts->have_posts()) :
                    ?>
                    <?php while ($tech_posts->have_posts()) : $tech_posts->the_post(); ?>
                    <div class="card-owl col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12"> 
                        <div class="member2 col-12">
                            <div class="section-member">
                                <div class="img-member">
                                    <div class="member-banner col-xl-12 col-lg-12 col-md-12"> 
                                        <img class="member-thumb" <?php if(!has_post_thumbnail( $post->ID )){
                                                echo "no-thumbnail";
                                            }?>" 
                                            src="<?php if(has_post_thumbnail( $post->ID )){
                                                echo get_the_post_thumbnail_url($post->ID);
                                            }
                                                else{
                                                    echo get_template_directory_uri()."/assets/images/logo2.svg";
                                                }?>" alt="Noticia">
                                    </div>
                                </div>
                                <div class="infos">
                                    <h3><?php the_title();?></h3>
                                    <?php the_content();?>
                                    <a href="<?php echo get_the_excerpt()?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </div>
<main>
<?php get_footer(); ?>