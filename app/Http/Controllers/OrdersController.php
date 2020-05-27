<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Orders;
use DataTables;

class OrdersController extends Controller
{
    public function index(){
        $order = Orders::with('product')->get();
        return view('orders.index',compact('order'));
    }

    public function create($id){

        $product = Product::findOrFail($id);
        $order = Orders::with('product')->get();
        return view('orders.order',compact('product','order'));

    }

    private function ordercode(){

        $getRow = Orders::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();

        $lastId = $getRow->first();

        $kode = "00001";

        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "0000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "000".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "00".''.($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                    $kode = "0".''.($lastId->id + 1);
            } else {
                    $kode = "".''.($lastId->id + 1);
            }
        }

        return $kode;
    }

    private function getorder(){
        $order = Orders::with('product')->get();
        return $order;
    }

    public function store(Request $request){

        $kode = $this->ordercode();

        Orders::create([
            'order_code' => $kode,
            'id_product' => $request->get('id'),
            'total' => $request->get('price'),
        ]);

        $order = $this->getorder();

        return view('orders.show',compact('order'));
    }

    public function show(){
        return view('orders.show');
    }

    public function edit($id){
        $order = Orders::with('product')->findOrFail($id);
        $product = Product::get();
        return view('orders.edit',compact('order','product'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_product' => 'required',
            'total' => 'required'
        ]);

        DB::transaction(function () use($request, $id) {
            Orders::find($id)->update([
                'id_product' => $request->get('id_product'),
                'total' => $request->get('total')
            ]);
        });

        return redirect()->route('orders.index')->with('status','Success Update Orders!!');
    }

    public function delete($id){

        DB::transaction(function () use($id) {
            Orders::find($id)->delete();
        });
        return redirect()->route('orders.index')->with('status','Success Delete Orders!!');
    }
}
