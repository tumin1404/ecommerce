@extends('admin.layout')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<h1 class="text-center my-4">QUẢN LÝ DANH MỤC</h1>
<button type="button" class="btn mb-2 btn-outline-primary btn-create">
    <span class="fe fe-plus fe-16 mr-2"></span>Thêm mới
</button>

<div class="row">
    <div class="col-md-12 my-4">
      <div class="card shadow">
        <div class="card-body">
          <div class="toolbar">
            <form class="form">
              <div class="form-row">
                <div class="form-group col-3 mr-auto">
                  <label for="search" class="sr-only">Tìm kiếm</label>
                  <input type="text" class="form-control" id="search1" value="" placeholder="Tìm kiếm">
                </div>
              </div>
            </form>
          </div>
          <!-- table -->
          <table class="table table-hover table-bordered border-v">
            <thead class="thead-dark text-center">
              <tr>
                <th>Xem</th>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Danh mục cha</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary btn-view" data-id="{{ $category->id }}">Xem</button>
                        </td>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td class="text-center">{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="text-center">
                            @if($category->thumbnail && file_exists(public_path('images/categories/' . $category->thumbnail)))
                                <img src="{{ asset('images/categories/' . $category->thumbnail) }}" width="50" height="50" alt="Thumbnail">
                            @else
                                <img src="{{ asset('images/default-thumbnail.jpg') }}" width="50" height="50" alt="Default Thumbnail">
                            @endif
                        </td>
                        <td class="text-center">{{ $category->parent ? $category->parent->name : 'Không có' }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-primary btn-edit" data-id="{{ $category->id }}">Sửa</button>
                            <form action="" style="display:inline;">
                                <button type="button" class="btn btn-sm btn-danger btn-delete" data-id="{{ $category->id }}">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if($categories->isEmpty())
                    <tr><td colspan="7" class="text-center">Không có dữ liệu.</td></tr>
                @endif
            </tbody>
          </table>
          {{-- <nav aria-label="Table Paging" class="mb-0 text-muted">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav> --}}
        </div>
      </div>
    </div>
</div> <!-- end section -->

<!-- Modal -->
<div class="modal fade" id="defaulModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="defaultModalLabel">Tiêu đề</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        @csrf  
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" id="modal-name" name="name" class="form-control">
              </div>
            </div> 
            <div class="col-md-6">
              <div class="form-group">
                <label>Danh mục cha</label>
                <select id="modal-parent" class="form-control">
                    <option value="">Không có</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Mô tả</label>
                <textarea id="modal-description" class="form-control" cols="30" rows="10"></textarea>
              </div>
            </div> 
            <div class="col-md-6">
              <div class="form-group">
                <label>Hình ảnh
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </label>
                <div class="d-flex justify-content-center align-items-center border" style="height: 200px; width: 100%; overflow: hidden;">
                  <img id="modal-thumbnail" src="" alt="Hình ảnh danh mục" class="img-fluid" style="object-fit: contain; max-height: 100%; max-width: 100%;">
                </div>                
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="mx-auto">
            <button type="button" class="btn btn-outline-primary btn-save">Lưu</button>
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" id="closeModalButton">Thoát</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    // Thiết lập CSRF token cho Ajax
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // Cập nhật tên file khi chọn ảnh
    $("#customFile").on("change", function (e) {
        let fileName = e.target.files[0].name;
        $(this).next(".custom-file-label").html(fileName);
    });

    // Xử lý khi click "Thêm mới"
    $(".btn-create").on("click", function () {
        $("#defaultModalLabel").text("Thêm danh mục");
        $("#modal-name").val("");
        $("#modal-description").val("");
        $("#modal-parent").val("");
        $("#modal-thumbnail").attr("src", "");
        $("#customFile").val("");
        $(".custom-file-label").text("Choose file");
        $(".btn-save").attr("data-action", "create");
        $(".btn-save").show();
        $("#customFile").prop("disabled", false);
        $("#defaulModal").modal("show");
    });

    // Xử lý khi click "Xem"
    $(".btn-view").on("click", function () {
        let id = $(this).data("id");

        $.get("/admin/category/" + id, function (data) {
            $("#defaultModalLabel").text("Chi tiết danh mục");
            $("#modal-name").val(data.name).prop("disabled", true);
            $("#modal-description").val(data.description).prop("disabled", true);
            $("#modal-parent").val(data.parent_id).prop("disabled", true);
            $("#modal-thumbnail").attr("src", "/images/categories/" + data.thumbnail);

            // Cập nhật tên ảnh trong input file
            $(".custom-file-label").text(data.thumbnail);
            $("#customFile").val("").prop("disabled", true);

            $(".btn-save").hide();
            $("#defaulModal").modal("show");
        });
    });

    // Xử lý khi click "Sửa"
    $(".btn-edit").on("click", function () {
        let id = $(this).data("id");

        $.get("/admin/category/" + id, function (data) {
            $("#defaultModalLabel").text("Sửa danh mục");
            $("#modal-name").val(data.name).prop("disabled", false);
            $("#modal-description").val(data.description).prop("disabled", false);
            $("#modal-parent").val(data.parent_id).prop("disabled", false);
            $("#modal-thumbnail").attr("src", "/images/categories/" + data.thumbnail);

            // Cập nhật tên file ảnh
            $(".custom-file-label").text(data.thumbnail);
            $("#customFile").val("").prop("disabled", false);

            $(".btn-save").attr("data-action", "edit").attr("data-id", id).show();
            $("#defaulModal").modal("show");
        });
    });

    // Xử lý khi click "Lưu"
    $(".btn-save").on("click", function () {
        let action = $(this).attr("data-action");
        let id = $(this).attr("data-id");
        let formData = new FormData();
        
        formData.append("name", $("#modal-name").val());
        formData.append("description", $("#modal-description").val());
        formData.append("parent_id", $("#modal-parent").val());
        let file = $("#customFile")[0].files[0];
        if (file) {
          formData.append("thumbnail", file);
        }
        let url = action === "edit" ? "/admin/category/" + id : "/admin/category";
        
        let method = action === "edit" ? "PUT" : "POST";
        console.log("Dữ liệu FormData gửi đi:");
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
              location.reload();
            },
            error: function (xhr) {
                console.log(xhr.responseText);
                alert("Lỗi: " + xhr.responseText);
            },
        });
    });

    // Xử lý khi click "Xóa"
    $(".btn-delete").on("click", function () {
        let id = $(this).data("id");

        if (confirm("Bạn có chắc chắn muốn xóa danh mục này không?")) {
            $.ajax({
                url: "/admin/category/" + id,
                type: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                success: function (res) {
                    alert(res.success);
                    location.reload();
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                    alert("Lỗi: Không thể xóa danh mục.");
                },
            });
        }
    });
});

</script>

@endsection



