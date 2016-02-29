<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Local;
use Validator;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $context;
	
	public function __construct(Local $context){
		$this->context = $context;		
	}
	
    public function index()
    {
       return $this->context->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make( 
			$request->all(),
			[
				'latitude' => 'required',
				'longitude' => 'required',
				'endereco' => 'required', 
				'nome' => 'required'
 			]);
					
		if ( $validator->fails() ) {		
			return $validator->errors();
		}
		
		return $this->context->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->context->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validator = Validator::make( 
			$request->all(),
			[
				'latitude' => 'required',
				'longitude' => 'required',
				'endereco' => 'required', 
				'nome' => 'required'
			]);
			
		if ( $validator->fails() ) {
			return $validator->errors()->first();
		}
		
		return $this->context->update($request->all()); 
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->context->delete($id); 
    }
}
