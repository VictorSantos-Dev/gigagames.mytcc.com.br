
<?php
    session_start();
	include_once('../conexao.php')
?>

<?php
    # Executa a query de retorno dos feedbacks
    $buscaFeedbacks1 = "SELECT * FROM FEEDBACKS INNER JOIN users ON FEEDBACKS.ID_USER = users.id_user limit 4";
    $buscaFeedbacks2 = "SELECT * FROM FEEDBACKS INNER JOIN users ON FEEDBACKS.ID_USER = users.id_user where FEEDBACKS.ID_FDBCK between 5 and 9";
    $buscaFeedbacks3 = "SELECT * FROM FEEDBACKS INNER JOIN users ON FEEDBACKS.ID_USER = users.id_user where FEEDBACKS.ID_FDBCK between 10 and 14";
    $result_query1 = mysqli_query($conexao, $buscaFeedbacks1);
    $result_query2 = mysqli_query($conexao, $buscaFeedbacks2);
    $result_query3 = mysqli_query($conexao, $buscaFeedbacks3);
?>

<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Giga Games</title>
    <!-- ==========[FAVICON]========== -->
    <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/telas/home/css/style.css">
  </head>

  <header>
    <?php
        include_once '../topmenu.php';
    ?>
  </header>

  <body>
    <section>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <button class="btn btn-primary btnSlide" style="background-color: rgb(255 255 255 / 14%)!important; border: 2px solid #a2302d;">APROVEITE</button>
                        <img src="../images/banner-slider/banner1.png" class="d-block w-100">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <button class="btn btn-primary btnSlide">GARANTA</button>
                        <img src="../images/banner-slider/banner2.png" class="d-block w-100">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                    <button class="btn btn-primary btnSlide" style="background-color: rgb(255 255 255 / 14%)!important; border: 2px solid #a2302d;">CONFIRA</button>
                        <img src="../images/banner-slider/banner3.png" class="d-block w-100">
                    </div>
                </div>
            </div>
            <!-- botões de navegação entre os slides -->
            <div class="swiper-pagination"></div>
            <!-- botões de "próximo" e "anterior" dos slides -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <br><br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"  style="display: flex; justify-content: center;">
                    <svg style="margin: 1rem 2rem 0rem 0rem;" version="1.1" id="line_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20%" height="0.35rem" xml:space="preserve">
                        <path class="path2" fill="#000" stroke-width="3" stroke="#000" d="M0 0 l1120 0"/>
                    </svg>
                    <h3>FEEDBACKS</h3>
                    <svg style="margin: 1rem 0rem 0rem 2rem;" version="1.1" id="line_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20%" height="0.35rem" xml:space="preserve">
                        <path class="path2" fill="#000" stroke-width="3" stroke="#000" d="M0 0 l1120 0"/>
                    </svg>
                </div>
            </div>
            <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php while ($row1 = mysqli_fetch_array( $result_query1 )) { ?>
                            <div class="col">
                                <div class="card" style="height: 11.5rem;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6" style="display: flex; justify-content: flex-start;">
                                                <h6 class="card-title"><b><?php echo $row1['first_name']?></b></h6>
                                            </div>
                                            <div class="col-md-6" style="display: flex; justify-content: flex-end;">
                                                <?php
                                                    if ($row1['ESTRELAS'] == 5) {
                                                        echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i>';
                                                    } elseif ($row1['ESTRELAS'] == 4) {
                                                        echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                                    } elseif ($row1['ESTRELAS'] == 3) {
                                                        echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                                    } elseif ($row1['ESTRELAS'] == 2) {
                                                        echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                                    } elseif ($row1['ESTRELAS'] == 1) {
                                                        echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                                    } else {
                                                        echo '<i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <p class="card-text"><?php echo $row1['DESC_FDBCK']?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                        <?php while ($row2 = mysqli_fetch_array( $result_query2 )) { ?>
                        <div class="col">
                        <div class="card" style="height: 11.5rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6" style="display: flex; justify-content: flex-start;">
                                        <h6 class="card-title"><b><?php echo $row2['first_name']?></b></h6>
                                    </div>
                                    <div class="col-md-6" style="display: flex; justify-content: flex-end;">
                                        <?php
                                            if ($row2['ESTRELAS'] == 5) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i>';
                                            } elseif ($row2['ESTRELAS'] == 4) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } elseif ($row2['ESTRELAS'] == 3) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } elseif ($row2['ESTRELAS'] == 2) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } elseif ($row2['ESTRELAS'] == 1) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } else {
                                                echo '<i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <p class="card-text"><?php echo $row2['DESC_FDBCK']?></p>
                            </div>
                        </div>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                        <?php while ($row3 = mysqli_fetch_array( $result_query3 )) { ?>
                        <div class="col">
                        <div class="card" style="height: 11.5rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6" style="display: flex; justify-content: flex-start;">
                                        <h6 class="card-title"><b><?php echo $row3['first_name']?></b></h6>
                                    </div>
                                    <div class="col-md-6" style="display: flex; justify-content: flex-end;">
                                        <?php
                                            if ($row3['ESTRELAS'] == 5) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i>';
                                            } elseif ($row3['ESTRELAS'] == 4) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } elseif ($row3['ESTRELAS'] == 3) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } elseif ($row3['ESTRELAS'] == 2) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } elseif ($row3['ESTRELAS'] == 1) {
                                                echo '<i class="bi bi-star-fill" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            } else {
                                                echo '<i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i><i class="bi bi-star" style="color: #e7e700;"></i>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <p class="card-text"><?php echo $row3['DESC_FDBCK']?></p>
                            </div>
                        </div>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
  </body>

  <footer>
    <?php
        include_once '../footer.php';
    ?>
  </footer>
</html>

<script>
  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  effect: 'coverflow',
  autoplay: {
      delay: 5000,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  }
});
</script>

<?php
    mysqli_close($conexao);
?>