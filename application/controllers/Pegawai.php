<?php

  class pegawai extends CI_Controller{

    public function login()
    {
      $this->load->view('login');
    }
    public function register()
    {
      $this->load->view('register');
    }

      public function alert()
      {
          $this->load->view('alert');
      }

      public function cek_loginbyKiddy(){
          $username = $this->input->post('username');
          $password = $this->input->post('password');

            $logindata = $this->Modul->cek_pegawaibyKiddy($username,$password);
            if($logindata->num_rows() == 1){
                foreach($logindata->result() as $data){
                    if($data->username == $username AND $data->password == $password){
                        $dataSession = array(
                            'username' == $data->username,
                            'status' == $data->status,
                            'logged_in' == TRUE
                        );

                        $this->session->set_userdata($dataSession);

							
						if ($this->session->userdata('status')=='Teller'){
							helper_log("login", "Teller berhasil login di sistem!");
							redirect('Teller/tampilhalamandepan_teller');
						}
						if($this->session->userdata('status')=='Manager'){
							helper_log("login", "Manager berhasil login di sistem!");
							redirect('Manager/frm_manager');
						}
                    }
					else{
					
						redirect('pegawai/login');                
					}
            }
			}
          else{
              $this->session->set_flashdata('pesan', 'username atau password salah');
              redirect('pegawai/login');
          }
      }



    public function cek_login()
    {
      $data = array('username' => $this->input->post('username'),
                   'password' => $this->input->post('password')
                 );


     $hasil = $this->Modul->cek_pegawai($data);
     if($hasil->num_rows() == 1){
       foreach ($hasil->result() as $sess)
       {
         $sess_data['logged_in'] = 'Login Berhasil';
         $sess_data['username'] = $sess->username;
         $sess_data['status'] = $sess->status;
         $this->session->set_userdata($sess_data);
       }
     }

       if ($this->session->userdata('status')=='Teller'){
         helper_log("login", "Teller berhasil login di sistem!");
         redirect('Teller/tampilhalamandepan_teller');
       }
       elseif($this->session->userdata('status')=='Manager'){
         helper_log("login", "Manager berhasil login di sistem!");
         redirect('Manager/frm_manager');
       }
       else {

         $this->session->set_flashdata('pesan', 'username atau password salah');
         redirect('pegawai/alert');
       }


    }

    public function logout() {
      
       session_destroy();
       redirect('Pegawai/login');
     
    }

  }


 ?>
