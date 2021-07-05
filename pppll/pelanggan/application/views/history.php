<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/pelanggan/img/favicon.ico')?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('/assets/pelanggan/css/styles.css')?>" rel="stylesheet" />
    </head>
    <style>
    body {
    background-image: url('https://webstatic-sea.mihoyo.com/hk4e/upload/fb/common.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>
    <?php $this->load->view('layout/layoutpelanggan/temp_sidebar.php'); ?>
    <?php

        $server="localhost";         
        $user="root";               
        $pass="";                  
        $database="ppl";    

        
        $conect=mysqli_connect($server,$user,$pass,$database) or die('Error Connection Network');


?>
        
        <div class="container-fluid p-0">
        <h1>History</h1>
            
            <section class="resume-section" id="profile">
            <table class="table table-dark">
            <thead>
       <tr>
           <th>NO</th>
           <th>ID CHALLENGE</th>
           <th>ID USER</th>
           <th>STATUS</th>
           <th>TANGGAL SUBMIT</th>
       </tr>
       </thead>

       <tbody>
        <?php
        
        $ambildata=mysqli_query($conect, "SELECT * FROM perhitungan ");
        while($a=mysqli_fetch_array($ambildata)){
            ?>
            <tr>
                <td><?php echo $a['id_per'];?></td>
                <td><?php echo $a['id_jc'];?></td>
                <td><?php echo $a['id_user'];?></td>
                <td><?php echo $a['status_per'];?></td>
                <td><?php echo $a['tgl_submit_per'];?></td>
            </tr>
        <?php
        }
        ?>
</tbody>

</table>

            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/pelanggan/js/scripts.js')?>"></script>
    </body>
</html>
