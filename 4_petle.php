<?php
//for

for ($i=1; $i < 100; $i++) {
  if($i%2==0){
    echo "<span style=\"font-weight: bold\">$i</span>";
  }else{
    echo "$i";
  }
  echo " ";
}
echo "<hr>";

//************************



 ?>
<table>
  <?php
    $wiersz = 4;
    $kolumna = 5;
    for ($i=1; $i <= $wiersz ; $i++) {
      echo "<tr>";
      for ($j=1; $j <= $kolumna; $j++) {
        echo "<td>test</td>";
      }
      echo "</tr>";
    }
  ?>
</table>

<!--
*********************************
-->

<!--
  Odległosc   koszt
        50    5
        100   10
        150   15
        200   20

-->
<table>
  <tr>
    <th>odległość</th>
    <th>Koszt</th>
  </tr>
  <?php
    for ($odleglosc=50; $odleglosc <= 200 ; $odleglosc+=50) {
      //echo "$odleglosc";
      echo "<tr>";
      echo "<td style=\"text-align:right;\">$odleglosc</td>";
    //  echo "<td style=\"text-align:right;\">".($odleglosc/10)."</td>";
     $koszt = $odleglosc/10;
      echo "<td style=\"text-align:right;\">$koszt</td>";
      echo "</tr>";
    }
   ?>
   <td style="text-align:right;"></td>
</table>
