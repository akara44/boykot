<?php 
require_once "baglan.php";

if (isset($_POST["liveSearch"])) {
     $value =$_POST["value"];
     $urun_sor = $baglanti->prepare("SELECT * FROM urunler WHERE urun_adi LIKE ?");
     $urun_sor->execute(["%$value%"]);
     while ($urunsorcek =  $urun_sor->fetch(PDO::FETCH_ASSOC)) {
        
    
echo'  

<tr>
    <td>'.$urunsorcek["urun_adi"].'</td>
    <td>'.$urunsorcek["onay"].'</td>
</tr>';
 
          } 
           }

?>
  


  