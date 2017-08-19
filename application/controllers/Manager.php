<?php

class manager extends CI_Controller{

  //////////////////////////// menampilkan tampilan form \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function frm_manager()
  {
    $this->load->view('halamandepan_manager');
  }

  public function data_audit()
  {
    $this->load->view('data_audit');
  }

  public function data_pegawai()
  {
    $this->load->view('data_pegawai');
  }

  public function data_persetujuan_pembiayaan()
  {
    $this->load->view('data_persetujuan_pembiayaan');
  }

  public function data_transaksi()
  {
    $this->load->view('data_transaksi_m');
  }




  ///////////////////////////////// menampilkan data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function tampilnasabah()
  {
    $data['tampil_nasabah'] = $this->Modul->display_nasabah_m();
    $this->load->view('data_nasabah_manager', $data);
  }

  public function tampil_penghasilan()
  {
    $data['tampilnasabahpenghasilan'] = $this->Modul->display_penghasilan_m();
    $this->load->view('data_penghasilan_manager', $data);
  }

  public function tampil_audit()
  {
    $data['tampil_audit'] = $this->Modul->display_audit();
    $this->load->view('data_audit', $data);
  }

  public function tampil_transaksi()
  {

    $data['tampil_transaksi'] = $this->Modul->display_transaksi_m();
    $this->load->view('data_transaksi_m', $data);
  }


    public function tampil_pegawai()
  {
    $data['tampil_pegawai'] = $this->Modul->display_pegawai();
    $this->load->view('data_pegawai', $data);
  }

    public function tampil_pegawaipembiayaan()
    {
        $data['data'] = $this->Modul->display_pegawaipembiayaan();
        $this->load->view('frm_pembiayaan', $data);
    }

  public function pengambilankeputusan_akad()
  {
    $data['tampil_pembiayaan'] = $this->Modul->display_pengambilankeputusan_akad();
    $this->load->view('frm_persetujuan', $data);
  }

    public function tampil_jurnal()
    {

        $data['tampil_jurnal'] = $this->Modul->display_jurnal();
        $this->load->view('jurnal_m', $data);
    }

  public function tampil_pembiayaan_m()
  {
    $data['tampil_pembiayaan'] = $this->Modul->display_pembiayaan_m();
    $this->load->view('data_persetujuan_pembiayaan', $data);
  }

  public function tampil_tolakpembiayaan()
  {
    $data['tampil_pembiayaan'] = $this->Modul->display_penolakanpembiayaan_m();
    $this->load->view('data_penolakan_pembiayaan', $data);
  }

  public function persetujuanakad($id_pembiayaan)
  {
    $keputusan = $this->Modul->prosespersetujuanakad($id_pembiayaan);
    if (!$keputusan)
     {
      echo "Gagal diputuskan";
    }
    else
    {
      redirect(base_url()."Manager/tampil_pembiayaan_m");
    }
  }

  public function penolakanakad($id_pembiayaan)
  {
    $keputusan = $this->Modul->prosespenolakanakad($id_pembiayaan);
    if (!$keputusan)
     {
      echo "Gagal diputuskan";
    }
    else
    {
      redirect(base_url()."Manager/tampil_pembiayaan_m");
    }
  }


  ///////////////////////////////// menambahkan data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function addAdmin(){
     $id_pegawai = $this->input->post("id_pegawai");
     $username = $this->input->post("username");
     $password = $this->input->post("password");
     $alamat = $this->input->post("alamat");
     $no_tlp = $this->input->post("no_tlp");
     $status = $this->input->post("status");
     $q = $this->Modul->addAdmin($id_pegawai,$username,$password,$alamat,$no_tlp,$status);
     redirect('Manager/frm_manager');
   }

    public function ubahdatapegawai()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $username = $this->input->post('username_edit');
        $password = $this->input->post('password_edit');
        $alamat = $this->input->post('alamat_edit');
        $no_tlp = $this->input->post('no_tlp_edit');



        $simpan = $this->Modul->proseseditpegawai($id_pegawai,$username,$password,$alamat,$no_tlp);
        if (!$simpan)
        {
            echo "Gagal di ubah";
        }
        else
        {
            echo "Berhasil di ubah";
            helper_log("add", "Manager telah mengubah data pegawai ke sistem!");
            redirect("Manager/tampil_pegawai");
        }
    }

    public function edit_pegawai($id_pegawai)
    {
        $data['tampilpegawaibyid'] = $this->Modul->editpegawai($id_pegawai);
        $this->load->view('edit_pegawai', $data);
    }




}


 ?>
