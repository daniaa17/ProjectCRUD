<?php

namespace App\Controllers;

use App\Models\WebnovelModel;

class Webnovel extends BaseController
{
    protected $webnovel;

    function __construct()
    {
        $this->webnovel = new WebnovelModel();
    }

    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_webnovel') ? $this->request->getVar('page_webnovel') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $web = $this->webnovel->search($keyword);
        } else {
            $web = $this->webnovel;
        }

        $data = [
            'webnovel'   => $this->webnovel->paginate(5, 'webnovel'),
            'pager'         => $this->webnovel->pager,
            'currentPage'   => $currentPage
        ];
        return view('WebNovel/index', $data);
    }

    public function create()
    {
        return view('webnovel/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul_komik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'ringkasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->webnovel->insert([
            'nama' => $this->request->getVar('nama'),
            'judul_komik' => $this->request->getVar('judul_komik'),
            'genre' => $this->request->getVar('genre'),
            'jadwal' => $this->request->getVar('jadwal'),
            'ringkasan' => $this->request->getVar('ringkasan')
        ]);
        session()->setFlashdata('message', 'Tambah Data Author Berhasil Yeay !');
        return redirect()->to('/webnovel');
    }

    function edit($id)
    {
        $dataWebnovel = $this->webnovel->find($id);
        if (empty($dataWebnovel)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Author Tidak ditemukan Nih !');
        }
        $data['webnovel'] = $dataWebnovel;
        return view('webnovel/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul_komik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'ringkasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->webnovel->update($id, [
            'nama' => $this->request->getVar('nama'),
            'judul_komik' => $this->request->getVar('judul_komik'),
            'genre' => $this->request->getVar('genre'),
            'jadwal' => $this->request->getVar('jadwal'),
            'ringkasan' => $this->request->getVar('ringkasan')
        ]);
        session()->setFlashdata('message', 'Update Data Author Berhasil Yeay !');
        return redirect()->to('/webnovel');
    }

    function delete($id)
    {
        $dataWebnovel = $this->webnovel->find($id);
        if (empty($dataWebnovel)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Author Tidak ditemukan Nih !');
        }
        $this->webnovel->delete($id);
        session()->setFlashdata('message', 'Delete Data Author Berhasil Yeay !');
        return redirect()->to('/webnovel');
    }
}