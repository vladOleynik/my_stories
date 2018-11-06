@extends('admin.layouts.app-admin')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-3">
         <div class="jumbotron text-center">
            <p><span class="badge badge-primary">Категории 0</span></p>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="jumbotron text-center">
            <p><span class="badge badge-primary">Материалов 0</span></p>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="jumbotron text-center">
            <p><span class="badge badge-primary">Посетителей 0</span></p>
         </div>
      </div>
      <div class="col-sm-3">
         <div class="jumbotron text-center">
            <p><span class="badge badge-primary">Сегодня 0</span></p>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-6" class="list-group-item">
         <a href="#" class="btn btn-outline-secondary bth-block" style="width:100%;">Создать категорию</a>
         <a href="#" class="color-gray">
            <h4 class="list-group-item">Категория первая</h4>
            <p class="list-group-item">Кол-во материалов</p>
         </a>
      </div>
      <div class="col-sm-6" class="list-group-item">
         <a href="#" class="btn btn-outline-secondary bth-block" style="width:100%;">Создать мателиал</a>
         <a href="#" class="color-gray">
            <h4 class="list-group-item">Материал первый</h4>
            <p class="list-group-item">Категория</p>
         </a>
      </div>
   </div>
</div>
@endsection
