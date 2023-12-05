<?php 
    include "header.php";
?>
<h2>MENU</h2>
<div class="row">
    <?php 
    include "connection.php";
    $qry_produk=mysqli_query($connection,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="foto/<?=$dt_produk['foto_produk']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>
                <a href="login.php" class="btn btn-warning">Buy</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>