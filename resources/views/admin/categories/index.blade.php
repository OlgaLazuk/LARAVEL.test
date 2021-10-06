@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Bordered with Striped Rows</h2>
                    <div class="table-responsive">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Добавить категорию</a>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->title}}</td>
                                <td><a href="{{ route('admin.categories.edit', ['category' => $category]) }}">Редактировать</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
