<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministratorPA extends CI_Controller {

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
        $this->load->model('pertanyaan_model');
        $this->load->model('tugas_model');
        $this->load->model('sekolah_model');
        session_start();
        }
	public function index()
	{
                if( $this->session->userdata('usernameadmin'))
                {
                    $this->member();
                }
                else
                {
                    if(isset($_SESSION['status']) && $_SESSION['status']=='admin')
                    $_SESSION['username']='';
                    
                    $this->load->view('admin_login_view');
                }
	}
        public function member()
        {
            
            if( $this->session->userdata('usernameadmin'))
            {
                
                $data = array();                
                if(@$_GET['status']=='semua' || @$_GET['status']=='' ) @$_GET['status'] = "admin' or status = 'member' or status = 'guest";
                $query = $this->registrasi_model->select_member_query(@$_GET['status'], @$_GET['search']);
                $data   =   array();
                if($query)
                {
                    $data['rows']   =   $query;   
                }
                $data['status'] = @$_GET['status'];
                $data['search'] = @$_GET['search'];
                $this->load->view('admin_header_view');
                $this->load->view('admin_member_view',$data);
                $this->load->view('admin_footer_view');
            }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        
        public function deletetugas()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                 $id_tugas = $this->security->xss_clean($this->uri->segment(3));
                 $user = $this->tugas_model->delete_tugas($id_tugas);              
                 $this->tugas();
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        
        public function createtugas()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $this->load->view('admin_header_view');
                $this->load->view('admin_create_tugas_view');
                $this->load->view('admin_footer_view');
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        
        public function docreatetugas()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                if($this->input->post('create'))
                {                    
                    $tugas = array(
                            'id_tugas'   =>  '',
                            'username'   =>  $this->session->userdata('user')->username,
                            'artikel' => $this->input->post('artikel'),
                            'subkategori' => $this->input->post('subkategori'),
                            'lastedit' => date("Y-m-d H:i:s"),
                            'judul' => $this->input->post('judul'),
                            'status' => $this->input->post('status'),
                            'datecreate' => date("Y-m-d H:i:s"),
                            'kategori' => $this->input->post('kategori'),
                            'news' => $this->input->post('news'),
                           );
                    $this->tugas_model->add_tugas($tugas);                    
                    redirect(base_url()."administratorPA/tugas");
                }
                else
                {
                    $this->tugas();
                }
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function updatetugas()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                if($this->input->post('update'))
                {
                    $tugas = $this->tugas_model->select_one_tugas($this->input->post('id_tugas'));     
                    $tugas->artikel = $this->input->post('artikel');
                    $tugas->subkategori = $this->input->post('subkategori');
                    $tugas->lastedit = date("Y-m-d H:i:s");
                    $tugas->judul = $this->input->post('judul');
                    $tugas->status = $this->input->post('status');
                    $tugas->news = $this->input->post('news');
					$tugas->kategori = $this->input->post('kategori');
                    $this->tugas_model->update_tugas($tugas->id_tugas, $tugas);
                    
                    redirect(base_url()."administratorPA/detailtugas/".$tugas->id_tugas);
                }
                else
                {
                    $this->tugas();
                }
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');	
            }
        }
        public function detailtugas()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $id_tugas = $this->security->xss_clean($this->uri->segment(3));
                $tugas = $this->tugas_model->select_one_tugas($id_tugas);
                if($tugas==null)$this->tugas();
                else
                {
                     
                     $this->load->view('admin_header_view');
                     $this->load->view('admin_detail_tugas_view',$tugas);
                     $this->load->view('admin_footer_view');
                }
            }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');	
            }
        }
        public function tugas()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $data = array();
                $query = $this->tugas_model->select_tugas();
                $data   =   array();
                if($query)
                {
                    $data['rows']   =   $query;   
                }

                $this->load->view('admin_header_view');
                $this->load->view('admin_tugas_view',$data);
                $this->load->view('admin_footer_view');
                }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');	
            }
        }
        
        public function jawaban()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $data = array();
                $query = $this->sekolah_model->select_jawab();
                $data   =   array();
                if($query)
                {
                    $data['rows']   =   $query;   
                }

                $this->load->view('admin_header_view');
                $this->load->view('admin_jawab_view',$data);
                $this->load->view('admin_footer_view');
                }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');	
            }
        }
        
        public function detailjawaban()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $id_jawaban = $this->security->xss_clean($this->uri->segment(3));
                $jawaban = $this->sekolah_model->select_one_jawaban($id_jawaban);
                if($jawaban==null)$this->jawaban();
                else
                {                     
                     $this->load->view('admin_header_view');
                     $this->load->view('admin_detail_jawab_view',$jawaban);
                     $this->load->view('admin_footer_view');
                }
            }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');	
            }
        }
        
        public function updatejawaban()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                if($this->input->post('update'))
                {
                    
                }
                else
                {
                    $this->jawaban();
                }
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');	
            }
        }
        
        public function deletejawaban()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                 $id_jawaban = $this->security->xss_clean($this->uri->segment(3));
                 $jawaban = $this->sekolah_model->delete_jawab($id_jawaban);              
                 $this->jawaban();
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function login()
        {
            $this->session->set_userdata('usernameadmin', false);
            if($this->input->post('masuk') )
            {
                if(!$this->cekInjection() && $this->registrasi_model->login_member($this->input->post('username'),$this->input->post('password'))!=null )
                {
                    $user = $this->registrasi_model->login_member($this->input->post('username'),$this->input->post('password'));                    
                    if($user->status=='admin')
                    {
                        $_SESSION['username']=$user->username;
                        $_SESSION['status']=$user->status;
                        $this->session->set_userdata('user',$user);
                        $this->session->set_userdata('usernameadmin', true);                          
                    }  
                    $this->index();
                }
                else
                  $this->index();  
            }
            else
            {
                $this->index();
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
        
        public function guestAdmin()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                   $data = array();
                $query = $this->registrasi_model->select_member_status('guest');
                $data   =   array();
                if($query)
                {
                    $data['rows']   =   $query;   
                }
                /*
                $login   =   $this->session->userdata('schematics_admin');
                if($login == true)
                    $this->display('NLC/nlc_team_view', $data);
                else
                    redirect('administrator');
                 * 
                 */
                $this->load->view('admin_header_view');
                $this->load->view('admin_member_view',$data);
                $this->load->view('admin_footer_view');
                }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        
        public function guest()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                   $data = array();
                $query = $this->registrasi_model->select_member_status('guest');
                $data   =   array();
                if($query)
                {
                    $data['rows']   =   $query;   
                }
                /*
                $login   =   $this->session->userdata('schematics_admin');
                if($login == true)
                    $this->display('NLC/nlc_team_view', $data);
                else
                    redirect('administrator');
                 * 
                 */
                $this->load->view('header_view');
                $this->load->view('guest_view',$data);
                }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
           
        }
        
        public function detailguestAdmin()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $username = $this->security->xss_clean($this->uri->segment(3));
                $user = $this->registrasi_model->select_one_member($username);
                if($user==null)$this->index();
                else
                {
                     
                     $this->load->view('admin_header_view');
                     $this->load->view('admin_member_detail_view',$user);
                     $this->load->view('admin_footer_view');
                }
            }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        
        public function detailmember()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $username = $this->security->xss_clean($this->uri->segment(3));
                $user = $this->registrasi_model->select_one_member($username);
                if($user==null)$this->index();
                else
                {
                     
                     $this->load->view('admin_header_view');
                     $this->load->view('admin_member_detail_view',$user);
                     $this->load->view('admin_footer_view');
                }
            }
            else
            {
                  $_SESSION['username']='';
                  $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function updatedetailmember()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                if($this->input->post('update'))
                {
                    $user = $this->registrasi_model->select_one_member($this->input->post('username'));               
                    $tanggallahir = $this->input->post('tahun') . '/' . $this->input->post('bulan') . '/' . $this->input->post('tanggal');
                    $user->nama =$this->input->post('nama');
                    $user->alamat =$this->input->post('alamat');
                    $user->tmptlahir =$this->input->post('tempat');
                    $user->tgllahir =$tanggallahir;
                    $user->hp =$this->input->post('nomorhp');
                    $user->negara =$this->input->post('negara');
                    $user->jenis_kelamin =$this->input->post('jenis_kelamin');
                    $user->status = $this->input->post('status');
                    $this->registrasi_model->update_member($user->id_member, $user);   
                    redirect(base_url()."administratorPA/detailmember/".$user->username);
                }
                else
                {
                    $this->member();
                }
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        
        public function deletemember()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                 $id_member = $this->security->xss_clean($this->uri->segment(3));
                 $user = $this->registrasi_model->delete_member($id_member);              
                 $this->member();
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function detailguest()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $username = $this->security->xss_clean($this->uri->segment(3));
                $user = $this->registrasi_model->select_one_member($username);
                if($user==null)$this->index();
                else
                {
                     $this->load->view('header_view');
                     $this->load->view('guest_detail_view',$user);
                }
            }
            else
            {
                $_SESSION['username']='';
                $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function do_member()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $user = $this->registrasi_model->select_one_member($this->input->post('username_hidden'));
                $user->status = 'member';
                $this->registrasi_model->update_member($user->id_member, $user);
                redirect('administratorPA/detailguest/'.$user->username);
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function pertanyaan()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $query = $this->pertanyaan_model->pertanyaan();
                $data   =   array();
                if($query)
                {
                    $data['rows']   =   $query;   
                }           
                $this->load->view('header_view');
                $this->load->view('admin_pertanyaan_view',$data);
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function jawab()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $id_pertanyaan = $this->security->xss_clean($this->uri->segment(3));
                $query = $this->pertanyaan_model->pertanyaan_id($id_pertanyaan);
                $nama = $this->registrasi_model->select_1_member($query->ID_Member);
                if($query==null || $nama==null)$this->index();
                else
                {
                    $data   =   array();
                    if($query)
                    {
                        $data['row']   =   $query;   
                    }
                    $data['nama'] = $nama->nama;
                     $this->load->view('header_view');
                     $this->load->view('admin_detail_pertanyaan_view',$data);
                }
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function do_jawab()
        {
            if( $this->session->userdata('usernameadmin') && $this->input->post('jawab') )
            {
               $idpertanyaan = $this->input->post('hidden');;
               $query = $this->pertanyaan_model->pertanyaan_id($idpertanyaan);
               $query->jawaban = $this->input->post('jawaban');
               $this->pertanyaan_model->update_pertanyaan($query->ID_Pertanyaan, $query);
               $id_pertanyaan = $idpertanyaan;
                $query = $this->pertanyaan_model->pertanyaan_id($id_pertanyaan);
                $nama = $this->registrasi_model->select_1_member($query->ID_Member);
                if($query==null || $nama==null)$this->index();
                else
                {
                    $data   =   array();
                    if($query)
                    {
                        $data['row']   =   $query;   
                    }
                    $data['nama'] = $nama->nama;
                     $this->load->view('header_view');
                     $this->load->view('admin_detail_pertanyaan_view',$data);
                }
            }
            else
            {
                 $_SESSION['username']='';
                 $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
        public function ubah_status()
        {
            if( $this->session->userdata('usernameadmin'))
            {
                $idpertanyaan = $this->security->xss_clean($this->uri->segment(3));
                $query = $this->pertanyaan_model->pertanyaan_id($idpertanyaan);
                if($query->status == 0) $query->status = 1;
                else $query->status = 0;
                $this->pertanyaan_model->update_status($idpertanyaan,$query->status);
                $this->pertanyaan();
            }
            else
            {
                 $_SESSION['username']='';
                $_SESSION['page']="";
                  $this->load->view('header_view');
                  $this->load->view('error_403_view');
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */