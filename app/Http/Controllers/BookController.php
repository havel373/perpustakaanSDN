<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request,$next) {
            $role = Auth::user()->role;
            if($role == 'siswa'){
                abort(403);
            }
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax() ){
            $collection = Book::where('name','like','%'.$request->keywords.'%')->paginate(10);
            return view('pages.book.list',compact('collection'));
        }
        return view('pages.book.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.book.input',['data' => new Book]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'type' => 'required',
                'year_release' => 'required',
                'image' => 'required',
                'publisher' => 'required',
                'description' => 'required',
                'qty' => 'required',
                'number' => 'required',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('name')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('name'),
                    ]);
                }elseif ($errors->has('type')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('type'),
                    ]);
                }elseif ($errors->has('year_release')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('year_release'),
                    ]);
                }elseif ($errors->has('image')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('image'),
                    ]);
                }elseif ($errors->has('publisher')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('publisher'),
                    ]);
                }elseif ($errors->has('description')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('description'),
                    ]);
                }elseif ($errors->has('number')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('number'),
                    ]);
                }elseif ($errors->has('qty')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('qty'),
                    ]);
                }
            }

            $file = request()->file('image')->store("buku");
            $book = new Book;
            $book->name = $request->name;
            $book->type = $request->type;
            $book->year_release = $request->year_release;
            $book->image = $file;
            $book->publisher = $request->publisher;
            $book->description = $request->description;
            $book->qty = $request->qty;
            $book->number = $request->number;
            $book->status = 'pending';
            $book->save();

            return response()->json([
                'alert' => 'success',
                'message' => 'Buku '. $book->name . ' tersimpan',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('pages.book.detail', ['data' => $book]);
    }

    public function accept(Book $book)
    {
        $book->status = 'accept';
        $book->update(); 
        return response()->json([
            'alert' => 'success',
            'message' => 'Buku '. $book->name . ' di terima',
        ]);
    }

    public function decline(Book $book)
    {
        $book->status = 'decline';
        $book->update(); 
        return response()->json([
            'alert' => 'success',
            'message' => 'Buku '. $book->name . ' di tolak',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('pages.book.input', ['data' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'year_release' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'qty' => 'required',
            'number' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name'),
                ]);
            }elseif ($errors->has('type')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('type'),
                ]);
            }elseif ($errors->has('year_release')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('year_release'),
                ]);
            }elseif ($errors->has('publisher')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('publisher'),
                ]);
            }elseif ($errors->has('description')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('description'),
                ]);
            }elseif ($errors->has('number')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('number'),
                ]);
            }elseif ($errors->has('qty')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('qty'),
                ]);
            }
        }
        if($request->image){
            Storage::delete($book->image);
            $file = request()->file('image')->store("buku");
            $book
            ->update([
                'name' => $request->name,
                'type' => $request->type,
                'year_release' => $request->year_release,
                'publisher' => $request->publisher,
                'description' => $request->description,
                'qty' => $request->qty, 
                'image' => $file, 
                'number' => $request->number,
            ]);
        }else{
            $book
            ->update([
                'name' => $request->name,
                'type' => $request->type,
                'year_release' => $request->year_release,
                'publisher' => $request->publisher,
                'description' => $request->description,
                'qty' => $request->qty, 
                'number' => $request->number,
            ]);
        }        
        return response()->json([
            'alert' => 'success',
            'message' => 'Buku '. $book->name . ' terupdate',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        Storage::delete($book->image);
        return response()->json([
            'alert' => 'success',
            'message' => 'Buku '. $book->name . ' terhapus',
        ]);
    }
}
