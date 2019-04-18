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
    <div class="row">
        <div class="col-md-10">
            <div id="map" style="height: 350px"></div>
        </div>

        <div class="col-md-2">
            <div class="form-check">
                <input class="form-check-input room" type="checkbox" onchange="rooms()" value=0 name="room[]" id="0room">
                <label class="form-check-label" for="defaultCheck1">
                    Студия
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input room" type="checkbox" value=1 onchange="rooms()" name="room[]" id="1room">
                <label class="form-check-label" for="defaultCheck2">
                    1
                </label>
            </div>
        </div>
    </div>
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
    <script>
        function rooms() {
            let checkboxes=document.getElementsByClassName('room');
            let checkboxesChecked = []; // можно в массиве их хранить, если нужно использовать
            for (let index = 0; index < checkboxes.length; index++) {
                if (checkboxes[index].checked) {
                    checkboxesChecked.push(checkboxes[index].value); // положим в массив выбранный
                    console.log(checkboxes[index].value); // делайте что нужно - это для наглядности
                }
            }
            //console.log(check);
        }
    </script>
<script>
    var div=document.getElementById("map");
    div.innerText = "";
    var myMap;
    ymaps.ready(init);
    function init() {
        let objs=@json($objs);
        console.log(objs);
        var myMap = new ymaps.Map("map", {
                center: [57.153033, 65.534328],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            });

            // Создаем геообъект с типом геометрии "Точка".
            // myGeoObject = new ymaps.GeoObject({
            //     // Описание геометрии.
            //     geometry: {
            //         type: "Point",
            //         coordinates: [57.153033, 65.534328]
            //     },
            //     // Свойства.
            //     properties: {
            //         // Контент метки.
            //         iconContent: 'Я тащусь',
            //         hintContent: 'Ну давай уже тащи'
            //     }
            // }, {
            //     // Опции.
            //     // Иконка метки будет растягиваться под размер ее содержимого.
            //     preset: 'islands#blackStretchyIcon',
            //     // Метку можно перемещать.
            //     draggable: true
            // });
        let room;
        myMap.geoObjects
            //.add(myGeoObject)
            // .add(myPieChart)
            for(let i=0;i<objs.length;i++){
            if(objs[i].room.name=='студия'){
                 room=0;
            }else{
                 room=objs[i].room.name;
            }
               // let room =objs[i].room.name;

                myMap.geoObjects.add(new ymaps.Placemark([objs[i].geo_lat,objs[i].geo_lon], {
                    iconContent:room,
                    balloonContent: `${objs[i].address} <br>Цена: ${objs[i].price} <br> <a href="objs/show/${objs[i].id}" class="btn btn-info">Открыть</a>`
                }, {
                    preset: 'islands#icon',
                    iconColor: '#735184'
                }))
            }

            // .add(new ymaps.Placemark([55.833436, 37.715175], {
            //     balloonContent: '<strong>серобуромалиновый</strong> цвет'
            // }, {
            //     preset: 'islands#dotIcon',
            //     iconColor: '#735184'
            // }))
            // .add(new ymaps.Placemark([55.687086, 37.529789], {
            //     balloonContent: 'цвет <strong>влюбленной жабы</strong>'
            // }, {
            //     preset: 'islands#circleIcon',
            //     iconColor: '#3caa3c'
            // }))
            // .add(new ymaps.Placemark([55.782392, 37.614924], {
            //     balloonContent: 'цвет <strong>детской неожиданности</strong>'
            // }, {
            //     preset: 'islands#circleDotIcon',
            //     iconColor: 'yellow'
            // }))
            // .add(new ymaps.Placemark([55.642063, 37.656123], {
            //     balloonContent: 'цвет <strong>красный</strong>'
            // }, {
            //     preset: 'islands#redSportIcon'
            // }))
            // .add(new ymaps.Placemark([55.826479, 37.487208], {
            //     balloonContent: 'цвет <strong>фэйсбука</strong>'
            // }, {
            //     preset: 'islands#governmentCircleIcon',
            //     iconColor: '#3b5998'
            // }))
            // .add(new ymaps.Placemark([55.694843, 37.435023], {
            //     balloonContent: 'цвет <strong>носика Гены</strong>',
            //     iconCaption: 'Очень длиннный, но невероятно интересный текст'
            // }, {
            //     preset: 'islands#greenDotIconWithCaption'
            // }))
            // .add(new ymaps.Placemark([55.790139, 37.814052], {
            //     balloonContent: 'цвет <strong>голубой</strong>',
            //     iconCaption: 'Очень длиннный, но невероятно интересный текст'
            // }, {
            //     preset: 'islands#blueCircleDotIconWithCaption',
            //     iconCaptionMaxWidth: '50'
            // }));
    }
</script>
<script>
    function redirect(id) {
        alert(id);
        alert('objs/show/{id}'.replace('{id}', id));
        //window.location = 'objs/show/{id}';
    }
</script>

    @endsection
