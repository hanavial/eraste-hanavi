<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use DataTables;

class ProductController extends Controller
{
    public function home(){
        $product = Product::orderBy('id','DESC')->get();
        return view('product.home',compact('product'));
    }

    public function index(){
        $product = Product::get();
        return view('product.index',compact('product'));
    }

    public function create(){
        return view('product.create');
    }

    private function codeproduct(){
        $getRow = Product::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();

        $lastId = $getRow->first();

        $kode = "L1";

        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "L".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "L".''.($lastId->id + 1);
            }  else {
                    $kode = "L".''.($lastId->id + 1);
            }
        }

        return $kode;
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required'
        ]);

        DB::transaction(function () use ($request) {
            $kode = $this->codeproduct();

            Product::create([
                'code' => $kode,
                'name' => $request->get('name'),
                'price' => $request->get('price')
            ]);


        });

        return redirect()->route('product.index')->with('status','Success Add Product!!!');

    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required'
        ]);

        DB::transaction(function () use($request, $id){
            Product::find($id)->update([
                'name' => $request->get('name'),
                'price' => $request->get('price')
            ]);
        });

        return redirect()->route('product.index')->with('status','Success Update Product!!!');
    }

    public function delete($id){

        DB::transaction(function () use($id) {
            Product::find($id)->delete();
        });

        return redirect()->route('product.index')->with('status','Success Delete Product!!!');
    }
}
