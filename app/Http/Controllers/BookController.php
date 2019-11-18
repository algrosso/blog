<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;

class BookController extends Controller
{
    public function index(){
	$books=DB::table('books')->paginate(5);
	return view('books',['books' => $books]);
    }

    public function create(){
	//$book=DB::table('books')->where('id', '=', $id)->first();
	echo "voy a crear un libro";
    }

    public function show($id){
	$book=DB::table('books')->where('id', '=', $id)->first();
	echo $book->name;
	return view('book_e',['book' => $book]);
    }

    public function update(Request $request){
        $update = ['name' => $request->name, 'code' => $request->code, 'num'=> $request->num];
	$book=DB::table('books')->where('id',$request->id)->update($update);
	//echo "voy a actualizar".json_encode($_POST);
	return Redirect::to('books')->with('success','Greate! Book created successfully.');
    }

    public function delete($id){
	echo "Voy a eliminar el libro ".$id;

    }
}
