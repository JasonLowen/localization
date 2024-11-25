<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('newsArticle');
});

Route::get('/newsArticle', [ArticleController::class,'newsArticle']);
Route::get ('/newsArticle/id', [ArticleController :: class, 'newsArticleId']);
Route::get ('/newsArticle/en', [ArticleController :: class, 'newsArticleEn']);
