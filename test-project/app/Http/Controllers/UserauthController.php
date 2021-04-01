<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Session;

class UserauthController extends Controller
{
    public function loginpage(){

        return view('login');
    }
    public function dashboardpage(){

        return view('dashboard');
    }
    public function homepage(){

        return view('home');
    }
    public function headerside(){

        return view('header');
    }
    public function createbanner(){

        return view('banner');
    }
    public function addnewbanner(){

        return view('addbanner');
    }
    public function addmachines(){

        return view('addmachines');
    }
   public function addpage(){
       return view('addpage');
   }
   public function editnewshow(){

    return view('editshowbanner');
}




public function index(Request $request)
    {
        $bannerrequest = DB::table('add_banner')->where('publish', 1)->get();
        $machinesrequest = DB::table('add_machines')->where('publish', 1)->get();
        $pagesrequest = DB::table('add_page')->where('publish', 1)->where('id', 2)->get()->first();
        $recentrequest =  DB::table('add_machines')->get()->sortByDesc("id")->take(4);

        return view("index", ['bannerrequest' => $bannerrequest, 'machinesrequest' => $machinesrequest, 
        'pagesrequest' => $pagesrequest, 'recentrequest'=>$recentrequest]);

    }


    public function userlogin(Request $req){
        // return $req->input();
       $request_data=$req->all();
   //dd(Hash::make('admin@123'));

       $adminInfo = DB::table('login_table')->where('email','=',$request_data['email'])->first();
        if(!$adminInfo){
            return back()->with('fail','Email not found' );
        }else{
            if(Hash::check($request_data['pswd'], $adminInfo->pswd)){
                $req->session()->put('LoggedUser', $adminInfo->id);
                return redirect('login');
            }else{
                return back()->with('fail','Incorrect Password');
            }
            }
     
        }
    public function addbanner(Request $req){
        $collect = $req->all();
        // dd($collect);
        $baseFile = $collect['image'];

        $file = $baseFile->getClientOriginalName();
        $fileName = Str::slug(pathinfo($file, PATHINFO_FILENAME));
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $folder_path = storage_path('app/public');
        $fullName = $fileName . '__' . \Carbon\Carbon::now()->timestamp . '.' . $extension;
        $baseFile->move($folder_path, $fullName);
        $collect['image'] = $fullName;
        unset($collect ['_token']);

         $data_insert = DB::table('add_banner')->insert($collect );
        return redirect()->back()->with('success', 'Banner Added Successfully!!!!!');
    }

     public function addnewmachines(Request $req){
        $collect = $req->all();
        // dd($collect);
        $baseFile = $collect['image'];

        $file = $baseFile->getClientOriginalName();
        $fileName = Str::slug(pathinfo($file, PATHINFO_FILENAME));
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $folder_path = storage_path('app/public');
        $fullName = $fileName . '__' . \Carbon\Carbon::now()->timestamp . '.' . $extension;
        $baseFile->move($folder_path, $fullName);
        $collect['image'] = $fullName;

        $fileNames = [];
        $files  = $collect['thumbimage'];
        foreach ( $files as $baseFile ) {
            $file      = $baseFile->getClientOriginalName();
            $fileName  = Str::slug(pathinfo( $file, PATHINFO_FILENAME ));
            $extension = pathinfo( $file, PATHINFO_EXTENSION );
            $folder_path = storage_path( 'app/public' );
            $fullName = $fileName . '__' . \Carbon\Carbon::now()->timestamp . '.' . $extension;
            $baseFile->move( $folder_path, $fullName );
            array_push( $fileNames, $fullName );
        }
       
        $collect['thumbimage']= implode( '|', $fileNames );
        unset($collect ['_token']);

        $data_insert = DB::table('add_machines')->insert($collect );
       return redirect()->back()->with('success', 'machines Added Successfully!!!!!');
    }
     
    public function addnewpage(Request $req)
    {
        $collect = $req->all();
        unset($collect ['_token']);
        $data_insert = DB::table('add_page')->insert($collect );
        // session(['success'=> 'Page Added Successfully!!!!!']);
        return redirect()->back();
    }
   public function bannerview(Request $req){
    $req=DB::table('add_banner')->get();
    return view('banner',['req'=>$req]);
   }

   public function pageview(Request $req){
    $req=DB::table('add_page')->get();
    return view('page',['req'=>$req]);
   }

   public function machinesview(Request $req){
    $req=DB::table('add_machines')->get();
    return view('machines',['req'=>$req]);
   }
    
   public function bannerdestroy($id){
    DB::delete('DELETE FROM add_banner WHERE id = ?', [$id]);
    echo ("User Record deleted successfully.");
    return redirect()->back()->with('success', 'banner deleted Successfully!!!!!');
   }
   public function machinesdestroy($id){
    DB::delete('DELETE FROM add_machines WHERE id = ?', [$id]);
    echo ("User Record deleted successfully.");
    return redirect()->back()->with('success', 'machines deleted Successfully!!!!!');
   }
   public function pagedestroy($id){
    DB::delete('DELETE FROM add_page WHERE id = ?', [$id]);
    echo ("User Record deleted successfully.");
    return redirect()->back()->with('success', 'pages deleted  Successfully!!!!!');
   }

   public function editshow($id){
  
    $req=DB::table('add_banner')->where('id',$id)->get()->first();  
    return view('editshowbanner',['req'=>$req]);
}
   public function editshowbanner(Request $req ,$id){
    $collect = $req->all();
    // dd($collect);

    if (!empty($collect['image'])) {
        $baseFile = $collect['image'];
        $file = $baseFile->getClientOriginalName();
        $fileName = Str::slug(pathinfo($file, PATHINFO_FILENAME));
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $folder_path = storage_path('app/public');
        $fullName = $fileName . '__' . \Carbon\Carbon::now()->timestamp . '.' . $extension;
        $baseFile->move($folder_path, $fullName);
        $collect['image'] = $fullName;
        // dd($collect);

    } else {
        $data = DB::table('add_banner')->where('id', $id)->get()->first();
        $collect['image'] = $data->image;
    }
    unset($collect['_token']);
    DB::table('add_banner')->where('id', $id)->update($collect);

    return back()->with('Success', 'Banner Altered Successfully');
   }

   public function editshowmachine($id){
  
    $req=DB::table('add_machines')->where('id',$id)->get()->first();  
    // dd($req);
    return view('editmachines',['req'=>$req]);
}
   public function editshowmachines(Request $req ,$id){
    $collect = $req->all();


    if (!empty($collect['image'])) {
        $baseFile = $collect['image'];
        $file = $baseFile->getClientOriginalName();
        $fileName = Str::slug(pathinfo($file, PATHINFO_FILENAME));
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $folder_path = storage_path('app/public');
        $fullName = $fileName . '__' . \Carbon\Carbon::now()->timestamp . '.' . $extension;
        $baseFile->move($folder_path, $fullName);
        $collect['image'] = $fullName;

    } 
 else {
        $data = DB::table('add_machines')->where('id', $id)->get()->first();
        $collect['image'] = $data->image;
    }
            // dd($collect);
            if (!empty($collect['tumbnailimage'])) {
                $fileNames = [];
                $files  = $collect['thumbimage'];
                foreach ( $files as $baseFile ) {
                    $file      = $baseFile->getClientOriginalName();
                    $fileName  = Str::slug(pathinfo( $file, PATHINFO_FILENAME ));
                    $extension = pathinfo( $file, PATHINFO_EXTENSION );
                    $folder_path = storage_path( 'app/public' );
                    $fullName = $fileName . '__' . \Carbon\Carbon::now()->timestamp . '.' . $extension;
                    $baseFile->move( $folder_path, $fullName );
                    array_push( $fileNames, $fullName );
                }
               
                $collect['thumbimage']= implode( '|', $fileNames );
                unset($collect ['_token']);
        
            }
            else {
                $data = DB::table('add_machines')->where('id', $id)->get()->first();
                $collect['thumbimage'] = $data->thumbimage;
            }
    unset($collect['_token']);
    DB::table('add_machines')->where('id', $id)->update($collect);

    return back()->with('Success', 'machines Altered Successfully');
   }
 
   public function editpage($id)
   {
       $data = DB::table('add_page')->where('id', $id)->get()->first();

       // $data = DB::select('select * from pages where id = ?', [$id]);
       return view('editshowpage', ['data' => $data]);

   }

   public function pagesedit(Request $req, $id)
   {

       $collect = $req->all();
       unset($collect['_token']);
       DB::table('add_page')->where('id', $id)->update($collect);
       return back()->with('Success', 'Pages Altered Successfully');
   }
   public function pagespublish($id,$value){
       DB::table('add_page')->where('id',$id)->update(['publish'=>$value]);
       return back();
   }

   public function machinespublish($id,$value){
    DB::table('add_machines')->where('id',$id)->update(['publish'=>$value]);
    return back();
}

public function bannerpublish($id,$value){
    DB::table('add_banner')->where('id',$id)->update(['publish'=>$value]);
    return back();
}
public function subscriber(Request $req){
    $email =$req->input('email');
    if ($email!='') {
        $rule = DB::table('subscribe')->where('email',$email)->count();
        if($rule == 0){
           $rule_insert=DB::table('subscribe')->insert(
               [
                
                "email"  => $email
              
               ]
           ); return redirect()->back()->with('success','saved successfuly');
        }else{
             return redirect()->back()->with('error','Email is already exists');
        }       
        }
    }
    public function managesubscriber (Request $req){
       
        $req = DB::table('subscribe')->orderby("id",'desc')->get();
       return view('managesubscriber',['req' => $req]);
    }

    public function subscriberdestroy($id){
        DB::delete('DELETE FROM subscribe WHERE id = ?', [$id]);
        return redirect()->back()->with('success', 'subscriber deleted Successfully!!!!!');
       }

       public function aboutus(Request $req){
           $pagesrequest= DB::table('add_page')->where('publish',1)->where('id',3)->first();
           return view("aboutus",['pagesrequest'=>$pagesrequest]);
       }

       public function contactus(Request $req){ 
          $request=$req->all();
          unset($request['_token']);
          $data_insert = DB::table('contactus')->insert($request );
          return view('contactus');
       }
       public function contactusdisplay (Request $req){
       
        $req = DB::table('contactus')->orderby("id",'desc')->get();
       return view('contactusdisplay',['req' => $req]);
    }

}

