<?php 
session_start();
if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
}
?>
<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style>
            body{
                margin-top:20px;
                background:#eee;
            }
            .ui-w-40 {
                width: 40px !important;
                height: auto;
            }

            .card{
                box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
            }

            .ui-product-color {
                display: inline-block;
                overflow: hidden;
                margin: .144em;
                width: .875rem;
                height: .875rem;
                border-radius: 10rem;
                -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
                box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
    <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <!-- Set columns width -->
                                <th class="text-right py-3 px-4" style="width: 100px;">No</th>
                                <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Quantity</th>
                                <th class="text-center py-3 px-4" style="width: 50px;">Price</th>
                                <th class="text-right py-3 px-4" style="width: 50px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                                <tr>
                                    <td><?=($key_produk+1)?></td>
                                    <td><?=$val_produk['nama_produk']?></td>
                                    <td><?=$val_produk['qty']?></td>
                                    <td><?=$val_produk['harga']*$val_produk['qty']?></td>
                                    <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                                </tr>
                    
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- / Shopping cart table -->
            
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="d-flex">
                    </div>
                </div>
            
                <div class="float-right">
                <a href="menu.php"></a><button type="submit" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
                <a href="checkout.php"><button type="submit" class="btn btn-lg btn-warning mt-2">Checkout</button></a>
                <h3 align="right">Total: </h3>
                </div>            
            </div>
        </div>
    </div>
</body>
</html>