<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\AppAuthController;
use App\Http\Controllers\Controller;
use App\User;
use App\Amigo;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	protected $context;
	
	public function __construct(User $context){
		$this->context = $context;
		//$this->middleware('appauth', ['except' => 'store']);
	} 
	
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				
		$auth = new AuthController();		
		$validator = $auth->validator($request->all());
		
		if ( $validator->fails() ){		
			return response()->json( ['error' => [ $validator->errors() ]], 401 );					
		}
		
		
		return $auth->create($request->all());
		
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {	

		$result = $this->context->find($id);
		
		if ( $result ) {
			return $result;
		}
		
		return response()->json( ['error' => [ "Usuário não localizado com id ". $id ]], 401 );				
    }

	public function amigos($id){		
		return $this->context->with("amigos")->where('id', $id)->get();	
	}
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$result = $this->context->find($id);

		if ( $result ) { 
		
			$auth = new AuthController();		
			$validator = $auth->validator($request->all());
			
			if ( $validator->fails() ){		
				return response()->json( ['error' => [ $validator->errors() ]], 401 );					
			}
		
			$this->context->update($request->all());
			return $this->context->find($id);
		}
		
		return response()->json( ['error' => [ "Registro nao atualizado" ]], 401 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->context->find($id);
		
		if ( $result ) {
			
			$result->delete();
			return $result;
			
		}
		
		return response()->json( ['error' => [ "Usuário não localizado com id ". $id ]], 401 );		
    }
}
