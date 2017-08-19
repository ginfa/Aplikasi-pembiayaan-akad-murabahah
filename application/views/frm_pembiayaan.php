<?php

 $sql = "select right(id_pembiayaans, 3) as id_pembiayaansz from tb_pembiayaan order by id_pembiayaans DESC";
 $result =  $this->db->query($sql);
 $row = $result->row_array();
 $id = $row['id_pembiayaansz'];
 $number = "PMB01";
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
  $number = "01";
}
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
  <link href="<?php echo base_url()?>assets/plugins/jQuery/jquery.autocomplete.css" rel="stylesheet"/>
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
    <a href="<?php echo base_url()?>Teller/tampilhalamandepan_teller" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BU</b>MI</span>
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
          <center><h3 class="box-title">Pencatatan Pembiayaan</h3></center>
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

        <form class="form-horizontal" name='autoSumForm' action="addPembiayaan" method="post">
          <br>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Pegawai</label>
                <div class="col-sm-6">
                  <select name="id_pegawai" class="form-control">
                      <?php
                      foreach ($data as $value) { ?>
                        <option value="<?php echo $value->id_pegawai; ?>"><?php echo $value->username; ?></option>
                      <?php  } ?>
                  </select>

                </div>
            </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">No rekening</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="no_rekening"
                  placeholder="No rekening" class="autocomplete" required="true">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Id Pembiayaan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="id_pembiayaans" readonly="true"
                     name="id_pembiayaans" value="<?= $number; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Jumlah permohonan pembiayaan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="jumlah_permohonan_pembiayaan"
                    name="jumlah_permohonan_pembiayaan" onkeyup="hitungPembayarans()" onFocus="startCalc();" onBlur="stopCalc();">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Rencana digunakan untuk kebutuhan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword3"
                    name="digunakan_untuk">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Jangka waktu</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="jangka_waktu" onkeyup="hitungPembayarans()" onFocus="startCalc();" onBlur="stopCalc();"
                    name="jangka_waktu">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Sumber pelunasan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword3"
                    name="sumber_pelunasan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Pengajuan</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" id="inputPassword3"
                      name="tanggal_pengajuan" required="true" max="<?= date('Y-m-d') ;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Rencana pembayaran per</label>
                  <div class="col-sm-6">
                    <select id="rencana_pembayaran_per" name="rencana_pembayaran_per" onchange="hitungPembayarans()" onFocus="startCalc();" onBlur="stopCalc();" class="form-control">
                      <option value="1">Hari</option>
                      <option value="2">Minggu</option>
                      <option value="3">Bulan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Margin BMT</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="margin" onkeyup="hitungPembayarans()"
                    name="margin" onfocus="startCalc();" onblur="stopCalc();" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Margin Nasabah</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="margin_nasabah" onkeyup="hitungPembayarans()"
                    name="margin_nasabah" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Angsuran pokok</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="angsuran_pokok" onkeyup="hitungPembayarans()"
                    name="angsuran_pokok" onFocus="startCalc();" onBlur="stopCalc();" readonly="true" onchange='tryNumberFormat(this.form.thirdBox);'>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Total pembiayaan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="total_pembiayaan"
                    name="total_pembiayaan" onchange='tryNumberFormat(this.form.thirdBox);' readonly="true">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Jaminan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword3"
                    name="jaminan">
                  </div>
                </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Nomor jaminan</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" id="nomor_jaminan"
                                 name="nomor_jaminan">
                      </div>
                  </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Status pembiayaan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword3"
                    name="status_pembiayaan" value="Tolak" readonly="true">
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
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jQuery/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jQuery/jquery-1.5.2.min.js"></script>
<script type="text/javascript">
  var site = "<?php echo site_url(); ?>";
  $(function(){
    $('#Teller').autocomplete({
      serviceUrl: site+'teller/get_data',
      onSelect: function (suggestion){
        $('#v_rek').val(''+suggestion.no_rekening);
          $('#v_saldo').val(''+suggestion.saldo);


      }
    });
  });
</script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

  function hitungPembayarans() {
    var rencana_pembayaran_per = document.getElementById('rencana_pembayaran_per').value;
    var jumlah_permohonan_pembiayaan = document.getElementById('jumlah_permohonan_pembiayaan').value;
    var jangka_waktu = document.getElementById('jangka_waktu').value;
    var angsuran_pokok = document.getElementById('angsuran_pokok');
    var margin = document.getElementById('margin').value;
    var total_pembiayaan = document.getElementById('total_pembiayaan');

    // document.autoSumForm.total_pembiayaan.value = angsuran_pokok * jangka_waktu;

    if(rencana_pembayaran_per == 3) {
      angsuran_pokok.value = (jumlah_permohonan_pembiayaan / jangka_waktu) + (jumlah_permohonan_pembiayaan / jangka_waktu) * (margin / 100) ;

    }
    else if(rencana_pembayaran_per == 2) {
      angsuran_pokok.value = ((jumlah_permohonan_pembiayaan / jangka_waktu) / 4) + ((jumlah_permohonan_pembiayaan / jangka_waktu) / 4) * (margin / 100);

    }
    else if(rencana_pembayaran_per == 1) {
      angsuran_pokok.value = (((jumlah_permohonan_pembiayaan / jangka_waktu) / 4) / 7) + (((jumlah_permohonan_pembiayaan / jangka_waktu) / 4) / 7) * (margin / 100);

    }


  }
</script>
<script>
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
  a = document.autoSumForm.jangka_waktu.value;
  b = document.autoSumForm.angsuran_pokok.value;
  d = document.autoSumForm.jumlah_permohonan_pembiayaan.value;


    document.autoSumForm.total_pembiayaan.value = (b * a) + parseInt(d);


}
function stopCalc(){
  clearInterval(interval);
}
</script>

</body>
</html>
<?php //} ?>