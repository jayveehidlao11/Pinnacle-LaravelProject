<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\MainModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Svg\Tag\Rect;

class ApplicantController extends Controller
{
  
    public function profile(){
        $user_id = session()->get('applicantID');
        $acc = MainModel::find($user_id);
        return view('user.body.account',compact('acc'));
    }
    public function dashboard(){
        $announcement = Announcement::all();
        return view('user.body.dashboard',['anc'=>$announcement]);
    }
    public function changepass(){
        return view('user.body.changepassword');
    }
   public function updatepass(Request $request){
    $id = session()->get('applicantID');
    $Year = date("Y");
    $applicationID = $Year.'A'.$id;
    $data = MainModel::find($id);
    $user_role = User::where('user_id','=',$applicationID)->first();

    $newpass = Hash::make($request->newpass);
    if(!Hash::check($request->currentpass,$data->password)){
        
        Alert::warning('Invalid','Wrong Input Password!!');
        return back();
    }else{
    $data->password =  $newpass;
    $data->update();
    $user_role->password = $newpass;
    $user_role->update();
    
    Alert::success('Successfull','Succesfully password changed!!');
    
    return redirect('applicant/account');
    }
   }
    public function updateprofile(Request $request,$id){
        $id = session()->get('applicantID');
        
        $this->validate($request,[
            'profilepic.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

       
        if($request->hasfile('profilepic'))
        {
           
            if($files = $request->file('profilepic')){
              
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($files->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'images/';
                    $image_url = $upload_path.$image_full_name;
                    $files->move('images/profilepic',$image_full_name);
                    $image = $image_url;
                
            }
            
            $data = MainModel::find($id);

            $currentpic = str_replace($data->profile_pic,'',$image);
            $data->profile_pic = $image;
            $data->firstname = $request->input('fname');
            $data->lastname =$request->input('lname');
            $data->middlename =$request->input('mname');
            $data->email =$request->input('email');
            $data->birthday =$request->input('bday');
            $data->age =$request->input('age');
            $data->phonenumber =$request->input('phonenumber');
            $data->address =$request->input('address');
            $data->postalcode =$request->input('postal');
            $data->update();
            Alert::success('Updated','Successfully Updated');
            return back()->with('success','Successfully Updated!');
        }
    }
   
}
