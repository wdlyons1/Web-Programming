<?php
    input = $_POST["message"];

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

  ?>
