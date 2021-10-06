<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
<center>
    <table border="0" cellpadding="10">
        <caption><h3>Invoice <?php echo $_GET["name"]; ?> </br>
                Partner Of PiBli SuperApp </h3>
        </caption> 
        
        <tr>
            <th> Nama Item </th>
            <th></th>
            <th>Qty.</th>
            <th></th>
            <th>@</th>
            <th></th>
            <th>Total Harga</th>
        </tr>
        <tr>
            <td><?php echo $_GET["barang"]; ?></td>
            <td></td>
            <td><?php echo $_GET["jumlah"]; ?></td>
            <td></td>
            <td><?php echo $_GET["harga"]; ?></td>
            <td></td>
            <td><?php echo $_GET["hj"]; ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th colspan="3">Total</th>
            <td><?php echo $_GET["hj"]; ?></td>
        </tr>
    </table>
    </center>
     
</body>
</html>