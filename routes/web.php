<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

route::get('/',[TemplateController::class,'index']);
route::get('/about',[TemplateController::class,'about']);
route::get('/service',[TemplateController::class,'service']);
route::get('/pricing',[TemplateController::class,'pricing']);
