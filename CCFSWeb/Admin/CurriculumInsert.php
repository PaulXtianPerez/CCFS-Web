<?php
include("database.php");

$grades = array( 'NURSERY', 'PRE-KINDER', 'KINDER', 'GRADE 1', 'GRADE 2', 'GRADE 3', 'GRADE 4', 'GRADE 5', 'GRADE 6' );

if(isset($_POST['submit']) && isset($_POST['grade'])){
  foreach ($_POST['grade'] as $grade_id => $grade_r) {
    $grade     = $grades[$grade_id];
    $subjname1 = $grade_r['subject'][1];
    $subjname2 = $grade_r['subject'][2];
    $subjname3 = $grade_r['subject'][3];
    $subjname4 = $grade_r['subject'][4];
    $subjname5 = $grade_r['subject'][5];
    $subjname6 = $grade_r['subject'][6];
    $subjname7 = $grade_r['subject'][7];
    $subjname8 = $grade_r['subject'][8];
    $subjname9 = $grade_r['subject'][9];
    $subjname10 = $grade_r['subject'][10];
    $subjname11 = $grade_r['subject'][11];
    $subjname12 = $grade_r['subject'][12];
    $subjname13 = $grade_r['subject'][13];
    $subjname14 = $grade_r['subject'][14];
    $subjname15 = $grade_r['subject'][15];
    $subjname16 = $grade_r['subject'][16];
    $subjname17 = $grade_r['subject'][17];
    $subjname18 = $grade_r['subject'][18];
    $subjname19 = $grade_r['subject'][19];
    $subjname20 = $grade_r['subject'][20];


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
