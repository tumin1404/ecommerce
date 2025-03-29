<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Hiển thị danh sách danh mục
    public function index()
    {
        $categories = Category::all();
        return view('admin.page.category', compact('categories'));
    }

    // Lấy thông tin 1 danh mục (Xem)
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    // Thêm danh mục mới
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
            'thumbnail' => 'nullable|image|max:2048', // Ảnh tối đa 2MB
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('images/categories/'), $fileName);
            $data['thumbnail'] = $fileName;
        }

        Category::create($data);
        return response()->json(['message' => 'Thêm danh mục thành công!']);
    }

    // Cập nhật danh mục
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Xóa ảnh cũ nếu có
            if ($category->thumbnail && file_exists(public_path('images/categories/' . $category->thumbnail))) {
                unlink(public_path('images/categories/' . $category->thumbnail));
            }
            // Lưu ảnh mới
            $file = $request->file('thumbnail');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('images/categories/'), $fileName);
            $data['thumbnail'] = $fileName;
        }
        $category->update($request->all());
        return response()->json(['success' => true]);
    }
}
