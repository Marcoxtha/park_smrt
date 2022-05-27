<?php
if($_GET){
    ?>
    <script>
        if(confirm("Are you sure")){
            <?php
include 'database_configuration.php';
$user_id =$_GET['id'];
$sql2 = "UPDATE `user_details` SET `is_admin` = 1 where `user_id` = $user_id";
if(mysqli_query($conn, $sql2)){
    ?>
    alert('<?php echo 'User role updated successfully';?>');
    window.location.href="http://localhost/park-smart/main-content/users.php";        
<?php
}
?> 
        }else{
            window.location.href="http://localhost/park-smart/main-content/users.php";        
        }
    </script>
    <?php
} 
?>    