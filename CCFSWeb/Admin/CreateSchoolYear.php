<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create School Year</title>
<head>

<body>

<!--  <form class="form-inline ml-3" action="CreateSchoolYear.php"> -->
 <form action="CreateSchoolYear.php">
    <div>
      Date Start:
      <input class="form-control form-control-navbar" type="date" name="datestart"><br>
      Date End:
      <input class="form-control form-control-navbar" type="date" name="dateend"><br>
      Number of School Days:
      <input class="form-control form-control-navbar" type="text" name="schdays"><br><br>
      <h5>Preschool Fees</h5><br>
      Tuition Fee:
      <input class="form-control form-control-navbar" type="text" name="preTuitionFee"><br>
      Miscellaneous Fee:
      <input class="form-control form-control-navbar" type="text" name="preMiscFee"><br>
      Book Fee:
      <input class="form-control form-control-navbar" type="text" name="preBookFee"><br><br>
      <h5>Grade School Fees</h5><br>
      Tuition Fee:
      <input class="form-control form-control-navbar" type="text" name="grdTuitionFee"><br>
      Miscellaneous Fee:
      <input class="form-control form-control-navbar" type="text" name="grdMiscFee"><br>
      Book Fee:
      <input class="form-control form-control-navbar" type="text" name="grdBookFee"><br><br>
    </div>

    <div>
    <input type="submit" value="Create"><br>
    <input type="reset">
  </div>
  </form>
</body>

</html>
