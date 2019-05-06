@extends('layouts.master')
@section('content')
    <h2>Добавление клиента</h2>
    <form method="post" enctype="multipart/form-data" action="{{route('constructs.edit')}}">
        @csrf
        <input type="hidden" name="id" value="{{$construct->id}}">
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" required class="form-control" name="name" value="{{$construct->name}}">
        </div>


        <button type="submit" class="btn btn-primary">Изменить застройщика</button>
    </form>
@endsection