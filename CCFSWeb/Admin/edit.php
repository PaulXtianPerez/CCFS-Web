<?php 

$host = "localhost";
$user = "root";
$password ="";
$database = "ccfs";

$status2 = "";


try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}



	if( isset($_GET['edit']) )
	{
		$id2 = $_GET['edit'];
		
		$res2= "SELECT * FROM reservation WHERE reservation_id='$id2'";
		$resu2 = mysqli_query($connect, $res2);
		
	}

if(isset($_POST['update']))
{
    $id2 = $_POST['id2'];
	$status2 = $_POST['status'];
    $update_Query2 = "UPDATE `reservation` SET `status`='$status2' WHERE `reservation_id` = '$id2'";
    try{
        $update_Result = mysqli_query($connect, $update_Query2);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}


 
	

?>

