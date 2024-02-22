<x-header />
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<x-menu />
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<x-sidebar />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Sl No.</th>                    
                    <th>Branch Name</th>
                    <th>Branch Code</th>
                    <th>Contact No</th>
                    <th>Contact Person</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php
                      $ak=1;
                    @endphp
                    @foreach ($lst as $i)
                  <tr>
                    <td>{{$ak++}}</td>
                    <td>{{$i->branch_name}}</td>
                    <td>{{$i->branch_code}}</td>
                    <td>{{$i->contact}}</td>
                    <td>{{$i->contact_person}}</td>
                    <td>{{$i->password}}</td>
                    <td>
                    @if($i->status == 1)
                      <span class="badge badge-success">Active</span>
                    @else
                      <span class="badge badge-danger">Deactive</span>
                    @endif
                    </td>
                    <td>  
                      <a href="{{ url('branch_edit') }}/{{ $i->id }}" class="btn btn-outline-info btn-sm">Edit</a>
                      <a href="{{ url('branch_delete') }}/{{ $i->id }}" class="btn btn-outline-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<x-footer />

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<!-- jquery-validation -->

<!-- AdminLTE App -->
<x-script />
<!-- Page specific script -->

</body>
</html>
