<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function registerPage(){
        $roles = $this->getAllRole();

        return view('page.register', compact('roles'));
    }


    public function doRegister(Request $request){

        // STEP 1 ambil semua data yang ada di form dan berikan
        // validasi
        $data = Validator::make($request->all(),[
            'firstname' => 'required|alpha', // harus di isi dan huruf semua
            'lastname' => 'required|alpha', // harus di isi dan huruf semua
            'email' => 'required|email|unique:users', // harus di isi, check format email, check harus unique sesuai table users

            // harus di isi, minimal 8 huruf, harus cocok dengan confirm password, kalo regex ga penting tapi ini ngecek harus dengan format
            // ada huruf kecil, huruf gede, sama angka
            'password' => 'required|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'gender' => 'required|in:male,female', // harus di isi, dan isinya harus male dan female
            'role' => 'required',// harus di isi aja

            // intinya ga boleh lebih dari 10 mb, dan ekstension nya harus jpeg, ....
            'picture' => 'required|max:10000'
        ]);

        if($data->fails()){

            $errors = $data->errors();
            return redirect()->back()->with('error', $errors)->withInput();
        }

        $now = now();

        // dd($request->input('role'));
        $create_users = User::create([
            'first_name' => $request->input('firstname'),
            'last_name' => $request->input('lastname'),
            'email' => $request->input('email'),
            'email_verified_at' => $now,
            'password' => Hash::make($request->input('password')),
            'gender' => $request->input('gender'),
            'role_id' => $request->input('role'),
            'picture' => $request->file('picture'),
            'created_at' => $now,
            'updated_at' => $now
        ]);



        if($create_users){


            $create_users->update(['picture' => $this->generateUsersDirectory($request->picture, $create_users->user_id)]);

            return redirect()->route('loginPage')->with('success', 'Registrasi Berhasil');;
        }else{
            return redirect()->back()->with('error', 'Gagal mendaftarkan user')->withInput();
        }


    }

    public function generateUsersDirectory($picture,$user_id){


        $MAIN_PATH = public_path("assets" . DIRECTORY_SEPARATOR . "users" . DIRECTORY_SEPARATOR . $user_id . DIRECTORY_SEPARATOR);

        // intinya check main_pathnya udh kebuat belum kalo belom
        // mkdir artinya buat, 0777 cari gugel intinya ini chmode, truenya kalo ga ada ya dibuat
        if(!file_exists($MAIN_PATH)) mkdir($MAIN_PATH, 0777, true);




        $randomString = Str::random(10);
        $extension = $picture->getClientOriginalExtension();
        $picture_name = "{$randomString}.{$extension}";

        $picture->move($MAIN_PATH, $picture_name);

        $path = "assets/users/{$user_id}/{$picture_name}";

        return $path;
    }



    public function getAllRole(){
        return $role = Role::all();
    }
}
