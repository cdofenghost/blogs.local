<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Pail\ValueObjects\Origin\Console;
use Nette\NotImplementedException;
use function Psy\debug;

class BlogController extends Controller
{
    // Views 
    public function index() {
        return view('blogs.homepage',[
            'blogs' => Blog::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function create() {
        return view('blogs.create', [
            'categories' => Category::all(),
        ]);
    }

    public function edit() {
        return view("users.update");
    }

    // Other
    public function store(Request $request) {
        $user = auth()->user();

        if (is_null($user)) {
            abort(401, 'Not Authorized.');
        }

        if ($user->role !== 'author') {
            abort(403, "Insufficient rights: you have no author status to perform this task.");
        }

        $request['author_id'] = $user->id;

        $formFields = $request->validate([
            'author_id' => 'required|int',
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $formFields['hidden'] = false;

        //dd($formFields);

        $category = Category::where('name', $formFields['category_id'])->first();
        if (is_null($category)) {
            abort(404, "Category with such name wasn't found.");
        }

        $formFields['category_id'] = $category->id;

        if (array_key_exists('preview_image', $formFields) == false) {
            $formFields['preview_image'] = "default";
        }

        $blog = Blog::create($formFields);
        
        return redirect('/', status: 201);
    }

    public function update(Request $request) {
        $user = auth()->user();
    }

    public function show(Blog $blog) {
        return view('blogs.blog', [
            'blog' => $blog,
            'author' => User::find($blog->author_id),
        ]);
    }
}
