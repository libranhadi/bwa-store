<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(request()->ajax()){
           $query = User::query();
           return Datatables::of($query)
           ->addColumn('action', function($user){
               return ' 
               <div class="btn-group">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown" >
                    Aksi
                    </button>
                  <div class="dropdown-menu">
               <a href="' .route('user.edit', $user->id). '" class="dropdown-item">Sunting</a>
            
               <form action="'. route('user.destroy', $user->id) .'" method="post">
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
        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create', ['user' => new User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
       
        $attr = $request->all();
        
        
        $attr['password'] = bcrypt($request->password);
        User::create($attr);
        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);
        return view('pages.admin.user.edit', ['user' => $user]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
    
        
         $attr = $request->all();
        $item = User::findOrFail($id);

        if ($request->email) {
            $attr['email'] = request('email');
        } else {
             $request->email;
        }


         if ($request->password) {
                $attr['password'] = bcrypt($request->password);    
        }else{
            unset($attr['password']);
        }
  
        $item->update($attr);
       

        return redirect()->route('user.index')->with(['success' => 'Pesan Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('admin-categories');
    }
}
