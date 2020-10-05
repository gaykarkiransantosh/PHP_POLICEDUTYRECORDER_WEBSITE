<html>
<head>
<style>
body {
  /* background-image: url('https://st1.latestly.com/wp-content/uploads/2019/01/Republic-Day-2019-Image-380x214.jpg'); */
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  background-size: cover;
  background-image:linear-gradient(to bottom,#33ccff,#ffd11a,#ff4dff,white);

}



.table1
{
 

background-image:linear-gradient(to right,#ff6600,white,green);

  border:2px  solid tomato;
  margin-left:25%;
 

}

.header
{
  background-color:blue;

width:100%;
}
.word
{
 color:black;
 margin-left:2%;
}
h1
{
 text-align:center;
}
{
 color:black;
}
.data
{
 margin:3%;
 display:grid;
 grid-template-columns: 50% 40%;
 grid-gap:5%;
}

input
{
background-color:white;
/* border:2px solid gray; */
box-sizing: border-box;

}
.data1
{
 margin:3%;
 /* display:grid;
 grid-template-columns: 50% 50%; */
}
input[type=submit]
{
 margin-left:30%;
 background-color:#e60073;
padding-top:2%;
padding-bottom:2%;
 /* display:grid;
 grid-template-columns: 50% 50%; */
}
.navigationbar
{
 margin-left:13%;

display:grid;
 grid-template-columns: 70% 30%;
grid-gap:4%;

}
.table
{
  border:2px solid green;
  background-color:#ff6600;
width:100%;

padding-bottom:1%;
padding-top:1%;
}
/* .table td:hover  */
.h:hover{ 
   background-color: white;
   border:2px solid green;
}

.logo
{ 
    position:absolute;
   width:10%;
   height:10%;
  
}

.title1
{ margin-top:2%;
 text-align:center;
 margin-left:34%;
 font-family: "Times New Roman", Times, serif;
color:green;
text-decoration:underline;
font-weight:bold;
padding-bottom:3%;
}
.title2
{ margin-top:3%;
 text-align:center;
 margin-left:38%;
 font-family: "Times New Roman", Times, serif;
color:#ff6600;

font-weight:bold;
}
.title3
{ margin-top:2%;
 text-align:center;
 margin-left:40%;
 font-family: "Times New Roman", Times, serif;
color:blue;

font-weight:bold;
}
.title4
{ margin-top:2%;
 text-align:center;
 margin-left:43%;
 font-family: "Times New Roman", Times, serif;
color:green;

font-weight:bold;
}
.types

{ margin-top:3%;
  margin-left:13%;
  margin-right:13%;
display:grid;
grid-template-columns: 30% 30% 30%;
grid-gap:5%;
/* background-color:gold; */
border-radius:13px;
}
.r1
{ position:relative;
   /* display:grid;
   grid-template-columns:50% 50%; */
 color:navy;
}
.row
{ position:relative;
   display:grid;
   grid-template-columns:50% 50%;
  margin:5%;
}
.footer
{ 
  width:80%;
  height:40%;
  background-color:gray;
   /* background-image: url('https://st1.latestly.com/wp-content/uploads/2019/01/Republic-Day-2019-Image-380x214.jpg'); */
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  background-size: cover;
margin-top:30%;
margin-left:8%;
margin-right:13%;

}
 img
{ 

border-radius:13px;
}
.button
{ position:absolute;
   display:grid;
   grid-template-columns:50% 50%;
  margin:5%;
}
</style>
</head>
<body>

<div class="title"> <span class="title1">POLICE DUTY RECORDER WEBSITE</span></div>
<div class="title"> <span class="title2">-----Indian Railway Police-----</span></div>
<div class="title"> <span class="title3">---Maharashtra Police---</span></div>
<div class="title"> <span class="title4">--Army Police--</span></div>
<br>
<br>


<img src="policelogo.jpg" class="logo">

<div class="navigationbar">
<div>
<table class="table">

<tr>

<td class="h">Home</td>
<td class="h">About Us</td>
<td><input type="search" placeholder="search here"></td>
<td><img src="https://cdn5.vectorstock.com/i/1000x1000/30/49/search-icon-seo-big-data-symbol-web-vector-27813049.jpg" width="50" height="30"></td>
</tr>
</table> 
</div>
<div><img src="policelogo.jpg" class="logo">
</div>

</div>
<div class="types">

<div><img src="https://image.shutterstock.com/image-photo/shimla-india-feb2018-silhouette-indian-260nw-1114798787.jpg" width="250" height="120" border-radius="30%"></div>
<div><img src="https://www.breakingboom.com/wp-content/uploads/2020/07/1544190413maharashtra-police-headquarters.jpg" width="250" height="120"></div>
<div><img src="https://i.pinimg.com/originals/f0/a5/2f/f0a52ff5c4bd61871db8fce58c249368.jpg" width="250" height="120"></div>
</div>
<br>
<br>
<hr>
<form method="post">

<input type=submit  value="If you want to See POlice Details Click Here " name="display">

<table border="2" class="table1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Contact</th>
<th>Gender</th>

<th>Alloted_Duty_Area</th>
</tr>

</form>

<?php

//$ch=$_POST['subject'];

$user="root";
$pass="";
$db1="phpdatabase";
//$db = mysqli_connect("localhost","root","","phpdatabase");
$db=new mysqli("localhost",$user,$pass,$db1) or die("not conncetd");

echo '<script>alert("Database Connection Suucessful")</script>'; 
//global $name;
//  $name=$_POST['policename'];
// $address=$_POST['add'];
// $contactno=$_POST['contact'];
// $dob1=$_POST['dob'];
$value="";
if(!empty($_POST['lang'])) {

    foreach($_POST['lang'] as $value){
        echo "value : ".$value.'<br/>';
    }

}
$R="";
if(!empty($_POST['radio']))
{
   $R= $_POST['radio'];
 echo $R;
   
} 
?>


<?php
if(isset($_POST['display'])){


    $result = "SELECT * FROM policedetails1";
   $result1=mysqli_query($db,$result);
   if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {

   echo "<tr> <td>";
        echo $row["ID"]; 
       print "</td> <td>";
        echo $row["name"]; 
       print "</td> <td>";
       
        echo $row["Contact"]; 
     print "</td> <td>";
      
        echo $row["Gender"];
       print "</td><td>";
        echo $row["Allocate_Duty"];
      print "</td> </tr>";
      //echo "id: " . $row["Name"]. " - Name: " . $row["Address"]. " " . $row["Contact"]. " " . $row["DOB"]." " . $row["Gender"]." " . $row["Duty_Area"];
      echo "<br>";

    }
  } else {
    echo "not displayed";
  }

} 
?>
</table>



<div class="footer">
 <div class="row">

 <div>
 <h2>INFORMATION</h2>
 <table>
 <tr>
 <td><img src="https://m.economictimes.com/thumb/msid-63994810,width-1200,height-900,resizemode-4,imgsize-35146/magazines/panache/gmail-gets-a-makeover-heres-how-you-can-make-the-most-of-its-features/gmail-gets-a-makeover-heres-a-round-up-of-the-most-useful-features.jpg" class="logo1" width="70" height="40"></td>
 <td>kiiran.gaykar@somaiya.edu</td>
 </tr>
 <tr>
 <td><img src="https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png" class="logo1" width="70" height="40"></td>
 <td>kiiran.gaykar@somaiya.edu</td>
 </tr>
 <tr>
 <td><img src="https://1000logos.net/wp-content/uploads/2018/01/WhatsApp-Logo.png" class="logo1" width="70" height="40"></td>
 <td>kiiran.gaykar@somaiya.edu</td>
 </tr>
 <tr>
 <td><img src="https://1000logos.net/wp-content/uploads/2016/11/fb-logo.jpg" class="logo1" width="70" height="40"></td>
 <td>kiiran.gaykar@somaiya.edu</td>
 </tr>
 </table>


</div>

<div class="r1">
<div><h3>Police Contents</h3>
<ul>
<li>Display Details</li>
<li>On Duty Details</li>
<li>Duty Allocation Details</li>
</ul>
</div>
<div><h3>Officer Contents</h3>
<ul>
<li>Display Details</li>
<li>On Duty Details Display</li>
<li>Duty Allocation Details</li>

</ul>
</div>
</div>


</div> 



</body>

</html>