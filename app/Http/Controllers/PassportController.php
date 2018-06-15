<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
class PassportController extends Controller{
    public $sucessStatus = 200;
    
    /*
     * login api
     * 
     * @return \Illuminate\Http\Response
     */
    
    public function login() {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success], $this->sucessStatus);
        }
        else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    
    /*
     * Register api
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        
        if($validator->fails()) {
            return response()->json(['error' => $validator->errors()],401);
        }
        
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        
        return response()->json(['success' => $success], $this->sucessStatus);
    }
    
    /*
     * details api
     * 
     * @return \Illumiante\Http\Response
     */
     public function getDetails() {
         $user = Auth::user();
         return response()->json(['success' => $user], $this->sucessStatus);
     }
            
}