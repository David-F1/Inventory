<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retreive from database
        $stocks = Article::all();

        return view('stock', ['stocks'=>$stocks,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add a new stock front 
        return view('stock',['layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store newly created stock in data base
        $stock = new Article();
        $stock->A_Nom = $request->input('A_Nom');
        $stock->A_Categorie = $request->input('A_Categorie');
        $stock->A_Model = $request->input('A_Model');
        $stock->A_Quantite = $request->input('A_Quantite');
        $stock->save();

        redirect('/stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //search 
        $stock = Article::find('id');

        return view('stock',['layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Article::find('id');

        return view('stock',['stocks'=>$stock,'layout'=>'edit']);
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
        //update the record in data bases
        $stock = Article::find('id');
        $stock->A_Nom = $request->input('A_Nom');
        $stock->A_Categorie = $request->input('A_Categorie');
        $stock->A_Model = $request->input('A_Model');
        $stock->A_Quantite = $request->input('A_Quantite');
        $stock->save();

        redirect('/stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $stock = Article::find('id');
        $stock->delete();
        redirect('/stock');
    }
}
