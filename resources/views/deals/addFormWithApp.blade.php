@extends('layouts.master')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/js/select2.min.js"></script>
    <form method="post" action="{{route('deals.createDeal')}}">
        @csrf
    <div class="form-group">
        <label for="id_label_single">
            Выберите объект
            <select class="js-example-basic-single js-states form-control objs" name="obj_id" onchange="reward()" id="id_label_single">
                <option></option>
                @foreach($objs as $obj)
                    <option value="{{$obj->id}}">ID:{{$obj->id}},Комн:{{$obj->room->name}},Адрес:{{$obj->city}},{{$obj->district->name}},{{$obj->street}},{{$obj->house}}</option>
                @endforeach
            </select>
        </label>
    </div>
    <div class="form-group">
        <label>
            Заявка
        </label>
            <input type="hidden" name="app_id"  value="{{$application->id}}">
            <input type="text"  class="form-control" value="ID:{{$application->id}},{{$application->client->name}}" readonly>
    </div>
    <div class="form-group">
        <label>Коммисия</label>
        <input type="number" class="form-control" name="reward" min="0">
    </div>
        <input type="submit" class="btn btn-success">
    </form>
    {{--<div class="form-group">--}}
    {{--<div class="row">--}}
    {{--<div class="col">--}}

    {{--</div>--}}
    {{--</div>--}}


    {{--</div>--}}


    <script>

        $(document).ready(function() {
            $(".objs").select2();
        });
        // $(document).ready(function() {
        //     $(".applications").select2();
        // });
        // $(".applications").select2();
    function reward() {
        let complexs=@json($complexs);
        let objs=@json($objs);
        let selobj=document.getElementById('id_label_single')
        for(let i=0;i<objs.length;i++){
            console.log(objs[i],selobj);
            if(selobj.value==objs[i].id){

                if(objs[i].type_of_obj_id==1){
                    alert('Новостройка');
                }
            }
        }

    }
    </script>

@endsection