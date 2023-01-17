<?php
if (isset($_POST['gonder'])) {
    $sayi = $_POST['sayi'];

    if (!empty($_POST['sayi'])) {

    if ($sayi % 3 == 0){
        echo "$sayi sayısı 3 ile tam bölünür.";
    }
    else{
        $fark= $sayi;
        $fark++;
        while ($fark % 3 !==0){
            $fark++;
        }
        echo "$sayi sayısı 3 ile tam bölünemez. Bölünebilecek ilk sayı $fark";
    }
    }else{
            echo 'Lütfen Sayı Giriniz.';
        }
}