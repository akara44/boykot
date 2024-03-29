 <?php 
require_once("baglan.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol</title>
   
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
    background-size:cover;
     background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;

       }
        .logo{
   width:263.63px;
   height:69.3px;
}

.logo-konum{
  margin: 0 auto;
  max-width: 200px;
  padding: 10px 30px;  
}
.yazi-konum{
    margin-left:505px;
    margin-bottom:-80px;
    padding-top:30px;
}
.yazi{
    color: lightgray;
}
table{                      
color: white;
font-size:25px;
margin-left:-299px;
margin-top:5px;
/* width: 770px;
height: 90px; */
background-color:#00593d;
opacity: 0.7;
border-radius:5px;
padding: 15px;
text-align: center;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
width: 100%;
max-width: 5000px;
border: none;
border-radius: 40px;
  box-shadow: none;
  outline: none;
  margin: 0;
  box-sizing: border-box; 
  height: 70px;
        }
.block{
  margin: 0 auto;
  max-width: 900px;
  padding: 50px 30px;   
}
.input-res
{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  
  width: 100%;
  max-width: 5000px;
  background-color: #ddd;
  border: none;
  padding: 10px 11px 11px 11px;
  border-radius: 40px;
  box-shadow: none;
  outline: none;
  margin: 0;
  box-sizing: border-box; 
  height: 70px;

}
.input-res::placeholder{
  padding-left:30px;
    font-size:20px;
    font-size:20px;
    color: gray;
}
.input-res2
{

 
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  font: 15px/1 'Open Sans', sans-serif;
  color: #333;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 100%;
  max-width: 800px;
  background-color: #ddd;
  border: none;
  padding: 10px 11px 11px 11px;
  border-radius: 3px;
  box-shadow: none;
  outline: none;
  margin: 0;
  box-sizing: border-box; 
  display: flex;
    justify-content: center;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
    border-radius: 25px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    flex-wrap: wrap;
    border:none;
    font-size: 25;
    justify-content: center;


}

.block2
{
  margin:0px auto;
  max-width: 400px;
  padding: 50px 30px;   
}.block3
{
  margin: 0 auto;
  max-width: 900px;
  padding: 50px 30px;  
}



  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
<div class="logo-konum">
        <img src="img/logo.png" alt="" class="logo">
</div>


<div class="block">

<input id="search" type="text" placeholder="Marka adını eksiksiz ve tam giriniz..." class="input-res" class="arama">
</div>
<div class="block3">
  <div class="input-res3">
<div class="konum">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ürün</th>
      <th scope="col">Onay</th>
    </tr>
  </thead>
  <tbody id="sonuc">
   
  </tbody>
  
</table>
</div>
</div>

</div>
<div class="block2">
<form action="iletisim.php" method="post">

<input type="submit" value="Şikayet,Öneri ve Sorularınız İçin Bize Ulaşın"  class="input-res2" class="soru" id="button">
</form>
</div>
<script>

$( "#search").keypress (function(){
  let inputValue = $("#search").val();
  $.ajax({
    url:"ajax.php",
    type:"POST",
    data:{value: inputValue,liveSearch:''},
    success: function(data){
       $("#sonuc").html(data);
    }
  });
});

</script>
</html>