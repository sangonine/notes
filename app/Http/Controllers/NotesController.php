<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NotesInterface;


class NotesController extends Controller{
    private $notes;
    public function __construct(NotesInterface $notes){
        $this->notes = $notes;
    }
    
    public function index(){
        return $this->notes->all(); 
    }
 
    public function show($id){
        return $this->notes->find($id); 
    }

    public function store(Request $request){
        return $this->notes->create($request); 
    }

    public function update(Request $request, $id){
        return $this->notes->update($request->all(),$id);
    }

    public function delete(Request $request, $id){
        return $this->notes->delete($id);
    }    

}
