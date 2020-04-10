<html>
   <head>
        
<h1 class="lead" style="position:absolute; top=20%;left:30%; ">Reference books and Notes</h1>
   
    <style>
        img{
            
                width: 100%;
    height: 100%;
    position:sticky;
    top: 0;
    left: 0;
    z-index: -5000;

            
        }  
        
       
       </style>
    
    </head>
    <body>
     
        <nav style ="float:right;"> <ul><li><a  href="logout.php">LOGOUT</a></li></ul>
                
                
         </nav><br><br>
 <img src="mm.jpg" style="opacity: 0.5;">
    
<div>

<?php
$host="localhost";
$user="root";
$password="";
$db="college";
$conn=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from csestudents where username='".$uname."'AND password='".$password."' limit 1;";
    
    $result=mysqli_query($conn,$sql);
    
    $link='uploads/';
    $link1='uploads1/';
    $link2='uploads2/';
    $link3='uploads3/';
    $link4='uploads4/';$link5='uploads5/';$link6='uploads6/';$link7='uploads7/';$link8='uploads8/';$link9='uploads9/';$link10='uploads10/';
    $link11='uploads11/';$link12='uploads12/';$link13='uploads13/';$link14='uploads14/';$link15='uploads15/';$link16='uploads16/';$link17='uploads17/';$link18='uploads18/';$link19='uploads19/';$link20='uploads20/';$link21='uploads21/';$link22='uploads22/';$link23='uploads23/';$link24='uploads24/';$link25='uploads25/';$link26='uploads26/';
    if(mysqli_num_rows($result)==1){
        echo"NOTES<br><br>";
echo"<a href='$link'>Dr G T RAJU</a><br><br>";
        echo"<a href='$link1'>Dr Kavya Naveen</a><br><br>";
        echo"<a href='$link26'>Dr Girijamma H A</a><br><br>";
        echo"<a href='$link2'>Dr.Shashidhara H R</a><br><br>";
        echo"<a href='$link3'>Dr Kiran P</a><br><br>";
        echo"<a href='$link4'>	Mr.Hemanth S</a><br><br>";
        echo"<a href='$link5'>Dr Bhavani Shankar K</a><br><br>";
        echo"<a href='$link6'>Dr.Anjan Kumar K. N</a><br><br>";
        echo"<a href='$link7'>Dr.Sudhamani M J</a><br><br>";
        echo"<a href='$link8'>Mrs.Mamatha Jajur</a><br><br>";
        echo"<a href='$link9'>	Mrs.Manjula L</a><br><br>";
        echo"<a href='$link10'>Mr Sanjay P Kalas</a><br><br>";
        echo"<a href='$link11'>Mrs.Swathi G</a><br><br>";
        echo"<a href='$link12'>Mr Devaraju B M </a><br><br>";
        echo"<a href='$link13'>Mr.Chandrashekar B S</a><br><br>";
        echo"<a href='$link14'>Mrs Sampada K S</a><br><br>";
        echo"<a href='$link15'>Mr Karanam Sunil Kumar</a><br><br>";
        echo"<a href='$link16'>	Mrs.Ramyashree A N</a><br><br>";
        echo"<a href='$link17'>	Ms Reshma Jakabal</a><br><br>";
        echo"<a href='$link18'>Mr.Chethan D S</a><br><br>";
        echo"<a href='$link19'>Ms.Medha Gourayya</a><br><br>";
        echo"<a href='$link20'>Ms Vidya Y</a><br><br>";
        echo"<a href='$link21'>Ms Rashmi M</a><br><br>";
        echo"<a href='$link22'>	Mr Shrinivas Biradar</a><br><br>";
        echo"<a href='$link23'>Ms Chethana  H R</a><br><br>";
        echo"<a href='$link24'>Ms Nayana B M</a><br><br>";
        echo"<a href='$link25'>	Mrs. Soumya N G</a><br><br>";
        
        
        exit();
    }else
    {
     echo"incorrect credentials";
        exit();
    }
}
    ?>
    
    </div>
    </body>
</html>