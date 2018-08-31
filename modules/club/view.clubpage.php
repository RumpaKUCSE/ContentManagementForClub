<?php

//include_once 'C:\wamp\www\2017_education-master\util\class.util.php';

//include_once 'blade/view.clubpage.blade.php';
//include_once 'blade/view.module.blade.php';
//include_once '/../../common/class.common.php';
include_once 'C:/wamp/www/2017_education-master/modules/club/blade/view.members.blade.php';
include_once '/../../modules/club/modules.css';


$connect = mysqli_connect("localhost","root","","cseku_wpl_2017_education");



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  <script type="text/javascript">

function redirect() {
  window.location.href = "http://localhost/2017_education-master/modules/club/view.members.php";

}

</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php 
    session_start();
    $y=$_SESSION['variable_name2'];
    $x=$_SESSION['variable_name1'];
    ?>
    <title><?php echo $y  ?></title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>

  
<body>


  <div id="page-wrap">

<?php
    //if(isset($_POST["proceed"]))
//{   
    session_start();
    $x=$_SESSION['variable_name1'];

    //echo "no";
    $query = "SELECT * FROM tbl_club WHERE ID = '$x'";
    $result = mysqli_query($connect, $query);
    while($row1 = mysqli_fetch_array($result))
    {
      ?>

      <div class="name">

      <?php
      echo $row1['Name'];
      ?>
      

      

      </div>
      
      <?php  

      
      echo '
        <img src="data:image/jpeg;base64,'.base64_encode($row1['CoverPhoto']).'" height = "400" width = "1000"/>
        ';

        ?>

        <br>

      
     
      <?php
      //echo $row1['Description'];
    }

    ?>



<div class="topnav" id="myTopnav">
  <a href="http://localhost/2017_education-master/modules/club/view.clubpage.php">Home</a>
  <a href="http://localhost/2017_education-master/modules/club/members.php">Members</a>
  <a href="http://localhost/2017_education-master/modules/club/view.about.php">Club Info</a>
</div>



  <div id="header">
    
  </div>
  <div id="des">
    <?php
    //if(isset($_POST["proceed"]))
//{   
    session_start();
    $x=$_SESSION['variable_name1'];

    //echo "no";
    $query = "SELECT * FROM tbl_club WHERE ID = '$x'";
    $result = mysqli_query($connect, $query);
    while($row1 = mysqli_fetch_array($result))
    {
      ?>
      
     

        <br>

      <div class="Desc">
        <?php
          echo "About Club";
        ?>
      </div>

      
      <div class="Description">
     
      <?php
      echo $row1['Description'];
    }

    ?>
  </div>

<br>

  <?php
//print Content
session_start();
$t=$_SESSION['variable_name1'];
$query1 = "SELECT * FROM tbl_club_module WHERE ClubID = '$t'  ";
$result1 = mysqli_query($connect, $query1);
    while($row2 = mysqli_fetch_array($result1))
    {?>
<div id="container">

  <div id="leftContent">

<div class = "moduleName">


<?php


      echo $row2['ModuleName'];?>
        
      </div>
      
<div class="content">
<?php
echo $row2['Content'];?>

  
</div>

</div>
</div>
<?php 
    }

?>




<div class = "contact">

    <?php
    //if(isset($_POST["proceed"]))
//{   
    session_start();
    $x=$_SESSION['variable_name1'];

    //echo "no";
    $query = "SELECT * FROM tbl_club WHERE ID = '$x'";
    $result = mysqli_query($connect, $query);
    while($row1 = mysqli_fetch_array($result))
    {
      ?>
      
     

      
<div class="a">
        <?php
          echo "_________________________";
        ?>
      </div>



      <div class="bottom">
        <?php
          echo "Contact Us: ";
        ?>
      </div>

      
      <div class="mail">
     
      <?php
      echo $row1['mail'];
    }

    ?>
  </div>
 </div>

	</div>



</div>
  <div id = "form">

  </div>
      
  

</div>

</body>
</html>