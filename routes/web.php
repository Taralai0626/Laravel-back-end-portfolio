<?php

use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use App\Models\Profilelink;
use App\Models\Education;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\ProfileLinksController;
use App\Http\Controllers\EducationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes    
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home page for portfolio site.
Route::get('/', function () {
    return view('welcome', [
        'projects' => Project::all(),
        'skills' => Skill::all(),
        'abouts' => About::all(),
        'profilelinks' => Profilelink::all(),
        'education' => Education::all(),

    ]);
});

// Individual project pages displayed via slug url.
Route::get('/project/{project:slug}', function (Project $project) {
    return view('project', [
        'project' => $project
    ]);
})->where('project', '[A-z\-]+');



Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('login'); // Display login form.
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest'); // Process login form.
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');

Route::get('/console/skills/list', [SkillsController::class, 'list'])->middleware('auth');
Route::get('/console/skills/delete/{skill:id}', [SkillsController::class, 'delete'])->where('skill', '[0-9]+')->middleware('auth');
Route::get('/console/skills/add', [SkillsController::class, 'addForm'])->middleware('auth');
Route::post('/console/skills/add', [SkillsController::class, 'add'])->middleware('auth');
Route::get('/console/skills/edit/{skill:id}', [SkillsController::class, 'editForm'])->where('skill', '[0-9]+')->middleware('auth');
Route::post('/console/skills/edit/{skill:id}', [SkillsController::class, 'edit'])->where('skill', '[0-9]+')->middleware('auth');
Route::get('/console/skills/image/{skill:id}', [SkillsController::class, 'imageForm'])->where('skill', '[0-9]+')->middleware('auth');
Route::post('/console/skills/image/{skill:id}', [SkillsController::class, 'image'])->where('skill', '[0-9]+')->middleware('auth');

Route::get('/console/abouts/list', [AboutsController::class, 'list'])->middleware('auth');
Route::get('/console/abouts/delete/{about:id}', [AboutsController::class, 'delete'])->where('about', '[0-9]+')->middleware('auth');
Route::get('/console/abouts/add', [AboutsController::class, 'addForm'])->middleware('auth');
Route::post('/console/abouts/add', [AboutsController::class, 'add'])->middleware('auth');
Route::get('/console/abouts/edit/{about:id}', [AboutsController::class, 'editForm'])->where('about', '[0-9]+')->middleware('auth');
Route::post('/console/abouts/edit/{about:id}', [AboutsController::class, 'edit'])->where('about', '[0-9]+')->middleware('auth');
Route::get('/console/abouts/image/{about:id}', [AboutsController::class, 'imageForm'])->where('about', '[0-9]+')->middleware('auth');
Route::post('/console/abouts/image/{about:id}', [AboutsController::class, 'image'])->where('about', '[0-9]+')->middleware('auth');

// Profile Links CRUD.
Route::get('/console/profilelinks/list', [ProfileLinksController::class, 'list'])->middleware('auth');
Route::get('/console/profilelinks/add', [ProfileLinksController::class, 'addForm'])->middleware('auth');
Route::post('/console/profilelinks/add', [ProfileLinksController::class, 'add'])->middleware('auth');
Route::get('/console/profilelinks/edit/{profilelink:id}', [ProfileLinksController::class, 'editForm'])->where('profilelink', '[0-9]+')->middleware('auth');
Route::post('/console/profilelinks/edit/{profilelink:id}', [ProfileLinksController::class, 'edit'])->where('profilelink', '[0-9]+')->middleware('auth');
Route::get('/console/profilelinks/delete/{profilelink:id}', [ProfileLinksController::class, 'delete'])->where('profilelink', '[0-9]+')->middleware('auth');
Route::get('/console/profilelinks/image/{profilelink:id}', [ProfileLinksController::class, 'imageForm'])->where('profilelink', '[0-9]+')->middleware('auth');
Route::post('/console/profilelinks/image/{profilelink:id}', [ProfileLinksController::class, 'image'])->where('profilelink', '[0-9]+')->middleware('auth');

// Education CRUD.
Route::get('/console/education/list', [EducationController::class, 'list'])->middleware('auth');
Route::get('/console/education/add', [EducationController::class, 'addForm'])->middleware('auth');
Route::post('/console/education/add', [EducationController::class, 'add'])->middleware('auth');
Route::get('/console/education/edit/{education:id}', [EducationController::class, 'editForm'])->where('education', '[0-9]+')->middleware('auth');
Route::post('/console/education/edit/{education:id}', [EducationController::class, 'edit'])->where('education', '[0-9]+')->middleware('auth');
Route::get('/console/education/delete/{education:id}', [EducationController::class, 'delete'])->where('education', '[0-9]+')->middleware('auth');