<?php wp_footer(); ?>
<footer>
<div class="container">
    <div class="row justify-content-center rodape ">
        <div class="col rodape-item">
            <h4>Páginas</h4>
            <a href="#"><p>Home</p></a>
            <a href="#"><p>Projetos</p></a>
            <a href="#"><p>Equipe</p></a>
            <a href="#"><p>Blog</p></a>
        </div>
        <div class="col rodape-item">
            <h4>Seções</h4>
            <a href="#"><p></p></a>
            <?php if ( is_front_page() == true ){
                echo '
                    
                ';
            }?>
            <?php if ( is_page('projetos') == true ){
                echo '
                    <a href="#"><p>CF Educação</p></a>
                    <a href="#"><p>CF Asset Management</p></a>
                    <a href="#"><p>CF Equity Research</p></a>
                ';
            }?>
            <?php if ( is_page('equipe') == true ){
                echo '
                    
                ';
            }?>
            <?php if ( is_category() == true ){
                echo '
                    
                ';
            }?>
        </div>
        <div class="col rodape-item">
            <h4>Sobre</h4>
            <p>Rua Humberto Monte, Fortaleza, Ceará 6000, Br</p>
            <p>+55 (85) 99671-0009</p>
            <p>cearafinance@gmail.com</p>
            <div class="social">
                <a href="#"><p>i </p></a>
                <a href="#"><p>i </p></a>
                <a href="#"><p>i </p></a>
                <a href="#"><p>i </p></a>
                <a href="#"><p>i </p></a>
            </div>
        </div>
        <div class="col-xl-12 text-center ">
            <p class="direito" >201X - 2021 CEARÁ FINANCE. Todos os direitos reservados.</p>
        </div>
    </div>
</div>
</footer>
</body> 