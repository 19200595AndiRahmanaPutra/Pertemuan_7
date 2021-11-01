<?php
class Sepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       // $this->load->model('ModelSepatu');
    }
    public function index()
    {
        $this->load->view('forminput');
    }
    public function proses()
    {
        $this->load->model(['ModelSepatu']);
        $data =[
            'nama'=> $this->input->post('nama'),
            'nomor'=> $this->input->post('nomor'),
            'merk'=> $this->input->post('merk'),
            'ukuran'=> $this->input->post('ukuran'),
            'harga'=>$this->ModelSepatu->getHarga($this->input->post('merk'))
        ];
        //'harga' => $this->ModelSepatu->proses($this->input->post('merk'))

    $this->load->view('Formoutput', $data);  
    }
}