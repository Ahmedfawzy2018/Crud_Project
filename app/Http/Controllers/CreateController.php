<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
class CreateController extends Controller
{

    public function home()
    {
    	$product = Article::all();
    	return view('processes.select', ['product' => $product]) ;
    }

    public function insert(Request $request)
    {
    	$this->validate($request , [
    	'name' => 'required' ,
    	'category' => 'required',
    	'price' => 'required'
    	]) ;

    	$product = new Article();
    	$product->name = $request->input('name') ;
    	$product->category = $request->input('category') ;
    	$product->price = $request->input('price') ;
    	$product->save() ;
    	return redirect('processes.select')->with('info', 'Product Added Successfully') ;
    }

    public function update($id)
    {
    	$product = Article::find($id);
    	return view('processes.update' , ['product' => $product]) ;
    }

    public function edit(Request $request , $id)
    {
    	$this->validate($request , [
    	'name' => 'required' ,
    	'category' => 'required',
    	'price' => 'required'
    	]) ;

    	$data = array(
    		'name' => $request->input('name'),
    		'category' => $request->input('category'),
    		'price' => $request->input('price')
    	);
   
    	Article::where('id' , $id)->update($data) ;

    	return redirect('processes.select')->with('info', 'Product Updated Successfully') ;

    }

    public function delete($id)
    {
    	Article::where('id' , $id)->delete();
    	return redirect('processes.select')->with('info', 'Product Deleted Successfully') ;
    }
}
