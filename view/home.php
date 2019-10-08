<?php
$products = selectTop10();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=$IMG_URL?>/maxresdefault.jpg" class="d-block w-100" alt="..." width="100%" height="450px" >
    </div>
    <div class="carousel-item">
      <img src="<?=$IMG_URL?>/05.jpg" class="d-block w-100" alt="..." width="100%" height="450px">
    </div>
    <div class="carousel-item">
      <img src="<?=$IMG_URL?>/06.jpg" class="d-block w-100" alt="..." width="100%" height="450px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<h5 class="mt-3">Sản phẩm bán chạy</h5>
<div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
        <div class="card-body d-flex flex-wrap justify-content-start">
            <?php foreach ($products as $product) : ?>
                <div class="product ">
                    <a href="index.php?view-product&ma_hh=<?= $product['ma_hh'] ?>" class="text-decoration-none text-body">
                        <div class="product-title">
                            <p class="name-product"><?= $product['ten_hh'] ?></p>
                        </div>

                        <img src="../img/<?= $product['hinh'] ?>" alt="" class="img-product">
                    </a>
                    <p class="text-danger">Còn hàng</p>
                    <h5 class="mt-n2 text-success"><?= $product['don_gia'] ?> $</h5>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>