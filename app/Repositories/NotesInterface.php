<?php

namespace App\Repositories;

interface NotesInterface{
    public function all();
    
    public function find($id);
    
    public function create($data);
//    
//    public function update();
//    
//    public function delete();
}