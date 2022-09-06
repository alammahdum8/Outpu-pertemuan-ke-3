<?php
$namafolder="gambar/"; //folder tempat menyimpan file
$lampiran = $namafolder . basename($_FILES['filegmbr']['name']);
      
echo"<img src='$lampiran' height='300'>";

?>