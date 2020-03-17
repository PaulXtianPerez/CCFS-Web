<?php
 include("database.php");
 if(!empty($_POST)) {
      $output = '';
      $message = '';
      $scstatus = mysqli_real_escape_string($mysqli, $_POST["scstatus"]);
      $janAtt = mysqli_real_escape_string($mysqli, $_POST["janAtt"]);
      $febAtt = mysqli_real_escape_string($mysqli, $_POST["febAtt"]);
      $marAtt = mysqli_real_escape_string($mysqli, $_POST["marAtt"]);
      $aprAtt = mysqli_real_escape_string($mysqli, $_POST["aprAtt"]);
      $mayAtt = mysqli_real_escape_string($mysqli, $_POST["mayAtt"]);
      $junAtt = mysqli_real_escape_string($mysqli, $_POST["junAtt"]);
      $julAtt = mysqli_real_escape_string($mysqli, $_POST["julAtt"]);
      $augAtt = mysqli_real_escape_string($mysqli, $_POST["augAtt"]);
      $sepAtt = mysqli_real_escape_string($mysqli, $_POST["sepAtt"]);
      $octAtt = mysqli_real_escape_string($mysqli, $_POST["octAtt"]);
      $novAtt = mysqli_real_escape_string($mysqli, $_POST["novAtt"]);
      $decAtt = mysqli_real_escape_string($mysqli, $_POST["decAtt"]);
      $inputnurseryTuition = mysqli_real_escape_string($mysqli, $_POST["pretui1"]);
      $inputnurseryBook = mysqli_real_escape_string($mysqli, $_POST["premisc1"]);
      $inputnurseryMisc1 = mysqli_real_escape_string($mysqli, $_POST["prebook1"]);
      $inputpreKinTuition = mysqli_real_escape_string($mysqli, $_POST["pretui2"]);
      $inputpreKinBook = mysqli_real_escape_string($mysqli, $_POST["premisc2"]);
      $inputnurseryMisc2 = mysqli_real_escape_string($mysqli, $_POST["prebook2"]);
      $inputKinTuition = mysqli_real_escape_string($mysqli, $_POST["pretui3"]);
      $inputKinBook = mysqli_real_escape_string($mysqli, $_POST["premisc3"]);
      $inputnurseryMisc3 = mysqli_real_escape_string($mysqli, $_POST["prebook3"]);
      $inputgrade1TFee = mysqli_real_escape_string($mysqli, $_POST["gradetui1"]);
      $inputgrade1MiscFee = mysqli_real_escape_string($mysqli, $_POST["grademisc1"]);
      $inputgrade1BookFee = mysqli_real_escape_string($mysqli, $_POST["gradebook1"]);
      $inputgrade2TFee = mysqli_real_escape_string($mysqli, $_POST["gradetui2"]);
      $inputgrade2MiscFee = mysqli_real_escape_string($mysqli, $_POST["grademisc2"]);
      $inputgrade2BookFee = mysqli_real_escape_string($mysqli, $_POST["gradebook2"]);
      $inputgrade3TFee = mysqli_real_escape_string($mysqli, $_POST["gradetui3"]);
      $inputgrade3MiscFee = mysqli_real_escape_string($mysqli, $_POST["grademisc3"]);
      $inputgrade3BookFee = mysqli_real_escape_string($mysqli, $_POST["gradebook3"]);
      $inputgrade4TFee = mysqli_real_escape_string($mysqli, $_POST["gradetui4"]);
      $inputgrade4MiscFee = mysqli_real_escape_string($mysqli, $_POST["grademisc4"]);
      $inputgrade4BookFee = mysqli_real_escape_string($mysqli, $_POST["gradebook4"]);
      $inputgrade5TFee = mysqli_real_escape_string($mysqli, $_POST["gradetui5"]);
      $inputgrade5MiscFee = mysqli_real_escape_string($mysqli, $_POST["grademisc5"]);
      $inputgrade5BookFee = mysqli_real_escape_string($mysqli, $_POST["gradebook5"]);
      $inputgrade6TFee = mysqli_real_escape_string($mysqli, $_POST["gradetui6"]);
      $inputgrade6MiscFee = mysqli_real_escape_string($mysqli, $_POST["grademisc6"]);
      $inputgrade6BookFee = mysqli_real_escape_string($mysqli, $_POST["gradebook6"]);

      if($_POST["schoolYear_id"] != '') {
        if($_POST["scstatus"] == 'ACTIVE') {
          $querySetStatus = "UPDATE schoolyear SET scstatus='INACTIVE'";
          mysqli_query($mysqli, $querySetStatus);
        }

           $query = "
           UPDATE schoolyear
           SET  scstatus='$scstatus',
           janAtt='$janAtt',
           febAtt='$febAtt',
           marAtt='$marAtt',
           aprAtt='$aprAtt',
           mayAtt='$mayAtt',
           junAtt='$junAtt',
           julAtt='$julAtt',
           augAtt='$augAtt',
           sepAtt='$sepAtt',
           octAtt='$octAtt',
           novAtt='$novAtt',
           decAtt='$decAtt',
           pretui1='$inputnurseryTuition',
           premisc1='$inputnurseryBook',
           prebook1='$inputnurseryMisc1',
           pretui2='$inputpreKinTuition',
           premisc2='$inputpreKinBook',
           prebook2='$inputnurseryMisc2',
           pretui3='$inputKinTuition',
           premisc3='$inputKinBook',
           prebook3='$inputnurseryMisc3',
           gradetui1='$inputgrade1TFee',
           grademisc1='$inputgrade1MiscFee',
           gradebook1='$inputgrade1BookFee',
           gradetui2='$inputgrade2TFee',
           grademisc2='$inputgrade2MiscFee',
           gradebook2='$inputgrade2BookFee',
           gradetui3='$inputgrade3TFee',
           grademisc3='$inputgrade3MiscFee',
           gradebook3='$inputgrade3BookFee',
           gradetui4='$inputgrade4TFee',
           grademisc4='$inputgrade4MiscFee',
           gradebook4='$inputgrade4BookFee',
           gradetui5='$inputgrade5TFee',
           grademisc5='$inputgrade5MiscFee',
           gradebook5='$inputgrade5BookFee',
           gradetui6='$inputgrade6TFee',
           grademisc6='$inputgrade6MiscFee',
           gradebook6='$inputgrade6BookFee'
           WHERE yearid='".$_POST["schoolYear_id"]."'";
      }

      if(mysqli_query($mysqli, $query)) {
        echo "<span style='font-size:15px;'>" . '<i class="fas fa-check-circle"></i>' . " School year updated." . "</span>";
      } else {
        echo "<span style='font-size:15px;'>" . '<i class="fas fa-exclamation-circle"></i>' . " Update failed." . "</span>";
      }

    }
 ?>
