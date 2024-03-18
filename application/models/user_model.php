<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Veritabanına erişim için gerekli kütüphaneyi yükle
    }

    // Kullanıcı bilgilerini veritabanına ekleyen fonksiyon
    public function insert_user($username, $password, $email, $ceptel, $tcno) {
        $data = array(
            'kullanici_ad' => $username,
            'kullanici_sifre' => $password,
            'kullanici_email'=> $email,
            'kullanici_telefon'=> $ceptel,
            'kullanici_tcno'=> $tcno
        );

        // 'users' tablosuna veri ekle
        return $this->db->insert('kullanici', $data);
    }

    // Kullanıcı adı ve şifreyi kontrol eden fonksiyon
    public function check_login($username, $password) {
        // Veritabanından kullanıcıyı seç
        $this->db->select('*');
        $this->db->from('kullanici');
        $this->db->where('kullanici_ad', $username);
        $this->db->where('kullanici_sifre', $password);
        $query = $this->db->get();

        // Sorgu sonuçlarını kontrol et
        if ($query->num_rows() == 1) {
            return $query->row_array(); // Kullanıcı bulundu, verileri döndür
        } else {
            return false; // Kullanıcı bulunamadı
        }
    }
}
?>
