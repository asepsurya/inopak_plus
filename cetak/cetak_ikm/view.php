<?php include '../../asset/lib/koneksi.php'; ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Jenis Produk</th>
        <th>Alamat</th>
    </tr>
    <?php 
    $id=$_GET['id_kota'];
    $data = mysql_query("select * from tb_brainstorming where id_kota='$id'"); 
    $no = 1;
    while($d = mysql_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jenis_produk']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
    </tr>
    <?php
    } 
    ?>
</table>