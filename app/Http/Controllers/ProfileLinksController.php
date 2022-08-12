<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Profilelink;

class ProfileLinksController extends Controller
{
    // 
    public function list(){
        return view('profilelinks.list', [
            'profilelinks' => Profilelink::all() // Local variable: Data provided to 'list' view pg is gathered by 'profile_links' array parameter. Fetch all from Profilelink model
        ]);
    }

    public function addForm()
    {
        return view('profilelinks.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'url' => 'nullable|url',
        ]);

        $profilelink = new Profilelink();
        $profilelink->name = $attributes['name'];
        $profilelink->url = $attributes['url'];
        $profilelink->user_id = Auth::user()->id;
        $profilelink->save();

        return redirect('/console/profilelinks/list')
            ->with('message', 'New profile link has been added.');
    }

    public function editForm(Profilelink $profilelink)
    {
        return view('profilelinks.edit', [
            'profilelink' => $profilelink,
        ]);
    }

    public function edit(Profilelink $profilelink)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'url' => 'nullable|url',
        ]);

        $profilelink->name = $attributes['name'];
        $profilelink->url = $attributes['url'];
        $profilelink->save();

        return redirect('/console/profilelinks/list')
            ->with('message', 'Profile link has been edited.');
    }

    public function delete(Profilelink $profilelink)
    {
        $profilelink->delete();
        
        return redirect('/console/profilelinks/list')
            ->with('message', 'Profile link has been deleted!');        
    }

    public function imageForm(Profilelink $profilelink)
    {
        return view('profilelinks.image', [
            'profilelink' => $profilelink,
        ]);
    }

    public function image(Profilelink $profilelink)
    {

        $attributes = request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ,
        ]);
        
        $path = request()->file('image')->store('profilelinks', 's3');

        $profilelink->image = Storage::disk('s3')->url($path);
        $profilelink->save();
        
        return redirect('/console/profilelinks/list')
            ->with('message', 'Profile link image has been updated.');
    }
}
