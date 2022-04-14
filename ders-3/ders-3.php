<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
      
      /* Uygulama Ödevi = kuyruk ve yığın veri yapılarının php üzerine dizileri kullanılarak örneklendirilmesini gerçekleştirini  */
       /* Uygulama= Rasgele üretilen sayı 
        50'den büyükse 
           Geçtiniz:Notunuz: xx
        50'den küçükse
           kaldınız:Notunuz: xx
        Uygulamasını gerçekleştiriniz    
       */
       $not= rand(10,100);
       if ($not >50){
          echo "Geçtiniz $not";
       }else{
          echo"Kaldınız $not";
       }
  
      echo "<h3> Sık kullanılan string fonksiyonlar</h3>";
  
      $yazi = " Aydın Adnan Menderes Üniversitesi";
      echo " \$yazi Değişkeninin İçeriği : $yazi "; 
      echo"<br> \$yazi Değişkeninin Türü :". gettype($yazi);
      echo "<br>";
  
      /* İçeriğin büyük harfe dönüştürülmesi*/
      echo "<br> \$yaazi'nin Büyük Harfle yazılması: ".$byazi= strtoupper($yazi);
      echo "<br> \$yaazi'nin Büyük Harfle yazılması: ".$byazi= mb_strtoupper($yazi);
       
      
      echo "<br>";

      /* İçeriğin Küçük harfe dönüştürülmesi*/
      echo "<br> \$yaazi'nın Küçük Harfle yazılması: ".$kyazi= strtolower($yazi);
      echo "<br> \$yaazi'nın Küçük Harfle yazılması: ".$kyazi= mb_strtolower($yazi);

      echo "<br>";

      /* İçeriğin ilk harfinin büyük harfe dönüştürülmesi*/
      echo "<br> \$yaazi'nın ilk harfinin büyük Harfle yazılması: ".$yazi= ucfirst($kyazi);
      
      echo "<br>";

      /* İçerikteki her kelimenin ilk harfinin büyük harfe dönüştürülmesi*/
      echo "<br> \$yaazi'nın her kelimesinin ilk harfinin büyük Harfle yazılması : ".$yazi= ucwords($kyazi);
      echo "<br>";

       /* İçeriğin harf sayısı  */
      echo"<br> \$yazi'nın harf sayısı :". strlen($yazi);
      echo "<br>"; 

      /* ascıı char dönüşümü  */
      echo" Karakter karşılıgı (65) :". chr(65);
      echo "<br>"; 

      echo" Karakter karşılıgı (100) :". chr(100);
      echo "<br>";
      
      echo "<br>";
      /* 0-255 arasındaki değerleri chr fonksiyonuna sokarak satır satır yazdırınız*/
      for ($i=33; $i <= 126 ; $i++) { 
          echo"$i:". chr($i). " ";}

      /* Metin parçalanarak diziye dönüştürülmesi */  
      echo"<br> br>"; 
      echo $yazi . "<br>"; 
      $dizi=explode(" ",$yazi);

      echo"<pre>";
      print_r($dizi);
      echo"<pre>";


      /* Uygulama:metin içerisindeki kelime ve cümle sayısını alt alta yazdırınız. */
       $metin="   Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quo harum! Soluta nisi rerum 
       magnam itaque et rem harum magni recusandae alias. Temporibus quos assumenda asperiores, totam obcaecati vero esse! 
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam accusantium culpa inventore velit cumque, dolore explicabo,
       magnam architecto, cupiditate harum consequuntur nobis. Distinctio temporibus eos autem amet, laudantium odit saepe.";
  
       $kelimeDizisi = explode(" ", $metin);
       $cümleDizisi = explode(".", $metin);

       echo"Kelime Sayısı = " . count($kelimeDizisi);
       echo "<br>";
       echo"Cümle Sayısı = " . count($cümleDizisi);

      /* uygulama: veri tabanında 2022- */

      $tarih= "2022-11-20";
      $tarihDizisi = explode("-",$tarih);
      echo"<pre>";
      print_r($tarihDizisi);

      echo"<pre>";
      echo"Tarih:" . $tarihDizisi[2] . "." . $tarihDizisi[1] . "." . $tarihDizisi[0];

      /* Dizinin Metine Dönüştürülmesi */

      echo"<br>";
      $aylarDizisi = array(
        "ocak",
        "şubat",
        "mart",
        "nisan",
        "mayıs"
     );
     echo"<pre>";
     print_r($aylarDizisi);
     echo"<pre>";
     $aylarString=implode("-",$aylarDizisi);

     /* str_split String parçalama işlemi yapar */
     echo"<br>";

     $iban = "TR0000011112222333";
     $yeniIban= str_split($iban,4);
     echo "<pre>";
     print_r($yeniIban);
     echo"</pre>";

     foreach($yeniIban as $parca){
         echo "$parca";
     }

     echo"<br>";
     echo"İmplode IBan:". implode("-", $yeniIban);

     echo "<br> For Iban:";
     for ($i=0; $i <count($yeniIban) ; $i++) { 
        echo $yeniIban[$i] . " " ;
     }


      ?>
</body>
</html>