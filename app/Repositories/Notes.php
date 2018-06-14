<?php

namespace App\Repositories;

use App\Note;

class Notes implements NotesInterface{
    public function all(){
        return Note::all();
    }
    
    public function find($userId){
        return Note::where('user_id',$userId)->get();
    }    
    
    public function create($data){
        return $data->save($data);
    }
    
    public function update(){
        
    }
    
    public function delete(){
        
    }
}