<?php
    $product = selectProductsId($ma_hh);
    $sameKind = selectProductsSameKind($ma_hh);
    $comments = selectComment($ma_hh);
?>

<div class="card-deck mb-3 view-pro">
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="row">
                <img src="<?=$IMG_URL?>/<?=$product['hinh']?>" alt="" class="col-md-5">
                <div class="col-md-7 p-4">
                    <h2 class="font-weight-bold text-success "><?=$product['ten_hh']?></h2>
                    <div class="mb-3" style="color: orange">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <form class="d-flex">
                        <input type="hidden" value="<?=$product['ma_hh']?>" name="ma_hh">
                        <input type="number" min="1" max="99" value="1" name="quantity" class="form-control mr-3 quantity">
                        <input type="submit" value="Mua hàng" name="addCart" class="btn btn-primary">
                    </form>
                    <hr>
                    <h2><?=$product['don_gia']?> $</h2>
                    <p>Trạng thái: Còn hàng</p>
                </div>
            </div>
            <div class="row">
                <p class="text-justify mx-4 mt-3"><?=$product['mo_ta']?></p>
            </div>
        </div>

        <div class="border mx-3 mx-md-4 mb-4 p-3 rounded shadow-sm">
            <h4 class="font-weight-bold">Bình luận</h4>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <input type="hidden" value="<?=$product['ma_hh']?>" name="ma_hh">
                    <input type="text" class="form-control" placeholder="Nhập bình luận..." name="noi_dung">
                </div>
                <input type="submit" value="Đăng tải"  name="binh-luan" class="btn btn-primary">
            </form>
        </div>

        <?php foreach($comments as $comment) :  ?>
            <div class="border mx-4 mx-md-5 mb-2 p-2 rounded shadow-sm">
                <div class="row ">
                    <div class="col-2 col-md-1">
                        <img src="<?=$IMG_URL?>/<?=$comment['hinh_kh']?>" alt="" class="rounded-circle" width="50px" height="50px">
                    </div >
                    <div class="col-10 col-md-11 position-relative">
                        <h5><?=$comment['ho_ten']?></h5>
                        <p><?=$comment['noi_dung']?></p>
                        <p class="small position-absolute comment"><?=$comment['ngay_bl']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="container border shadow-sm rounded p-4 mb-3">
    <h3 class="mb-4">Sản phẩm cùng loại</h3>
    <?php if(isset($sameKind)) : ?>
        <?php foreach($sameKind as $product) :?>
            <a href="" class="d-flex mb-3 text-decoration-none">
                <img src="<?=$IMG_URL?>/<?=$product['hinh']?>" class="rounded" width="80px" height="auto">
                <p class="ml-3"><?=$product['ten_hh']?> 
                    <br>
                    <span class="font-weight-bold"><?=$product['don_gia']?> $</span>
                </p>
            </a>
        <?php endforeach ?>
    <?php else : ?>
        <p>Không có phản phẩm nào</p>
    <?php endif ?>
    
</div>