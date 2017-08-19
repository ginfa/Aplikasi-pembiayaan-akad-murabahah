<?php
function helper_log($tipe = "", $str = "")
{
  $CI =& get_instance();
  if(strtolower($tipe) == "login"){
    $log_tipe = 0;
  } elseif (strtolower($tipe) == "logout") {
    $log_tipe = 1;
  } elseif (strtolower($tipe) == "add") {
    $log_tipe = 2;
  } elseif (strtolower($tipe) == "edit") {
    $log_tipe = 3;
  } else {
    $log_tipe = 4;
  }

  $param['user']        = $CI->session->userdata('status');
  $param['tipe']        = $log_tipe;
  $param['keterangan']  = $str;

  $CI->load->model('Log_model');
  $CI->Log_model->save_log($param);
}
?>
