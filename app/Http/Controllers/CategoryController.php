<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
class CategoryController extends Controller
{
    // Hiển thị danh sách danh mục
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $categories = Category::paginate($perPage);

        return view('admin.page.category', compact('categories', 'perPage'));
    }

    // Lấy thông tin 1 danh mục (Xem)
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }
    public function search(Request $request)
    {
        $query = Category::query();

        // Kiểm tra nếu có từ khóa tìm kiếm
        if ($request->filled('keyword') && $request->keyword !== '') {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        // Nếu không có từ khóa tìm kiếm, lấy toàn bộ dữ liệu
        $categories = $request->filled('keyword') ? $query->get() : Category::all();

        return response()->json($categories);
    }

    // Tìm kiếm danh mục
   

    // Thêm danh mục mới
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:category,id',
            'thumbnail' => 'nullable|image|max:4048', // Ảnh tối đa 4MB
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('images/categories/'), $fileName);
            $data['thumbnail'] = $fileName;
        }

        $category = Category::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Thêm danh mục thành công!',
            'category' => $category,
            'parent_name' => $category->parent ? $category->parent->name : 'Không có', // Lấy tên danh mục cha
        ]);
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
        return response()->json([
            'success' => true,
            'message' => 'Cập nhật danh mục thành công!',
            'category' => $category,
            'parent_name' => $category->parent ? $category->parent->name : 'Không có', // Lấy tên danh mục cha
        ]);
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
            return response()->json([
                'success' => true,
                'message' => 'Danh mục đã được xóa thành công.',
                'id' => $id // Trả về ID của danh mục đã xóa để xóa hàng tương ứng trên giao diện
            ]);
        } catch (\Exception $e) {
            // Trả về phản hồi JSON lỗi
            return response()->json([
                'success' => false,
                'message' => 'Không thể xóa danh mục. Vui lòng thử lại sau.'
            ], 500);
        }
    }
}
