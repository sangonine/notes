<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NotesInterface;


class NotesController extends Controller{
    private $notes;
    public function __construct(NotesInterface $notes){
        $this->notes = $notes;
    }
    
    public function getNotes($userId){
       return $this->notes->find($userId); 
    }

}
