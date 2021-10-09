<?php
    $price = [
        "Wardah" => [
            "35" => 45000,
            "50" => 55000,
            "70" => 75000,
            "100" => 95000
        ],
        "Regaza" => [
            "35" => 30000,
            "50" => 50000,
            "70" => 70000,
            "100" => 90000
        ],
        "Vitalis" => [
            "35" => 25000,
            "50" => 40000,
            "70" => 65000,
            "100" => 80000
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Struk Pembayaran Parfum</title>
</head>
<body>

    <?php
        $idtransaction = $_POST["idtransaction"];
        $dateTransaction = $_POST["dateTransaction"];
        $cashiername = $_POST["cashiername"];
        $brand = $_POST["brand"];
        $size = $_POST["size"];
        $quantity = $_POST["quantity"];
        $shopping = $price[$brand][$size]*$quantity;
        $tax = 0.10*$shopping;
        $bill = $shopping+$tax; 
    ?>
    <table cellpadding ="5" cellspacing="0">
        <tr>
            <th colspan="3">STRUK PEMBAYARAN</th>
        </tr>
        <tr>
            <td>ID Transaksi</td>
            <td>:</td>
            <td><?=$idtransaction?></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi</td>
            <td>:</td>
            <td><?=$dateTransaction?></td>
        </tr>
        <tr>
            <td>Nama Kasir</td>
            <td>:</td>
            <td><?=$cashiername?></td>
        </tr>
        <tr>
            <td>Merk Parfum</td>
            <td>:</td>
            <td><?=$brand?></td>
        </tr>
        <tr>
            <td>Ukuran Parfum</td>
            <td>:</td>
            <td><?=$size?></td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td>:</td>
            <td><?=$size?></td>
        </tr>
        <tr>
            <td>Total Belanja</td>
            <td>:</td>
            <td><?=$quantity." x Rp".$price[$brand][$size].",- = Rp$shopping,-"?></td>
        </tr>
        <tr>
            <td>Pajak</td>
            <td>:</td>
            <td><?="10% x Rp$shopping,- = Rp$tax,-"?></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td><?="Rp$bill,-"?></td>
        </tr>
    </table>
</body>
</html>