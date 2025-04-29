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
            return abort(code: 404, message: "No category named {$categoryName} was found.");
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
            abort(code: 403, message: "Permission denied: Insufficient rights. You must be an admin to peform this action");
        }

        $existing_category = Category::where('name', $categoryName)->first();

        if (!is_null($existing_category)) {
            abort(code: 400, message: "Category {$categoryName} already exists. Try another name.");
        }

        Category::create([$categoryName]);

        return response(content: "Category {$categoryName} was created successfully.", status: 201);
    }

    public function delete($categoryName) {
        if (auth()->user()->role !== "admin") {
            abort(code: 403, message: "Permission denied: Insufficient rights. You must be an admin to peform this action");
        }

        Category::where("name",$categoryName)->delete();

        return response(content: "Category {$categoryName} was deleted successfully.", status: 204);
    }
}
