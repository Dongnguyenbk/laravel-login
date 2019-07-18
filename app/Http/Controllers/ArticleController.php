<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleFormRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::paginate(10);

        return view('articles.index', compact('article'));
    }

    public function details($id)
    {
        $article = Article::find($id);

        return view('articles.details')->with('article', $article);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {
        $title = Input::get('title');
        $description = Input::get('description');
        $content = Input::get('content');

        Article::create([
            'title' => $title,
            'description' => $description,
            'content' => $content
        ]);

        return redirect()->route('article.index');
    }

    public function edit($id) {
        $article = Article::find($id);

        return view('articles.edit')->with('article', $article);
    }

    public function update($id, ArticleFormRequest $request) {
        $article = Article::find($id);
        
        $article->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'content' => $request->get('content')
        ]);

        return redirect()->route('article.index');
    }

    public function destroy($id) {
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('article.index');
    }
}
