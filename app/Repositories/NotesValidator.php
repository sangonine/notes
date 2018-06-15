<?php

namespace App\Repositories;
use Validator;

class NotesValidator{
    public function validateCreate($data){
        return Validator::make($data,[
            'title' => 'required|max:50',
            'note' => 'required|max:1000',
            'user_id' => 'required'
        ]);
        
    }
}