<?php 
namespace SaiyedYamin\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SaiyedYamin\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        
        $result=Contact::select('id','name','email','message','created_at')->get();
        return view('contact::contact',['result'=>$result,'title'=>config('contact.title')]); //first contact package name second contact view
    }

    public function send(Request $request)
    {
        if (Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ])) {
            return redirect()->route('contact.index')->with('success_message', 'Form successfully submitted'); 
        }else{
            return redirect()->route('contact.index')->with('error_message', 'Opps something went wrong!'); 
        }
        

    }
}

?>