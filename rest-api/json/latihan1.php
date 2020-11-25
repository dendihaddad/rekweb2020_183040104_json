<?php

// $mahasiswa = [
//     "nama" => "Dendi Haddad",
//     "nrp" => "183040104",
//     "email" => "haddad.183040104@mail.unpas.ac.id"
// ];


$dbh = new PDO('mysql:localhost;dbname=phpdasar', 'root', 'root');
$db = $dbh ->prepare('SELECT * FROM mahasiswa');
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>