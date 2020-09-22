<?php

$data_siswa=[];

while(true)
{
    //Data siswa

    $siswa=&$data_siswa;

    //Banner Aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    //User input data siswa magang

    $input_siswa=readline("Masukkan data siswa !! ");

    //validasi huruf
    if(!preg_match("/^[a-zA-Z\s]*$/", $input_siswa) || empty($input_siswa))
    {
        echo "\n";
        echo "Mohon maaf validasi yang anda masukkan salah. \n";
        continue;
    }

    //Simpan Data Siswa 

    $siswa[]=$input_siswa;

    //Munculkan data siswa

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil ("$nomor.$key");
        $nomor++;
    }

    //Tanya user untuk masukkan data lagi

    tanyaUser();
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya = readline("Tambah data");
    if($tanya=="no")
    {
        tampil("Terima Kasih");
        exit;
    }
}

function menuAplikasi()
{
    $data=["Input Data", "tampil Data", "update Data", "Dellete Data"];

}

// function inputData()
// {

// }
// function tampilData()
// {

// }
// function update Data()
// {

// }
// function Dellete Data()
// {
    
// }

