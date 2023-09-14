<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
class PostController extends Controller
{
    public function createPost() {
        return view('createpost');
    }

    public function index() {
        $posts = DB::table('post')->get();
        return view('post', [
            'posts' => $posts
        ]);
    }


    //CREATE
    // 'post' -> nama tabel pada model
    public function store(Request $request) {
        $post = new Post;
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect('/post');
    }

    // READ 
    public function show($id) {
        $posts = Post::find($id);
        return view('showpost', [
            'posts' => $posts
        ]);
    }

    public function editPost($id) {
        $posts = Post::find($id);
        return view('editpost', [
            'posts' => $posts
        ]);
    }

    public function updatePost(Request $request, $id) {
        $posts = Post::find($id);
        $posts->judul = $request->judul;
        $posts->deskripsi = $request->deskripsi;
        $posts->save();

        return redirect('/post');
    }

    public function delete($id) {
        $posts = Post::find($id);
        $posts->delete();
        
        return redirect('/post');
    }
}
