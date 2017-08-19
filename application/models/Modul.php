<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modul extends CI_Model {


  public function display_ahliwaris()
	{
			$query = "select * from tb_ahliwaris where status_ahliwaris = 1";
			return $this->db->query($query);
	}

  public function display_nasabah()
	{
			$query = "select * from tb_nasabah where status = 1";
			return $this->db->query($query);
	}

  public function display_transaksi()
	{
    $query = "SELECT A.*, B.total_pembiayaan FROM tb_datapembayaran_akad A INNER JOIN tb_pembiayaan B
    ON B.id_pembiayaans = A.id_pembiayaan";
    return $this->db->query($query);

	}

  public function display_transaksi_m()
  {
    $query = "SELECT A.*, B.total_pembiayaan FROM tb_datapembayaran_akad A INNER JOIN tb_pembiayaan B
    ON B.id_pembiayaans = A.id_pembiayaan";
    return $this->db->query($query);

  }

    public function joinakad($id_Akad)
    {
        $query = "SELECT tb_pembiayaan.id_pembiayaan, tb_pegawai.username, tb_nasabah.nama, tb_nasabah.nomor_identitas,
        tb_pembiayaan.jumlah_permohonan_pembiayaan, tb_pembiayaan.total_pembiayaan, tb_pembiayaan.jangka_waktu, tb_pembiayaan.jatuh_tempo,
        tb_pembiayaan.jaminan, tb_pembiayaan.nomor_jaminan FROM tb_pembiayaan JOIN tb_pegawai ON tb_pembiayaan.id_pegawai = tb_pegawai.id_pegawai
        JOIN tb_nasabah ON tb_pembiayaan.no_rekening = tb_nasabah.no_rekening WHERE tb_pembiayaan.id_pembiayaans = '$id_Akad'";
        return $this->db->query($query);
    }


  public function display_transaksi_detail()
  {
    $query = "select * from tb_datapembayaran_akad";
    return $this->db->query($query);
  }

  public function display_audit()
	{
			$query = "select * from tb_audit";
			return $this->db->query($query);
	}

  public function display_jurnal()
  {
      $query = "select * from tb_jurnal";
      return $this->db->query($query);
  }


  public function display_pegawai()
	{
			$query = "select * from tb_pegawai";
			return $this->db->query($query);
	}

    public function display_pegawaipembiayaan()
    {
        $query = "select * from tb_pegawai";
        return $this->db->query($query)->result();
    }


    public function display_nasabah_m()
  {
      $query = "select * from tb_nasabah where status = 1";
      return $this->db->query($query);
  }


  public function display_ahliwaris_m()
	{
			$query = "select * from tb_ahliwaris";
			return $this->db->query($query);
	}

  public function display_penghasilan()
	{
			$query = "select * from tb_penghasilan where status = 1";
			return $this->db->query($query);
	}

  public function display_penghasilan_m()
	{
			$query = "select * from tb_penghasilan";
			return $this->db->query($query);
	}

  public function display_pembiayaan()
  {
      $query = "select * from tb_pembiayaan";
      return $this->db->query($query);
  }

  public function display_pembiayaan_transaksi()
  {
    $query = "select * from tb_pembiayaan";
    return $this->db->query($query);

  }

  public function display_pengambilankeputusan_akad()
  {
    $query = "select * from tb_pembiayaan";
    return $this->db->query($query);
  }

  public function display_penolakanpembiayaan_m()
  {
      $query = "select * from tb_pembiayaan where status_pembiayaan ='tolak'";
      return $this->db->query($query);
  }

  public function display_pembiayaan_m()
  {
      $query = "select * from tb_pembiayaan where status_pembiayaan ='setuju'";
      return $this->db->query($query);
  }

  public function display_user()
  {
    $query = "select * from tb_datauser where status_user = 1";
    return $this->db->query($query);
  }


  public function editnasabah($id_nasabah)
  {
    $query = "select * from tb_nasabah where id_nasabah = $id_nasabah";
		return $this->db->query($query);
  }

    public function editpegawai($id_pegawai)
    {
        $query = "select * from tb_pegawai where id_pegawai = $id_pegawai";
        return $this->db->query($query);
    }

  public function editpenghasilan($id_penghasilan)
  {
    $query = "select * from tb_penghasilan where id_penghasilan = $id_penghasilan";
		return $this->db->query($query);
  }

  public function editahliwaris($id_ahliwaris)
  {
    $query = "select * from tb_ahliwaris where id_ahliwaris = $id_ahliwaris";
    return $this->db->query($query);
  }

  public function edituser($id_datauser)
  {
    $query = "select * from tb_datauser where id_datauser = $id_datauser";
    return $this->db->query($query);
  }
///////////////////////////////////// get id \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function get_idnasabah($no_rekening)
  {
    $query = "select * from tb_nasabah where no_rekening = $no_rekening";
		return $this->db->query($query);
  }

  public function get_idnasabahpenghasilan($no_rekening)
  {
    $query = "select * from tb_nasabah where no_rekening = $no_rekening";
		return $this->db->query($query);
  }

  public function get_idnasabahahliwaris($no_rekening)
  {
    $query = "select * from tb_nasabah where no_rekening = $no_rekening";
		return $this->db->query($query);
  }

  public function get_idpembiayaan($id_pembiayaans)
  {
    $query = "select * from tb_pembiayaan where id_pembiayaans = '$id_pembiayaans'";
    return $this->db->query($query);
  }


//////////////////////// proses hapus data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

  public function proseshapusnasabah($id_nasabah)
		{
      $data = array (
				'status' => 0
				);

			return $this->db->update('tb_nasabah', $data, array('id_nasabah' => $id_nasabah));
		}

    public function proseshapususer($id_datauser)
  	{
      $data = array (
  			'status_user' => 0
  			);

  		return $this->db->update('tb_datauser', $data, array('id_datauser' => $id_datauser));
    }

    public function proseshapuspenghasilan($id_penghasilan)
    {
      $data = array (
    	 'status' => 0
    	 );

    	return $this->db->update('tb_penghasilan', $data, array('id_penghasilan' => $id_penghasilan));
    }

    public function proseshapusahliwaris($id_ahliwaris)
    {
      $data = array (
    	 'status_ahliwaris' => 0
    	 );

    	return $this->db->update('tb_ahliwaris', $data, array('id_ahliwaris' => $id_ahliwaris));
    }

///////////////////////// proses pengambilan keputusan akad \\\\\\\\\\\\\\\\\\\\

    public function prosespersetujuanakad($id_pembiayaan)
    {
      $data = array (
    	 'status_pembiayaan' => setuju
    	 );

    	return $this->db->update('tb_pembiayaan', $data, array('id_pembiayaan' => $id_pembiayaan));
    }

    public function prosespenolakanakad($id_pembiayaan)
    {
      $data = array (
    	 'status_pembiayaan' => tolak
    	 );

    	return $this->db->update('tb_pembiayaan', $data, array('id_pembiayaan' => $id_pembiayaan));
    }

///////////////////////// proses edit data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function proseseditnasabah($no_rekening, $nama, $tempat_lahir,
     $tempat_tanggal_lahir, $pekerjaan, $nomor_identitas, $saldo)
		{
			$data = array (
        'no_rekening' => $no_rekening,
				'nama' => $nama,
        'tempat_lahir' => $tempat_lahir,
				'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
				'pekerjaan' => $pekerjaan,
        'nomor_identitas' => $nomor_identitas,
        'saldo' => $saldo
				);

			return $this->db->update('tb_nasabah', $data, array('no_rekening' => $no_rekening));

		}

    public function prosesedituser($id_datausers,$no_rekening ,$status,$pendidikan_terakhir,
    $jumlah_tanggungan, $lama_usaha, $status_usaha, $status_rumah, $status_kios, $alamat, $no_tlp, $alamat_kantor,
    $no_tlp_kantor, $alamat_usaha, $no_tlp_usaha )
    {
      $data = array (
        'id_datausers' => $id_datausers,
        'no_rekening' => $no_rekening,
        'status' => $status,
        'pendidikan_terakhir' => $pendidikan_terakhir,
        'jumlah_tanggungan' => $jumlah_tanggungan,
        'lama_usaha' => $lama_usaha,
        'status_usaha' => $status_usaha,
        'status_rumah' => $status_rumah,
        'status_kios' => $status_kios,
        'alamat' => $alamat,
        'no_tlp' => $no_tlp,
        'alamat_kantor' => $alamat_kantor,
        'no_tlp_kantor' => $no_tlp_kantor,
        'alamat_usaha' => $alamat_usaha,
        'no_tlp_usaha' => $no_tlp_usaha
        );

      return $this->db->update('tb_datauser', $data, array('id_datausers' => $id_datausers));

    }


    public function proseseditahliwaris($id_ahliwarisz,$no_rekening,$nama, $alamat, $no_tlp, $pekerjaan, $hubungan)
		{
			$data = array (
        'id_ahliwarisz' => $id_ahliwarisz,
        'no_rekening' => $no_rekening,
        'nama' => $nama,
				'alamat' => $alamat,
				'no_tlp' => $no_tlp,
				'pekerjaan' => $pekerjaan,
        'hubungan' => $hubungan
				);

			return $this->db->update('tb_ahliwaris', $data, array('id_ahliwarisz' => $id_ahliwarisz));

		}

    public function proseseditpegawai($id_pegawai,$username, $password, $alamat, $no_tlp)
    {
        $data = array (
            'id_pegawai' => $id_pegawai,
            'username' => $username,
            'password' => $password,
            'alamat' => $alamat,
            'no_tlp' => $no_tlp

        );

        return $this->db->update('tb_pegawai', $data, array('id_pegawai' => $id_pegawai));

    }

    public function proseseditpenghasilan($id_penghasilans,$no_rekening, $penghasilan_suami, $penghasilan_istri,
     $penghasilan_lainnya, $biaya_rmh_tangga, $biaya_kb_anak, $pengeluaran_pribadi, $pembayaran_hutang, $pengeluaran_lainnya)
		{
			$data = array (
        'id_penghasilans' => $id_penghasilans,
				'no_rekening' => $no_rekening,
        'penghasilan_suami' => $penghasilan_suami,
				'penghasilan_istri' => $penghasilan_istri,
				'penghasilan_lainnya' => $penghasilan_lainnya,
        'biaya_rmh_tangga' => $biaya_rmh_tangga,
        'biaya_kb_anak' => $biaya_kb_anak,
        'pengeluaran_pribadi' => $pengeluaran_pribadi,
				'pembayaran_hutang' => $pembayaran_hutang,
        'pengeluaran_lainnya' => $pengeluaran_lainnya
				);

			return $this->db->update('tb_penghasilan', $data, array('id_penghasilans' => $id_penghasilans));

		}

  public function cek_pegawai($data)
   {
     $query = $this->db->get_where('tb_pegawai',$data);
     return $query;
   }

    public function cek_pegawaibyKiddy($username, $password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        return $this->db->get('tb_pegawai');
    }

//////////////////////////// proses tambah data \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function addAdmin($id_pegawai,$username,$password,$alamat,$no_tlp,$status)
    {
      $q = "insert into tb_pegawai (id_pegawai,username,password,alamat,no_tlp,status)
      values ('$id_pegawai','$username','$password','$alamat','$no_tlp', '$status')";
      return $this->db->query($q);
    }

    public function add_nasabah($no_rekening,$nama,$tempat_lahir,$tempat_tanggal_lahir,$pekerjaan,
    $nomor_identitas,$saldo)
    {
      $q = "insert into tb_nasabah (no_rekening,nama,tempat_lahir,tempat_tanggal_lahir,pekerjaan,
      nomor_identitas,saldo) values ('$no_rekening','$nama','$tempat_lahir','$tempat_tanggal_lahir',
      '$pekerjaan', '$nomor_identitas', '$saldo')";
      return $this->db->query($q);
    }

    public function tambah_ahliwaris($id_ahliwarisz,$no_rekening,$nama,$alamat,$no_tlp,$pekerjaan,$hubungan)
		{
			$data = array(
        'id_ahliwarisz' => $id_ahliwarisz,
        'no_rekening' => $no_rekening,
				'nama' => $nama,
				'alamat' => $alamat,
        'no_tlp' => $no_tlp,
        'pekerjaan' => $pekerjaan,
        'hubungan' => $hubungan
				);
			$query = $this->db->insert('tb_ahliwaris', $data);
			return $query;
		}

    public function tambah_user($id_datausers,$no_rekening,$status,$pendidikan,$jml_tanggungan,
    $lama_usaha,$status_usaha,$status_rumah,$status_kios,$alamat,$no_tlp,$alamat_kantor,$no_tlp_kantor,
    $alamat_usaha,$no_tlp_usaha)
		{
			$data = array(
        'id_datausers' => $id_datausers,
        'no_rekening' => $no_rekening,
        'status' => $status,
				'pendidikan_terakhir' => $pendidikan,
        'jumlah_tanggungan' => $jml_tanggungan,
        'lama_usaha' => $lama_usaha,
        'status_usaha' => $status_usaha,
				'status_rumah' => $status_rumah,

        'status_kios' => $status_kios,
        'alamat' => $alamat,
        'no_tlp' => $no_tlp,
        'alamat_kantor' => $alamat_kantor,
        'no_tlp_kantor' => $no_tlp_kantor,
        'alamat_usaha' => $alamat_usaha,
        'no_tlp_usaha' => $no_tlp_usaha
				);
			$query = $this->db->insert('tb_datauser', $data);
			return $query;
    }

    public function tambah_penghasilan($id_penghasilans,$no_rekening,$penghasilan_suami, $penghasilan_istri, $penghasilan_lainnya, $biaya_rmh_tangga,
    $biaya_kb_anak, $pengeluaran_pribadi, $pembayaran_hutang,  $pengeluaran_lainnya)
    {
      $data = array(
        'id_penghasilans' => $id_penghasilans,
        'no_rekening' => $no_rekening,
        'penghasilan_suami' => $penghasilan_suami,
        'penghasilan_istri' => $penghasilan_istri,
        'penghasilan_lainnya' => $penghasilan_lainnya,
        'biaya_rmh_tangga' => $biaya_rmh_tangga,
        'biaya_kb_anak' => $biaya_kb_anak,
        'pengeluaran_pribadi' => $pengeluaran_pribadi,
        'pembayaran_hutang' => $pembayaran_hutang,
        'pengeluaran_lainnya' => $pengeluaran_lainnya
      );
      $query = $this->db->insert('tb_penghasilan', $data);
      return $query;

    }

    public function tambah_pembiayaan($id_pegawai,$no_rekening,$id_pembiayaans, $jumlah_permohonan_pembiayaan, $digunakan_untuk, $jangka_waktu,
    $sumber_pelunasan,$tanggal_pengajuan, $rencana_pembayaran_per,
    $margin, $margin_nasabah, $angsuran_pokok, $total_pembiayaan, $jaminan, $nomor_jaminan,
    $status_pembiayaan )
    {

      $data = array(
          'id_pegawai' => $id_pegawai,
        'no_rekening' => $no_rekening,
        'id_pembiayaans' => $id_pembiayaans,
        'jumlah_permohonan_pembiayaan' => $jumlah_permohonan_pembiayaan,
        'digunakan_untuk' => $digunakan_untuk,
        'jangka_waktu' => $jangka_waktu,
        'sumber_pelunasan' => $sumber_pelunasan,
        'tanggal_pengajuan' => $tanggal_pengajuan,
        'rencana_pembayaran_per' => $rencana_pembayaran_per,
        'margin' => $margin,
        'margin_nasabah' => $margin_nasabah,
        'angsuran_pokok' => $angsuran_pokok,
        'total_pembiayaan' => $total_pembiayaan,
        'jaminan' => $jaminan,
          'nomor_jaminan' => $nomor_jaminan,
        'status_pembiayaan' => $status_pembiayaan
      );

//        $query = "insert into tb_pembiayaan('id_pegawai','no_rekening', 'id_pembiayaans', 'jumlah_permohonan_pembiayaan', 'digunakan_untuk','jangka_waktu', 'sumber_pelunasan', 'tanggal_pengajuan', 'jatuh_tempo', 'rencana_pembayaran_per', 'margin', 'margin_nasabah',
//                  'angsuran_pokok', 'total_pembiayaan', 'jaminan', 'nomor_jaminan', 'status_pembiayaan') values ($id_pegawai, $no_rekening, $id_pembiayaans,$jumlah_permohonan_pembiayaan,
//                  $digunakan_untuk,$jangka_waktu,$sumber_pelunasan,$tanggal_pengajuan,$jatuh_tempo,$rencana_pembayaran_per,$margin,$margin_nasabah,
//                   $angsuran_pokok, $total_pembiayaan, $jaminan, $nomor_jaminan, $status_pembiayaan)";
   $query = $this->db->insert('tb_pembiayaan', $data);
      return $query;
    }

    public function tambah_transaksi($idc_pembayaran, $id_pembiayaan ,$no_rekening, $angsuran_pokok, $angsuran_ke, $tanggal)
    {

      $data = array(
        'idc_pembayaran' => $idc_pembayaran,
        'id_pembiayaan' => $id_pembiayaan,
        'no_rekening' => $no_rekening,
        'angsuran_pokok' => $angsuran_pokok,
        'angsuran_ke' => $angsuran_ke,
        'tanggal' => $tanggal

      );
      $query = $this->db->insert('tb_datapembayaran_akad', $data);
      return $query;


    }
  }
?>
