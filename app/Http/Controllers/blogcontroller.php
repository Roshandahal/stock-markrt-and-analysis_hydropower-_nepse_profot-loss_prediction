<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function updateblog(){
        $news=blog::all();
        return view('blog.updateblog',compact('news'));
    }

    public function store(Request $request)
    {


        // $validated = $request->validate([
        //     'heading' => 'required',
        //     'about' => 'required',
        //     'profile_image' => ''
            
        // ]);
        $request->validate([
            'headline' => 'required',
            'about' => 'required',
            'profile_image' => 'nullable',
        ]);

        $postnews = new blog();
        $postnews->headline = $request->input('headline');
        $postnews->about = $request->input('about');
        if ($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/news/', $filename);
            $postnews->profile_image = $filename;
        }
        $postnews->save();
        return redirect()->back()->with('status','Yor post has been successfully placed.');
        
    }
    public function destroy($id){
        $updateblog = blog::find($id);
        $updateblog->delete();
        return redirect()->back()->with('status', 'The post has been delete successfully !.');
    }

    // user interface of the blog controller
    public function blog(){
        $news=blog::all();
        return view('blog.blog',compact('news'));
    }

    // for edit of the blog page 
    public function editblog($id){
        $blog=blog::find($id);
        return view('blog.editblog',compact('blog'));
    }

    // for updating the controller 
    public function update(Request $request,$id){
        $updateblog = blog::find($id);
        $updateblog->headline = $request->input('headline');
        $updateblog->about = $request->input('about');
        if ($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/news/', $filename);
            $updateblog->profile_image = $filename;
        }
        
        $updateblog->update();
        return redirect('/admin/updateblog')->with('status', 'The blog content has been updated successfully !.');

    }

}
