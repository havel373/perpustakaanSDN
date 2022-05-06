<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VisitorController extends Controller
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
            $collection = Visitor::
            // where('name','like','%'.$request->keywords.'%')->
            paginate(10);
            return view('pages.visitor.list',compact('collection'));
        }
        return view('pages.visitor.main');
    }

    public function create()
    {
        $user = User::where('role','!=','admin')->where('role','!=','kepsek')->get();
        return view('pages.visitor.input', ['visitor' => new Visitor, 'user' => $user]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('user_id')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('user_id'),
                ]);
            }
        }
        $visitor = new Visitor;
        $visitor->user_id = $request->user_id;
        $visitor->visit_at = date('Y-m-d H:i:s');
        $visitor->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pengunjung '. $visitor->user->name . ' tersimpan',
        ]);
    }

    public function show(User $user)
    {
        // 
    }

    public function edit(Visitor $visitor)
    {
        $user = User::where('role','!=','admin')->where('role','!=','kepsek')->get();
        return view('pages.visitor.input', compact('visitor','user'));
    }

    public function update(Request $request, Visitor $visitor)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('user_id')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('user_id'),
                ]);
            }
        }
        $visitor->user_id = $request->user_id;
        $visitor->visit_at = date('Y-m-d H:i:s');
        $visitor->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pengunjung '. $visitor->user->name . ' terupdate',
        ]);
    }

    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pengunjung '.  $visitor->user->name . ' terhapus',
        ]);
    }
}
