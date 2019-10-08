<?php
    $products = selectTop10();
?>
<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">Lượt xem nhiều nhất</h4>
    </div>
    <div class="list-group" id="displayList">
        <?php foreach($products as $product): ?>
            <div class="list-group-item d-flex">
                <div class="border rounded">
                    <img src="../img/<?=$product['hinh']?>" alt="" class="rounded" width="35px" height="35px">
                </div>
                <a href="index.php?view-product&ma_hh=<?=$product['ma_hh']?>" class="ml-3"><?=$product['ten_hh']?></a>
            </div>
        <?php endforeach ?>
    </div>
</div>