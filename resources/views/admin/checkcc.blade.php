@extends('admin.master');

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid ">
            <!-- Small boxes (Stat box) -->
            <div class="row card-header">
                <div class="col-md-12 mt-1">
                    <h2>Credit Card Checker</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-2">
            <!-- Small boxes (Stat box) -->
            <div class="row ">
                <div class="col-md-8 my-3">
                    <h4>Example:</h4>
                </div>
                <div class="col-md-4 my-3">
                    <h4>Price:</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <!-- Small boxes (Stat box) -->
            <div class="row ">
                <div class="col-md-8  ">
                    <div class="card p-3">
                        <span>5457497921800000|03|15|416</span>
                        <span>5457497921800000|0315|416</span>
                        <span>5457497921800000/0315/416</span>
                        <span>5457497921800000;0315;416;Maria De La Torre;Canada;ON;Brampton;L6Z0C7;5 Copperfield</span>
                        <span>5457497921800000|0315|416|Maria De La Torre|Canada|ON|Brampton|L6Z0C7|5 Copperfield</span>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card p-3">
                        <h5>Checker price: 0.3 $ /piece</h5>
                    </div>
                    <h5>1 card = 1 line</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid mt-5">
            <!-- Small boxes (Stat box) -->
            <div class="row card">
                <div class="col-md-12">
                    <h4 class="text-center card-header">Credit Card Checker</h4>
                    <form action="" class="card-body">
                        <textarea class="form-control" type="textarea" cols="120" rows="10"></textarea>
                        <div class="text-center">
                            <label class="checkbox-inline">Duplicate Remove <input id=dup type=checkbox value=1 class="grey" checked> </label>
                            <label class="checkbox-inline">Sort by type <input id=type type=checkbox value=1 class="grey" checked> </label>
                            <label class="checkbox-inline">Sort Date <input id=date type=checkbox value=1 class="grey"> </label>
                            <label class="checkbox-inline">Check BIN info <input id=bin_info type=checkbox value=1 class="grey" checked> </label>
                            <p><button onclick="checkcc();" class="btn btn-primary btn-lg btn-block">Check Now</button></p>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection