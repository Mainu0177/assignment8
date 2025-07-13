<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Log;
use PhpParser\Node\Stmt\TryCatch;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }//end method

        public function FormSubmit(Request $request){
            try {
                $data = [
                    "name" => $request->input('name'),
                    "email" => $request->input('email'),
                    "phone" => $request->input('phone'),
                    "message"=> $request->input('message'),
                ];
                Session::put('success','Contact data send successfully');
                Log::info("form submitted!", ['data'=>$request->all()]);

                return view('testPage', ['data' => $data]);
        } catch (\Throwable $th) {
            Session::put('success','Contact data does not send successfully');
        }
    }

}
