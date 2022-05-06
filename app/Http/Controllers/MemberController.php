<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request,$next) {
            $role = Auth::user()->role;
            if($role != 'admin'){
                abort(403);
            }
            return $next($request);
        });
    }
    
    public function index(Request $request)
    {
        if($request->ajax() ){
            $collection = User::where('role', 'siswa')->where('name','like','%'.$request->keywords.'%')->paginate(10);
            return view('pages.member.list',compact('collection'));
        }
        return view('pages.member.main');
    }

    public function create()
    {
        return view('pages.member.input', ['data' => new User]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'id_user' => 'required|unique:users,userId',
            'email' => 'unique:users,email',
            'jenis_kelamin' => 'required',
            'hak_akses' => 'required',
            'kata_sandi' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif ($errors->has('id_user')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_user'),
                ]);
            }elseif ($errors->has('jenis_kelamin')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis_kelamin'),
                ]);
            }elseif ($errors->has('hak_akses')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('hak_akses'),
                ]);
            }elseif ($errors->has('kata_sandi')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kata_sandi'),
                ]);
            }elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }
        }
        $member = new User;
        $member->name = $request->nama;
        $member->userId = $request->id_user;
        $member->gender = $request->jenis_kelamin;
        $member->email = $request->email;
        $member->address = $request->alamat;
        $member->role = $request->hak_akses;
        $member->password = Hash::make($request->kata_sandi);
        $member->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Anggota '. $request->title . ' tersimpan',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit(User $member)
    {
        return view('pages.member.input', ['data' => $member]);
    }

    public function update(Request $request, User $member)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'id_user' => 'required|unique:users,userId,'.$member->id,
            'email' => 'unique:users,email,'.$member->id,
            'jenis_kelamin' => 'required',
            'hak_akses' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif ($errors->has('id_user')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_user'),
                ]);
            }elseif ($errors->has('jenis_kelamin')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis_kelamin'),
                ]);
            }elseif ($errors->has('hak_akses')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('hak_akses'),
                ]);
            }elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }
        }
        $member->name = $request->nama;
        $member->userId = $request->id_user;
        $member->gender = $request->jenis_kelamin;
        $member->email = $request->email;
        $member->address = $request->alamat;
        $member->role = $request->hak_akses;
        $member->password = Hash::make($request->kata_sandi);
        $member->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Anggota '. $request->title . ' diubah',
        ]);
    }

    public function destroy(User $member)
    {
        $member->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data anggota terhapus',
        ]);
    }
}
