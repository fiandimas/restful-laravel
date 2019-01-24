<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class ControllerKotak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Create object from Kontak model
        $kontak = new Kontak();
        // Select all data from kontak
        $data = $kontak::all();

        if(count($data) > 0){
            // Set response for true condition
            $res['message'] = 'Success!';
            $res['values'] = $data;
            return response($res);
        }
        else{
            // Set response for false condition
            $res['message'] = 'Empty!';
            return response($res);
        }
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
        // Create object from Kontak model
        $kontak = new Kontak();

        // Set new data
        $kontak->name = 'Alfian Dimas Sugara';
        $kontak->email = 'kidaliez@gmailcom';
        $kontak->address = 'Jln. Danau Towuti IV';
        $kontak->phonenumber = '082140307911';
        $kontak->save();

        if(true){
            // Set response for true condition
            $res['message'] = 'Success!';
            $res['values'] = $kontak;
            return response($res);
        }
        else{
            // Set response for false condition
            $res['message'] = 'Fail!';
            return response($res);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Create object from Kontak model
        $kontak = new Kontak();
        // Select data from kontak by id
        $data = $kontak::where('id',$id)->first();

        if($data){
            // Set response for true condition
            $res['message'] = 'Success!';
            $res['values'] = $data;
            return response($res);
        }
        else{
            // Set response for false condition
            $res['message'] = 'Empty!';
            return response($res);
        }
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
        // Create object from Kontak model
        $kontak = Kontak::where('id',$id)->first();

        // Get data by id
        $dataBefore = $kontak::where('id',$id)->first();

        // Set new data for update 
        $kontak->id = $kontak->id;
        $kontak->name = 'Liz Scarlet';
        $kontak->email = 'crowleyesd@gmailcom';
        $kontak->address = 'Jln. Danau Towuti IV 0092';
        $kontak->phonenumber = '087859244811';
        $kontak->update();

        if(true){
            // Set response for true condition
            $res['message'] = 'Success Update!';
            $res['DataBeforeUpdate'] = $dataBefore;
            $res['DataAfterUpdate'] = $kontak;
            return response($res);
        }
        else{
            return response('Fail!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // Select data by id
        $kontak = Kontak::where('id',$id)->first();
        // Check if data available
        if($kontak){
            // Delete data and set response for true condition
            $kontak->delete();
            $res['message'] = 'Success!';
            return response($res);
        }else{
            // Set response for false condition
             $res['message'] = 'No Data With Those ID!';
            return response($res);
        }
    }
}
