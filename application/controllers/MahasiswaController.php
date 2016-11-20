<?php

/**
 * Created by PhpStorm.
 * User: adhibarfan
 * Date: 11/20/16
 * Time: 8:31 PM
 */

require APPPATH . '/libraries/REST_Controller.php';


class MahasiswaController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mahasiswa');
    }


    public function mahasiswa_get()
    {
        $mahasiswa = $this->Mahasiswa->getMahasiswa();
        return $this->response($mahasiswa, REST_Controller::HTTP_OK);
    }

    public function mahasiswa_post()
    {
        $mahasiswa = [
            'npm' => $this->post('npm'),
            'nama' => $this->post('nama'),
            'kelas' => $this->post('kelas')
        ];
        $this->Mahasiswa->saveMahasiswa($mahasiswa);
        $response = [
            'info'=>'data berhasil di simpan',
            'success'=>TRUE
        ];
        return $this->response($response, REST_Controller::HTTP_CREATED);
    }

    public function mahasiswa_put($npm)
    {
        $mahasiswa = [
            'nama' => $this->put('nama'),
            'kelas' => $this->put('kelas')
        ];

        $this->Mahasiswa->updateMahasiswa($npm, $mahasiswa);

        $response = [
            'info'=>'data berhasil di update',
            'success'=>TRUE
        ];
        return $this->response($response, REST_Controller::HTTP_OK);
    }

    public function mahasiswa_delete($npm)
    {


        $this->Mahasiswa->deleteMahasiswa($npm);
        $response = [
            'info'=>'data berhasil di hapus',
            'success'=>TRUE
        ];
        return $this->response($response, REST_Controller::HTTP_OK);
    }
}