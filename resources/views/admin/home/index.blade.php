
@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Главная</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                  <div class="inner">
                      <h3>{{ $books_count }}</h3>

                      <p>Книги</p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-bag"></i>
                  </div>
                  <a href="{{ route('books.index') }}" class="small-box-footer">Все книги <i
                          class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                  <div class="inner">
                      <h3>{{ $author_count }}</h3>

                      <p>Авторы</p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="{{ route('author.index') }}" class="small-box-footer">Все авторы <i
                          class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>

      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection