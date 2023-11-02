<?php
    $conn = mysqli_connect("localhost:3308","root","","wad_project3");
    $result = mysqli_query($conn,"SELECT * FROM student");
?>

<DOCTYPE html>
<h1>Ini adalah halaman index data</h1>

<table border="1">
  <thead>
    <tr>
      <th>id</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php while( $data = mysqli_fetch_object($result)){?>
    <tr>
      <td><?php echo $data->id; ?></td>
      <td><?php echo $data->nim; ?></td>
      <td><?php echo $data->name; ?></td>
      <td><?php echo $data->address; ?></td
    </tr>
    <?php }?>
  </tbody>
</table>