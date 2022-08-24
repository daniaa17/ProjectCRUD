<?php

namespace App\Models;

use CodeIgniter\Model;

class WebnovelModel extends Model
{
    protected $table = "webnovel";
    protected $primaryKey = "id_webnovel";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_webnovel', 'nama', 'judul_komik', 'genre', 'jadwal', 'ringkasan'];

    public function search($keyword) 
    {
        // $builder = $this->table('author');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('webnovel')->like('nama', $keyword)->orLike('genre', $keyword);
    }
}
