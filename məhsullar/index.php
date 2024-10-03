<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Məhsul Paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/məhsullar.css">
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-2 product-block" data-product="cola" data-price="1.50">
            <img src="images/cola.jpg" class="img-fluid" alt="Cola">
            <div class="product-info text-center">
                <h5>Cola</h5>
                <p>Qiymət: <span class="price">1.50</span> AZN</p>
            </div>
        </div>

        <div class="col-md-2 product-block" data-product="fanta" data-price="1.30">
            <img src="images/fanta.jpg" class="img-fluid" alt="Fanta">
            <div class="product-info text-center">
                <h5>Fanta</h5>
                <p>Qiymət: <span class="price">1.30</span> AZN</p>
            </div>
        </div>

        <div class="col-md-2 product-block" data-product="sprite" data-price="1.40">
            <img src="images/sprite.jpg" class="img-fluid" alt="Sprite">
            <div class="product-info text-center">
                <h5>Sprite</h5>
                <p>Qiymət: <span class="price">1.40</span> AZN</p>
            </div>
        </div>

        <div class="col-md-2 product-block" data-product="bread" data-price="0.50">
            <img src="images/bread.jpg" class="img-fluid" alt="Çörək">
            <div class="product-info text-center">
                <h5>Çörək</h5>
                <p>Qiymət: <span class="price">0.50</span> AZN</p>
            </div>
        </div>

        <div class="col-md-2 product-block" data-product="mayo" data-price="2.00">
            <img src="images/mayo.jpg" class="img-fluid" alt="Mayonez">
            <div class="product-info text-center">
                <h5>Mayonez</h5>
                <p>Qiymət: <span class="price">2.00</span> AZN</p>
            </div>
        </div>

        <div class="col-md-2 product-block" data-product="ketchup" data-price="1.80">
            <img src="images/ketchup.jpg" class="img-fluid" alt="Ketçup">
            <div class="product-info text-center">
                <h5>Ketçup</h5>
                <p>Qiymət: <span class="price">1.80</span> AZN</p>
            </div>
        </div>
    </div>

    <div id="selected-product" class="mt-5">
        <div class="d-flex justify-content-end align-items-center">
            <img id="small-image" src="" alt="" class="me-3" style="width: 50px; height: 50px;">
            <span id="product-count">0</span>
            <button id="increase" class="btn btn-success mx-2">+</button>
            <button id="decrease" class="btn btn-danger">-</button>
            <p class="mx-3">Qiymət: <span id="total-price">0</span> AZN</p>
        </div>
    </div>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <input type="number" id="modal-count" value="0" class="form-control">
                    <button id="set-count" class="btn btn-primary mt-3">Təsdiqlə</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//include_once '../users/pages/parts/navbar.php';
//include_once '../sidebar/sidebar.php';

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="asset/məhsullar.js"></script>
</body>
</html>
