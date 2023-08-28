<html>
  <head>
    <title>Math Functions</title>
</head>
<body>
 <center>
  <h3 style="color:gray;">find the maximum and minimum marks from the following set of arrays</h3>
  </center>
  <pre>
Sample arrays :
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
  </pre>
 <form method="get">
  <lable for="num">Maximum marks </lable><br>
  <input type="text" id="num" name="value1"><br>
  <lable for="num">Minimum marks </lable><br>
  <input type="text" id="num" name="value2"><br>
  <input type="submit"name="form1Submit" value="check the answer" >
  <?php 
  include('functions.php');
 
if($_SERVER['REQUEST_METHOD'] === 'GET'&&$_GET['value1']==$array_contain_maximum_and_minimum[1]&&$_GET['value2']==$array_contain_maximum_and_minimum[0]){?>
  <center><h3 style="color:green;">correct</h3>
</center>
<?php 
}
else {
?>
<center><h3 style="color:red;">wrong</h3>
</center>
<?php }?>
  <form>

</body>
</html>