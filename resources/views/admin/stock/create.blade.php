@extends('admin.layouts.app')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h4 class="page-title">Tambah Stock</h4>
              </div>
          </div>
          <!-- /.col-lg-12 -->
        </div>
      <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <form method="post" action="/admin/stock" enctype="multipart/form-data" id="myForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_barang">Nama barang</label>
                                        <input type="text" name="nama_barang" class="form-control" id="nama_barang"  aria-describedby="nama_barang" >
                                    </div>

                                    <div class="form-group">
                                        <label for="hargabeli">Harga Beli</label>
                                        <input type="text" name="hargabeli" class="form-control" id="hargabeli"  aria-describedby="hargabeli" >
                                    </div>

                                    <div class="form-group">
                                        <label for="hargajual">Harga Jual</label>
                                        <input type="text" name="hargajual" class="form-control" id="hargajual" aria-describedby="hargajual" >
                                    </div>

                                    <div class="form-group">
                                        <label for="File">Foto</label>
                                        <input type="file" name="photo" class="form-control" id="photo" ariadescribedby="photo" >
                                    </div>

                                    <div class="form-group">
                                        <label for="volume">volume</label>
                                        <input type="text" name="volume" class="form-control" id="volume" aria-describedby="volume" >
                                    </div>

                                    <div class="form-group row">
                                        <label for="unit_id" class="col-md-4 col-form-label">Satuan</label>
                                        <div class="col-md-6">
                                            <select name="unit_id" id="unit_id" class="form-control" aria-describedby="unit_id">
                                                <option value="">== Select Satuan ==</option>
                                                @foreach ($unit as $id)
                                                    <option value="{{ $id->id }}">{{ $id->satuan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
