<?php

namespace App\Http\Controllers\API;

use Validator;
use Illuminate\Http\Request;

use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'isbn' => 'digits_between:10,13'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }

        $books = [];

        if ($request->has('isbn')) {
            $isbn = $request->get('isbn');
            $books = Book::where('isbn', $isbn)->get();

            if (sizeof($books) == 0) {
                $books = Book::search($isbn);
            }
        }
        else {
            // TODO: use pagination instead of all
            $books = Book::all();
        }

        return response()->json([
            'message' => 'OK',
            'data' => $books
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
