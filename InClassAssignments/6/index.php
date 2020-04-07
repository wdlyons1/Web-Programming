<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="external.css">
    <style>
      .opt1 {font-family: "Times New Roman", Times, serif;}
      .arial {font-family: "Arial", Helvetica, sans-serif;}
      .impact {font-family: "Impact", Charcoal, sans-serif;}
      .bold {font-weight: bold;}
      .italics {font-style: italic;}
      .under {text-decoration: underline;}
      .columns {width: 33%; float:left;}
      table, th, td {border: 1px solid black;}
}
    </style>
  </head>
  <body>

  <?php
    $input = $_POST["message"];

    $current = "<p class='";
    $last = "'>" . $input . "</p>";
    $color = $_POST['favcolor'];
    $color1 = "' style='color:" . $color;

    if($_POST['fonts'] == 'Times_New_Roman'){
      $current = $current . "opt1 ";
    }
    if($_POST['fonts'] == 'Arial'){
      $current = $current . "arial ";
    }
    if($_POST['fonts'] == 'impact'){
      $current = $current . "impact ";
    }

    if($_POST['style'] == 'Bold'){
      $current = $current . "bold ";
    }
    if($_POST['style'] == 'Italics'){
      $current = $current . "italics ";
    }
    if($_POST['style'] == 'Underline'){
      $current = $current . "under ";
    }
 

    $final = $current . $color1 . $last;
     
//Calendar
    
$var1 = "style='text-align:center;background-color:none;'";
$var2 = "style='text-align:center;background-color:none;'";
$var3 = "style='text-align:center;background-color:none;'";
$var4 = "style='text-align:center;background-color:none;'";
$var5 = "style='text-align:center;background-color:none;'";
$var6 = "style='text-align:center;background-color:none;'";
$var7 = "style='text-align:center;background-color:none;'";
$var8 = "style='text-align:center;background-color:none;'";
$var9 = "style='text-align:center;background-color:none;'";
$var10 = "style='text-align:center;background-color:none;'";
$var11 = "style='text-align:center;background-color:none;'";
$var12 = "style='text-align:center;background-color:none;'";
$var13 = "style='text-align:center;background-color:none;'";
$var14 = "style='text-align:center;background-color:none;'";
$var15 = "style='text-align:center;background-color:none;'";


$currentTime = date("H");

switch ($currentTime) {
    case "00":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var10 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var11 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "01":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var10 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var11 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var12 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "02":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var10 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var11 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var12 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var13 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "03":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var10 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var11 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var12 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var13 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var14 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "04":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var10 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var11 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var12 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var13 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var14 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var15 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "14":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "15":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "16":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "17":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "18":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";

        break;
    case "19":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "20":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "21":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "22":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    case "23":
        $var1 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var2 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var3 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var4 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var5 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var6 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var7 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var8 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var9 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        $var10 = "style='text-align:center;background-color:lightgrey; text-decoration: line-through;'";
        break;
    default:
        $var1 = "style='text-align:center;background-color:none;'";
}

 
  ?>
<div class="columns">

  <form method="post">

    <label for="fonts">Pick a font:</label><br>

    <select id="fonts" name="fonts">
      <option value="Times_New_Roman">Times New Roman</option>
      <option value="Arial">Arial</option>
      <option value="impact">Impact</option>
    </select>

    <br>
    <br>

    <label for="style">Pick a font style: </label><br>
    <select id="style" name="style">
      <option value="Bold">bold</option>
      <option value="Italics">Italics</option>
      <option value="Underline">Underline</option>
    </select>

    <br>
    <br>

    <label for="favcolor">Pick the text color</label><br><br>
    <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>

    <label for="message">Enter text here: </label><br>
    <textarea name="message" rows="10" cols="30"></textarea>

    <br>
    <br>

    <input type="submit">

  </form>
</div>

<div class="columns">

  <?php echo $final ?>
</div>

<br>
<br>

<div class="columns">

  <table>
    <tr>
      <th style="width:30%;text-align:center;">Time</th>
      <th style="width:70%;text-align:center;">Agenda</th>
    </tr>
    <tr>
      <td <?php echo $var1 ?> >8:00AM</td>
      <td <?php echo $var1 ?> >Sleep</td>
    </tr>
      <td <?php echo $var2 ?> >9:00AM</td>
      <td <?php echo $var2 ?> >Wake Up</td>
    </tr>
      <td <?php echo $var3 ?> >10:00AM</td>
      <td <?php echo $var3 ?> >Eat Food</td>
    </tr>
      <td <?php echo $var4 ?> >11:00AM</td>
      <td <?php echo $var4 ?> >Shower</td>
    </tr>
      <td <?php echo $var5 ?> >12:00PM</td>
      <td <?php echo $var5 ?> >Homework</td>
    </tr>
      <td <?php echo $var6 ?> >1:00PM</td>
      <td <?php echo $var6 ?> >Homework</td>
    </tr>
      <td <?php echo $var7 ?> >2:00PM</td>
      <td <?php echo $var7 ?> >Homework</td>
    </tr>
      <td <?php echo $var8 ?> >3:00PM</td>
      <td <?php echo $var8 ?> >Homework</td>
    </tr>
      <td <?php echo $var9 ?> >4:00PM</td>
      <td <?php echo $var9 ?> >Homework</td>
    </tr>
      <td <?php echo $var10 ?> >5:00PM</td>
      <td <?php echo $var10 ?> >Homework</td>
    </tr>
      <td <?php echo $var11 ?> >6:00PM</td>
      <td <?php echo $var11 ?> >Homework</td>
    </tr>
      <td <?php echo $var12 ?> >7:00PM</td>
      <td <?php echo $var12 ?> >Homework</td>
    </tr>
      <td <?php echo $var13 ?> >8:00PM</td>
      <td <?php echo $var13 ?> >Homework</td>
    </tr>
      <td <?php echo $var14 ?> >9:00PM</td>
      <td <?php echo $var14 ?> >Homework</td>
    </tr>
      <td <?php echo $var15 ?> >10:00PM</td>
      <td <?php echo $var15 ?> >Homework</td>
    </tr>
  </table>

</div>

  </body>

</html>

