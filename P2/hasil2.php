<?php
$a=$_POST['NIM'];
$a=$_POST['password'];
$a=$_POST['nama'];
$a=$_POST['jurusan'];
$a=$_POST['jk'];
?>
<html>
<head>
    <title>Hasil</title>
</head>
<body>
    <table border="1">
        <tr>
            <thead>
                <th>NIM</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
            </thead>
        </tr>
        <tr>
            <tbody>
                <th><?php echo $a; ?></th>
                <th><?php echo $b; ?></th>
                <th><?php echo $c; ?></th>
                <th><?php echo $d; ?></th>
                <th><?php echo $e; ?></th>
            </tbody>
        </tr>
    </table>
</body>
</html>
