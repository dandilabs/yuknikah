<?php

namespace App\Controllers;

class Gawe extends BaseController
{
    public function index()
    {
        
        $builder = $this->db->table('gawe');
        $query = $builder->get()->getResult();
        return view('gawe/index', compact('query'));
    }
}
