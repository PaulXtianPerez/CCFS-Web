<?php
include("database.php");

$grades = array( 'NURSERY', 'PRE-KINDER', 'KINDER', 'GRADE 1', 'GRADE 2', 'GRADE 3', 'GRADE 4', 'GRADE 5', 'GRADE 6' );

if(isset($_POST['submit']) && isset($_POST['grade'])){
  foreach ($_POST['grade'] as $grade_id => $grade_r) {
    $grade     = $grades[$grade_id];
    if ($grade == 'NURSERY') {
      $subjname1 = $grade_r['subject'][1]."-N";
      $subjname2 = $grade_r['subject'][2]."-N";
      $subjname3 = $grade_r['subject'][3]."-N";
      $subjname4 = $grade_r['subject'][4]."-N";
      $subjname5 = $grade_r['subject'][5]."-N";
      $subjname6 = $grade_r['subject'][6]."-N";
      $subjname7 = $grade_r['subject'][7]."-N";
      $subjname8 = $grade_r['subject'][8]."-N";
      $subjname9 = $grade_r['subject'][9]."-N";
      $subjname10 = $grade_r['subject'][10]."-N";
      $subjname11 = $grade_r['subject'][11]."-N";
      $subjname12 = $grade_r['subject'][12]."-N";
      $subjname13 = $grade_r['subject'][13]."-N";
      $subjname14 = $grade_r['subject'][14]."-N";
      $subjname15 = $grade_r['subject'][15]."-N";
      $subjname16 = $grade_r['subject'][16]."-N";
      $subjname17 = $grade_r['subject'][17]."-N";
      $subjname18 = $grade_r['subject'][18]."-N";
      $subjname19 = $grade_r['subject'][19]."-N";
      $subjname20 = $grade_r['subject'][20]."-N";
    }else if($grade == "PRE-KINDER") {
      $subjname1 = $grade_r['subject'][1]."-Pk";
      $subjname2 = $grade_r['subject'][2]."-Pk";
      $subjname3 = $grade_r['subject'][3]."-Pk";
      $subjname4 = $grade_r['subject'][4]."-Pk";
      $subjname5 = $grade_r['subject'][5]."-Pk";
      $subjname6 = $grade_r['subject'][6]."-Pk";
      $subjname7 = $grade_r['subject'][7]."-Pk";
      $subjname8 = $grade_r['subject'][8]."-Pk";
      $subjname9 = $grade_r['subject'][9]."-Pk";
      $subjname10 = $grade_r['subject'][10]."-Pk";
      $subjname11 = $grade_r['subject'][11]."-Pk";
      $subjname12 = $grade_r['subject'][12]."-Pk";
      $subjname13 = $grade_r['subject'][13]."-Pk";
      $subjname14 = $grade_r['subject'][14]."-Pk";
      $subjname15 = $grade_r['subject'][15]."-Pk";
      $subjname16 = $grade_r['subject'][16]."-Pk";
      $subjname17 = $grade_r['subject'][17]."-Pk";
      $subjname18 = $grade_r['subject'][18]."-Pk";
      $subjname19 = $grade_r['subject'][19]."-Pk";
      $subjname20 = $grade_r['subject'][20]."-Pk";
    }else if($grade == "KINDER") {
      $subjname1 = $grade_r['subject'][1]."-K";
      $subjname2 = $grade_r['subject'][2]."-K";
      $subjname3 = $grade_r['subject'][3]."-K";
      $subjname4 = $grade_r['subject'][4]."-K";
      $subjname5 = $grade_r['subject'][5]."-K";
      $subjname6 = $grade_r['subject'][6]."-K";
      $subjname7 = $grade_r['subject'][7]."-K";
      $subjname8 = $grade_r['subject'][8]."-K";
      $subjname9 = $grade_r['subject'][9]."-K";
      $subjname10 = $grade_r['subject'][10]."-K";
      $subjname11 = $grade_r['subject'][11]."-K";
      $subjname12 = $grade_r['subject'][12]."-K";
      $subjname13 = $grade_r['subject'][13]."-K";
      $subjname14 = $grade_r['subject'][14]."-K";
      $subjname15 = $grade_r['subject'][15]."-K";
      $subjname16 = $grade_r['subject'][16]."-K";
      $subjname17 = $grade_r['subject'][17]."-K";
      $subjname18 = $grade_r['subject'][18]."-K";
      $subjname19 = $grade_r['subject'][19]."-K";
      $subjname20 = $grade_r['subject'][20]."-K";
    }else if($grade == "GRADE 1") {
      $subjname1 = $grade_r['subject'][1]."-1";
      $subjname2 = $grade_r['subject'][2]."-1";
      $subjname3 = $grade_r['subject'][3]."-1";
      $subjname4 = $grade_r['subject'][4]."-1";
      $subjname5 = $grade_r['subject'][5]."-1";
      $subjname6 = $grade_r['subject'][6]."-1";
      $subjname7 = $grade_r['subject'][7]."-1";
      $subjname8 = $grade_r['subject'][8]."-1";
      $subjname9 = $grade_r['subject'][9]."-1";
      $subjname10 = $grade_r['subject'][10]."-1";
      $subjname11 = $grade_r['subject'][11]."-1";
      $subjname12 = $grade_r['subject'][12]."-1";
      $subjname13 = $grade_r['subject'][13]."-1";
      $subjname14 = $grade_r['subject'][14]."-1";
      $subjname15 = $grade_r['subject'][15]."-1";
      $subjname16 = $grade_r['subject'][16]."-1";
      $subjname17 = $grade_r['subject'][17]."-1";
      $subjname18 = $grade_r['subject'][18]."-1";
      $subjname19 = $grade_r['subject'][19]."-1";
      $subjname20 = $grade_r['subject'][20]."-1";
    }else if($grade == "GRADE 2") {
      $subjname1 = $grade_r['subject'][1]."-2";
      $subjname2 = $grade_r['subject'][2]."-2";
      $subjname3 = $grade_r['subject'][3]."-2";
      $subjname4 = $grade_r['subject'][4]."-2";
      $subjname5 = $grade_r['subject'][5]."-2";
      $subjname6 = $grade_r['subject'][6]."-2";
      $subjname7 = $grade_r['subject'][7]."-2";
      $subjname8 = $grade_r['subject'][8]."-2";
      $subjname9 = $grade_r['subject'][9]."-2";
      $subjname10 = $grade_r['subject'][10]."-2";
      $subjname11 = $grade_r['subject'][11]."-2";
      $subjname12 = $grade_r['subject'][12]."-2";
      $subjname13 = $grade_r['subject'][13]."-2";
      $subjname14 = $grade_r['subject'][14]."-2";
      $subjname15 = $grade_r['subject'][15]."-2";
      $subjname16 = $grade_r['subject'][16]."-2";
      $subjname17 = $grade_r['subject'][17]."-2";
      $subjname18 = $grade_r['subject'][18]."-2";
      $subjname19 = $grade_r['subject'][19]."-2";
      $subjname20 = $grade_r['subject'][20]."-2";
    }else if($grade == "GRADE 3") {
      $subjname1 = $grade_r['subject'][1]."-3";
      $subjname2 = $grade_r['subject'][2]."-3";
      $subjname3 = $grade_r['subject'][3]."-3";
      $subjname4 = $grade_r['subject'][4]."-3";
      $subjname5 = $grade_r['subject'][5]."-3";
      $subjname6 = $grade_r['subject'][6]."-3";
      $subjname7 = $grade_r['subject'][7]."-3";
      $subjname8 = $grade_r['subject'][8]."-3";
      $subjname9 = $grade_r['subject'][9]."-3";
      $subjname10 = $grade_r['subject'][10]."-3";
      $subjname11 = $grade_r['subject'][11]."-3";
      $subjname12 = $grade_r['subject'][12]."-3";
      $subjname13 = $grade_r['subject'][13]."-3";
      $subjname14 = $grade_r['subject'][14]."-3";
      $subjname15 = $grade_r['subject'][15]."-3";
      $subjname16 = $grade_r['subject'][16]."-3";
      $subjname17 = $grade_r['subject'][17]."-3";
      $subjname18 = $grade_r['subject'][18]."-3";
      $subjname19 = $grade_r['subject'][19]."-3";
      $subjname20 = $grade_r['subject'][20]."-3";
    }else if($grade == "GRADE 4") {
      $subjname1 = $grade_r['subject'][1]."-4";
      $subjname2 = $grade_r['subject'][2]."-4";
      $subjname3 = $grade_r['subject'][3]."-4";
      $subjname4 = $grade_r['subject'][4]."-4";
      $subjname5 = $grade_r['subject'][5]."-4";
      $subjname6 = $grade_r['subject'][6]."-4";
      $subjname7 = $grade_r['subject'][7]."-4";
      $subjname8 = $grade_r['subject'][8]."-4";
      $subjname9 = $grade_r['subject'][9]."-4";
      $subjname10 = $grade_r['subject'][10]."-4";
      $subjname11 = $grade_r['subject'][11]."-4";
      $subjname12 = $grade_r['subject'][12]."-4";
      $subjname13 = $grade_r['subject'][13]."-4";
      $subjname14 = $grade_r['subject'][14]."-4";
      $subjname15 = $grade_r['subject'][15]."-4";
      $subjname16 = $grade_r['subject'][16]."-4";
      $subjname17 = $grade_r['subject'][17]."-4";
      $subjname18 = $grade_r['subject'][18]."-4";
      $subjname19 = $grade_r['subject'][19]."-4";
      $subjname20 = $grade_r['subject'][20]."-4";
    }else if($grade == "GRADE 5") {
      $subjname1 = $grade_r['subject'][1]."-5";
      $subjname2 = $grade_r['subject'][2]."-5";
      $subjname3 = $grade_r['subject'][3]."-5";
      $subjname4 = $grade_r['subject'][4]."-5";
      $subjname5 = $grade_r['subject'][5]."-5";
      $subjname6 = $grade_r['subject'][6]."-5";
      $subjname7 = $grade_r['subject'][7]."-5";
      $subjname8 = $grade_r['subject'][8]."-5";
      $subjname9 = $grade_r['subject'][9]."-5";
      $subjname10 = $grade_r['subject'][10]."-5";
      $subjname11 = $grade_r['subject'][11]."-5";
      $subjname12 = $grade_r['subject'][12]."-5";
      $subjname13 = $grade_r['subject'][13]."-5";
      $subjname14 = $grade_r['subject'][14]."-5";
      $subjname15 = $grade_r['subject'][15]."-5";
      $subjname16 = $grade_r['subject'][16]."-5";
      $subjname17 = $grade_r['subject'][17]."-5";
      $subjname18 = $grade_r['subject'][18]."-5";
      $subjname19 = $grade_r['subject'][19]."-5";
      $subjname20 = $grade_r['subject'][20]."-5";
    }else if($grade == "GRADE 6") {
      $subjname1 = $grade_r['subject'][1]."-6";
      $subjname2 = $grade_r['subject'][2]."-6";
      $subjname3 = $grade_r['subject'][3]."-6";
      $subjname4 = $grade_r['subject'][4]."-6";
      $subjname5 = $grade_r['subject'][5]."-6";
      $subjname6 = $grade_r['subject'][6]."-6";
      $subjname7 = $grade_r['subject'][7]."-6";
      $subjname8 = $grade_r['subject'][8]."-6";
      $subjname9 = $grade_r['subject'][9]."-6";
      $subjname10 = $grade_r['subject'][10]."-6";
      $subjname11 = $grade_r['subject'][11]."-6";
      $subjname12 = $grade_r['subject'][12]."-6";
      $subjname13 = $grade_r['subject'][13]."-6";
      $subjname14 = $grade_r['subject'][14]."-6";
      $subjname15 = $grade_r['subject'][15]."-6";
      $subjname16 = $grade_r['subject'][16]."-6";
      $subjname17 = $grade_r['subject'][17]."-6";
      $subjname18 = $grade_r['subject'][18]."-6";
      $subjname19 = $grade_r['subject'][19]."-6";
      $subjname20 = $grade_r['subject'][20]."-6";
    }
    
    $query = "INSERT INTO `curriculum`(curname, grade, subjname1, subjname2, subjname3, subjname4, subjname5, subjname6, subjname7, subjname8, subjname9, subjname10, subjname11, subjname12, subjname13, subjname14, subjname15, subjname16, subjname17, subjname18, subjname19, subjname20, yearid)
              VALUES ('$_POST[curname]', '$grade', '$subjname1', '$subjname2', '$subjname3', '$subjname4', '$subjname5', '$subjname6', '$subjname7', '$subjname8', '$subjname9', '$subjname10', '$subjname11', '$subjname12', '$subjname13', '$subjname14',
                '$subjname15', '$subjname16', '$subjname17', '$subjname18', '$subjname19', '$subjname20', '$_POST[yearid]')";
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
  }

    echo "<span style='color:#0AC02A;'>" . '<i class="fas fa-check-circle"></i>' . " Successfully created a new curriculum." . "</span>";
    $_POST = array();

    mysqli_close($mysqli);
    header('refresh:1.5; url=AdminHome.php#createcurriculum'); //temporary solution: go back to ui after 1.5 seconds
  }

?>
