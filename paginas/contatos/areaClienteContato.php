<?php
 include_once('db/config.php');

if(!isset($_SESSION)){
    session_start();
}

// if(!isset($_SESSION['emailContato'])){
//     session_start();
// }

?>




<section class="servicos" id="servicos">
<div class="sair">                      

<a href="index.php?menuop=sair">Sair</a>
</div>

            <div class="servicos_content">
                <div class="row">
                    <div class="section_titulo">
                        <h1>Serviços</h1>
                        <span>Que realizamos</span>
    
                    </div>

                </div>
               

                <div class="servicos_content_descricao grid container">

                    <div class="box">
                        <div class="inner">
                            <img src="./img/manicure.jpg" alt="">
                            <p>Manicure</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner">
                            <img src="./img/pedicure.jpg" alt="">
                            <p>Pedicure</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner">
                            <img src="./img/maquiagem.jpg" alt="">
                            <p>Maquiagem</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner">
                            <img src="./img/cortemasculino.jpg" alt="">
                            <p>Corte Masculino</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="inner">
                            <img src="./img/cortefeminino.jpg" alt="">
                            <p>Corte Feminino</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="./img/penteado-grego.jpg" alt="">
                            <p>Penteados</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>