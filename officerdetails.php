<html>
<head>
<style>
body {
  /* background-image: url('https://st1.latestly.com/wp-content/uploads/2019/01/Republic-Day-2019-Image-380x214.jpg'); */
  background-repeat: no-repeat;
  /* background-attachment: fixed; */
  background-size: cover;
  background-image:linear-gradient(to bottom,#33ccff,#ffd11a,#ff4dff,white);


  height:200%;
}
.both
{
  margin-left:8%;
  display:grid;
  grid-template-columns:50% 50%;
  grid-gap:3%;
  margin-right:8%;
  margin-top:8%;
}
.detailsform
{
 
  opacity: 0.8;
  border:2px  solid tomato;
  background-image:linear-gradient(to right,#ff6600,white,green);
padding-bottom:5%;
width:100%;
}
.detailsform1
{

  opacity: 0.8;

border:2px  solid tomato;
  background-image:linear-gradient(to right,#ff6600,white,green);
padding-bottom:5%;
width:100%;
}
.table1
{
margin-top:7%;
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
padding-bottom:5%;
}
.data1
{
 margin:3%;
 /* display:grid;
 grid-template-columns: 50% 50%; */
}
input[type=submit]
{
 margin-left:5%;
 background-color:white;
 height:3%;
 width:21%;
 box-shadow:2px 2px red;
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
.table td { 
 width:20%;
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
{ 
   /* display:grid;
   grid-template-columns:50% 50%; */
 color:navy;
}
.row
{ 
   display:grid;
   grid-template-columns:25% 25% 25% 25%;
  margin:5%;
}
.footer
{ 
  width:94%;
  height:30%;
  background-color:gray;
  background:url('footer.jpg');
  margin:3%; 
  display:grid;
  grid-template-columns:50% 50%;
  background-repeat:no-repeat:
}
 img
{ 
  background-color:red;
border-radius:13px;
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

<td class="h"> <a href="">Home</a></td>
<td class="h"> <a href="about.php">About Us</a></td>
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
<div class="both">
<div class="detailsform">
<h1>Details Form</h1>
<hr>
<form method="POST">
<form method="post" action="">
<div class="data">
<span class="word">Enter Your ID:</span><input type="number" name="id" >

<span class="word">Enter Your Name:</span><input type="text" name="policename" >

<span class="word">Enter Your Address:</span><input type="text" name="add" >

<span class="word">Enter Your Contact No:</span><input type="number" name="contact" >

<span class="word">DOB:</span><input type="date" name="dob" >
</div>

 <br>
 <div class="data1">
 <span class="word">Your Gender:</span>
 <br>
    <input type="radio" name="radio" value="male">male<br>
<input type="radio" name="radio"  value="female">female
   <br> 
<span class="word">Select Duty Area which You Want</span><br/>
    <input type="checkbox" name='lang[]' value="PHP"> PHP <br/>
    <input type="checkbox" name='lang[]' value="JavaScript"> JavaScript <br/>
    <input type="checkbox" name='lang[]' value="jQuery"> jQuery <br/>
    <input type="checkbox" name='lang[]' value="Angular JS"> Angular JS <br/>
    
  
<br>
<div class="button">
<input type=submit value="insert" name="submit">
<input type=submit  value="display" name="display">

<input type=submit value="delete" name="delete"> 
</form>
</div>
</div>
<!-- </div>//button -->
</div>


<div class="detailsform1">
<h1>Operations Here</h1>
<hr>
<table border="2" class="table1">
<tr>
<th>name</th>
<th>Address</th>
<th>Contact</th>
<th>DOB</th>
<th>Female</th>
<th>Duty_Area</th>
<tr>

</div>  

</div>
<!-- //both -->






<?php

//$ch=$_POST['subject'];

$user="root";
$pass="";
$db1="phpdatabase";
//$db = mysqli_connect("localhost","root","","phpdatabase");
$db=new mysqli("localhost",$user,$pass,$db1) or die("not conncetd");

// echo '<script>alert("Database Connection Suucessful")</script>'; 
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

try
{
if(isset($_POST['submit'])){

$id=$_POST['id'];
    $name=$_POST['policename'];
        $address=$_POST['add'];
        $contactno=$_POST['contact'];
        $dob1=$_POST['dob'];
        
    //$sql="INSERT INTO policedetails(Name ,Address ,Contact,DOB,Gender,Duty_Area) VALUES($name,$address,$contactno,$dob1,$R1,$value)";
$sql="INSERT INTO officerdetails(ID,Name ,Address,Contact,DOB,Gender,Duty_Area) VALUES('$id','$name','$address',$contactno,'$dob1','$R','$value')";

    if(!mysqli_query($db,$sql))  
{  
  echo '<script>alert("Data Not inserted Try again")</script>'; 

    
}  
}
}
catch (Exception $e)
{ 
    echo 'Message: ' .$e;
// else  
// {  
//   echo '<script>alert("Data  inserted .")</script>'; 
}

 ?>


<?php
if(isset($_POST['display'])){


    $result = "SELECT * FROM officerdetails";
   $result1=mysqli_query($db,$result);
   if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        print "<tr> <td>";
        echo $row["ID"]; 
        print "</td> <td>";
        echo $row["Name"]; 
        print "</td> <td>";
        echo $row["Address"]; 
        print "</td> <td>";
        echo $row["Contact"]; 
        print "</td> <td>";
        echo $row["DOB"]; 
        print "</td><td>";
        echo $row["Gender"];
        print "</td><td>";
        echo $row["Duty_Area"];
        print "</td> </tr>";
      //echo "id: " . $row["Name"]. " - Name: " . $row["Address"]. " " . $row["Contact"]. " " . $row["DOB"]." " . $row["Gender"]." " . $row["Duty_Area"];
      echo "<br>";
    }
  } else {
    echo "0 results";
  }

} 
?>
 

  <?php
  if(isset($_POST['delete'])){?>
  <form method="POST">
 <span class="word"> Enter ID of data that have to be delete:</span>
 <br>
 <br>
 <input type="text" name="deleted" >
 <br>
 <br>
 <input type=submit value="delete" name="deletenew"> 
</form>
 <?php
}
//$named=$_POST['deleted'];
  if(isset($_POST['deletenew'])){ 
  $named=$_POST['deleted'];
  echo $named;
 $del="DELETE FROM officerdetails WHERE ID = $named"; 
 //..echo 'Not deleted';  
 if(!mysqli_query($db,$del))  
 {  
  echo '<script>alert("Data Not Deleted Try again")</script>'; 
 }  
 else  
 {  
  echo '<script>alert("Data  Deleted ")</script>'; 
 } 
 //echo "connected sucessful";  
 
}
?>




</body>

</html>