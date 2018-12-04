<?php

$npm = filter_input(INPUT_POST, 'npm');
$nama = filter_input(INPUT_POST, 'nama');
$jurusan = filter_input(INPUT_POST, 'jurusan');
$kelas = filter_input(INPUT_POST, 'kelas');
$no_telp = filter_input(INPUT_POST, 'no_telp');

if (!empty($npm)) {
    if (!empty($nama)) {
        if(!empty($jurusan)) {
            if(!empty($kelas)) {
                if(!empty($no_telp)) {

                    function OpenCon() {

                        $server = "localhost";
                        $user = "root";
                        $password = "1234";
                        $dbname = "db_mahasiswa";

                        $conn = mysqli_connect($server, $user, $password, $dbname);

                        if (mysqli_connect_error()){
                            die('CONNECT ERROR('. mysqli_connect_errorno().')'. mysqli_connect_error());
                        }
                        else{
                            $sql= "INSERT INTO datamahasiswa (npm, nama, jurusan, kelas, no_telp) values ($npm, $nama, $jurusan, $kelas, $no_telp)";
                        }
                    }
                }
            }
        }
    }
}
?>
