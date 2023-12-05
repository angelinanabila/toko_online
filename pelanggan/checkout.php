<?php
session_start();
include "connection.php";
$cart = @$_SESSION['cart'];
$idPel = @$_SESSION['id_pelanggan'];
$date = date("Y-m-d");
if (count($cart) > 0) {
    $tgl_diterima=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')),date('Y')));
    mysqli_query($connection, "insert into transaksi (id, tanggal_transaksi, tanggal_diterima) VALUE ('$idPel', '$date', '$tgl_diterima')");
    $id = mysqli_insert_id($connection);
    
    foreach ($cart as $key_produk => $val_produk) {
        $idProd = $val_produk['id_produk'];
        $val_produk['qty'] ;
        $subtotal = $val_produk['qty'] * $val_produk['harga'];
        mysqli_query($connection, "insert into detail_transaksi(id_transaksi,qty,subtotal,id_produk) value('" . $id . "','" . $val_produk['qty'] . "','" . $subtotal . "','".$idProd."')");
        mysqli_error($connection);
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_transaksi.php"</script>';
}
?>