<?php

include_once('inc/config.php');

$to = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='to' "));
$engineer = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='engineer' "));
$trainee = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='trainee' "));
$admin = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='admin' "));
$driver = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='driver' "));
$other = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM slpa_ect_staff WHERE position='other' "));


?>

<section class="home-section-0" id="home-section-0">
    <div class="container">
        <div class="item">
            <a href="engineers" class="tag">Engineers (<?php echo $engineer ?>)</a>
            <a href="to" class="tag">Technical Officers (<?php echo $to ?>)</a>
            <a href="trainees" class="tag">Trainees (<?php echo $trainee ?>)</a>
            <a href="admin" class="tag">Admin (<?php echo $admin ?>)</a>
            <a href="drivers" class="tag">Drivers (<?php echo $driver ?>)</a>
            <a href="others" class="tag">Others (<?php echo $other ?>)</a>
        </div>
    </div>
</section>