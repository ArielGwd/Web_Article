<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Auth; 

class ArticleController extends Controller
{
    
    // tampilkan semua artikel
    public function index()
    {
        $articles = Article::orderBy('date', 'DESC')->get();
        return view('admin.articles', compact('articles'));
    }
    
    //  tampilkan halaman menambahkan artikel
    public function addArticles()
    {
        return view('admin.articles_add');
    }

    //memasukkan data ke database
    public function storeArticles(Request $request)
    {
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->date = $request->date;
        $article->save();

        return redirect('/admin/articles');
    }

    // menampilkan halaman edit
    public function editArticles($id)
    {
        $article = Article::find($id);
        return view('admin.articles_edit', compact('article'));
    }

    // mengubah data di database
    public function updateArticles(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->date = $request->date;
        $article->update();

        return redirect()->back();
    }

    // menghapus data di database
    public function deleteArticles($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->back();
    }
}