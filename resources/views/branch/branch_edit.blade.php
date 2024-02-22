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
                <h3 class="card-title">EDIT BRANCH DETAILS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Branch Name</label>
                    <input type="text" class="form-control" placeholder="Branch Name" name="branchName" autocomplete="off" value="{{$lst->branch_name}}">
                  </div>
                  <div class="form-group">
                    <label>Branch Code</label>
                    <input type="text" class="form-control" placeholder="Branch Code" name="branchCode" autocomplete="off" value="{{$lst->branch_code}}">
                  </div>
                  <div class="form-group">
                    <label>Contact</label>
                    <input type="text" class="form-control" placeholder="Contact Number" name="contact" autocomplete="off" value="{{$lst->contact}}">
                  </div>
                  <div class="form-group">
                    <label>Contact Person</label>
                    <input type="text" class="form-control" placeholder="Contact Person" name="contactPerson" autocomplete="off" value="{{$lst->contact_person}}">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password" autocomplete="off" value="{{$lst->password}}">
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select class="form-control" name="status">
                        <option @if($lst->status==1) selected @endif value="1">Active</option>
                        <option @if($lst->status==0) selected @endif value="0">Inactive</option>
                    </select>
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
