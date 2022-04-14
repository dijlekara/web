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
   
   $dizi = array(1,2,3,4,"kemal","arıca",130,5);
   $dizi2 = [1,"tarık","koca",233,3];

   echo"<pre>";
   print_r($dizi);
   echo"</pre>";

   echo"<pre>";
   print_r($dizi2);
   echo"</pre>";

   echo"dizinin 5.elemanı:$dizi[5]";
   echo"<br>dizinin 5.elemanı:".gettype($dizi[5]);
   echo"<br>";

   echo"<br>dizinin 0.elemanı:".gettype($dizi[0]);
   echo"<br>dizinin 1.elemanı:".gettype($dizi[1]);
   echo"<br>dizinin 2.elemanı:".gettype($dizi[2]);
   echo"<br>dizinin 3.elemanı:".gettype($dizi[3]);
   echo"<br>dizinin 4.elemanı:".gettype($dizi[4]);
   echo"<br>dizinin 5.elemanı:".gettype($dizi[5]);
   echo"<br>dizinin 6.elemanı:".gettype($dizi[6]);

   echo"<h3> Dizinin İçeriğinin Foreach İle Yazdırılması-2</h3>";
    
   foreach ($dizi as $key => $value) {
      echo "$key-$value <br>";
    }

    echo"<h3> Dizinin İçeriğinin For Döngüsü İle Yazdırılması-3</h3>";
     
    for ($i=0; $i < count($dizi) ; $i++) { 
        echo $dizi[$i] . "<br>";
    }


    $sayılar = array(
       array(1,2,3,4,5,6,),
       array(7,8,9,10)

    );
    echo"<pre>";
   print_r($sayılar);
   echo"</pre>";
    
   echo"Sayılar Dizisinin İçerisindeki 2. Dizisinin 3 İndisli Elemanı :" . $sayılar[1][3];
   echo"<br>";
   echo"Sayılar Dizisinin İçerisindeki 1. Dizisinin 4 İndisli Elemanı :" . $sayılar[0][4];
      
   echo"<br>---------";

   $sayılar = array(
      "integer" => array(22,33,44,55),
      "double" => array(1.2,33.5,66.7) 
   );

      echo"<pre>";
   print_r($sayılar);
   echo"</pre>";
    
   echo"Sayılar Dizisinin İçerisindeki 1. Dizisinin 1 İndisli Elemanı :" . $sayılar["integer"][1];
   echo"<br>";
   echo"Sayılar Dizisinin İçerisindeki 1. Dizisinin 2 İndisli Elemanı :" . $sayılar["double"][2];
   
   

   ?>
   
   <hr>
   <h3>Koşul İfadeleri</h3>
   <p> İf-Else bloklaroında önce koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>
   <h5>Krşılaştırma Operatörleri</h5>
   <ol>
       <li> == ($a == $b) Eşit ise. (Genellikle matamatiksel bir karşılaşrırma yapılır.)</li>
       <li> == ($a == $b) Denk ise. (Genellikle String bir karşılaşrırma yapılır.)</li>
       <li> != ($a != $b) Eşit değil ise. (Genellikle matamatiksel bir karşılaşrırma yapılır.)</li>
       <li> != ($a == $b) Denk değil ise. (Genellikle String bir karşılaşrırma yapılır.)</li>
       <li> > ($a > $b) Büyük ise.</li>
       <li> >= ($a > $b) Büyük veya eşit ise.</li>
       <li> < ($a > $b) Küçük ise.</li>
       <li> <= ($a > $b) Küçük veya eşit ise.</li>
   </ol>

   <h5>Mantıksal Operatörleri</h5>
   <ol>
       <li> ! (Olumsuzsa) (!$a) --> $a'nın değeri False ise True döner,aksini yapar olumsuz mu diye sorar.</li>
       <li> && - AND (ve) ($a && $b) --> $ ve $b 'nin değeri olumlu ise True döner, iki koşul da sağlamak zorundadır.
            Koşullardan bir tanesi false dönerse genel değer False olur.</li>
       <li>|| - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner.
            herhangi birisinin koşulu sağlaması genel dönüş true yapar</li>
   </ol>
     
      
   <h4>NOT : </h4>
   <li>else if sürekli tekrar eden soru blogu açar.</li>
   <li>else non kapanıi koşuludur.(Herhangi bir şart belirtmez. Hiç bir ön koşul gerçekleşmediğinde çalışacak son koşulu ifade eder)</li>

   <?php

   $sayi1 = 123;
   $sayi2 = 345;
   $metin = "ADÜ";

   if ($sayi1) {
       echo "<br> If blogu çalıştı : $sayi1 ";
   }else {
    echo "<br> else blogu çalıştı :";
   }

   
   if (!$sayi1) {
    echo "<br> If blogu çalıştı : $sayi1 ";
   }else {
    echo "<br> else blogu çalıştı :";    
   }


   
   
   
   
   
   
   ?>


   <br><br><br>
</body>
</html>