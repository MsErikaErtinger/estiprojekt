<!doctype html>
<html lang="hu">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Jelentkező felvitel</title>
    <style>
        body {background-color: #102136;}
        h1   {color: white;}
        p  {color: white;}
        a:link, a:visited {
          background-color: white;
          color: #102136;
          font-weight: 700;
          border: 2px solid #102136;
          padding: 10px 20px;
          text-align: center;
          display: inline-block;
          text.decoration: none;
         }
         a.hover {
          background-color: #7456f1;
          color: #fff;
          font-weight: 700;
          border: 2px solid #102136;
          padding: 10px 20px;
          text-align: center;
          display: inline-block;
          text.decoration: none;

         }
    </style>  
  </head>
  <body>
    <h1>Felvitel eredménye</h1>
    <?php

    include 'connect2.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$appointment_for=$_POST['appointment_for'];
$date=$_POST['date'];


if (!$name || !$email || !$phone ||!$appointment_for || !$date ){

    echo "Nem minden adatot adott meg!";
    exit;
    }
if (!get_magic_quotes_gpc()){
 
$name=addslashes($name);
$email=addslashes($email);
$phone=addslashes($phone);
$appointment_for=addslashes($appointment_for);
$date=addslashes($date);
}

$sql = "INSERT INTO jelentkezok VALUES ('.NULL.','".$name."','".$email."','".$phone."','".$appointment_for."' ,'".$date."')";
$talalat = $kapcsolat->query($sql);
if ($talalat){
    echo $kapcsolat->affected_rows.
    '<p style="color:white; font-size: 18px;">IDŐPONT FOGLALÁSA SIKERES VOLT! <BR> 
      Hamarosan felvesszük Önnel a kapcsolatot.</p>
      <br> <a href="http://localhost/PROJECT" target="_blank">KEZDŐLAP</a> ';
    }else{
      //  echo "Valami hiba történt.";
    }
  
   ?>
  </body>
</html>