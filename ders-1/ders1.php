<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web teknolojileri</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    // shift+alt+a
    /*değişken tanımşama kuralları=

    
    */
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo "Bilgisayar Programcılıgı" . " Web teknolojileri";

    echo "<hr><h4> değişken tanımlama kuralları</h4>";
    echo "<ol>
           <li> Degişken isimleri $ ile başlar</li>
           <li> Sayısal bir ifade ile başlamaz</li>
           <li> Boşluk kullanılmaz onun yerine birinci_sınıf birinciSınıf birinci-sınıf kullanılabilinir</li>
           <li> Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalı</li>
           <li> Büyük küçük harf kullanımına duyarlıdır</li>
           <li> Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak(\") veya tek tırnak (') kullanılır. </li>
           <li> Değişken içerisinde eğer sayısaal ifade varsa tırnak kullanılmadan yazılır.</li>
           <li>Değişkenler ekrana echo komutu ile yazdırılır</li>
         </ol>";

    echo "<hr><h4> Değişken Tanımlama Örnekleri</h4>";
    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 34;

    echo "$isim $soyisim";
    echo "<br>";
    echo $isim . " " . $soyisim;

    /* uygulama :
            Üniversite myo-ad-soyad-numara degişkeni oluşturup içeriğini uygun şekilde doldurunuz . 
            girilen bu değişkenlerin degerlerini bit html tablo içerisinde gösteriniz*/

    $uni    = "Adnan Menderes";
    $myo    = "MYO";
    $ad     = "Dicle";
    $soyad  = "Karagöz";
    $no     = "216001009";
    ?>

    <body>

        <table border=2>
            <tr>
                <td></td>
                <td>2. Sütun </td>
            </tr>
            <tr>
                <td>Ahmet</td>
                <td>Cansever</td>
            </tr>
            <tr>
                <td>Mehmet</td>
                <td>Salim</td>
            </tr>
        </table>
    </body>

</html>