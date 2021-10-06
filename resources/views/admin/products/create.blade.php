@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <form role="form" action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input class="form-control" name="description">
                </div>

                <div class="form-group">
                    <label>Цена</label>
                    <input class="form-control" name="price">
                </div>

                <div class="form-group">
                    <label>Фото</label>
                    <input class="form-control" name="photo" type="file">
                </div>

                <button type="submit" class="btn btn-default">Submit Button</button>


            </form>
        </div>
    </div>
@endsection
