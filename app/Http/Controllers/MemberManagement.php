<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class MemberManagement extends Controller
{
    public function MemberAdd(Request $request){
        // $request->validate([
        //     'id'=>'required',
        //     'name'=>'required',
        //     'Email'=>'required',
        //     'Password'=>'required',
        //     'Created_at'=>'required',
        //     'Birthday'=>'required',
        //     'Address'=>'required',
        //     'IDCardNumber'=>'required',
        //     'PhoneNumber'=>'required',
        //     'Competence'=>'required',
        //     'Link'=>'required',
            
            
        // ]);
            $id =$request->id;
            $name =$request->name;
            $Email =$request->Email;
            $Password =Hash::make($request->Password);
            // $Password=Hash::
            $Created_at =$request->Created_at;
            $Birthday =$request->Birthday;
            $Address =$request->Address;
            $IDCardNumber =$request->IDCardNumber;
            $PhoneNumber =$request->PhoneNumber;
            $role =$request->role;
            if($role==1)
            {
                $Competence='Admin';

            } else{
                $Competence='Sales';
            }
            $Link =$request->Link;
            // $path = $request->file($Link)->store('public/image');
            // Storage::put('public/image', $Link);
          
            // $path = Storage::url($Link);
            // Storage::move($Link, 'public/image');
            $image = $request->file('link');
            $storedPath = $image->move('images', $image->getClientOriginalName());
            $post=DB::insert('insert into users ( id, name, email, role, password,created_at) values ( ?, ?, ?, ?, ?, ?)',
             [$id, $name, $Email,$role,$Password,$Created_at]);

             $post2=DB::insert('insert into information_user ( ID, Fullname, Birthday, Address, IDCardNumber,PhoneNumber,Email,Competence,Link) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?)',
             [$id, $name, $Birthday,$Address,$IDCardNumber,$PhoneNumber,$Email,$Competence,$storedPath]);



             if ($post && $post2) {
                return redirect()->back()->with('success', 'Thêm nhân sự  '.$name.' thành công.'); 
            } else {
               
                return redirect()->back()->with('failed', 'Thêm nhân sự '.$name.' thất bại.'); 
            }  
             return redirect()->route('qlnhanvien');       
    }


    public function MemberUpdate(Request $request){
        // $request->validate([
        //     'id'=>'required',
        //     'name'=>'required',
        //     'Email'=>'required',
        //     'Password'=>'required',
        //     'Created_at'=>'required',
        //     'Birthday'=>'required',
        //     'Address'=>'required',
        //     'IDCardNumber'=>'required',
        //     'PhoneNumber'=>'required',
        //     'Competence'=>'required',
        //     'Link'=>'required',
            
            
        // ]);
            $id =$request->id;
            $name =$request->name;
            $Email =$request->Email;
            $Password =Hash::make($request->Password);
            $Created_at =$request->Created_at;
            $Birthday =$request->Birthday;
            $Address =$request->Address;
            $IDCardNumber =$request->IDCardNumber;
            $PhoneNumber =$request->PhoneNumber;
            $role =$request->role;
            if($role==1)
            {
                $Competence='Admin';

            } else{
                $Competence='Sales';
            }
            // $Link =$request->Link;
            $image = $request->file('Link');
            $storedPath = $image->move('image', $image->getClientOriginalName());
            $post=DB::update('update information_user set 
            Fullname = ? 
            , Email=?
            , Birthday=? 
            , Address=?
            , IDCardNumber=?
            , PhoneNumber=?
            , Competence=?
            , Link=?
             where ID = ?', [$name,$Email,$Birthday,$Address,$IDCardNumber,$PhoneNumber,$Competence,$storedPath,$id]);

             $post2=DB::update('update users set 
              email=?
             , name=?
              where id = ?', [$Email,$name,$id]);


             if ($post && $post2) {
                return redirect()->back()->with('success', 'Cập nhật nhân sự  '.$name.' thành công.'); 
            } else {
               
                return redirect()->back()->with('failed', 'Cập nhật nhân sự '.$name.' thất bại.'); 
            }  
             return redirect()->route('qlnhanvien');       
    }

    public function MemberDelete(Request $request){
       
            $id =$request->id;
            $name =$request->name;
            $role =-1;
            $Password=Hash::make(Str::random(8));
             $post=DB::update('update users set 
              role=?
             , password=?
              where id = ?', [$role,$Password,$id]);


             if ($post) {
                return redirect()->back()->with('success', 'Thu hồi tài khoản nhân sự  '.$name.' thành công.'); 
            } else {
               
                return redirect()->back()->with('failed', 'Thu hồi tài khoản nhân sự '.$name.' thất bại.'); 
            }  
             return redirect()->route('qlnhanvien');       
    }
    public function MemberAllow(Request $request){
       
        $id =$request->id;
        $name =$request->name;
        $Password =$request->Password;
        $Competence =$request->Competence;
        if($Competence=='Admin'){
            $role=1;
        }else{
            $role=0;
        }
         $post=DB::update('update users set 
          role=?
         , password=?
          where id = ?', [$role,$Password,$id]);


         if ($post) {
            return redirect()->back()->with('success', 'Cấp lại tài khoản nhân sự  '.$name.' thành công.'); 
        } else {
           
            return redirect()->back()->with('failed', 'Cấp lại tài khoản nhân sự '.$name.' thất bại.'); 
        }  
         return redirect()->route('qlnhanvien');       
}

public function CompetenceFilter(Request $request)
{
    if ($request->ajax()) {
        $role=Auth::user()->role;
        $getUser= DB::table('users')
        ->join('information_user', 'users.id', '=', 'information_user.ID')
        ->where('information_user.Competence', 'LIKE', '%' . $request->ValueCompetence . '%')
        ->get();
        $getInfoUser=DB::table('information_user')
        ->where('information_user.Competence', 'LIKE', '%' . $request->ValueCompetence . '%')
        ->get();
        $countUser= DB::table('users')
        ->count('id')+1;
    }
    return view('BladeAjax.MemberM_Competence',compact('getUser','role','getInfoUser','countUser'));

}

}
