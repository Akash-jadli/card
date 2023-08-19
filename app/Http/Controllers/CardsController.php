<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Dumpcategory;
use App\Models\News;
use App\Models\Bases;


class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('categoryName', 'categoryId'); // Fetch category names and ids
        return view('admin.creditCards', compact('categories'));
    }

    public function dumps()
    {
        $dumpcategory = Dumpcategory::pluck('categoryName', 'id'); // Fetch category names and ids
        return view('admin.dumps', compact('dumpcategory'));
    }

    public function news()
    {
        $news = News::where('category', '1')
            ->orderByRaw("DATE_FORMAT(date, '%d%m%Y') DESC")
            ->get();

        $bases = Bases::leftJoin('dumpcategories', 'bases.category', '=', 'dumpcategories.id')
            ->where('type', '1')
            ->orderBy('precent', 'DESC')
            ->get();

        $news2 = News::where('category', '2')
            ->orderByRaw("DATE_FORMAT(date, '%d%m%Y') DESC")
            ->get();

        $bases2 = Bases::leftJoin('category', 'bases.category', '=', 'category.categoryId')
            ->where('type', '2')
            ->orderBy('precent', 'DESC')
            ->get();

        return view('admin.dashboard', compact('news', 'bases', 'news2', 'bases2'));
    }

    public function checkcc(){
        return view('admin.checkcc');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
