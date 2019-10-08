<?php
    $items = selectTitle();
?>
<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">Danh sách sản phẩm</h4>
    </div>
    <div class="list-group" id="displayList">
    </div>
    <div class="card-footer">
        <form action="index.php" method="get">
            <input name="titleProduct" placeholder="Từ khóa tìm kiếm" class="form-control" id="keywords">
        </form>
    </div>
</div>


<script>
    var displayList = document.getElementById('displayList');
    var keywords = document.getElementById('keywords');
    var list = [];

    <?php foreach($items as $item) : ?>
        list.push("<?=$item['ten_loai']?>")
    <?php endforeach ?>

    keywords.addEventListener('keyup', function () {
        var input = keywords.value;

        var filterList = list.filter(function (item) {
            var itemLower = item.toLowerCase();
            var findList = itemLower.indexOf(input.toLowerCase());
            if (findList == 0) {
                return item;
            }
        });

        render(filterList);
    });

    function render(arr) {
        var content = arr.map(function (item) {
            return "<a href='<?=$VIEW_URL?>/index.php?titleProduct=" +item+ "' class='list-group-item'>" + item + "</a>";
        });
        displayList.innerHTML = content.join('');
    }

    render(list);
</script>
