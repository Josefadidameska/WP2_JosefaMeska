<?php defined('BASEPATH') or exit("no direct script access allowed");

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('layouts/v-header', $data);
        $this->load->view('v-index', $data);
        $this->load->view('layouts/v-footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman About";
        $data['fnama'] = "Josefa Didameska";
        $data['enama'] = "Banjarnahor";
        $data['alamat'] = "Cluster vernonia residence blok DH 03";
        $data['t_lahir'] = "Medan";
        $data['olahraga'] = ['Travelling', 'Berenang', 'Shopping'];
        $this->load->view('layouts/v-header', $data);
        $this->load->view('v-about', $data);
        $this->load->view('layouts/v-footer', $data);
    }
}
