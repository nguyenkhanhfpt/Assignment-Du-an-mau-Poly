
<h2 class="text-center mb-5">Tất cả sản phẩm</h2>
    <div class="d-flex flex-wrap justify-content-start">
        <?php $count = 0 ?>
        <?php foreach($products as $product): $count++ ?>
                <div class="product text-center">
                    <a href="index.php?view-product&ma_hh=<?=$product['ma_hh']?>" class="text-decoration-none text-body">
                        <div class="product-title">
                            <p class="name-product"><?=$product['ten_hh']?></p>
                        </div>

                        <img src="../img/<?=$product['hinh']?>" alt="" class="img-product">
                    </a>
                    <p class="text-danger">Còn hàng</p>
                    <h5 class="mt-n2 text-success"><?=$product['don_gia']?> $</h5>
                </div>
                
            <?php endforeach ?>
            <?php if($count == 0) : ?>
                <p>Không có sản phẩm nào</p>
            <?php endif ?> 
    </div>