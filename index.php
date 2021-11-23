
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<!-- .crate a function and sum betwen two number and print the value -->


<?php
function sum(int $x, int $y){

	$z=$x+$y;
	return $z;

} 
echo sum(50,10);
?><br>


<!-- 2.create peramiters name and age and print the value. -->

<?php
function peramiters($name, $age){
	echo "my name is"." ".$name."i am ".$age." "."years old";
}

peramiters('adnan',22);
?>



<!-- create calculator using php switch -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center">Simple Calculator</h1>


<div class="row">
  <div class="col-sm-10 m-auto">
    <div class="card">
      <div class="card-body">
        <form>

  <div class="row">
    <div class="col">
      <input type="text" name="fnum" class="form-control" placeholder="First number">
    </div>
    <div class="col">
      <input type="text" name="snum" class="form-control" placeholder="second number">
    </div>
    <div class="col" >
     <select type="text" name="operators" class="form-control" >
     	<option>none</option>
     	<option>Add</option>
     	<option>Subtract</option>
     	<option>Multiply</option>
     	<option>Division</option>
     	
     </select>
    </div>
  </div><br>
  <button class="btn btn-success" name="submit" type="submit">Calculate</button>
</form><br>
<h3>The Answer is:</h3>
<?php
if(isset($_GET['submit'])) {
	$fnum=$_GET['fnum'];
	$snum=$_GET['snum'];
	$operators=$_GET['operators'];

	switch ($operators) {
		case 'none':
			echo "plese select any operrator";
			break;
			case 'Add':
			echo $fnum+$snum;
			break;
			case 'Subtract':
			echo  $fnum-$snum;;
			break;
			case 'Multiply':
			echo  $fnum*$snum;;
			break;
			case 'Division':
			echo $fnum/$snum;;
			break;
	
	}
}
?>
      </div>
    </div>
  </div>
 
</div>







<?php

?><br><br>

<!-- print number 1 to 10 and 10 to 1 print the value. -->

<?php
$x=0;
while($x <= 10){
	
	echo "the number is:"." ".$x."<br>";
	$x++;
}
?><br><br>

<?php
$x=10;
while($x >= 0){
	echo "the number is:"." ".$x. "<br>";
	--$x;
}  
?>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

























</body>
</html>