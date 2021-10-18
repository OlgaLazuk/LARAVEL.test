@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <h2>РЕДАКТИРОВАНИЕ ТОВАРОВ (tables products)</h2>

            <form action="{{ route('admin.products.update', ['product'=>$product]) }}" method="post">
                @method('put')
                @csrf

                <div class="form-group">
                    <label>Название товара</label>
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label>Цена</label>
                    <input class="form-control" type="text" name="price" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input class="form-control" name="description" value="{{ $product->description}}">
                </div>

                <button class="btn btn-default" type="submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
