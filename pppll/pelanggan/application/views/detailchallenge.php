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
        <!-- Page Content-->
        <div class="container-fluid p-0">
        <h1>Challenge</h1>
            <!-- About-->
            <section class="resume-section" id="profile">
            
            <table class="table table-dark">
                <thead>
                <tr>
                <th scope="col">Nama Challenge</th>
                <th scope="col">Deskripsi Challenge</th>
                <th scope="col">Skor</th>
                <th scope="col" style="text-align:center">Upload Bukti</th>

                </tr>
                </thead>
                <?php
          foreach ($detail->result_array() as $row) {
            ?>
                <tbody>
                <tr>
                <td><a href="<?php echo base_url('pelanggan/index.php/challenge/detjc/'.$row['id_jc']); ?>"><?php echo $row['nama_jc']?></td>
                <td><?php echo $row['desc_jc'] ?></td>
                <td><?php echo $row['score_jc'] ?></td>
                <td>
                    <form method="post"   action="<?php echo base_url('pelanggan/index.php/challenge/uploadbukti/'.$this->session->userdata('id_user')); ?>">
                        <input type="file" id="myfile" name="myfile" multiple accept="image/*">
                        <input type="hidden" name="id_jc" value="<?php echo $row['id_jc'] ?>">
                        <input type="hidden" name="score_jc" value="<?php echo $row['score_jc'] ?>">
                        <input type="submit" value="Upload">
                    </form>
                </td>
                </tbody>
            <?php } ?>
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
