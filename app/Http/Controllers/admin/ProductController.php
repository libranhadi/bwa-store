<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Product , Category, User};
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(request()->ajax()){
           $query = Product::with('user' , 'category');
           return Datatables::of($query)
           ->addColumn('action', function($product){
               return ' 
               <div class="btn-group">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" >
                    Aksi
                    </button>
                  <div class="dropdown-menu">
               <a href="' .route('product.edit', $product->id). '" class="dropdown-item">Sunting</a>
            
               <form action="'. route('product.destroy', $product->id) .'" method="post">
             '.method_field('delete')  . csrf_field() .'
                            <button type="submit" class="dropdown-item text-danger">
                            Hapus
                            </button>
             </form>
               </div>
                </div>
               </div>   
               ';
           
           })->rawColumns(['action' , 'photo'])->make();
       }
        return view('pages.admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.product.create', 
        [
            'product' => new Product(),
            'user' => User::get(),
            'category' => Category::get()
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
        $attr = $request->all();
        $attr['slug'] = Str::slug($request->name);
        
        Product::create($attr);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.admin.product.edit', 
        [
            'product' => $product,
            'user' => User::get(),
            'category' => Category::get()
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
    
      
        $attr = $request->all();
        $attr['slug'] = Str::slug(request('name')); 
        $item = Product::findOrFail($id);
        $item->update($attr);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
