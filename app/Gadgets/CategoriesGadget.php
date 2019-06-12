<?php

namespace App\Gadgets;

use App\Gadgets\Contracts\GadgetContract;
use App\Category;

class CategoriesGadget implements GadgetContract
{
    // public function execute()
    // {
    //     $data = Category::all();
    //     return $data;
    // }

    public function execute()
    {
        $categories = \App\Category::find(\App\Post::where('status',2)->get('category_id'));
        // $data = Category::all();
        return view('gadgets::categories', [
            'data' => $categories
            // 'data' => $data
            ]
        );
    }
}
