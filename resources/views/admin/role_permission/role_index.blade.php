@extends('admin.app')
@section('heading')
<div class="col-sm-6">
    <h3>Role</h3>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Role</li>
    </ol>
  </div>
@endsection
@section('content-main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive theme-scrollbar" id="table-list">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@push('scripts')
<script>
    
</script>
@endpush
