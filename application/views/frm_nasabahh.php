<?php

 $sql = "select right(no_rekening, 3) as no_rekeningg from tb_nasabah order by no_rekening DESC";
 $result =  $this->db->query($sql);
 $row = $result->row_array();
 $id = $row['no_rekeningg'];
 $number = "510100";
 if ($id < 9 ){
   $number = $number."00".($id + 1);
 }
elseif ($id < 99) {
  $number = $number."0".($id + 1);
}
elseif ($id < 999) {
  $id = $number."".($id + 1);
}
else{
  $number = "51010";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BMT BUMI | Teller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>


   <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- datatables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>Teller/tampilhalamandepan_teller" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BU</b>MI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BMT </b>BUMI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header" style="color:white;">MAIN NAVIGATION TELLER</li>
              <li class="treeview">
                  <a href="#">
                      <i class="glyphicon glyphicon-user"></i> <span>Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url()?>Teller/tampil_nasabah"><i class="glyphicon glyphicon-record"></i> Nasabah </a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampil_datauser"><i class="glyphicon glyphicon-record"></i> Data User </a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampil_penghasilan"><i class="glyphicon glyphicon-record"></i> Penghasilan</a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampilAhli_waris"><i class="glyphicon glyphicon-record"></i> Ahli Waris</a></li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="glyphicon glyphicon-usd"></i>
                      <span>Pembiayaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url()?>Teller/frm_pembiayaan"><i class="glyphicon glyphicon-record"></i> Daftar</a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampil_pembiayaan"><i class="glyphicon glyphicon-record"></i> Data Pengajuan Akad</a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampil_pembiayaan_transaksi"><i class="glyphicon glyphicon-record"></i> Transaksi</a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampil_detail_transaksi"><i class="glyphicon glyphicon-record"></i> Detail Transaksi</a></li>
                      <li><a href="<?php echo base_url()?>Teller/tampil_jurnal"><i class="glyphicon glyphicon-record"></i> Data jurnal</a></li>
                  </ul>
              </li>
              <li>
                  <a href="<?php echo base_url()?>Pegawai/logout">
                      <i class="glyphicon glyphicon-log-out"></i>
                      Sign Out
            <span class="pull-right-container">
            </span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
        <center><h3 class="box-title">Pencatatan Data Nasabah</h3></center>
          <div class="box-tools pull-right">
          </div>
        </div>
        <div class="box-body">
          <center>
          BMT Muhajirin
          </center>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <center>
          Cimanggis Depok
          </center>
        </div>

      </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Nasabah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="add_nasabah" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Rekening</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3"
                     readonly="true" required="true" name="no_rekening" value="<?= $number; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3"
                     placeholder="Nama" name="nama" required="true">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Tempat lahir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3"
                     placeholder="tempat lahir" name="tempat_lahir" required="true">
                  </div>
                </div>
                <div class="form-group">
                <label class="col-sm-3 control-label">Tgl lahir</label>
                <div class="input-group date" >
                  <div class="col-sm-11">
                    <input type="date" class="form-control pull-right" id="tempat_tanggal_lahir"
                    name="tempat_tanggal_lahir" max="<?= date('Y-m-d') ;?>" placeholder="">
                  </div>
                </div>
              </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Pekerjaan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3"
                    name="pekerjaan" placeholder="Pekerjaan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">No identitas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3"
                     required="true" name="nomor_identitas" placeholder="No identitas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Saldo</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputPassword3"
                     required="true" name="saldo" placeholder="Saldo" >
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

          <!-- Input addon -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Nasabah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form class="form-horizontal">
              <div class="box-body" style="border: 1px solid rgb(204, 204, 204);
              padding: 5px; overflow: auto; width: 966px; height: 300px; background-color: rgb(255, 255, 255);">

                <table id="example1" class="table table-bordered table-striped data">
                <thead>
                <tr>
                  <th>No rekening</th>
                  <th>Nama</th>
                  <th>Tempat lahir</th>
                  <th>Tanggal lahir</th>
                  <th>Pekerjaan</th>
                  <th>No identitas</th>
                  <th>Saldo</th>
                  <th>aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
	                 $id_nasabah = 1;
	                  foreach ($tampil_nasabah->result() as $value) {
	                 ?>
                <tr>
                  <td><?php echo $value->no_rekening; ?></td>
                  <td><?php echo $value->nama; ?></td>
                  <td><?php echo $value->tempat_lahir; ?></td>
                  <td><?php echo $value->tempat_tanggal_lahir; ?></td>
                  <td><?php echo $value->pekerjaan; ?></td>
                  <td><?php echo $value->nomor_identitas; ?></td>
                  <td><?php echo $value->saldo; ?></td>
                  <th>
                    <a class="btn btn-info" href="<?php echo base_url() ?>Teller/get_idnasabah/<?php echo $value->no_rekening ?>"> + Data </a>
                    <a class="btn btn-info" href="<?php echo base_url() ?>Teller/get_idnasabahpenghasilan/<?php echo $value->no_rekening ?>">Penghasilan</a>
                    <a class="btn btn-info" href="<?php echo base_url() ?>Teller/get_idahliwaris/<?php echo $value->no_rekening ?>">Ahli Waris</a>
                    <a class="btn btn-default" href="<?php echo base_url() ?>Teller/edit_nasabah/<?php echo $value->id_nasabah ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>Teller/hapusnasabah/<?php echo $value->id_nasabah ?>">Hapus</a>
                  </th>
                </tr>
                <?php $id_nasabah++;  } ?>
                </tfoot>
              </table>
              </div>
              <!-- /.box-body -->

              <!-- /.box-footer -->
            </form>
          </div>

          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()?>assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</body>
</html>
