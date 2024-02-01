<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleFormRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct() {
      $this->middleware('auth')->except('index','show');
    }

      
    public function index (){

        $articles=Article::all();
      return view('article.index',
       
      compact('articles')
    
    );
    }

    public function show ( Article $article){


      return view('article.show',
      compact('article')
    );
    }





  public function create (){

    $categories = Category::all();

    $tags = Tag::all();

    return view('article.create', compact('categories','tags'));
  }

  public function store (ArticleFormRequest $request){

    // $request->validate([
    //    'title'=> 'required',
    //    'author'=> 'required',
    //    'body'=> 'required',
    // ]);


    
    // $title = $request->title;
    // $author = $request->author;
    // $body = $request->body;

    // $article = new Article();

    // $article->title = $title;
    // $article->author = $author;
    // $article->body = $body;

    // $article->save();
    if($request->file('img')){
      $img = $request->file('img')->store('public/image');
    }
    else {
      $img='public/image/default.jpg';
    }



    //? METODO MASS ASSIGNMENT

    $article = Article::create([
        'title'=> $request ->title,
        // 'author'=> $request ->author,
        'body'=> $request ->body,
        'img'=>$img,
        'user_id' => Auth::id(),
        'category_id' => $request->category,
    ]);

    $article->tags()->attach($request->tags);

    return redirect()->back()->with('message','Articolo inserito correttamente');

  }


  public function edit(Article $article){

    $categories = Category::all();
    $tags = Tag::all();

      return view('article.edit', compact('article','categories','tags'));

  }

  

  public function update(Article $article , Request $request){

    if($request->file('img')){
      $img = $request->file('img')->store('public/image');
    }
    else {
      $img=$article->img;
    }


    $article->update([
      'title'=> $request ->title,
      'body'=> $request ->body,
      'img'=>$img,
      'user_id' => Auth::id(),
      'category_id' => $request->category,
    ]);

    $article->tags()->sync($request->tags);
    
    return redirect()->back()->with('message','Articolo modificato correttamente');
  }


  public function destroy(Article $article){

    $article->tags()->detach();

     $article->delete();

     return redirect(route('article.index'))->with('message','Articolo eliminato correttamente');
  }
}

