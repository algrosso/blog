<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use App\Book;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$books=DB::table('books')->paginate(5);
	return view('books',['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	return view('book_c');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);
/*        if($validator->fails())
        {
            // Change template.
            return Redirect::route('books.edit', $id)->withErrors($validator->errors())->withInput();
        }
*/	$b = new Book;
        $b->name=$request->name;
	$b->code=$request->code;
	if ($request->num) 
	  $b->num=$request->num;
        $r=$b->save();
	return (Redirect::to('books'));   
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
	$book=DB::table('books')->where('id', '=', $id)->first();
	return view('book_e',['book' => $book]);
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
        $update = ['name' => $request->name, 'code' => $request->code, 'num'=> $request->num];
	$book=DB::table('books')->where('id',$id)->update($update);
	return Redirect::to('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	// for($i=1; $i<10000;$i++) {$console->log(" Voy a elimnar el libro ");}
        $del=DB::table('books')->where('id', '=', $id)->delete();
	echo "Voy a eliminar el libro ".$id;
	return Redirect::to('books');

    }
}
