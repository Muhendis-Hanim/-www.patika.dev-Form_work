
<?php
/*Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın.
Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
Boş değer gönderilirse değerin boş olmayacağını bildirin.
*/
if (isset($_POST['gonder'])) {

    if (!empty($_POST['sayi'])) {
        $sayi = $_POST['sayi'];
    if ($sayi % 3 == 0){
        echo "$sayi sayısı 3 ile tam bölünür.";
    }
    else{
        $fark= $sayi;
        $fark++;
        while ($fark % 3 !=0){
            $fark++;
        }
        echo "$sayi sayısı 3 ile tam bölünemez. Bölünebilecek en yakın ilk sayı $fark";
    }
    }else{
            echo 'Lütfen Sayı Giriniz.';
        }
}
