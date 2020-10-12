<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{ProductGallery, Product};
use Illuminate\Http\Request;

use App\Http\Requests\Admin\ProductGalleryRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class ProductGalleryController extends Controller
{
    public function index()  
    {
       if(request()->ajax()){
           $query = ProductGallery::with('product');
           return Datatables::of($query)
           ->addColumn('action', function($productgallery){
               return ' 
               <div class="btn-group">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" >
                    Aksi
                    </button>
                  <div class="dropdown-menu">
              
               <form action="'. route('gallery.destroy', $productgallery->id) .'" method="post">
             '.method_field('delete')  . csrf_field() .'
                            <button type="submit" class="dropdown-item text-danger">
                            Hapus
                            </button>
             </form>
               </div>
                </div>
               </div>   
               ';
           
           })->editColumn('photo', function ($productgallery){
            return $productgallery->photo ? '<img src="'. Storage::url($productgallery->photo).'"style="max-height : 80px;" />' : '' ;
           })->
           rawColumns(['action' , 'photo'])->make();
       }
        return view('pages.admin.productgallery.index');
    }

    public function create(){
        return view('pages.admin.productgallery.create', [
            'productgallery' => new ProductGallery(),
            'product' => Product::get()
        ]);
    }
    public function store(ProductGalleryRequest $request){
        $attr = $request->all();
        $photo = $request->file('photo')->store('assets/products', 'public');
        $attr['photo'] = $photo;

        ProductGallery::create($attr);

        return redirect()->route('gallery.index');

    }
    public function destroy($id){
        $attr = ProductGallery::findOrFail($id);
        $attr->delete();
        return redirect()->route('gallery.index');
    }
}
