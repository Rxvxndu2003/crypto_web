<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

route::get('/',[TemplateController::class,'index']);
route::get('/about',[TemplateController::class,'about']);
route::get('/service',[TemplateController::class,'service']);
route::get('/pricing',[TemplateController::class,'pricing']);
route::get('/blog',[TemplateController::class,'blog']);
route::get('/blogdetails',[TemplateController::class,'blogdetails']);
route::get('/contact',[TemplateController::class,'contact']);
route::get('/privacy',[TemplateController::class,'privacy']);
route::get('/education',[TemplateController::class,'education']);
