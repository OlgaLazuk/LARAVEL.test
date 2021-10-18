@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <h2>РЕДАКТИРОВАНИЕ КАТЕГОРИЙ ТОВАРОВ (tables categories)</h2>

            <form action="{{ route('admin.categories.update', ['category'=>$category]) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Название категории</label>
                    <input class="form-control" type="text" name="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $category->title }}">
                </div>
                <button type="submit">Сохранить изменения</button>
            </form>
        </div>
    </div>
@endsection
