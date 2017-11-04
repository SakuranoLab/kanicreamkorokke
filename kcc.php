<DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="shift-jis">
  <title>git test</title>
 </head>

 <body>
  Hello,git
  
  <?php
$kcc;
for ($i = 0; $i <10; $i++) {
     // code...
     $a=rand(1,10);
     if ($a==1) {
         $kcc[$i]="カ";
     }elseif ($a==2) {
         $kcc[$i]="ニ";
     }elseif ($a==3) {
         $kcc[$i]="ク";
     }elseif ($a==4) {
         $kcc[$i]="リ";
     }elseif ($a==5) {
         $kcc[$i]="ー";
     }elseif ($a==6) {
         $kcc[$i]="ム";
     }elseif ($a==7) {
         $kcc[$i]="コ";
     }elseif ($a==8) {
         $kcc[$i]="ロ";
     }elseif ($a==9) {
         $kcc[$i]="ッ";
     }elseif ($a==10) {
         $kcc[$i]="ケ";
     }
     echo $kcc[$i];
}
?>

  
 </body>
</html>
