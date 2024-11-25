<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class ArticleController extends Controller

{
    public function newsArticle($locale= 'en') {
        App :: setLocale($locale);
        return view('newsArticle');
    }
    public function newsArticleId(){
        App:: setLocale('id');
        return view( 'newsArticle' );
    }
    public function newsArticleEn(){
        App:: setLocale('en');
        return view('newsArticle' );
    }
}
