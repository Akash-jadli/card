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
            @foreach ($categories as $categoryId => $categoryName)
            <option value="{{ $categoryId }}">{{ $categoryName }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Bin:</label></br>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Category:</label><br>
          <select name="categoryId" id="Category" class="form-control">
            <option value="AllCategory">All</option>
            @foreach ($categories as $categoryId => $categoryName)
            <option value="{{ $categoryId }}">{{ $categoryName }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="State">State:</label></br>
          <select name="State" id="State" class="form-control">
            <option value="AllState">All</option>
            <option value="State1">State1</option>
            <option value="State2">State2</option>
            <option value="State3">State3</option>
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">City:</label></br>
          <select name="Category" id="Category" class="form-control">
            <option value="AllCategory">All</option>
            <option value="Category1">Category1</option>
            <option value="Category2">Category2</option>
            <option value="Category3">Category3</option>
          </select>
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Zip:</label></br>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-3 my-3">
          <label for="Category">Type:</label></br>
          <select name="Category" id="Category" class="form-control">
            <option value="AllCategory">All</option>
            <option value="Category1"> AMEX</option>
            <option value="Category2">VISA</option>
            <option value="Category3">MASTER CARD</option>
            <option value="Category4">DISCOVER</option>
          </select>
        </div>
        <div class="col-md-3 my-3">
          <label for="State">Cards Per Page:</label></br>
          <select name="State" id="State" class="form-control">
            <option value="AllState">All</option>
            <option value="State1">State1</option>
            <option value="State2">State2</option>
            <option value="State3">State3</option>
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
            <div class="card-header">
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
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Type</th>
                    <th>Bin</th>
                    <th>Exp Date</th>
                    <th>Category</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Zip</th>
                    <th>Action Reset</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>A</td>
                    <td>A</td>
                    <td>11-7-2014</td>
                    <td>Added base USA Dumps</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                  </tr>
                  <tr>
                    <td>A</td>
                    <td>A</td>
                    <td>11-7-2014</td>
                    <td>Added base USA Dumps</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                  </tr>
                  <tr>
                    <td>A</td>
                    <td>A</td>
                    <td>11-7-2014</td>
                    <td>Added base USA Dumps</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
                    <td>USA</td>
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