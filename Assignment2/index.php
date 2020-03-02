<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>William Lyons Assignment 2</title>
    <link rel="stylesheet" type="text/css" href="external.css">
    <style>
      table, th, td { border: 1px solid black; padding: 1px; border-collapse: collapse;} 
      .question5{width:50%;height:300px; float:left; border: 1px black solid;clear:both;}
      .question5table {border:none;}
    </style>
  </head>
  <body>
  <?php
    echo "William Lyons: Assignment 2<br><br>";
  ?>

    <p>Question 1:</p>
    
    <form method="post"> 
        <input type="submit" name="isBitten"
                class="button" value="Press this button to change answer" /> 
  </form>
<?php
    if(isset($_POST['isBitten'])) {
        isBitten();
    }
    isBitten();
    echo $answer;
    function isBitten(){ 
      global $answer;
      
      $var = mt_rand(0,1);
      if ($var == 0) {
        $answer =  "<br>&emsp;&emsp;" . "<strong>Charlie did not eat my lunch!</strong>";
      }
      else {
        $answer = "<br>&emsp;&emsp;" . "<strong>Charlie ate my lunch!</strong>";
      }
    }      
    ?>
<br><br>
<!-- Question 2 -->

<p>Question 2:</p>
<table style="width:300px">
  <?php  
  for($row=1;$row<=8;$row++)  
  {  
  	echo "<tr>";  
  	for($column=1;$column<=8;$column++)  
  	{
  		$total=$row+$column;
  		if($total%2==0)
  		{  
        echo "<td height=35px width=35px><center><span style='color:black;font-size:30px;'>&#10003;</span></center></td>";
  		}  
  		else  
  		{  
        echo "<td height=35px width=35px><center><span style='color:red;font-size:30px;'>&#10003;</span></center></td>";
      }

  	}  
  	echo "</tr>";  
  }  
  ?>
</table>

<!-- Question 3 -->
<p>Question 3: </p>
<?php
  $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July','August','September', 'October', 'November', 'December');

  printArray();
  sortArray();
  $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July','August','September', 'October', 'November', 'December');
  printForEach();
  printSortedForEach();

  function printArray(){
    global $month;
    echo "Unsorted For-Loop:<br>";
    for ($i=0; $i < count($month); $i++) {
      echo $month[$i] . ", ";
    }
    echo "<br>";
  }
  function sortArray(){
    global $month;
    echo "<br>Sorted For-Loop:<br>";
    sort($month);
    for ($i=0; $i < count($month); $i++) {
      echo $month[$i] . ", ";
    }
    echo "<br>";
  }

  function printForEach(){
    global $month;
    echo "<br>Unsorted For-Each-Loop:<br>";
    foreach ($month as &$value) {
      echo $value . ", ";
    }
    echo "<br>";

  }

  function printSortedForEach(){
    global $month;
    echo "<br>Sorted For-Each-Loop:<br>";
    sort($month);
    foreach ($month as &$value) {
      echo $value . ", ";
    }
    echo "<br>";
  }

?>

<!--Question 4 -->

<div style="width:100%; <!--float:left;-->">
<p>Question 4:</p>


  <form method="post"> 
      <input type="submit" name="normalSort" class="button" value="Default Order" />
      <input type="submit" name="costSort" class="button" value="Sort by Cost (Lowest)" /> 
  </form>
    
<table width="300px" cellspacing="0px" cellpadding="1px" border="1px">
  <tr><th>Restaurant</th><th>Price</th></tr>
<?php
  $names = array('Chama Gaucha','Aviva by Kameel','Bones Restaurant','Umi Sushi Buckhead','Fandagles','Captain Grille','Canoe','One Flew South','Fox Bros. BBQ','South City Kitchen Midtown');
  $cost = array(40.5,15.0,65.0,40.5,30.0,60.5,35.5,21.0,15.0,29.0);

  if(isset($_POST['normalSort'])) {
    normalSort();
  }
  if(isset($_POST['costSort'])){ 
    costSort();
  }
  function normalSort(){
    global $names;
    global $cost;
    for($i=0;$i<10;$i++){
      echo "<tr>";
        echo "<td height=15px width=70%>" . $names[$i] . "</td>";
        echo "<td height=15px>$" . sprintf("%.2f", $cost[$i]) . "</td>";
      echo "</tr>";
    }
  }
  
  function costSort(){
    global $names;
    global $cost;
    $costDup = $cost;
    $order = array();

    for($j=0;$j<count($costDup);$j++){
      $lowest =9000;
      for($i=0;$i<count($costDup);$i++){
        if($costDup[$i] < $lowest && (!in_array($i,$order))){    
          $lowest = $costDup[$i];
          $index = $i;
        }
       }  
      array_push($order,$index);
    }

    for($i=0;$i<10;$i++){
      echo "<tr>";
        echo "<td height=15px width=70%>" . $names[$order[$i]] . "</td>";
        echo "<td height=15px>$" . sprintf("%.2f", $cost[$order[$i]]) . "</td>";
      echo "</tr>";
    }
  }
?>
</table>
</div>

<br>
<br>
<p> Question 5:</p>
<div class="question5">

<?php

  $hamburgerCost;
  $shakeCost;
  $colaCost;
  $subTotal;
  $tip;
  $tax;
  $totalCost;

  init();

   if(isset($_POST['sub'])) {
      calculate();
    }
  function init(){
    global $hamburgerCost;
    global $shakeCost;
    global $colaCost;
    global $subTotal;
    global $tip;
    global $tax;
    global $totalCost;
    $hamburgerCost = 4.95;
    $shakeCost = 1.95;
    $colaCost = 0.85;
    $subTotal = 0;
    $tip = 0;
    $tax = 0;
    $totalCost = 0;
  }


  function calculate(){
    global $hamburgerCost;
    global $shakeCost;
    global $colaCost;
    global $subTotal;
    global $tip;
    global $tax;
    global $totalCost;
    $numBurgers = (int) $_POST["h_number"];
    $numShakes = (int) $_POST["m_number"];
    $numColas = (int) $_POST["c_number"];
    $subTotal = ($numBurgers * $hamburgerCost) + ($numShakes * $shakeCost) + ($numColas * $colaCost);
    $tip = $subTotal * .016;
    $tax = $subTotal * .075;
    $totalCost = $subTotal + $tip + $tax;
  }
 
?>

<form method="post">

  <table class="question5table" style="text-align:center;">
    <tr>
      <th style="width:20%; border:none;">Item</th>
      <th style="width:15%; border: none;">Quantity</th>
      <th style="width:15%; border:none;">Cost</th>
    </tr>
    <tr>
      <td style="border:none;">Hamburger</td>
      <td style="border:none;">
        <input type="number" name="h_number" value="2"></input>
      </td>
      <td style="border:none;">$<?php echo $hamburgerCost?></td>
    </tr>
    <tr>
      <td style="border:none;">Chocolate Milkshake</td>
      <td style="border:none;">
        <input type="number" name="m_number" value="1"></input>
      </td>
      <td style="border:none;">$<?php echo $shakeCost?></td>
    </tr>
    <tr>
      <td style="border:none;">Cola</td>
      <td style="border:none;">
        <input type="number" name="c_number" value="1"></input>
      </td>
      <td style="border:none;">$<?php echo $colaCost ?></td>
    </tr>
  </table>
 
<br>
<br>
<div width=100%> 
  <div style="width:40%; float:right">
    <table class="question5table">
      <tr>
        <td style="text-align: right;border:none;">Subtotal</td>
        <td style="border:none;">$<?php echo sprintf("%.2f", $subTotal)?></td>
      </tr>
      <tr>
        <td style="text-align: right;border:none;">Tax</td>
        <td style="border:none;">$<?php echo sprintf("%.2f", $tax)?></td>
      </tr>
      <tr>
        <td style="text-align: right;border:none;">Tip (16%)</td>
        <td style="border:none;">$<?php echo sprintf("%.2f", $tip)?></td>
      </tr>
      <tr>
        <td style="text-align: right;border:none;">Total</td>
        <td style="border:none;">$<?php echo sprintf("%.2f", $totalCost) ?></td>
      </tr>
    </table>
<br>
  <input type="submit" name="sub" class="button" value="Submit" /> 
</div>
</div>
</form>

</div>


  </body>

</html>

  
