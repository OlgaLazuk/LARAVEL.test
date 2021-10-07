@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    <h2>Bordered with Striped Rows</h2>
                    <div class="table-responsive">
                        <a href="{{ route('admin.products.create')  }}" class="btn btn-info">Добавить товар</a>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>

                                    <td><a href="{{ route('admin.products.edit', ['product' => $product]) }}">Редактировать</a>
                                    </td>

                                    <td><a href="{{ route('admin.products.edit', ['product' => $product -> id]) }}">Редактировать</a>
                                    </td>
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
