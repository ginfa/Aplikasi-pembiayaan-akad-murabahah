<?php

	foreach ($tampilpenghasilanbyid->result() as $value) {

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatibl" content="IE=edge">
  <title>BMT Muhajirin | Teller</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BMT </b>MUHAJIRIN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="navbar-custom-menu">
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="color:white;">MAIN NAVIGATION</li>
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
            <li><a href="<?php echo base_url()?>Teller/tampil_transaksi"><i class="glyphicon glyphicon-record"></i> Transaksi</a></li>
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

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <div class="box-header with-border">
          <center><h3 class="box-title">Edit Data Penghasilan</h3></center>
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
      <div class="box">
      </div>
      <div class="box">
        <form class="form-horizontal" action="<?php echo base_url()?>Teller/ubahdatapenghasilan" method="post" >
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Id penghasilan</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="id_penghasilans"
                readonly="true" required="true" name="id_penghasilans" value="<?php echo $value->id_penghasilans ?>" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">No rekening</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="no_rekening"
                readonly="true" required="true" name="no_rekening" value="<?php echo $value->no_rekening ?>" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Penghasilan Suami</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="penghasilan_suamiedit"
                 name="penghasilan_suamiedit" placeholder="Penghasilan istri" required="true"  value="<?php echo $value->penghasilan_suami ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Penghasilan Istri</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="penghasilan_istriedit"
                 name="penghasilan_istriedit" placeholder="Penghasilan istri" required="true" value="<?php echo $value->penghasilan_istri ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Penghasilan Lainnya</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="penghasilan_lainnyaedit"
                 name="penghasilan_lainnyaedit" placeholder="Penghasilan lainnya" required="true" value="<?php echo $value->penghasilan_lainnya ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Biaya Rumah Tangga</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="biaya_rmh_tangga"
                 name="biaya_rmh_tanggaedit" placeholder="Biaya rumah tangga" required="true" value="<?php echo $value->biaya_rmh_tangga ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Biaya Kebutuhan Anak</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="biaya_kb_anak"
                name="biaya_kb_anakedit" placeholder="Biaya kebutuhan anak" required="true"  value="<?php echo $value->biaya_kb_anak ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Pengeluaran Pribadi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="pengeluaran_pribadi"
                 name="pengeluaran_pribadiedit" placeholder="pengeluaran pribadi" required="true" value="<?php echo $value->pengeluaran_pribadi ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Pembayaran Hutang</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="pembayaran_hutang"
                 name="pembayaran_hutangedit" placeholder="Pembayaran Hutang" required="true" value="<?php echo $value->pembayaran_hutang ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Pengeluaran Lainnya</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="pengeluaran_lainnya"
                 name="pengeluaran_lainnyaedit" placeholder="Pengeluaran lainnya" required="true"  value="<?php echo $value->pengeluaran_lainnya ?>">
              </div>
            </div>
          </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

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
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
<?php } ?>
