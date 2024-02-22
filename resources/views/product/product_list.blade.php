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
                    <th>id</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Code</th>
                    <th>Image</th>
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
                    <td>
                      @foreach($cat as $c)
                        @if($c->id == $i->category_id)
                          {{$c->name}}
                        @endif
                      @endforeach
                    </td>
                    <td>{{$i->product_name}}</td>
                    <td>{{$i->product_code}}</td>
                    <td><img src="{{asset('uploads/' . $i->image)}}" alt="avatar" width="100"></td>
                    <td>
                      @if($i->status == 1)
                      <span class="badge badge-success">Instock</span>
                      @else
                      <span class="badge badge-danger">Out of stock</span>
                      @endif
                      </td>
                    <td>  
                    <a href="{{ url('pro_edit') }}/{{ $i->id }}" class="btn btn-outline-info btn-sm">Edit</a>
                    <a href="{{ url('prodelete') }}/{{ $i->id }}" class="btn btn-outline-danger btn-sm">Delete</a>
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
