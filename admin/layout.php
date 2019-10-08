<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <?php include "menu.php" ?>
    <?php include $view_name ?>


    <script>
        $(document).ready(function (){
            $('#check-all').click(function(){
                $(':checkbox').prop('checked', true);
            });
            $('#clear-all').click(function() {
                $(':checkbox').prop('checked', false);
            });
            $('#btn-delete').click(function() {
                if($(":checked").length === 0){
                    alert("Vui lòng chọn ít nhất một mục!");
                    return false;
                }
            });
        });
    </script>
</body>
</html>