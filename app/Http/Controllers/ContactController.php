<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ContactController extends Controller
{
    public function display()
    {
        $savedContacts=ContactModel::where('clientID',session('userid'))->get();
        return view('dashboard')->with(['contactdata'=>$savedContacts]);
    }

    public function save(Request $request){

        if(session()->has('userid'))
        {
        $userid=session('userid');
        $data=[
            'clientID'=>$userid,
            'conatctname'=>$request->conname,
            'phone'=>$request->phone
        ];
        ContactModel::create($data);
        return redirect('/dashboard');
    }
    else{
        return redirect('/login');
    }
    }


    public function delete($id)
    {
        if(session()->has('userid'))
        {
        ContactModel::where('id',$id)->delete();
        return redirect('/dashboard');
        }
        else{
            return redirect('/login');
        }
    }

    public function update(Request $request){
        if(session()->has('userid'))
        {

        $hiddenid=$request->hiddenid;
        $name=$request->upconname;
        $phone=$request->upphone;

        if($name!=null && $phone==null)
        ContactModel::where('id',$hiddenid)->update(['conatctname'=>$name]);
        if($name==null && $phone!=null)
        ContactModel::where('id',$hiddenid)->update(['phone'=>$phone]);
        if($name!=null && $phone!=null)
        ContactModel::where('id',$hiddenid)->update(['conatctname'=>$name,'phone'=>$phone]);


        return redirect('/dashboard');
        }
        else{
            return redirect('/login');
        }

    }
}
