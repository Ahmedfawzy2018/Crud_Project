<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class CreateController extends Controller
{
    public function home()
    {
    	$products = Article::all();
    	return view('processes.select', ['products' => $products]) ;
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
    	$products = Article::find($id);
    	return view('processes.update' , ['products' => $products]) ;
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

    	Article::where('id' , $id)
    	->update($data) ;
    	return redirect('processes.select')->with('info', 'Product Updated Successfully') ;

    }
}
