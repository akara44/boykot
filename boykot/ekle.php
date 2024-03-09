<?php 
include("ayar.php");
echo "<br>";
$urun =$_POST['ad'];
$onay =$_POST['soyad'];

echo "<table><tr><td>Ürün</td><td>Onay</td></tr>";
echo "<td>".$urun."</td>";
echo "<td>".$onay."</td>";
echo "</tr>";
echo "</table>";

$ekle=mysqli_query($baglanti,"INSERT INTO $tablo(urun_adi,onay)
values('$urun','$onay')");
if ($ekle) {
    echo "<div>"."Ekleme İşlemi Başarılı"."</div>";
}
else{
    echo "Ekleme İşlemi Başarısız";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
body {
    margin: 0;
    font-family: Poppins, Helvetica, "sans-serif";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color:lightgray;
    text-align: left;
    background-image: url('img/sahre.jpg');
     background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
       }
 table{
    font-size:25px;
    margin-left:227px;
    margin-top:148px;
    width: 900px;
    height: 90px;;
    background-color: #00593d;      
    border-radius:5px;
    padding: 15px;
    text-align: center;
        }
div{
    font-size:25px;
    margin-left:536px;
    margin-top:100px;
    color: white;
        }
        .logo{
   width:227.7px;
   height:75px;
}

.logo-konum{
    margin-left:540px;

    margin-top:-458px;
}
        
        .konum{
    margin-left:30px;
}
.geri{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color: #71c043;
    color:white;
    font-size:15px;
    margin-top:430px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Kontrol</title>
    <link rel="icon" type="image/png" sizes="32x32" href="ays.ico">
</head>
<body>
    <div class="konum">
<div class="logo-konum">
        <img src="img/logo.png" alt="" class="logo">
</div>
</div>
<form action="form.php" method="post">
    <input type="submit" value="Geri" class="geri">
</form>
</body>
</html>





