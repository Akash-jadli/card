@extends('admin.master');

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid card-head">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Credit Cards</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Credit Cards</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid card">
      <!-- Small boxes (Stat box) -->
      <div class="row card-body">
        <div class="col-md-3 my-3">
          <label for="Category">Category:</label><br>
          <select name="categoryId" id="Category" class="form-control">
            <option value="AllCategory">All</option>
            @foreach ($dumpcategory as $id => $categoryName)
            <option value="{{ $id }}">{{ $categoryName }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Bin:</label></br>
          <input type="text" name="bin" class="form-control">
        </div>

        <div class="col-md-3 my-3">
          <label for="4digit">Last 4 digits:</label><br>
          <input type="text" name="4digit" class="form-control">
        </div>

        <div class="col-md-3 my-3">
          <label for="type">Type:</label></br>
          <select name="type" id="type" class="form-control">
            <option value="AllState">All</option>
            <option value="type1">type1</option>
            <option value="type2">type2</option>
            <option value="type3">type3</option>
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="code">Code:</label></br>
          <select name="code" id="code" class="form-control">
            <option value="Allcode">All</option>
            <option value="code1">code1</option>
            <option value="code2">code2</option>
            <option value="code3">code3</option>
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Level:</label></br>
          <select name="code" id="code" class="form-control">
            <option value="Allcode">All</option>
            <option value="code1">code1</option>
            <option value="code2">code2</option>
            <option value="code3">code3</option>
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Class:</label></br>
          <select name="Category" id="Category" class="form-control">
            <option value="AllCategory">All</option>
            <option value="Category1"> AMEX</option>
            <option value="Category2">VISA</option>
            <option value="Category3">MASTER CARD</option>
            <option value="Category4">DISCOVER</option>
          </select>
        </div>
        <div class="col-md-3 my-3">
          <label for="State">Country:</label></br>
          <select name="State" id="State" class="form-control">
            <option value="AllState">All</option>
            <option value="State1">State1</option>
            <option value="State2">State2</option>
            <option value="State3">State3</option>
          </select>
        </div>

      </div>

      <div class="row card-body">
        <div class="col-md-4 my-3">
          <label for="State">Bank:</label></br>
          <select name="State" id="State" class="form-control">
            <option value="AllState">All</option>
            <option value="State1">State1</option>
            <option value="State2">State2</option>
            <option value="State3">State3</option>
          </select>
        </div>

        <div class="col-md-4 my-3">
          <label for="State">Page:</label></br>
          <select name="State" id="State" class="form-control">
            <option value="AllState">All</option>
            <option value="State1">State1</option>
            <option value="State2">State2</option>
            <option value="State3">State3</option>
          </select>
        </div>

        <div class="col-md-4 my-3">
          <label for="State">Dumps per page:</label></br>
          <select name="State" id="State" class="form-control">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
        </div>

      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">Dump News</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead class="bg-light">
                  <tr>
                    <th>Number</th>
                    <th>Type</th>
                    <th>Level</th>
                    <th>Class</th>
                    <th>Code</th>
                    <th>Exp Date</th>
                    <th>Category</th>
                    <th>Country</th>
                    <th>Bank</th>
                    <th>Action/Result</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>No Dump Found</td>
                    <!-- <td>A</td>
                    <td>11-7-2014</td>
                    <td>Added base USA Dumps</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td> -->
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>


  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection