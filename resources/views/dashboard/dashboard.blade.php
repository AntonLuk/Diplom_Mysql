@extends('layouts.master')
@section('content')
    <div class="form-group">

    </div>
    <div class="row mb-3">
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card bg-success text-white ">
                <div class="card-body bg-success">
                    <div class="rotate">
                        <i class="fa fa-user fa-4x"></i>
                            <a class="btn btn-success fa fa-plus fa-2x pull-right" href="{{route('clients.addForm')}}"></a>
                    </div>
                    <h6 class="text-uppercase">Клиентов</h6>
                    <h1 class="display-4">{{$clientsCount}}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card text-white bg-danger ">
                <div class="card-body bg-danger">
                    <div class="rotate">
                        <i class="fa fa-list fa-4x"></i>
                        <h4 class="pull-right">Покупка: {{$applicationsCount['buy']}}</h4>
                        <br>
                        <h4 class="pull-right">Продажа: {{$applicationsCount['sold']}}</h4>
                    </div>
                    <h6 class="text-uppercase">Заявки</h6>
                    <h1 class="display-4">{{$applicationsCount['all']}}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card text-white bg-info ">
                <div class="card-body bg-info">
                    <div class="rotate">
                        <i class="fa fa-home fa-4x"></i>
                        <a class="btn btn-info fa fa-plus fa-2x pull-right" href="{{route('objs.addForm')}}"></a>
                    </div>
                    <h6 class="text-uppercase">Объектов</h6>
                    <h1 class="display-4">{{$objsCount}}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 py-2">
            <div class="card text-white bg-warning ">
                <div class="card-body">
                    <div class="rotate">
                        <i class="fa fa-thumbs-o-up fa-4x"></i>
                    </div>
                    <h6 class="text-uppercase">Сделок</h6>
                    <h1 class="display-4">0</h1>
                </div>
            </div>
        </div>
    </div>
    <hr>
    {{--<div class="row">--}}
        {{--<div class="container">--}}
            {{--<div class="card card-default card-body">--}}
                {{--<ul id="tabsJustified" class="nav nav-tabs nav-justified">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="" data-target="#tab1" data-toggle="tab">List</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link active" href="" data-target="#tab2" data-toggle="tab">Profile</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="" data-target="#tab3" data-toggle="tab">More</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!--/tabs-->--}}
                {{--<br>--}}
                {{--<div id="tabsJustifiedContent" class="tab-content">--}}
                    {{--<div class="tab-pane" id="tab1">--}}
                        {{--<div class="list-group">--}}
                            {{--<a href="" class="list-group-item"><span class="float-right label label-success">51</span> Home Link</a>--}}
                            {{--<a href="" class="list-group-item"><span class="float-right label label-success">8</span> Link 2</a>--}}
                            {{--<a href="" class="list-group-item"><span class="float-right label label-success">23</span> Link 3</a>--}}
                            {{--<a href="" class="list-group-item text-muted">Link n..</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="tab-pane active" id="tab2">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<h4>Profile Section</h4>--}}
                                {{--<p>Imagine creating this simple user profile inside a tab card.</p>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-5"><img src="//placehold.it/170" class="float-right img-responsive img-rounded"></div>--}}
                        {{--</div>--}}
                        {{--<hr>--}}
                        {{--<a href="javascript:;" class="btn btn-info btn-block">Read More Profiles</a>--}}
                        {{--<div class="spacer5"></div>--}}
                    {{--</div>--}}
                    {{--<div class="tab-pane" id="tab3">--}}
                        {{--<div class="list-group">--}}
                            {{--<a href="" class="list-group-item"><span class="float-right label label-info label-pill">44</span> <code>.panel</code> is now <code>.card</code></a>--}}
                            {{--<a href="" class="list-group-item"><span class="float-right label label-info label-pill">8</span> <code>.nav-justified</code> is deprecated</a>--}}
                            {{--<a href="" class="list-group-item"><span class="float-right label label-info label-pill">23</span> <code>.badge</code> is now <code>.label-pill</code></a>--}}
                            {{--<a href="" class="list-group-item text-muted">Message n..</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/tabs content-->--}}
            {{--</div><!--/card-->--}}
        {{--</div>--}}
    {{--</div>--}}
    <hr>
    <div class="">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>Заявки за текущий месяц</label>
                    {!! $appChart->render() !!}
                </div>
                <div class="col-md-6">
                    <label>Объекты за текущий месяц</label>
                    {!! $objsChart->render() !!}
                </div>


            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Заявки групп в текущем месяце</label>
                    {!! $testChart->render() !!}
                </div>
            </div>
        </div>
    </div>



    @endsection