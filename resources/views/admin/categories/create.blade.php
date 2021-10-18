@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">
        {{--        @foreach($errors->all() as $error)--}}
        {{--            <div class="p-3 mb-2 bg-danger text-white">{{$error}}</div>--}}
        {{--        @endforeach--}}
        <div class="container-fluid">
            <h2>ДОБАВЛЕНИЕ КАТЕГОРИЙ (tables categories)</h2>
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                {{--                @dump($errors->has('name'))--}}
                {{--                @dump($errors)--}}
                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" type="text" name="name">
                </div>


                {{--                <input type="text" name="name" class="{{ $errors->has('name')? 'error': '' }}">--}}

                {{--                @dump($errors->all())--}}
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title">
                </div>

                <button type="submit">Сохранить добавленную категорию</button>
            </form>
        </div>
    </div>
@endsection
