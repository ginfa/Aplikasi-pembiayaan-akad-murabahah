<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class teller extends CI_Controller{




/////////////////////////////////// menampilkan data  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function tampilAhli_waris()
	{
		$data['tampil_ahliwaris'] = $this->Modul->display_ahliwaris();
		$this->load->view('data_ahliwaris', $data);
	}

//  public function tampilno_rekening()
//  {
//    $data['tampilno_rekening'] = $this->Modul->display_rekening();
//    $this->load->view('frm_nasabah', $data);
//  }


  public function tampil_datauser()
  {
    $data['tampil_datauser'] = $this->Modul->display_user();
		$this->load->view('data_user', $data);
  }

  public function tampil_nasabah()
  {

    $data['tampil_nasabah'] = $this->Modul->display_nasabah();
    $this->load->view('frm_nasabahh', $data);
  }

  public function tampil_jurnal()
{

    $data['tampil_jurnal'] = $this->Modul->display_jurnal();
    $this->load->view('jurnal', $data);
}

    public function tampilAkad($Id_Akad)
    {
        $data['tampil_akad'] = $this->Modul->joinakad($Id_Akad);
        $this->load->view('cetak_akad', $data);
    }

  public function tampil_transaksi()
  {

    $data['tampil_transaksi'] = $this->Modul->display_transaksi();
    $this->load->view('data_transaksi', $data);
  }

  public function tampil_detail_transaksi()
  {

    $data['tampil_detail_transaksi'] = $this->Modul->display_transaksi_detail();
    $this->load->view('detail_transaksi', $data);
  }

  public function tampil_penghasilan()
	{
		$data['tampil_penghasilan'] = $this->Modul->display_penghasilan();
		$this->load->view('data_penghasilan', $data);
	}

  public function tampil_pembiayaan()
	{
		$data['tampil_pembiayaan'] = $this->Modul->display_pembiayaan();
		$this->load->view('data_pembiayaan', $data);
	}
    public function tampil_pembiayaans()
    {
        $data['data'] = $this->Modul->display_pembiayaan();
        $this->load->view('cetak_akad', $data);
    }
    public function tampil_pegawaipembiayaan()
    {
        $data['data'] = $this->Modul->display_pegawaipembiayaan();
        $this->load->view('frm_pembiayaan', $data);
    }


  public function tampil_pembiayaan_transaksi()
  {
    $data['tampil_pembiayaan'] = $this->Modul->display_pembiayaan_transaksi();
    $this->load->view('data_transaksi', $data);
  }

////////////////////////////////// menampilkan form \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function frm_ahliwaris()
{
    $this->load->view('data_ahliwaris');
}

    public function cetak_akad($id_pembiayaans)
    {
        $data['tampil_akad'] = $this->Modul->joinakad($id_pembiayaans);
//        dd($data['tampil_akad']);
        $this->load->view('cetak_akad', $data);
    }

  public function frm_nasabah()
  {
    $this->load->view('tampil_nasabah');
  }

  public function frm_penghasilan()
  {
    $this->load->view('frm_penghasilan');
  }

  public function frm_datatransaksi()
  {
    $this->load->view('data_transaksi');
  }

  public function frm_datauser()
  {
    $this->load->view('frm_datausers');
  }

  public function frm_pembiayaan()
  {
      $data['data'] = $this->Modul->display_pegawaipembiayaan();
//
    $this->load->view('frm_pembiayaan', $data);
  }

  public function frm_transaksi()
  {
    $this->load->view('data_transaksi');
  }

  public function tampilhalamandepan_teller()
  {
    $this->load->view('halamandepan_teller');
  }



//////////////////////////////// proses menambahkan data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function add_nasabah()
  {

        $no_rekening = $this->input->post('no_rekening');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $nomor_identitas = $this->input->post('nomor_identitas');
        $saldo = $this->input->post('saldo');

      $q = $this->Modul->add_nasabah($no_rekening,$nama,$tempat_lahir,$tempat_tanggal_lahir,$pekerjaan,
      $nomor_identitas,$saldo);
      helper_log("add", "Teller telah menambahkan data nasabah ke sistem!");
      redirect("Teller/tampil_nasabah");
  }

  public function addAhliwaris()
  {
   $id_ahliwarisz = $this->input->post('id_ahliwarisz');
   $no_rekening = $this->input->post('no_rekening');
   $nama = $this->input->post('nama');
   $alamat = $this->input->post('alamat');
   $no_tlp = $this->input->post('no_tlp');
   $pekerjaan = $this->input->post('pekerjaan');
   $hubungan = $this->input->post('hubungan');

   $q = $this->Modul->tambah_ahliwaris($id_ahliwarisz,$no_rekening,$nama,$alamat,$no_tlp,$pekerjaan, $hubungan);
   helper_log("add", "Teller telah menambahkan data ahli waris ke sistem!");
   redirect("Teller/tampilAhli_waris");
   }

   public function addPenghasilan()
   {
     $id_penghasilans = $this->input->post('id_penghasilans');
     $no_rekening = $this->input->post('no_rekening');
     $penghasilan_suami = $this->input->post('penghasilan_suami');
     $penghasilan_istri = $this->input->post('penghasilan_istri');
     $penghasilan_lainnya = $this->input->post('penghasilan_lainnya');
     $biaya_rmh_tangga = $this->input->post('biaya_rmh_tangga');
     $biaya_kb_anak = $this->input->post('biaya_kb_anak');
     $pengeluaran_pribadi = $this->input->post('pengeluaran_pribadi');
     $pembayaran_hutang = $this->input->post('pembayaran_hutang');
     $pengeluaran_lainnya = $this->input->post('pengeluaran_lainnya');

     $q = $this->Modul->tambah_penghasilan($id_penghasilans,$no_rekening,$penghasilan_suami,$penghasilan_istri,$penghasilan_lainnya, $biaya_rmh_tangga,
     $biaya_kb_anak, $pengeluaran_pribadi, $pembayaran_hutang, $pengeluaran_lainnya);
     helper_log("add", "Teller telah menambahkan data penghasilan ke sistem!");
     redirect("Teller/tampil_penghasilan");
   }

   public function addUser() {
     $id_datausers = $this->input->post('id_datausers');
     $no_rekening = $this->input->post('no_rekening');
     $status = $this->input->post('status');
     $pendidikan = $this->input->post('pendidikan_terakhir');
     $jml_tanggungan = $this->input->post('jumlah_tanggungan');
     $lama_usaha = $this->input->post('lama_usaha');
     $status_usaha = $this->input->post('status_usaha');
     $status_rumah = $this->input->post('status_rumah');
     $status_kios = $this->input->post('status_kios');
     $alamat = $this->input->post('alamat');
     $no_tlp = $this->input->post('no_tlp');
     $alamat_kantor = $this->input->post('alamat_kantor');
     $no_tlp_kantor = $this->input->post('no_tlp_kantor');
     $alamat_usaha = $this->input->post('alamat_usaha');
     $no_tlp_usaha = $this->input->post('no_tlp_usaha');

     $q = $this->Modul->tambah_user($id_datausers,$no_rekening,$status,$pendidikan,$jml_tanggungan,
     $lama_usaha,$status_usaha,$status_rumah,$status_kios,$alamat,$no_tlp,$alamat_kantor,$no_tlp_kantor,
     $alamat_usaha,$no_tlp_usaha);
     helper_log("add", "Teller telah menambahkan data user ke sistem!");
     redirect(base_url()."Teller/tampil_nasabah");
   }

   public function addPembiayaan(){

       $id_pegawai = $this->input->post('id_pegawai');
       $no_rekening = $this->input->post('no_rekening');
       $id_pembiayaans = $this->input->post('id_pembiayaans');
     $jumlah_permohonan_pembiayaan = $this->input->post('jumlah_permohonan_pembiayaan');
     $digunakan_untuk = $this->input->post('digunakan_untuk');
     $jangka_waktu = $this->input->post('jangka_waktu');
     $sumber_pelunasan = $this->input->post('sumber_pelunasan');
     $tanggal_pengajuan = $this->input->post('tanggal_pengajuan');
     $rencana_pembayaran_per = $this->input->post('rencana_pembayaran_per');
     $margin = $this->input->post('margin');
     $margin_nasabah = $this->input->post('margin_nasabah');
     $angsuran_pokok = $this->input->post('angsuran_pokok');
     $total_pembiayaan = $this->input->post('total_pembiayaan');
     $jaminan = $this->input->post('jaminan');
       $nomor_jaminan = $this->input->post('nomor_jaminan');
     $status_pembiayaan = $this->input->post('status_pembiayaan');

     $q = $this->Modul->tambah_pembiayaan($id_pegawai,$no_rekening,$id_pembiayaans,$jumlah_permohonan_pembiayaan,$digunakan_untuk,
     $jangka_waktu,$sumber_pelunasan,$tanggal_pengajuan,$rencana_pembayaran_per,$margin,$margin_nasabah,$angsuran_pokok,$total_pembiayaan,
     $jaminan,$nomor_jaminan,$status_pembiayaan);
     helper_log("add", "Teller telah menambahkan data pembiayaan ke sistem!");
     redirect(base_url()."Teller/tampil_pembiayaan");
   }

   public function addTransaksi(){

     $idc_pembayaran = $this->input->post('idc_pembayaran');
     $id_pembiayaans = $this->input->post('id_pembiayaans');
     $no_rekening = $this->input->post('no_rekening');
     $angsuran_pokok = $this->input->post('angsuran_pokok');
     $angsuran_ke = $this->input->post('angsuran_ke');
     $tanggal = $this->input->post('tanggal');


// proses jurnal

     $data2 = array(
       'id_pembiayaans'  => $this->input->post('no_rekening'),
       'debit' => $this->input->post('angsuran_pokok'),
       'tanggal' => $this->input->post('tanggal'),
       'keterangan' => $this->input->post('k1'),
     );
     $data3 = array(
       'id_pembiayaans'  => $this->input->post('no_rekening'),
       'kredit' => $this->input->post('angsuran_pokok'),
       'tanggal' => $this->input->post('tanggal'),
       'keterangan' => $this->input->post('k2'),
     );
     $a = $this->db->insert('tb_jurnal', $data2);
     $b = $this->db->insert('tb_jurnal', $data3);
     $q = $this->Modul->tambah_transaksi($idc_pembayaran,$id_pembiayaans, $no_rekening, $angsuran_pokok, $angsuran_ke, $tanggal);
     redirect(base_url()."Teller/tampil_pembiayaan_transaksi");


   }

/////////////////////////////////// proses mengubah data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function ubahdatanasabah()
		{
      $no_rekening = $this->input->post('no_rekening');
			$nama = $this->input->post('nama_edit');
      $tempat_lahir = $this->input->post('tempat_lahiredit');
			$tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahiredit');
			$pekerjaan = $this->input->post('pekerjaan_edit');
			$nomor_identitas = $this->input->post('nomor_identitasedit');
      $saldo = $this->input->post('saldo_edit');

	    $simpan = $this->Modul->proseseditnasabah($no_rekening,$nama ,$tempat_lahir,$tempat_tanggal_lahir,
      $pekerjaan, $nomor_identitas, $saldo);
	     if (!$simpan)
			    {
				        echo "Gagal di ubah";
			    }
			 else
			    {
				        echo "Berhasil di ubah";
                helper_log("add", "Teller telah mengubah data nasabah ke sistem!");
                redirect("teller/tampil_nasabah");
			    }
		}

    public function ubahdataahliwaris()
  		{
        $id_ahliwarisz = $this->input->post('id_ahliwarisz');
        $no_rekening = $this->input->post('no_rekening');
  			$nama = $this->input->post('nama_edit');
        $alamat = $this->input->post('alamat_edit');
  			$no_tlp = $this->input->post('no_tlp_edit');
  			$pekerjaan = $this->input->post('pekerjaan_edit');
  			$hubungan = $this->input->post('hubungan_edit');

  	    $simpan = $this->Modul->proseseditahliwaris($id_ahliwarisz,$no_rekening,$nama ,$alamat,$no_tlp,
        $pekerjaan, $hubungan);
  	     if (!$simpan)
  			    {
  				        echo "Gagal di ubah";
  			    }
  			 else
  			    {
  				        echo "Berhasil di ubah";
                  helper_log("add", "Teller telah mengubah data ahliwaris ke sistem!");
                  redirect("teller/tampilAhli_waris");
  			    }
  		}

    public function ubahdatauser()
      {
        $id_datausers = $this->input->post('id_datausers');
        $no_rekening = $this->input->post('no_rekening');
        $status = $this->input->post('status_edit');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhiredit');
        $jumlah_tanggungan = $this->input->post('jumlah_tanggunganedit');
        $lama_usaha = $this->input->post('lama_usahaedit');
        $status_usaha = $this->input->post('status_usahaedit');
        $status_rumah = $this->input->post('status_rumahedit');
        $status_kios = $this->input->post('status_kiosedit');
        $alamat = $this->input->post('alamatedit');
        $no_tlp = $this->input->post('no_tlpedit');
        $alamat_kantor = $this->input->post('alamat_kantoredit');
        $no_tlp_kantor = $this->input->post('no_tlp_kantoredit');
        $alamat_usaha = $this->input->post('alamat_usahaedit');
        $no_tlp_usaha = $this->input->post('no_tlp_usahaedit');

        $simpan = $this->Modul->prosesedituser($id_datausers,$no_rekening ,$status,$pendidikan_terakhir,
        $jumlah_tanggungan, $lama_usaha, $status_usaha, $status_rumah, $status_kios, $alamat, $no_tlp, $alamat_kantor,
        $no_tlp_kantor, $alamat_usaha, $no_tlp_usaha );
         if (!$simpan)
            {
                  echo "Gagal di ubah";
            }
         else
            {
                  echo "Berhasil di ubah";
                  helper_log("add", "Teller telah mengubah data user ke sistem!");
                  redirect("teller/tampil_datauser");
            }
      }


    public function ubahdatapenghasilan()
  		{
        $id_penghasilans = $this->input->post('id_penghasilans');
        $no_rekening = $this->input->post('no_rekening');
  			$penghasilan_suami = $this->input->post('penghasilan_suamiedit');
        $penghasilan_istri = $this->input->post('penghasilan_istriedit');
  			$penghasilan_lainnya = $this->input->post('penghasilan_lainnyaedit');
  			$biaya_rmh_tangga = $this->input->post('biaya_rmh_tanggaedit');
  			$biaya_kb_anak = $this->input->post('biaya_kb_anakedit');
        $pengeluaran_pribadi = $this->input->post('pengeluaran_pribadiedit');
        $pembayaran_hutang = $this->input->post('pembayaran_hutangedit');
        $pengeluaran_lainnya = $this->input->post('pengeluaran_lainnyaedit');

  	    $simpan = $this->Modul->proseseditpenghasilan($id_penghasilans,$no_rekening,$penghasilan_suami,
        $penghasilan_istri ,$penghasilan_lainnya,$biaya_rmh_tangga,$biaya_kb_anak,
        $pengeluaran_pribadi, $pembayaran_hutang, $pengeluaran_lainnya);
  	     if (!$simpan)
  			    {
  				        echo "Gagal di ubah";
  			    }
  			 else
  			    {
  				        echo "Berhasil di ubah";
                  helper_log("add", "Teller telah mengubah data penghasilan ke sistem!");
                  redirect("teller/tampil_penghasilan");
  			    }
  		}

/////////////////////////////////////// tampil berdasarkan id \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

   public function edit_nasabah($id_nasabah)
   {
     $data['tampilnasabahbyid'] = $this->Modul->editnasabah($id_nasabah);
		 $this->load->view('edit_nasabah', $data);
   }

   public function edit_user($id_datauser)
   {
     $data['tampiluserbyid'] = $this->Modul->edituser($id_datauser);
    $this->load->view('edit_user', $data);
   }

   public function edit_penghasilan($id_penghasilan)
   {
     $data['tampilpenghasilanbyid'] = $this->Modul->editpenghasilan($id_penghasilan);
    $this->load->view('edit_penghasilan', $data);
   }

   public function edit_ahliwaris($id_ahliwaris)
   {
     $data['tampilawbyid'] = $this->Modul->editahliwaris($id_ahliwaris);
    $this->load->view('edit_ahliwaris', $data);
   }
//////////////////////////////////// Get id data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
   public function get_idnasabah($no_rekening)
   {
    $data['tampilnasabah'] = $this->Modul->get_idnasabah($no_rekening);
    $this->load->view('frm_datausers', $data);
   }

   public function get_idnasabahpenghasilan($no_rekening)
   {
    $data['tampilnasabah'] = $this->Modul->get_idnasabahpenghasilan($no_rekening);
    $this->load->view('frm_penghasilan', $data);
   }

   public function get_idpembiayaan($id_pembiayaans)
   {
    $data['tampiltransaksi'] = $this->Modul->get_idpembiayaan($id_pembiayaans);
    $this->load->view('frm_transaksi', $data);
   }

   public function get_idahliwaris($no_rekening)
   {
    $data['tampilnasabah'] = $this->Modul->get_idnasabahahliwaris($no_rekening);
    $this->load->view('frm_ahliwaris', $data);
   }

//////////////////////////////////// proses menghapus data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

   public function hapusnasabah($id_nasabah)
   {
     $hapus = $this->Modul->proseshapusnasabah($id_nasabah);
     if (!$hapus)
      {
       echo "Gagal dihapus";
     }
     else
     {

       redirect(base_url()."Teller/tampil_nasabah");
     }
   }

   public function hapususer($id_datauser)
   {
     $hapus = $this->Modul->proseshapususer($id_datauser);
     if (!$hapus)
      {
       echo "Gagal dihapus";
     }
     else
     {

       redirect(base_url()."Teller/tampil_datauser");
     }
   }

   public function hapuspenghasilan($id_penghasilan)
   {
     $hapus = $this->Modul->proseshapuspenghasilan($id_penghasilan);
     if (!$hapus)
      {
       echo "Gagal dihapus";
     }
     else
     {

       redirect(base_url()."Teller/tampil_penghasilan");
     }
   }


   public function hapusahliwaris($id_ahliwaris)
   {
     $hapus = $this->Modul->proseshapusahliwaris($id_ahliwaris);
     if (!$hapus)
      {
       echo "Gagal dihapus";
     }
     else
     {

       redirect(base_url()."Teller/tampilAhli_waris");
     }
   }



}
?>
