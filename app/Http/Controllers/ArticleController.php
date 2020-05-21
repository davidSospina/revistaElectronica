<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticlePost;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('name', 'desc')->paginate(5);
        return view('dashboard.article.index', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        $users = User::pluck('id','name');
        return view("dashboard.article.create", ['article'=>new Article(),  'categories' => $categories, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticlePost $request)
    {
        Article::create($request->validated());
        return back()->with('status', 'El artículo se ha registrado con éxito.');

        /*
        $article = new Article;

        $article->name = $request->name;
        $article->category_id = $request->category_id;
        $article->desription = $request->desription;
        $article->review_date = $request->review_date;
        $article->state = $request->state;
        $article->author_id = $request->author_id;

        $pathPdf = $request->file('archive_pdf')->move('articles', time().$request->archive_pdf->getClientOriginalName());
        $article->archive_pdf = $pathPdf;

        if ($article->save()) {
            return redirect()->route('dashboard.article.create')->with('status', 'El artículo se ha registrado con éxito.');
        }
        return redirect()->route('dashboard.article.create')->with('status', 'No es posible registrar el artículo.');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('dashboard.article.show', ["article"=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.article.edit', ["article"=>$article,  'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticlePost $request, Article $article)
    {
        $article->update($request->validated());
        return back()->with('status', 'Artículo modificado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('status', 'Artículo eliminado con éxito.');
    }
}
