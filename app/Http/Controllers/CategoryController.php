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

        $data = $request->validate(rules: [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:category,id',
            'thumbnail' => 'nullable|image|max:4048', // Ảnh tối đa 2MB
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
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['error' => 'Danh mục không tồn tại'], 404);
        }    
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:category,id',
            'thumbnail' => 'nullable|image|max:4048',
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
        }else {
            // Nếu không có ảnh mới, giữ nguyên ảnh cũ
            $data['thumbnail'] = $category->thumbnail;
        }
        $category->update($data);
        return response()->json(data: ['success' => true ,'data' => $data ,'data2' =>   $category]);
    }

    // Xóa danh mục
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);

            // Xóa hình ảnh nếu tồn tại
            if ($category->thumbnail && file_exists(public_path('images/categories/' . $category->thumbnail))) {
                unlink(public_path('images/categories/' . $category->thumbnail));
            }

            $category->delete();

            // Trả về phản hồi JSON thành công
            return response()->json(['success' => 'Danh mục đã được xóa thành công.']);
        } catch (\Exception $e) {
            // Trả về phản hồi JSON lỗi
            return response()->json(['error' => 'Không thể xóa danh mục.'], 500);
        }
    }
}
