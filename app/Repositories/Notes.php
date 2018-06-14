<?php

namespace App\Repositories;

use App\Note;

class Notes implements NotesInterface{
    public function all($userId){
        return Note::where('user_id',$userId)->get();
    }
    
    public function find($id){
        return Note::find($id);
    }    
    
    public function create($data){
        return Note::create($data);
    }
    
    public function update($data,$noteId){
//        $note = Note::findOrFail($id);
//        $note->update($request->all());        
        $rec = Note::where('id',$noteId)
                ->update(['title'=>$data['title'],'note'=>$data['note']]);
        return $rec;
    }
    
    public function delete($id){
        $rec = Note::find($id);
        $rec->delete();
        return 200;
    }
}