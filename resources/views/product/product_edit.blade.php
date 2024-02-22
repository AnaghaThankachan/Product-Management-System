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
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PRODUCT CATEGORY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputCategory">Product Category</label>
                    <select class="form-control" name="productCategory">
                        <option>-- Select Category --</option>
                        @foreach($cat as $c)
                            <option value="{{ $c->id }}" @if(isset($lst) && $lst->category_id == $c->id) selected @endif>{{ $c->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="Product Name" autocomplete="off" name="pro_name" value="{{$lst->product_name}}">
                  </div>
                  <div class="form-group">
                    <label>Product Code</label>
                    <input type="text" class="form-control" placeholder="Code" autocomplete="off" name="pro_code" value="{{$lst->product_code}}">
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select class="form-control" name="status">
                        <option @if($lst->status==1) selected @endif value="1">Active</option>
                        <option @if($lst->status==0) selected @endif value="0">Inactive</option>
                    </select>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
