<?php
    include "database_configuration.php";
    session_start();
    if(!isset($_SESSION['admin_details'])){
        header('location:login.php');
    }
    $query = "SELECT * from `booking_table`";
    $query_result = mysqli_query($conn,$query); 
    $i=1;
?>
<?php
require_once "admin-nav.php";
?>
<div class="main_contaier">
    <div class="container">
        <div class="info">
            <table>
                <tr>
                    <th>S No.</th>
                    <th>Full Name</th>
                    <th>Vehicle No.</th>
                    <th>Date</th>
                    <th>Arrival Time</th>
                    <th>Departure Time</th>
                    <th>Price</th>

                </tr>
                <?php

while( $query_row = mysqli_fetch_array($query_result) ) 
 {

    ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $query_row[ 'full_name' ];
    ?></td>
                    <td><?php echo $query_row[ 'vehicle_no' ];
    ?></td>
                    <td><?php echo $query_row[ 'date' ];
    ?></td>
                    <td><?php echo $query_row[ 'arrival_time' ];
    ?></td>
                    <td><?php echo $query_row[ 'departure_time' ];
    ?></td>
                    <td><?php echo $query_row[ 'price' ];
    ?></td>
                    


                </tr>
                <?php
    $i++;

}

$conn->close();

?>
            </table>
        </div>
    </div>
</div>