<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EmployeeCard;
use App\Http\Requests;
use Auth;
use JWTAuth;

class EmploeeCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index2()
    {
        //
        $cards = EmployeeCard::all();  
        return $cards;
    }

    public function index()
    {
        //
        $cards = EmployeeCard::all();  
        return response()->success($cards);
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
        //
        // $this->validate($request, [
        //     'name'  => 'required',
        // ]);
    
        // $card = new EmpoleeCard;
        // $post->name = $request->input('name');
        // $post->topic = $request->input('topic');
        // $post->save();
      
        // return response()->success(compact('post'));

        // return response()->success(compact('EmpoleeCard'));
        $card = new EmployeeCard;
        $user = Auth::user();

        $card->name=$request->input('name');
        $card->email=$request->input('email');
        $card->created_by_user_id=$user->id;

        $card->save();

        //$input = $request->all();
        //EmployeeCard::create($input);
        return response()->success($card);
        //$create = EmployeeCard::create($input);
        //return response()->success($create);
        // $card = new EmployeeCard;
        // $card->name = 'Artur';
        // $card->email = 'Artur';
        // $card->save();
        // return response()->success($card);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $item = EmployeeCard::find($id);
        return response($item);
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
        //
        $input = $request->all();
        EmployeeCard::where("id",$id)->update($input);
        $card = EmployeeCard::find($id);
        return response($card);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->input('id');
        $card = EmployeeCard::where('id',$id)->delete();
        return response($card);
    }
}
