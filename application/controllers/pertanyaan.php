<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {
         public function __construct() {
        parent::__construct();
        $this->load->model('pertanyaan_model');
        $this->load->model('registrasi_model');
        $this->load->helper('date');
        session_start();
        }
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
	public function index()
	{
                $_SESSION['page'] = 'kosong';
                if(isset ($_SESSION['username']) && $_SESSION['username']!='')
                {
                    $query = $this->pertanyaan_model->pertanyaan_status(1);
                    $data   =   array();
                    if($query)
                    {
                        $data['rows']   =   $query;   
                    }
                    $this->load->view('header_view');
                    $this->load->view('pertanyaan_view',$data);
                }
                else
                {
                    $data = $this->captcha();
                    $this->load->view('header_view');
                    $this->load->view('registrasi_view',$data);
                }
	}
        public function tanya()
        {
            $datestring = "%Y/%m/%d";
            $_SESSION['page'] = 'kosong';
            if(isset ($_SESSION['username']) && $_SESSION['username']!='')
            {
                if($_SESSION['status']=='guest') 
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
                    else
                    {
                             $dataMember   =   array(
                            'id_pertanyaan'   =>  $this->pertanyaan_model->generatePertanyaan(),
                            'id_member'      =>  $this->session->userdata('user')->id_member,
                            'status'  =>  0,
                            'pertanyaan'      =>  $this->input->post('pertanyaan'),
                            'jawaban' => '',
                            'tanggal' =>  mdate($datestring),
                            );
                            if($this->input->post('pertanyaan')=='')
                            {
                                $this->index();
                            }
                            else
                            {
                                $this->pertanyaan_model->add_pertanyaan($dataMember);
                                $this->detail();
                            }
                    }
            }
            else
            {
                $data = $this->captcha();
                $this->load->view('header_view');
                $this->load->view('registrasi_view',$data);
            }
        }
        public function detail()
        {
            $_SESSION['page'] = 'kosong';
            if(isset ($_SESSION['username']) && $_SESSION['username']!='')
                {
                    if($_SESSION['status']=='guest') 
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
                    else
                    {
                        $query = $this->pertanyaan_model->pertanyaan_member($this->session->userdata('user')->id_member);
                        $data   =   array();
                        if($query)
                        {
                            $data['rows']   =   $query;   
                        }
                        $data['user'] = $this->session->userdata('user')->nama;
                        $this->load->view('header_view');
                        $this->load->view('pertanyaan_detail_view',$data);
                    }
                }
                else
                {
                    $data = $this->captcha();
                    $this->load->view('header_view');
                    $this->load->view('registrasi_view',$data);
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