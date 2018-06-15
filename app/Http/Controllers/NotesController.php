<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NotesInterface;
use App\Repositories\NotesValidator;


class NotesController extends Controller{
    private $notes;
    public function __construct(NotesInterface $notes,NotesValidator $validator){
        $this->notes = $notes;
        $this->validator = $validator;
    }
    
    public function index(Request $request){
        $valid = $this->validator->validateCreate($request->all());
        if($valid->fails()){
            return response()->json(['error' => $valid->errors()],401);
        }
        return $this->notes->all($request['user_id']); 
    }
 
    public function show($id){
        return $this->notes->find($id); 
    }

    public function store(Request $request){
        $result = $this->notes->create($request->all()); 
        return response()->json($result, 201);
    }

    public function update(Request $request, $id){
        $result = $this->notes->update($request->all(),$id);
        return response()->json($result, 200);
    }

    public function delete(Request $request, $id){
        $this->notes->delete($id);
        return response()->json(null, 204);
    }    

}
