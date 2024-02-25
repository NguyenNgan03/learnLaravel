<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // hiển thị danh sách
    public function index()
    {
        return view('clients/categories/list');
    }

    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    public function updateCategory($id)
    {
        return 'submit sửa chuyên mục id'.$id;
    }
    // show 
    public function  addCategory()
    {
        return view('clients\categories\add');
    }

    public function handleAddCategory()
    {
        return 'submit thêm chuyên mục';
    }

    public function deleteCategory($id)
    {
        return 'submit xóa chuyên mục'.$id;
    }
}
