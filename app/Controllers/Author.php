<?php

namespace App\Controllers;

use App\Models\AuthorModel;

class Author extends BaseController
{
    protected $author;

    function __construct()
    {
        $this->author = new AuthorModel();
    }

    public function index()
    {
        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_author') ? $this->request->getVar('page_author') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $author = $this->author->search($keyword);
        } else {
            $author = $this->author;
        }

        $data = [
            'author'   => $author->paginate(5, 'author'),
            'pager'         => $this->author->pager,
            'currentPage'   => $currentPage
        ];
        return view('author/index', $data);
    }

    public function create()
    {
        return view('author/create');
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

        $this->author->insert([
            'nama' => $this->request->getVar('nama'),
            'judul_komik' => $this->request->getVar('judul_komik'),
            'genre' => $this->request->getVar('genre'),
            'jadwal' => $this->request->getVar('jadwal'),
            'ringkasan' => $this->request->getVar('ringkasan')
        ]);
        session()->setFlashdata('message', 'Tambah Data Author Berhasil Yeay !');
        return redirect()->to('/author');
    }

    function edit($id)
    {
        $dataAuthor = $this->author->find($id);
        if (empty($dataAuthor)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Author Tidak ditemukan Nih !');
        }
        $data['author'] = $dataAuthor;
        return view('author/edit', $data);
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

        $this->author->update($id, [
            'nama' => $this->request->getVar('nama'),
            'judul_komik' => $this->request->getVar('judul_komik'),
            'genre' => $this->request->getVar('genre'),
            'jadwal' => $this->request->getVar('jadwal'),
            'ringkasan' => $this->request->getVar('ringkasan')
        ]);
        session()->setFlashdata('message', 'Update Data Author Berhasil Yeay !');
        return redirect()->to('/author');
    }

    function delete($id)
    {
        $dataAuthor = $this->author->find($id);
        if (empty($dataAuthor)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Author Tidak ditemukan Nih !');
        }
        $this->author->delete($id);
        session()->setFlashdata('message', 'Delete Data Author Berhasil Yeay !');
        return redirect()->to('/author');
    }
}