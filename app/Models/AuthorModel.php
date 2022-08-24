<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table = "author";
    protected $primaryKey = "id_author";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_author', 'nama', 'judul_komik', 'genre', 'jadwal', 'ringkasan'];

    public function search($keyword) 
    {
        // $builder = $this->table('author');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('author')->like('nama', $keyword)->orLike('genre', $keyword);
    }
}
