<?php 
    include "connection.php";
    $qry_detail_buku=mysqli_query($connection,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-normal mb-0 text-black">BUY</h3>
</div>
<div class="row">
<div class="row d-flex justify-content-between align-items-center">
    <div class="col-md-2 col-lg-2 col-xl-2">
        <img src="foto/<?=$dt_buku['foto_produk']?>" class="img-fluid rounded-3" alt="">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_buku['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>PRODUCT</td><td><?=$dt_buku['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>DESKRIPTION</td><td><?=$dt_buku['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>PRICE</td><td><?=$dt_buku['harga']?></td>
                    </tr>
                    <tr>
                        <td>QTY</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-warning" type="submit" value="BUY"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
