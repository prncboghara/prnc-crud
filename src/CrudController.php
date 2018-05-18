<?php
namespace prnc\crud;
use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use prnc\crud\model\crud;
class CrudController extends Controller
{
    public function index()
    {
        return view('crud::insert');
    }
    public function showdata(){
        return view('crud::update');
    }
    public function store(Request $request)
    {
        $table= new crud;
        $fname=$request->fname;
        $lname=$request->lname;
        $email=$request->email;
        $address=$request->Address;
        $country=$request->country;
        $table->fname=$fname;
        $table->lname=$lname;
        $table->email=$email;
        $table->address=$address;
        $table->country=$country;
        $table->save();
        return view('crud::afterinsert',compact('fname','email','lname','address','country'));
    }
    public function show(Request $request)
    {   
        $email=$request->email;
        $table=crud::all()->where('email',$email);
        foreach ($table as $tables) {
           $fname=$tables->fname;
           $lname=$tables->lname;
           $email=$tables->email;
           $address=$tables->address;
           $country=$tables->country;
           return view('crud::setdata',compact('fname','lname','email','address','country'));
        }
    }
    public function update(Request $request)
    {
        $email=$request->email;
        $table=crud::where('email','=',$email);
        $fname=$request->fname;
        $lname=$request->lname;
        $address=$request->address;
        $country=$request->country;
        $table->update(['fname'=>$fname]);
        $table->update(['lname'=>$lname]);
        $table->update(['email'=>$email]);
        $table->update(['address'=>$address]);
        $table->update(['country'=>$country]);
        return redirect('crud/after/update');
    }
    public function afterupdate(){
        return view('crud::afterupdate');
    }
}
