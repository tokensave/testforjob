@extends('layouts.admin_layout')

@section('title', 'Добавить автора')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Добавить автора</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-primary">
    <!-- form start -->
    <form action="{{ route('author.store')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <input type="text" name = "authors_firstname" class="form-control" placeholder="Введите имя автора" required>
          <br>
          <input type="text" name = "authors_lastname" class="form-control" placeholder="Введите фамилию автора" required>
        </div>
      </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Добавить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->



    
@endsection