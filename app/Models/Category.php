<?php

namespace App\Models; // Định nghĩa namespace

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; // Sử dụng Factory để tạo dữ liệu giả

    protected $table = 'category'; // Nếu bảng không theo quy ước số nhiều, cần khai báo rõ
    protected $fillable = ['name', 'description', 'thumbnail', 'parent_id']; // Cho phép cập nhật những trường này

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id'); // Một category có thể thuộc một category cha
    }
    
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id'); // Một category có thể có nhiều category con
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail 
            ? asset('images/categories/' . $this->thumbnail) // Đường dẫn đầy đủ đến ảnh
            : asset('images/default.png'); // Đường dẫn ảnh mặc định
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value); // Tự động viết hoa chữ cái đầu
    }
}

