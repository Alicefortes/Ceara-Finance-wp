<?php get_header(); ?>
<main>
    <!-- Banner-->
    <div class="banner">
        <video width="100%" autoplay muted loop id="video-back">
            <source src="<?php echo get_bloginfo('template_url') ?>/assets/images/landing/landing.mp4" type="video/mp4">
        </video>
        <div class="black-one">
        </div>
        <div class="container">
            <div class="banner-text bold">
                <h1>Uma liga de mercado financeiro com <span>propósito</span> bem definido!</h1><br>
                <h5>
                    Disruptivos no estado, o Ceará Finance é a primeira instituição universitária 
                    com foco exclusivo em mercado financeiro.
                </h5>
            <a href="<?php echo get_home_url() . "/projetos/"?>"><button>Conheça nossos projetos</button></a>

            </div>
        </div>
    </div>
    <!-- Quem somos nós-->
    <div class="sobre">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 section-title">
                    <h1>Quem somos nós</h1>
                    <p>O <span> Ceará Finance </span> foi fundado em 2018 com a missão de promover a relação entre a realidade do mercado financeiro e o cotidiano universitário cearense. <br> 
                    Os membros do Ceará Finance vêm estruturando uma entidade que busca não só sua própria capacitação através de aulas, projetos e mentorias, mas também o desenvolvimento da presença do mercado financeiro no Ceará, sempre buscando a valorização e reconhecimento do capital intelectual do estado.</p>
                </div> 
            </div>
            <div class="row justify-content">
            
            <div class="col-xl-4 numeros">
                <div class="numeros-item text-center">
                    <h4><span class="material-icons-outlined">event_note</span></h4>    
                        <h4>4 Anos</h4>
                        <p>de instituição</p>
                    </div>
                </div>
            <div class="col-xl-4 numeros">
                <div class="numeros-item text-center">
                    <h4><span class="material-icons-outlined">school</span></h4>   
                        <h4>4 Universidades</h4>
                        <p>representadas por membros</p>
                    </div>
                </div>
                <div class="col-xl-4 numeros text-center">
                    <div class="numeros-item">
                    <h4> <span class="material-icons-outlined">groups</span></h4>  
                        <h4>1000 Universitários</h4>
                        <p>atingidos</p>
                    </div>
                </div>
                
            </div>
            <div class="row justify-content">
                <div class="col-xl-4 mvv">
                        <div class="mvv-item col-12">
                        <h4>Missão</h4>
                        <p>Formar e Educar, os projetos da liga focam principalmente nessas duas vertentes. Formar, reconhecendo que a grade curricular não prepara os membros para atuar no mercado. Educar é uma tentativa de transformar a mentalidade do universitário em relação a finanças e investimentos, nosso propósito social.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 mvv">
                    <div class="mvv-item col-12">
                        <h4>Visão</h4>
                        <p>Nosso objetivo é virar um ponto de referência nacional na capacitação de jovens para trabalhar no mercado financeiro, e ao mesmo tempo, nutrir a cultura de mercado no nosso estado.</p>
                    </div>
                </div>
                <div class="col-xl-4 mvv">
                    <div class="mvv-item col-12">
                        <h4>Valores</h4>
                        <p>Excelência, comprometimento e representatividade, entre outros, identificam o trabalho desenvolvido pela Ceará Finance.</p>
                    </div>
                </div>
                </div>
                
            
        </div>
    </div>
    <!--Parceiros-->
    <div class="container">
        <div>
            <h1>Nossos Parceiros</h1>
        </div>
        <div class="row parceiros">
            <div class="loop owl-carousel owl-theme">
                <?php
                    # mostrar os parceiros criados pelo admin
                    $args = array (
                    'post_type' => 'parceiro'
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
                                <?php the_content();?>
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
    <!--Contato-->
    <div class="container">
        <div class="row justify-content-center  contato ">
            <div class="col-xl-12 contato-title">
                    <h1>Entre em contato</h1>
                    <p>O Ceará Finance está de portas abertas para seu contato.</p>
            </div>
            <div class="col-xl-4 form">
                    
                    <div class="formulario">
                        <h5>Entre em contato</h5>
                    <?php echo do_shortcode( '[contact-form-7 id="10" title="Formulario de contato"]');?>
                    </div>
                
            </div>
            
            <div class="col-xl-8">

            <div class="infos row">
                <div class="local col">
                    <span> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/ ></svg></span>
                     <p>Universidade Federal do Ceará (UFC) - Campus do Pici</p>
                </div>

                <div class="tel col">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg></span>
                     <p>+55 (85) 99671-0009</p>
                </div>
                <div class="email col">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                    </svg></span>
                    <p>cearafinance@gmail.com</p>
            </div>    
            </div>
            <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2827491294966!2d-38.578834285710464!3d-3.748476744323433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7497d5a2320e5%3A0xca6930b6dece0362!2sUniversidade%20Federal%20do%20Cear%C3%A1%20(UFC)%20-%20Campus%20do%20Pici!5e0!3m2!1spt-BR!2sbr!4v1631851055924!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="social-f">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></a>
                
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </svg></a>

                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                </svg></a>

                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg></a>
            </div>
            </div>
        </div>
    </div>
    
<main>
<?php get_footer(); ?>