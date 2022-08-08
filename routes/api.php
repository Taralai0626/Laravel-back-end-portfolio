<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use App\Models\Education;
use App\Models\Profilelink;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});

Route::get('/skills', function(){

    $skills = Skill::orderBy('created_at')->get();

    foreach($skills as $key => $skill)
    {
        $skills[$key]['user'] = User::where('id', $skill['user_id'])->first();
        

        if($skill['image'])
        {
            $skills[$key]['image'] = env('APP_URL').'storage/'.$skill['image'];
        }
    }

    return $skills;

});

Route::get('/skills/skill/{skill?}', function(Skill $skill){

    $skill['user'] = User::where('id', $skill['user_id'])->first();
    

    if($skill['image'])
    {
        $skill['image'] = env('APP_URL').'storage/'.$skill['image'];
    }

    return $skill;

});

Route::get('/abouts', function(){

    $abouts = About::orderBy('created_at')->get();

    foreach($abouts as $key => $about)
    {
        $abouts[$key]['user'] = User::where('id', $about['user_id'])->first();
        
        if($about['image'])
        {
            $abouts[$key]['image'] = env('APP_URL').'storage/'.$about['image'];
        }
    }

    return $abouts;

});

Route::get('/abouts/profile/{about?}', function(About $about){

    $about['user'] = User::where('id', $about['user_id'])->first();
    
    if($about['image'])
    {
        $about['image'] = env('APP_URL').'storage/'.$about['image'];
    }

    return $about;

});

Route::get('/profileLinks', function(){

    $profileLinks = ProfileLink::orderBy('created_at')->get();

    foreach($profileLinks as $key => $profileLink)
    {
        $profileLinks[$key]['user'] = User::where('id', $profileLink['user_id'])->first();

        if($profileLink['image'])
        {
            $profileLinks[$key]['image'] = env('APP_URL').'storage/'.$profileLink['image'];
        }
    }

    return $profileLinks;

});

Route::get('/profileLinks/profile/{profileLink?}', function(ProfileLink $profileLink){

    $profileLink['user'] = User::where('id', $profileLink['user_id'])->first();
   
    if($profileLink['image'])
    {
        $profileLink['image'] = env('APP_URL').'storage/'.$profileLink['image'];
    }

    return $profileLink;

});


Route::get('/educations', function(){

    $educations = Education::orderBy('created_at')->get();

    foreach($educations as $key => $education)
    {
        $educations[$key]['user'] = User::where('id', $education['user_id'])->first();
    }

    return $educations;

});

Route::get('/educations/profile/{education?}', function(Education $education){

    $education['user'] = User::where('id', $education['user_id'])->first();
   
    return $education;

});
