<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Operatory</title>
  </head>
  <body>
    <?php
    //Operatory
    $potegowanie = 2**10;
    echo "$potegowanie";
    $modulo = 11%3;
    echo $modulo;
    //+ - * /

    //operatory bitowe &(add), |(or), ~(not), ^(xor)
    //przesunięcie bitowe w lewo >>
    //przesunięcie bitowe w prawo <<
    echo "<br>";
    $dziesiec = 0b1010;
    echo "<br>".$dziesiec;
    $dziesiec = 0b1010 >> 1; //101
    echo "<br>".$dziesiec;
    $dziesiec = 0b1010 << 1; //1010
    echo "<br>".$dziesiec;
    $dziesiec = 0b1010 << 2; //10100
    echo "<br>".$dziesiec;


    //operatory logiczne
    // && || ! and or not xor
  echo "<br>";
    $skelp = "otwarty";
    $pieniadze = 1800;
    $romet = false;

    if($sklep = 'otwarty' && $pieniadze >= 900 && $romet){
      echo "kupiles rower";
    }else{
      echo "idz do roboty";
    }



   ?>
   <fieldset>
     <legend>Zakup rometa</legend>
     <form  method="post">
       <select name="sklep">
         <option value="o">otwarty</option>
         <option value="z">zamknięty</option>
       </select><br>
       <input type="number" name="pieniadze"><br>
       <select name="romet">
         <option value="d">dostępny</option>
         <option value="b">brak</option>
       </select><br>
       <input type="submit" name="Przycisk" value="Zatwierdź">
     </form>
   </fieldset>

   <?php
   if(isset($_POST['Przycisk']) && !empty($_POST['pieniadze'])){
     $sklep = $_POST['sklep'];
     $pieniadze = $_POST['pieniadze'];
     $rower = $_POST['romet'];
     // echo $sklep;
     // echo $pieniadze;
     // echo $rower;
     if ($sklep =='o' && $pieniadze >=900 && $rower == 'd') {
       echo "<h4>kupiles rower</h4>";
     }else{
       echo "Nic nie kupisz";
     }
   }
    ?>
  </body>
</html>
