<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Settings\Company;
use App\Models\Settings\Branch;
use App\Http\Traits\ResponseTrait;
use App\Http\Requests\Authentication\SignupRequest;
use App\Http\Requests\Authentication\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;
class AuthenticationController extends Controller
{
    use ResponseTrait;

    public function signUpForm(){
        return view('authentication.register');
    }

    public function signUpStore(SignupRequest $request){
        try{
            $company=new Company;
            $company->status=1;
            if($company->save()){
                $branch=new Branch;
                $branch->status=1;
                $branch->company_id=$company->id;
                if($branch->save()){
                    $user=new User;
                    $user->name=$request->FullName;
                    $user->contact_no=$request->PhoneNumber;
                    $user->email=$request->EmailAddress;
                    $user->password=Hash::make($request->password);
                    $user->company_id=$company->id;
                    $user->role_id=2;
                    if($user->save())
                        return redirect('login')->with($this->resMessageHtml(true,null,'Successfully Registred'));
                    else
                        return redirect('login')->with($this->resMessageHtml(false,'error','Please try again'));
                }else
                    return redirect('login')->with($this->resMessageHtml(false,'error','Please try again'));
            }else
                return redirect('login')->with($this->resMessageHtml(false,'error','Please try again'));
        }catch(Exception $e){
            //dd($e);
            return redirect('login')->with($this->resMessageHtml(false,'error','Please try again'));
        }

    }

    public function signInForm(){
        return view('authentication.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
            $user=User::where('contact_no',$request->PhoneNumber)->first();
            if($user){
                if(Hash::check($request->password , $user->password)){
                    $this->setSession($user);
                    return redirect()->route($user->role->identity.'.dashboard')->with($this->resMessageHtml(true,null,'Successfully login'));
                }else
                    return redirect()->route('login')->with($this->resMessageHtml(false,'error','Your phone number or password is wrong!'));
            }else
                return redirect()->route('login')->with($this->resMessageHtml(false,'error','Your phone number or password is wrong!'));
        }catch(Exception $e){
            //dd($e);
            return redirect()->route('login')->with($this->resMessageHtml(false,'error','Your phone number or password is wrong!'));
        }
    }

    public function setSession($user){
        $upsetting=\App\Models\PorishodSetting::first();
        return request()->session()->put(
                [
                    'userId'=>encryptor('encrypt',$user->id),
                    'userName'=>encryptor('encrypt',$user->name),
                    'role'=>encryptor('encrypt',$user->role->type),
                    'roleIdentity'=>encryptor('encrypt',$user->role->identity),
                    'language'=>encryptor('encrypt',$user->language),
                    'companyId'=>encryptor('encrypt',$user->company_id),
                    'branchId'=>encryptor('encrypt',$user->branch_id),
                    'image'=>$user->image?$user->image:'no-image.png',
                    'upsetting'=>$upsetting
                ]
            );
    }

    public function singOut(){
        request()->session()->flush();
        return redirect('login')->with($this->resMessageHtml(true,'success',"You have successfully logged out."));
    }
}
