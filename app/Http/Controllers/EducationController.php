<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Education;

class EducationController extends Controller
{
    //
    public function list(){
        return view('education.list', [
            'education' => Education::all() // Local variable: Data provided to 'list' view pg is gathered by 'profile_links' array parameter. Fetch all from Education model
        ]);
    }

    public function addForm()
    {
        return view('education.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'course_name' => 'required',
            'institution_name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $education = new Education();
        $education->course_name = $attributes['course_name'];
        $education->institution_name = $attributes['institution_name'];
        $education->description = $attributes['description'];
        $education->date = $attributes['date'];
        $education->user_id = Auth::user()->id;
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'New education entry has been added.');
    }

    public function editForm(Education $education)
    {
        return view('education.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'course_name' => 'required',
            'institution_name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $education->course_name = $attributes['course_name'];
        $education->institution_name = $attributes['institution_name'];
        $education->description = $attributes['description'];
        $education->date = $attributes['date'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education entry has been edited.');
    }

    public function delete(Education $education)
    {
        $education->delete();
        
        return redirect('/console/education/list')
            ->with('message', 'Education entry has been deleted!');        
    }

}
