<?php

namespace App\Http\Controllers;

use App\Helpers\UploadsFiles;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function storeArticle(ArticleRequest $articleRequest)
    {
        $image = $articleRequest->file('image');
        $imageName = uniqid('article_', true) . '.' . $image->getClientOriginalExtension();
        $image->move(UploadsFiles::getUploadPath('post_image'), $imageName);
        
        $article = Article::create([
            'title' => $articleRequest->get('title'),
            'post' => $articleRequest->get('post'),
            'image' => $imageName,
            'user_id' => Auth::id(),
        ]);
        
        dd($article);
    }
    
    public function indexArticle()
    {
      
        $articles = Article::with('users')->select(['title', 'image', 'user_id'])->get();
        return view('article.index', compact('articles'));
    }
}
