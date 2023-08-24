<!DOCTYPE html>
<html>
    <head>
        <style>
            .our-team{
                border-radius: 15px;
                text-align: center;
                padding: 20px 15px 30px;
                background: #fff;
            }
            .our-team .pic{
                background: #fff;
                padding: 10px;
                margin-bottom: 5px;
                display: inline-block;
                width: 100%;
                height: 100%;
                transition: all 0.5s ease 0s;
            }
            .our-team:hover .pic{
                background: #5A9BE6;
                border-radius: 50%;
            }
            .pic img{
                width: 100%;
                height: auto;
                border-radius: 50%;
            }
            .our-team .title{
                font-weight: 600;
                color: #2e282a;
                text-transform: uppercase;
                display: block;
                font-size: 20px;
                margin: 0;
            }
            .our-team .post{
                color: #5A9BE6;
                text-transform: capitalize;
                display: block;
                font-size: 15px;
            }
            .our-team .social{
                padding: 0;
                margin: 0;
                list-style: none;
            }
            .our-team .social li{
                display: inline-block;
                margin-right: 5px;
            }
            .our-team .social li a{
                border-radius: 50%;
                font-size: 15px;
                color: #5A9BE6;
                border: 1px solid #5A9BE6;
                display: block;
                width: 30px;
                height: 30px;
                line-height: 30px;
                transition: all 0.5s ease 0s;
            }
            .our-team:hover .social li a{
                background: #5A9BE6;
                color: #fff;
            }
            .our-team:hover .pic{
                background: #5A9BE6;
                border-radius: 50%;
            }
            .our-team:hover .social li a{
                background: #5A9BE6;
                color: #fff;
            }
        </style>

        <!-- ==========[FAVICON]========== -->
        <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/logo/favicon.ico" type="image/x-icon">
    </head>

    <header>
        <?php
            include_once '../topmenu.php';
        ?>
    </header>

    <body>
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/victor.png">
                        </div>
                        <h3 class="title">Victor Santos</h3>
                        <span class="post">Desenvolvedor</span>
                        
                    <a href="#" class="bi bi-facebook"></a>
                    <a href="#" class="bi bi-twitter"></a>
                    <a href="#" class="bi bi-linkedin"></a>

                    </div>
                    
                  
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/renato.png">
                        </div>
                        <h3 class="title">Renato Godoi</h3>
                        <span class="post">Desenvolvedor </span>
                        
                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                        <!--social icon-->

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/felipe.png">
                        </div>
                        <h3 class="title">Felipe Marques</h3>
                        <span class="post">DBA </span>

                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                        <!--social icon-->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/joao.png">
                        </div>
                        <h3 class="title">João</h3>
                        <span class="post">Designer</span>

                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                        <!--social icon-->

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/leandro.png">
                        </div>
                        <h3 class="title">Leandro Carvalho</h3>
                        <span class="post">Gerente</span>

                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                        <!--social icon-->

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/matheus.png">
                        </div>
                        <h3 class="title">Matheus Nicacio</h3>
                        <span class="post">Administrador </span>

                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                        <!--social icon-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="/images/team/lucas.png">
                        </div>
                        <h3 class="title">Lucas</h3>
                        <span class="post">Auxiliar Geral</span>

                        <a href="#" class="bi bi-facebook"></a>
                        <a href="#" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-linkedin"></a>
                        <!--social icon-->
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <?php
            include_once '../footer.php';
        ?>
    </footer>
</html>
