@extends('admin.layout')
@section('content')
<h1>Trang demo test</h1>

<!-- Nút để hiển thị modal xác nhận xóa -->
<button id="show-delete-modal" class="btn btn-danger">Xóa</button>

<!-- Modal xác nhận xóa -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border border-danger">
      <div class="modal-header bg-danger text-center">
        <h5 class="modal-title text-white w-100">Bạn có chắc chắn muốn xóa không?</h5>
      </div>
      <div class="modal-body text-center d-flex justify-content-center gap-4 px-4">
        <button type="button" class="btn btn-outline-danger">Xóa</button>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById('show-delete-modal').addEventListener('click', function () {
      // Hiển thị modal xác nhận xóa
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
      deleteModal.show();
  });
</script>
@endsection