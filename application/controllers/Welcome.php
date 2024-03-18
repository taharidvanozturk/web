<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model'); // User_model sınıfını yükle
    }

    public function index() {
        $data = array(); // Veriyi içeren bir dizi oluştur

        // Form submit edildiğinde
        if ($this->input->post()) {
            $username = $this->input->post('username'); // Kullanıcı adını al
            $password = $this->input->post('password'); // Şifreyi al
            
            // Kullanıcı giriş kontrolü
            $user = $this->user_model->check_login($username, $password);
            if ($user) {
                // Giriş başarılı, oturumu başlat
                $this->session->set_userdata('user_id', $user->id);
                
                // Başka bir sayfaya yönlendirme yapılabilir, örneğin ana sayfaya yönlendirme:
                redirect(base_url());
            } else {
                // Giriş başarısız, hata mesajı gösterilebilir
                $data['error'] = 'Kullanıcı adı veya şifre yanlış.';
            }
        }

        // View dosyasını yükle
        $this->load->view('welcome_message', $data);
    }
}
?>
