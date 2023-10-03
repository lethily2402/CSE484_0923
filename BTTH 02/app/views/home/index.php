<?php 
include(APP_ROOT."/app/views/support/CheckURL.php");
include(APP_ROOT."/app/views/support/Head.php")?>
<body>
    <?php include(APP_ROOT."/app/views/support/Header.php")?>
    <div class="carousel-container">
        <div id="carourelButton" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carourelButton" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carourelButton" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carourelButton" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=DOMAIN.'/public/img/1.jpg'?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?=DOMAIN.'/public/img/2.jpg'?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?=DOMAIN.'/public/img/3.jpg'?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carourelButton" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carourelButton" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="top_list container">
        <div class="banner d-flex justify-content-center">
            <h2 class="fs-bold text-blue">TOP BÀI HÁT YÊU THÍCH</h2>
        </div>
        <div class="row justify-content-around mt-4">
            <?php foreach ($results as $result) { ?>
                <a href="">
                    <div class="card mb-5" style="width: 20rem">
                        <img src="<?php echo $result['hinhanh'] ?>" class="card-img-top" style="height:16rem">
                        <div class="card-body">
                            <p class="card-text text-title"><?php echo $result['ten_bhat'] ?></p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
    <?php include(APP_ROOT."/app/views/support/Footer.php")?>
</body>

</html>
