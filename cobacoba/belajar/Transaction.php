<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transaksi Penjualan Parfum</title>
</head>
<body>
	<form action="Bill.php" method="POST">
        <table border ="1" cellpadding ="5" cellspacing="0">
            <tr>
                <th colspan="3">Form Penjualan Parfum</th>
            </tr>
            <tr>
                <td><label for="idtransaction">ID Transaksi</label></td>
                <td>:</td>
                <td><input type="text" name="idtransaction" id="idtransaction"></td>
            </tr>
            <tr>
                <td><label for="dateTransaction">Tanggal Transaksi</label></td>
                <td>:</td>
                <td><input type="date" id="dateTransaction" name="dateTransaction"></td>
            </tr>
            <tr>
                <td><label for="cashiername">Nama Kasir</label></td>
                <td>:</td>
                <td><input type="text" name="cashiername" id="cashiername"></td>
            </tr>
            <tr>
                <td><label for="brand">Merk Parfum</label></td>
                <td>:</td>
                <td>
                    <select id="brand" name="brand">
                        <option value="Wardah">Wardah</option>
                        <option value="Regaza">Regaza</option>
                        <option value="Vitalis">Vitalis</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="size">Ukuran Parfum</label></td>
                <td>:</td>
                <td>
                    <select id="size" name="size">
                        <option value="35">35 ml</option>
                        <option value="50">50 ml</option>
                        <option value="70">70 ml</option>
                        <option value="50">100 ml</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="quantity">Jumlah Barang</label></td>
                <td>:</td>
                <td><input type="number" id="quantity" name="quantity" min="0"></td>
            </tr>
            
        </table>
        <br>
		<button name="submit">Transaksi</button>
	</form>

	
</body>
</html>