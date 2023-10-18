<?php

$nilai1 = 50;
$nilai2 = 70;

$hasil = ($nilai1+$nilai2)/2;
for($i = 0; $i<5; $i++)
{
    if($hasil > 80)
    {
        echo'anda hebat <br>' ;
    }else{
        echo 'anda harus belajar nilai anda ='.$hasil .'<br>';
    }
}

?>