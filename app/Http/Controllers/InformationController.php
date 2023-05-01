<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\Child;



class InformationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function information()
    {
        $childs=Child::all();
        return view('information',compact('childs'));
    }

    public function delete($id)
    {
       $child=Child::findorFail($id);
       $child->delete();
       return redirect('/Information')->with('success', 'Information deleted successfully');
    }

    public function registration(Request $request)
    {
        $registration=$request->validate(
        [
           'childfirstname'=>'required|alpha',
           'childmiddlename'=>'required|string|alpha',
           'childlastname'=>'required|string|alpha',
           'childage'=>'required|numeric',
           'gender'=>['required', Rule::in(['Male', 'Female', 'Other'])],
           'childaddress'=>'alpha_num',
           'childcity'=>'alpha_num',
           'childstate'=>'alpha_num',
           'childzipcode'=>'numeric'

        
          
        ]);
      

        $child=new Child();
        $child->firstname=$request->childfirstname;
        $child->middlename=$request->childmiddlename;
        $child->lastname=$request->childlastname;
        $child->age=$request->childage;
        $child->gender=$request->gender;
        $child->country=$request->country;
        $child->address=$request->childaddress;
        $child->city=$request->childcity;
        $child->state=$request->childstate;
        $child->zipcode=$request->childzipcode;
        $child->save();
        return redirect('/Information')->with('success','Information Added Successfully');


    }
}
