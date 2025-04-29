<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // public function index() {
    //     return view('blogs.homepage',[
    //         'blogs' => Category::all(),
    //     ]);
    // }

    public function show($categoryName) {
        $category = Category::where("name", $categoryName)->first();

        if (is_null($category)) {
            return response('not found', 404);
        }
        
        return view('blogs.category', [
            'blogs' => $category->blogs,
            'category' => $category,
        ]);
    }

    public function edit() {
        return view('category.update');
    }

    public function create($categoryName) {
        if (auth()->user()->role !== 'admin') {
            abort(403, "Permission denied: Insufficient rights. You must be an admin to peform this action");
        }

        $existing_category = Category::where('name', $categoryName)->first();

        if (!is_null($existing_category)) {
            abort(400, "Category {$categoryName} already exists. Try another name.");
        }

        Category::create([$categoryName]);
    }

    public function delete($categoryName) {
        if (auth()->user()->role !== "admin") {
            
        }
    }
}
