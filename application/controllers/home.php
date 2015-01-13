<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->helper('captcha_helper');
        $this->load->model('registrasi_model');
        session_start();
        }
	public function index()
	{
                $this->load->view('header_view');
		$this->load->view('home_view');	
	}
        public function akteyayasan()
	{
                $_SESSION['page']="akteyayasan";
		$this->load->view('header_view');
		$this->load->view('akteyayasan_view');	
	}
        public function agama()
	{
                $_SESSION['page']="agama";
		$this->load->view('header_view');
		$this->load->view('agama_view');	
	}
        public function harta()
	{
                $_SESSION['page']="harta";
		$this->load->view('header_view');
		$this->load->view('harta_view');	
	}
        public function sekolah()
	{
                $_SESSION['page']="sekolah";
		$this->load->view('header_view');
		$this->load->view('sekolah_view');	
	}
        public function registrasi()
        {
                $data = $this->captcha();
                $this->load->view('header_view');
                $this->load->view('registrasi_view',$data);
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
        public function masuk()
        {
            $this->session->set_userdata('usernameadmin', false);
            if($this->input->post('daftar') )
            {
                redirect('member/registrasi');
            }
            else if($this->input->post('masuk') )
            {
                if(!$this->cekInjection() && $this->registrasi_model->login_member($this->input->post('username'),$this->input->post('password'))!=null )
                {
                    $user = $this->registrasi_model->login_member($this->input->post('username'),$this->input->post('password'));
                    $_SESSION['username']=$user->username;
                    $_SESSION['status']=$user->status;
                    $this->session->set_userdata('user',$user);
                    if($user->status=='admin')
                    {
                        $this->session->set_userdata('usernameadmin', true);                        
                    }
                    $this->index();
                }
                else
                  $this->index();  
            }
            else
            {
                redirect('home');
            }
        }
        public function cekInjection()
        {
            $user = $this->form_validation->regex_match($this->input->post('username'),'/ (^[\']) | \w*((\%27)|(\'))((\%6F)|o|(\%4F))((\%72)|r|(\%52))/ix');
            $pass = $this->form_validation->regex_match($this->input->post('password'),'/ (^[\']) | \w*((\%27)|(\'))((\%6F)|o|(\%4F))((\%72)|r|(\%52))/ix');
            if($user && $pass)
                return true;
            else
                return false;
        }
        public function keluar()
        {
            $_SESSION['username']='';
            $_SESSION['status']='';
            $this->session->set_userdata('usernameadmin', false);
            $this->session->set_userdata('user',false);
            $this->index();
        }
        public function profil()
        {
            $_SESSION['updatepass']=false;
            $_SESSION['password']=true;
            $_SESSION['passwordreq']=true;
            $_SESSION['passwordbaru']=true;
            $_SESSION['upload']='';
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
        public function menuprofil()
        {
            if($this->input->post('profile'))
            {
                $this->profil();
            }
            else if($this->input->post('signout'))
            {
                $this->keluar();            
            }
            else
            {
                $this->index();
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */