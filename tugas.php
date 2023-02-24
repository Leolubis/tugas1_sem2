<?php
//array asosiatif
    $ms1 = [ 'id'=>1 , 'nim' => '01101' , 'uts' => 80 , 'uas' => 90 , 'tugas' => 100 ];
    $ms2 = [ 'id'=>2 , 'nim' => '01102' , 'uts' => 85 , 'uas' => 80 , 'tugas' => 95 ];
    $ms3 = [ 'id'=>3 , 'nim' => '01103' , 'uts' => 75 , 'uas' => 95 , 'tugas' => 95 ];
    $ms4 = [ 'id'=>4 , 'nim' => '01104' , 'uts' => 90 , 'uas' => 85 , 'tugas' => 80 ];
    $ms5 = [ 'id'=>5 , 'nim' => '01105' , 'uts' => 95 , 'uas' => 80 , 'tugas' => 100 ];
    
    $ar_nilai =[$ms1 , $ms2 , $ms3 , $ms4 , $ms5];

    foreach($ar_nilai as $hasil)
        
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h3 >Tugas pertemuan 1</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>


    <?php
//cetak
        $nomor = 1;

        foreach($ar_nilai as $ns){
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) /3 ;

    ?> 

        <tr>
            <td> <?= $nomor ?> </td>
            <td> <?= $ns ['nim']   ?> </td>
            <td> <?= $ns ['uts']   ?> </td>
            <td> <?= $ns ['uas']   ?> </td>
            <td> <?= $ns ['tugas'] ?> </td>
            <td> <?= number_format($nilai_akhir,2)  ?> </td>
        </tr>
        
    <?php
        $nomor++ ;
        

        }
    ?>



</table>
  </body>
</html>