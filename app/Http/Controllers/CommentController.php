<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $collect = collect([1, 2, 3]);
        // dd($collect);
        // $data = dd( Post::orderBy('id', 'DESC')->take(1)->toSql());
        $data = Comment::orderBy('id', 'DESC')->get();
        return view('dashboard.comments.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $comment['name'] = $request->name;
            $comment['comments'] = $request->comments;
            $comment['description'] = $request->description;
            $comment['date'] = $request->date;

            Comment::create($comment);

            DB::commit();
            return redirect()->route('comments.index')->with('success', 'added Comments Success');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred: ' . $ex->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info = Comment::findOrFail($id);
        return view('dashboard.comments.edit', ['info' => $info]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $commentUpdate = Comment::findOrFail($id);
            $commentUpdate['name'] = $request->name;
            $commentUpdate['comments'] = $request->comments;
            $commentUpdate['description'] = $request->description;
            $commentUpdate['date'] = $request->date;

            $commentUpdate->save();


            DB::commit();
            return redirect()->route('comments.index')->with('success', 'Update Comme Success');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred: ' . $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postDelete = Comment::findOrFail($id);
        $postDelete->delete();
        return redirect()->route('comments.index')->with('success', 'Delete Post Success');
    }
}