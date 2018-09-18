<?php
$con = mysqli_connect("localhost","root","","notice");

$position = $_POST['position'];
$message = $_POST['message'];

$sql = "INSERT INTO noticemsg (position,message) Values ('$position','$message')";

if(!mysqli_query($con,$sql))
{

	echo"not inserted";
}

else 
{
echo"inserted";

}

header("refresh:2; url = notify.php");


	   

/*if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `noticemsg`(`position`, `message`) VALUES ('$data[1]','$data[2]')";
    try{
        $insert_Result = mysqli_query($con, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($con) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
    */
?>