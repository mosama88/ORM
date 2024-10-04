<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class POSTController extends Controller
{


    public function index()
    {
        // $collect = collect([1, 2, 3]);
        // dd($collect);
        // $data = dd( Post::orderBy('id', 'DESC')->take(1)->toSql());
        $data = Post::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.posts.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $post['title'] = $request->title;
            $post['discription'] = $request->title;
            $post['notes'] = $request->title;
            $post['created_by'] = Auth::user()->id;


            Post::create($post);


            DB::commit();
            return redirect()->route('posts.index')->with('success', 'added Posts Success');
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
        $info = Post::findOrFail($id);
        return view('dashboard.posts.edit', ['info' => $info]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $postUpdate = Post::findOrFail($id);
            $postUpdate['title'] = $request->title;
            $postUpdate['discription'] = $request->title;
            $postUpdate['notes'] = $request->title;
            $post['updated_by'] = Auth::user()->id;


            $postUpdate->save();


            DB::commit();
            return redirect()->route('posts.index')->with('success', 'Update Posts Success');
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
        $postDelete = Post::findOrFail($id);
        $postDelete->delete();
        return redirect()->route('posts.index')->with('success', 'Delete Post Success');
    }
}