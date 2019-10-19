<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a5910b1756.js" crossorigin="anonymous"></script>
    <title>X-Shop</title>
    <style>
        body{
            background-color: #fefefe;
        }
        .link{
            color: white;
            text-decoration: none;
        }
        .list-group-item {
            text-decoration: none !important;
        }
        #displayList{
            min-height: 200px;
        }
        .img{
            height: 400px;
        }
        .product{
            max-width: 15rem;
            margin: 10px 0px 25px;
        }
        .img-product{
            margin-top: -1px;
            width: 100%;
            height: 150px;
        }
        .product-title{
            height: 50px;
        }
        .name-product:hover{
            color: #2f9a16;
        }
        .user{
            position: relative;
        }
        #tableUser{
            display: none;
            width: 160px;
            position: absolute;
            z-index: 10;
            background-color: white;
            top: 51px;
            left: -75px;
            padding: 10px;
        }
        #tableUser>a{
            font-size: 14px;
            text-decoration: none;
        }
        #tableUser img{
            z-index : 30;
        } 
    
        #tableUser:after {
            content: "";
            position: absolute;
            top: 0;
            left: 60%;
            width: 1rem;
            height: 1rem;
            background-color: white;
            border: 1px solid #dee2e6;
            z-index: 10;
            transform: translate(-50%, -50%) rotate(-45deg);
        }
        #tableUser:before {
            content: "";
            position: absolute;
            top: 0;
            left: 60%;
            width: 2rem;
            height: 1rem;
            background-color: white;
            z-index: 11;
            transform: translate(-50%, -5%);
        }
        .quantity{
            width: 80px !important;
        }
        .comment{
            right: 17px;
            bottom: -20px;
        }
        .view-pro {
            margin-bottom: 0px !important;
        }
        .medium-4 {
            flex: 0 0 35.33333%;
            max-width: 19.33333%;
            padding-right: 1.25rem;
            padding-left: 1.25rem;
        } 
        @media screen and (max-width: 50em){
            .medium-4 {
                flex: 0 0 50%;
                max-width: 50%;
                padding-right: .9375rem;
                padding-left: .9375rem;
            } 
        } 
    </style>
</head>
<body>
<?php include 'menu.php' ?>
    <div class="container-fluid">
        <div class="row">
            <article class="content col-md-9">
                <?php include $view_name; ?>
            </article>
            <aside class="aside  col-md-3">
                <?php include "list.php" ?>
                <?php include 'top10.php' ?>
            </aside>
        </div>    
    </div>
 
    <script>
        $(document).ready(function(){
            $("#user").click(function(){
                $("#tableUser").fadeToggle("slow");
            });
        });
    </script>
</body>
</html>