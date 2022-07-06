<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;
use DataTables;
use DB;
use JavaScript;
use Auth;
class AdminController extends Controller
{
    //
    public function index(Request $request)
    {            
            return view('admin.index');
    }
   
    public function artikel_list(Request $request)
    {            
        $category = Kategori::orderBy('nama','ASC')
        ->get()
        ->pluck('nama','id');
        
        $user = Auth::user();
        Javascript::put([ 'email' => $user->email,'user.password' => $user->password ]);
        return view('admin.artikel', compact('category'));
    }

    public function get_user(Request $request)
    {            
          $user = Auth::user();
          dd($user->password);
          return response()->json($user);
    }

    public function store(Request $request)
    {
        $id = $request->id;
    
        
      
        $this->validate($request , [
            'judul'          => 'required|string',
            'konten'         => 'required',
            // 'image'         => 'required',
            'kategori_id'   => 'required',
        ]);

        $input = $request->all();
        $tes="";
        if($id ==null){
            $input['image'] = null;
            $file= $request->file('image');
            if ($request->hasFile('image')){
            
            $filename= $file->getClientOriginalName();
            $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/'), $filename);
            $tes= $file->getClientOriginalName();
            }
        
           

        }elseif($id != null){
            
            $finpost =  Post::findOrFail($id);
          
            
                if ($finpost->images != ""){
                    $tes = $finpost->images;
                   
                }else if($request->image !=null){
                    $file= $request->file('image');
                    $filename= $file->getClientOriginalName();
                    $request->image->getClientOriginalExtension();
                    $request->image->move(public_path('/images/'), $filename);
                    $tes= $file->getClientOriginalName();
                   
                }
        }
        
       
        $post   =   Post::updateOrCreate(['id' => $id],
                    [
                        
                        'id_kategori' => $request->kategori_id,
                        'judul' => $request->judul,
                        'images' => $tes,
                        'konten' => $request->konten,
                    ]); 

        return response()->json($post);
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Post::with('kategori')->where('posts.id',$where)->first();
     
        return response()->json($post);
    }

    public function destroy($id)
    {
        $post = Post::where('id',$id)->delete();
     
        return response()->json($post);
    }
    public  function data_table(Request $request){
        $data = Post::with('kategori')->get();
       
    
            
            return DataTables::of($data)
            ->addColumn('image', function ($data){
                $img =   '<img src="http://localhost:8000/images/'.$data->images.'" width="60" height="60">';
                // dd($data->nama);
                return $img;
            }) 
            ->addColumn('kategori', function ($data){
                 
                // dd($data->nama);
                return $data->kategori['nama'];
            })
            ->addColumn('action', function($data){
    
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post" style="margin-left:10px;"><i class="fa fa-pencil" style="margin-right:10px;margin-left:5px"></i> Edit</a>';
                  
             
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm" style=" margin-left: 10px;margin-top:10px"><i class="fa fa-trash"></i> Delete</button>';     
             
               
                return $button;
            })
            ->rawColumns(['action','image'])
            ->addIndexColumn()
            ->make(true);
       
       
            // return view('admin.artikel');
        
    }

}
