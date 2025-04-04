@extends('admin.layout')
@section('content')

  <div id="toast-container" class="toast-container position-fixed top-0 end-0 p-3"></div>

  <h1 class="text-center my-4">QUẢN LÝ DANH MỤC</h1>
  <div class="row">
    <div class="col-md-12 my-4">
      <div class="card shadow">
      <div class="card-body">
        <div class="toolbar d-flex justify-content-between align-items-center mb-3">
        <button type="button" class="btn btn-outline-primary btn-create">
          <span class="fe fe-plus fe-16 me-2"></span>Thêm mới
        </button>
        <form class="form col-3" id="searchForm">
          <div class="form-group position-relative">
            <label for="searchInput" class="sr-only">Tìm kiếm</label>
            <input type="text" class="form-control" id="searchInput" 
               placeholder="Nhập từ khóa..." autocomplete="off">
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
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-outline-primary btn-view" data-id="{{ $category->id }}">
                <span class="fe fe-eye me-1"></span>Xem
                </button>
              </td>
              <td class="text-center">{{ $key + 1 }}</td>
              <td class="text-center">{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td class="text-center">
                @if($category->thumbnail && file_exists(public_path('images/categories/' . $category->thumbnail)))
                  <img src="{{ asset('images/categories/' . $category->thumbnail) }}" width="50" height="50" alt="Thumbnail">
                @endif
              </td>
              <td class="text-center">{{ $category->parent ? $category->parent->name : 'Không có' }}</td>
              <td class="text-center">
                <button type="button" class="btn btn-sm btn-outline-primary btn-edit" data-id="{{ $category->id }}">
                  <span class="fe fe-edit me-1"></span>Sửa</button>
                <button type="button" class="btn btn-sm btn-outline-danger btn-delete" data-id="{{ $category->id }}">
                  <span class="fe fe-trash-2 me-1"></span>Xóa</button>
              </td>
            </tr>
          @endforeach

          @if($categories->isEmpty())
            <tr><td colspan="7" class="text-center">Không có dữ liệu.</td></tr>
          @endif
        </tbody>
        </table>
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

  <!-- Modal xác nhận xóa -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content border border-danger">
      <div class="modal-header bg-danger text-center">
      <h5 class="modal-title text-white w-100">Bạn có chắc chắn muốn xóa không?</h5>
      </div>
      <div class="modal-body text-center d-flex justify-content-center gap-4 px-4">
      <button type="button" class="btn btn-outline-danger" id="confirm-delete">Xóa</button>
      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy</button>
      </div>
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

    // Hàm hiển thị toast
    function showToast(type, message, iconClass) {
      const toastId = `toast-${Date.now()}`;
      const toastHtml = `
        <div id="${toastId}" class="toast fade overflow-hidden" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-body alert alert-${type} m-0 p-2 d-flex align-items-center" role="alert">
            <span class="${iconClass} fe-16 me-2"></span> ${message}
          </div>
        </div>
      `;
      const toastContainer = document.getElementById('toast-container');
      toastContainer.insertAdjacentHTML('beforeend', toastHtml);
      const toastElement = document.getElementById(toastId);
      const toast = new bootstrap.Toast(toastElement, { autohide: false });
      toast.show();
      setTimeout(() => toast.hide(), 4000);
    }

    // Cập nhật tên file khi chọn ảnh
    $("#customFile").on("change", function (e) {
      let fileName = e.target.files[0].name;
      $(this).next(".custom-file-label").html(fileName);
    });

    // Hiển thị preview ảnh khi chọn file
    $("#customFile").on("change", function (e) {
      let file = e.target.files[0]; // Lấy file được chọn
      if (file) {
        let reader = new FileReader(); // Tạo FileReader để đọc file
        reader.onload = function (event) {
          $("#modal-thumbnail").attr("src", event.target.result); // Hiển thị ảnh preview
        };
        reader.readAsDataURL(file); // Đọc file dưới dạng URL
      } else {
        $("#modal-thumbnail").attr("src", ""); // Xóa preview nếu không có file
      }
    });

    // Xử lý khi click "Thêm mới"
    $(".btn-create").on("click", function () {
      $("#defaultModalLabel").text("Thêm danh mục");
      $("#modal-name").val("").prop("disabled", false); // Reset và bật input
      $("#modal-description").val("").prop("disabled", false); // Reset và bật textarea
      $("#modal-parent").val("").prop("disabled", false); // Reset và bật select
      $("#modal-thumbnail").attr("src", ""); // Xóa ảnh preview
      $("#customFile").val("").prop("disabled", false); // Reset và bật input file
      $(".custom-file-label").text("Choose file"); // Reset tên file
      $(".btn-save").attr("data-action", "create").show(); // Đặt action là "create"
      $("#defaulModal").modal("show"); // Hiển thị modal
    });

    // Xử lý khi click "Xem"
    $(".btn-view").on("click", function () {
      let id = $(this).data("id");

      $.get("/admin/category/" + id, function (data) {
        if (data) {
          $("#defaultModalLabel").text("Chi tiết danh mục");
          $("#modal-name").val(data.name).prop("disabled", true);
          $("#modal-description").val(data.description).prop("disabled", true);
          $("#modal-parent").val(data.parent_id).prop("disabled", true);
          $("#modal-thumbnail").attr("src", "/images/categories/" + data.thumbnail);

          $(".custom-file-label").text(data.thumbnail);
          $("#customFile").val("").prop("disabled", true);

          $(".btn-save").hide();
          $("#defaulModal").modal("show");
        } else {
          showToast("danger", "Không tìm thấy danh mục!", "fe fe-x-circle");
        }
      }).fail(function () {
        showToast("danger", "Lỗi: Không thể tải dữ liệu danh mục.", "fe fe-x-circle");
      });
    });

    // Xử lý khi click "Sửa"
    $(".btn-edit").on("click", function () {
      let id = $(this).data("id");

      $.get("/admin/category/" + id, function (data) {
        if (data) {
          $("#defaultModalLabel").text("Sửa danh mục");
          $("#modal-name").val(data.name).prop("disabled", false);
          $("#modal-description").val(data.description).prop("disabled", false);
          $("#modal-parent").val(data.parent_id).prop("disabled", false);
          $("#modal-thumbnail").attr("src", "/images/categories/" + data.thumbnail);

          $(".custom-file-label").text(data.thumbnail);
          $("#customFile").val("").prop("disabled", false);

          $(".btn-save").attr("data-action", "edit").attr("data-id", id).show();
          $("#defaulModal").modal("show");
        } else {
          showToast("danger", "Không tìm thấy danh mục!", "fe fe-x-circle");
        }
      }).fail(function () {
        showToast("danger", "Lỗi: Không thể tải dữ liệu danh mục.", "fe fe-x-circle");
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
      let method = action === "edit" ? "POST" : "POST";

      $.ajax({
        url: url,
        type: method,
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
          if (res.success) {
            showToast("success", res.message, "fe fe-check-circle");

            if (action === "create") {
              let newRow = `
                <tr>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary btn-view" data-id="${res.category.id}">Xem</button>
                  </td>
                  <td class="text-center">${$("table tbody tr").length + 1}</td>
                  <td class="text-center">${res.category.name}</td>
                  <td>${res.category.description}</td>
                  <td class="text-center">
                    <img src="/images/categories/${res.category.thumbnail}" width="50" height="50" alt="Thumbnail">
                  </td>
                  <td class="text-center">${res.parent_name}</td>
                  <td class="text-center">
                    <button type="button" class="btn btn-sm btn-primary btn-edit" data-id="${res.category.id}">Sửa</button>
                    <button type="button" class="btn btn-sm btn-danger btn-delete" data-id="${res.category.id}">Xóa</button>
                  </td>
                </tr>
              `;
              $("table tbody").append(newRow);

              $("#modal-parent").append(`
                <option value="${res.category.id}">${res.category.name}</option>
              `);
            } else if (action === "edit") {
              let row = $(`button[data-id="${id}"]`).closest("tr");
              row.find("td:nth-child(3)").text(res.category.name);
              row.find("td:nth-child(4)").text(res.category.description);
              row.find("td:nth-child(5) img").attr("src", "/images/categories/" + res.category.thumbnail);
              row.find("td:nth-child(6)").text(res.parent_name);

              $(`#modal-parent option[value="${id}"]`).text(res.category.name);
            }

            $("#defaulModal").modal("hide");
          } else {
            showToast("danger", res.message, "fe fe-x-circle");
          }
        },
        error: function () {
          showToast("danger", "Lỗi: Không thể xử lý yêu cầu.", "fe fe-x-circle");
        },
      });
    });

    // Xử lý tìm kiếm khi gõ chữ
    let searchTimeout;
    $("#searchInput").on("input", function () {
      clearTimeout(searchTimeout);
      let query = $(this).val().trim();
      $("table tbody").html(`<tr><td colspan="7" class="text-center">Đang tìm kiếm...</td></tr>`);
      searchTimeout = setTimeout(() => {
      $.ajax({
        url: "/admin/category/search",  // Route tìm kiếm
        type: "GET",
        data: { keyword: query },
        dataType: "json",
        success: function (res) {
        $("table tbody").empty();
        if (res.data && res.data.length > 0) {
          res.data.forEach((category, index) => {
          let newRow = `
                  <tr>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary btn-view" data-id="${category.id}">
                        <span class="fe fe-eye me-1"></span>Xem
                      </button>
                    </td>
                    <td class="text-center">${index + 1}</td>
                    <td class="text-center">${category.name}</td>
                    <td>${category.description || "Không có mô tả"}</td>
                    <td class="text-center">
                      <img src="/images/categories/${category.thumbnail}" width="50" height="50" alt="Thumbnail">
                    </td>
                    <td class="text-center">${category.parent_name || "Không có"}</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-primary btn-edit" data-id="${category.id}">
                        <span class="fe fe-edit me-1"></span>Sửa
                      </button>
                      <button class="btn btn-sm btn-outline-danger btn-delete" data-id="${category.id}">
                        <span class="fe fe-trash-2 me-1"></span>Xóa
                      </button>
                    </td>
                  </tr>
                `;
          $("table tbody").append(newRow);
          });
        } else {
          $("table tbody").html(`<tr><td colspan="7" class="text-center">Không có kết quả.</td></tr>`);
        }
        },
        error: function (xhr) {
        $("table tbody").html(`<tr><td colspan="7" class="text-center text-danger">Lỗi: Không thể tìm kiếm.</td></tr>`);
        console.error("Lỗi tìm kiếm:", xhr.responseText);
        }
      });
      }, 300); // Debounce 300ms
    });

    // Xử lý khi click "Xóa"
    let deleteId = null; // Biến lưu trữ ID của danh mục cần xóa

    $(document).on("click", ".btn-delete", function () {
      deleteId = $(this).data("id"); // Lưu ID của danh mục cần xóa
      $("#deleteModal").modal("show"); // Hiển thị modal
    });

    // Xử lý khi nhấn nút "Xóa" trong modal
    $("#confirm-delete").on("click", function () {
      if (deleteId) {
        $.ajax({
          url: "/admin/category/" + deleteId,
          type: "DELETE",
          success: function (res) {
            if (res.success) {
              showToast("success", res.message, "fe fe-check-circle");
              $(`button[data-id="${deleteId}"]`).closest("tr").remove();
            } else {
              showToast("danger", res.message, "fe fe-x-circle");
            }

            // Đóng modal ngay sau khi xử lý xong
            $("#deleteModal").modal("hide");
          },
          error: function () {
            showToast("danger", "Lỗi: Không thể xóa danh mục.", "fe fe-x-circle");

            // Đóng modal ngay sau khi có lỗi
            $("#deleteModal").modal("hide");
          }
        });
      }
    });

    });
  </script>

@endsection



