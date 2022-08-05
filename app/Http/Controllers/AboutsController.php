<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\About;

class AboutsController extends Controller
{
    public function list()
    {
        return view('abouts.list',[
            'abouts' => About::all()
        ]);
    }

    public function delete(About $about)
    {
        $about->delete();
        
        return redirect('/console/abouts/list')
            ->with('message', 'About has been deleted!');        
    }

    public function addForm()
    {
        return view('abouts.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $about = new About();
        $about->title = $attributes['title'];
        $about->content = $attributes['content'];
        $about->user_id = Auth::user()->id;
        $about->save();

        return redirect('/console/abouts/list')
            ->with('message', 'About has been added!');
    }

    public function editForm(About $about)
    {
        return view('abouts.edit', [
            'about' => $about,
        ]);
    }

    public function edit(About $about)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            
        ]);

        $about->title = $attributes['title'];
        $about->content = $attributes['content'];
        $about->save();

        return redirect('/console/abouts/list')
            ->with('message', 'About has been edited!');
    }

    public function imageForm(About $about)
    {
        return view('abouts.image', [
            'about' => $about,
        ]);
    }

    public function image(About $about)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($about->image);
        
        $path = request()->file('image')->store('abouts');

        $about->image = $path;
        $about->save();
        
        return redirect('/console/abouts/list')
            ->with('message', 'About image has been edited!');
    }
    

}
