<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        
        public function __construct() {
        parent::__construct();
        $this->load->model('registrasi_model');
        $this->load->helper('captcha_helper');
        session_start();
        }
        public function email()
        {
            if($this->form_validation->valid_email($this->input->post('email')) && $this->uniqueemail())
            {
                $_SESSION['email']=true;
                return true;
            }
            else
            {
                $_SESSION['email']=false;
                return false;
            }  
        }
        public function uniqueemail()
        {
            return $this->form_validation->is_unique($this->input->post('email'), 'member.email'); 
        }
        public function validation()
        {
             $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|is_unique[member.username]');
             $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|alpha_numeric');
             $this->form_validation->set_rules('re-password', 're-Password', 'trim|required|xss_clean');
             $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
             $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|xss_clean');
             $this->form_validation->set_rules('tempat', 'Tempat', 'trim|required|xss_clean');
             $this->form_validation->set_rules('nomorhp', 'Nomor Handphone', 'trim|required|xss_clean');
             $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[member.email]');
             $this->form_validation->set_rules('negara', 'Negara', 'trim|required|xss_clean');
             return $this->form_validation->run();
        }
        public function username()
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|is_unique[member.username]|alpha_numeric');
            return $this->form_validation->run();
        }
        public function password()
        {
           if(($this->input->post('password')==$this->input->post('re-password')) )
           {
                $_SESSION['passwordreq']=true;
                return true;
           }
           else
           {
                $_SESSION['passwordreq']=false;
                return false;
           }
        }
        public function minpassword()
        {
            return $this->form_validation->min_length($this->input->post('password'), 6);    
        }
        public function passwordmatch()
        {
            return $this->form_validation->regex_match($this->input->post('password'),'/^[a-zA-Z0-9]/');
        }
        public function date()
        {
            $bulan = $this->input->post('bulan');
            $tanggal = $this->input->post('tanggal');
            $tahun = $this->input->post('tahun');
            if($bulan==2 || $bulan==4 || $bulan==6 || $bulan==9 || $bulan==11)
            {
                if($tanggal>30)
                {
                    return false;
                }
                else
                {
                    if($bulan!=2) return true;
                    else
                    {
                        if($tahun%4!=0 && $bulan>28)
                           return false;
                        else return true;
                    }
                }
            }
            else
            {
                return true;
            }
        }
        public function nomorhp()
        {
            $nomor = $this->form_validation->regex_match($this->input->post('nomorhp'),'/^[0-9]/');
            $_SESSION['hp']=$nomor;
            return $nomor;
        }
        public function cekCaptcha()
        {
            return ($this->input->post('captcha')==$_SESSION['captchaReg']);
        }
        public function validasi2()
        {
             $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
             $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|xss_clean');
             $this->form_validation->set_rules('tempat', 'Tempat', 'trim|required|xss_clean');
             $this->form_validation->set_rules('nomorhp', 'Nomor Handphone', 'trim|required|xss_clean');
             $this->form_validation->set_rules('negara', 'Negara', 'trim|required|xss_clean');
             $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required|xss_clean');
             return $this->form_validation->run();
        }
        function do_upload()
	{
                $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '400';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
                        //echo "error";
			$error = array('error' => $this->upload->display_errors());
                        $_SESSION['upload']=$error['error'];
			$this->profil();
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                        $_SESSION['upload']='';
                        $user = $this->registrasi_model->select_one_member($_SESSION['username']);
                        $user->foto = $data['upload_data']['file_name'];
                        $this->registrasi_model->update_member($user->id_member, $user);
			$this->profil();
		}
	}
        public function update()
        {
            $_SESSION['upload']='';
            if($this->input->post('submit'))
            {
                $this->nomorhp();
                $_SESSION['date']=$this->date();
                $user = $this->registrasi_model->select_one_member($_SESSION['username']);
                if($this->validasi2() && $this->date() && $this->nomorhp())
                {
                    $tanggallahir = $this->input->post('tahun') . '/' . $this->input->post('bulan') . '/' . $this->input->post('tanggal');
                    $user->nama =$this->input->post('nama');
                    $user->alamat =$this->input->post('alamat');
                    $user->tmptlahir =$this->input->post('tempat');
                    $user->tgllahir =$tanggallahir;
                    $user->hp =$this->input->post('nomorhp');
                    $user->negara =$this->input->post('negara');
                    $user->jenis_kelamin =$this->input->post('jenis_kelamin');
                    $this->registrasi_model->update_member($user->id_member, $user);
                    redirect(base_url()."home/profil");
                }
                else
                {
                    redirect(base_url()."home/profil");
                }
            }
            else if($this->input->post('unggah'))
            {
                $this->do_upload();
            }
            else
            {
                $_SESSION['password']=$this->minpassword();
                if($_SESSION['password']==true)
                $_SESSION['password']=$this->passwordmatch();
                $_SESSION['passwordbaru']=$this->cekpasswordlama();
                $this->password();
                $_SESSION['updatepass']=false;
                $user = $this->registrasi_model->select_one_member($_SESSION['username']);
                if($this->cekpasswordlama() && $this->password() && $this->passwordmatch() && $this->minpassword())
                {
                     $user->password_member = $this->input->post('password');
                     $this->registrasi_model->update_member($user->id_member, $user);
                     $_SESSION['password']=true;
                     $_SESSION['password']=true;
                     $_SESSION['passwordbaru']=true;
                     $_SESSION['updatepass']=true;
                     $this->profil();
                }
                else
                {
                    $this->profil();
                }
                    
            }
            
        }
        public function profil()
        {
            
            if($_SESSION['username']!='' && isset($_SESSION['username']) && isset($_SESSION['status']) && $_SESSION['status']!='' )
            {
                
                $user = $this->registrasi_model->select_one_member($_SESSION['username']);
                if($user==null)$this->index();
                else
                {
                    $this->load->view('header_view');
                    $this->load->view('profil_view',$user);
                    
                }
            }
            else
            {
                $this->index();
            }
        }
        public function cekpasswordlama()
        {
             $user = $this->registrasi_model->select_one_member($_SESSION['username']);
            return $user->password_member==$this->input->post('passwordlama');
        }
	public function registrasi()
        {
            $this->password();
            $this->nomorhp();
            $_SESSION['date']=$this->date();
            $_SESSION['usernamereq']=$this->username();
            $_SESSION['password']=$this->minpassword();
            if($_SESSION['password']==true)
            $_SESSION['password']=$this->passwordmatch();
            $_SESSION['kodepengaman']=$this->cekCaptcha();
            if(!$this->email() || !$this->validation() || !$this->password() || !$this->date() || !$this->nomorhp() || !$this->cekCaptcha() || !$this->input->post('checkRegistrasi'))
            {
                $_SESSION['messagereg']= false;
                $data = $this->captcha();
                $this->load->view('header_view');
                $this->load->view('registrasi_view',$data);
            }
            else
            {
                $tanggallahir = $this->input->post('tahun') . '/' . $this->input->post('bulan') . '/' . $this->input->post('tanggal');
                $_SESSION['ttl']=$tanggallahir;
                $dataMember   =   array(
                'id_member'   =>  $this->registrasi_model->generateMember(),
                'username'      =>  $this->input->post('username'),
                'password_member'            =>  $this->input->post('re-password'),
                'nama'      =>  $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' =>  $this->input->post('alamat'),
                'email' =>  $this->input->post('email'),
                'hp' =>  $this->input->post('nomorhp'),
                'negara' =>  $this->input->post('negara'),
                'tmptlahir' =>  $this->input->post('tempat'),
                'tgllahir' =>  $tanggallahir,
                'status' =>  'guest'
                );
                $this->registrasi_model->add_member($dataMember);
                $_SESSION['messagereg']= true;
                $_SESSION['captchaReg']  = '';
                $_SESSION['username'] = $this->input->post('username');
                $_SESSION['status'] = 'guest';
                $this->load->view('header_view');
                $this->load->view('home_view');
            }   
        }
        public function captcha()
        {
            $str            =   'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $random_world   =   str_shuffle($str);
            $random_world   =   substr($random_world, 0,6);
        
            $vals = array(
            'word'              => $random_world,
            'img_path'	 	=> './temp/captcha/',
            'img_url'	 	=> base_url().'temp/captcha/',
            'font_path'	 	=> base_url ().'resource/font/verdana.ttf',
            'img_width'	 	=> '150',
            'img_height' 	=> 50,
            'expiration' 	=> 60   //10 detik, 2 jam = 7200 detik (default)
            );
            $data =   create_captcha($vals);
            $_SESSION['captchaReg']  =   $vals['word'];
            return $data;
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */