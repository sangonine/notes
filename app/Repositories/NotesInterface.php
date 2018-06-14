<?php

namespace App\Repositories;

interface NotesInterface{
    public function all($userId);
    
    public function find($id);
    
    public function create($data);
    
    public function update($data,$id);
    
    public function delete($id);
}