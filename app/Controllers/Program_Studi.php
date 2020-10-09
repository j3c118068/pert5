<?php

    namespace App\Controllers;

    use App\Models\Program_Studi_Model;

    class Program_Studi extends BaseController {

        public function __construct() {
            // parent::__construct();
            $db = \Config\Database::connect();
            $prodi = new Program_Studi_Model($db);
            //$this->prodi = new Program_Studi_Model();
        }

        public function index() {
            $db = \Config\Database::connect();
            
            $prodi = new Program_Studi_Model($db);

            //$data['dataProdi'] = $prodi->get()->getResult();
            $data['dataProdi'] = $db->table('prodi')->get()->getResult();
            //var_dump($data);die;

            echo view('header_v');
            echo view('program_studi_v', $data);
            echo view('footer_v');
        }

        public function add()
        {
            echo view('header_v');
            echo view('program_studi_form_v');
            echo view('footer_v');
        }

        public function save()
        {
            $data = [
                'kode_prodi' => $this->request->getPost('kode'), 
                'nama_prodi' => $this->request->getPost('nama'),
                'ketua_prodi' => $this->request->getPost('ketua'),

            ];

           $response = $this->$prodi->insert($data);

           if($response) {
               //$this->session->set_flashdata('name', 'value');
               $session->setFlashdata('status', ['status'-> $response, 'message' -> 'databerhashdash']);
           }
           else{
            $session->setFlashdata('status', 'dataggl');
           }

           
           redirect('Program_Studi');
           
        }



    }

?>