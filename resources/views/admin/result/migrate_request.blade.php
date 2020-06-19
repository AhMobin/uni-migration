@extends('admin.admin_layouts')

@section('content')
    <style>
        .collection-item{
            list-style: none;
            font-size: 14px;
            margin-bottom: 6px;
            border-bottom: 1px solid gray;
        }
    </style>
    @php
        $name1 =  DB::table('universities')->where('id',1)->first();
        $id1 = DB::table('results')->where('university_id',1)->count();

        $name2 =  DB::table('universities')->where('id',2)->first();
        $id2 = DB::table('results')->where('university_id',2)->count();

        $name3 =  DB::table('universities')->where('id',3)->first();
        $id3 = DB::table('results')->where('university_id',3)->count();

        $name4 =  DB::table('universities')->where('id',4)->first();
        $id4 = DB::table('results')->where('university_id',4)->count();

        $name5 =  DB::table('universities')->where('id',5)->first();
        $id5 = DB::table('results')->where('university_id',5)->count();

        $name6 =  DB::table('universities')->where('id',6)->first();
        $id6 = DB::table('results')->where('university_id',6)->count();

        $name7 =  DB::table('universities')->where('id',7)->first();
        $id7 = DB::table('results')->where('university_id',7)->count();

        $name8 =  DB::table('universities')->where('id',8)->first();
        $id8 = DB::table('results')->where('university_id',8)->count();

        $name9 =  DB::table('universities')->where('id',9)->first();
        $id9 = DB::table('results')->where('university_id',9)->count();

        $name10 =  DB::table('universities')->where('id',10)->first();
        $id10 = DB::table('results')->where('university_id',10)->count();

        $name11 =  DB::table('universities')->where('id',11)->first();
        $id11 = DB::table('results')->where('university_id',11)->count();

        $name12 =  DB::table('universities')->where('id',12)->first();
        $id12 = DB::table('results')->where('university_id',12)->count();

        $name13 =  DB::table('universities')->where('id',13)->first();
        $id13 = DB::table('results')->where('university_id',13)->count();

        $name14 =  DB::table('universities')->where('id',14)->first();
        $id14 = DB::table('results')->where('university_id',14)->count();

        $name15 =  DB::table('universities')->where('id',15)->first();
        $id15 = DB::table('results')->where('university_id',15)->count();

        $name16 =  DB::table('universities')->where('id',16)->first();
        $id16 = DB::table('results')->where('university_id',16)->count();

        $name17 =  DB::table('universities')->where('id',17)->first();
        $id17 = DB::table('results')->where('university_id',17)->count();

        $name18 =  DB::table('universities')->where('id',18)->first();
        $id18 = DB::table('results')->where('university_id',18)->count();

        $name19 =  DB::table('universities')->where('id',19)->first();
        $id19 = DB::table('results')->where('university_id',19)->count();

        $name20 =  DB::table('universities')->where('id',20)->first();
        $id20 = DB::table('results')->where('university_id',20)->count();

        $name21 =  DB::table('universities')->where('id',21)->first();
        $id21 = DB::table('results')->where('university_id',21)->count();

        $name22 =  DB::table('universities')->where('id',22)->first();
        $id22 = DB::table('results')->where('university_id',22)->count();

        $name23 =  DB::table('universities')->where('id',23)->first();
        $id23 = DB::table('results')->where('university_id',23)->count();

        $name24 =  DB::table('universities')->where('id',24)->first();
        $id24 = DB::table('results')->where('university_id',24)->count();

        $name25 =  DB::table('universities')->where('id',25)->first();
        $id25 = DB::table('results')->where('university_id',25)->count();

        $name26 =  DB::table('universities')->where('id',26)->first();
        $id26 = DB::table('results')->where('university_id',26)->count();

        $name27 =  DB::table('universities')->where('id',27)->first();
        $id27 = DB::table('results')->where('university_id',27)->count();

        $name28 =  DB::table('universities')->where('id',28)->first();
        $id28 = DB::table('results')->where('university_id',28)->count();

        $name29 =  DB::table('universities')->where('id',29)->first();
        $id29 = DB::table('results')->where('university_id',29)->count();

        $name30 =  DB::table('universities')->where('id',30)->first();
        $id30 = DB::table('results')->where('university_id',30)->count();

        $name31 =  DB::table('universities')->where('id',31)->first();
        $id31 = DB::table('results')->where('university_id',31)->count();

        $name32 =  DB::table('universities')->where('id',32)->first();
        $id32 = DB::table('results')->where('university_id',32)->count();

        $name33 =  DB::table('universities')->where('id',33)->first();
        $id33 = DB::table('results')->where('university_id',33)->count();

        $name34 =  DB::table('universities')->where('id',34)->first();
        $id34 = DB::table('results')->where('university_id',34)->count();

        $name35 =  DB::table('universities')->where('id',35)->first();
        $id35 = DB::table('results')->where('university_id',35)->count();

        $name36 =  DB::table('universities')->where('id',36)->first();
        $id36 = DB::table('results')->where('university_id',36)->count();

        $name37 =  DB::table('universities')->where('id',37)->first();
        $id37 = DB::table('results')->where('university_id',37)->count();

        $name38 =  DB::table('universities')->where('id',38)->first();
        $id38 = DB::table('results')->where('university_id',38)->count();

        $name39 =  DB::table('universities')->where('id',39)->first();
        $id39 = DB::table('results')->where('university_id',39)->count();

        $name40 =  DB::table('universities')->where('id',40)->first();
        $id40 = DB::table('results')->where('university_id',40)->count();

        $name41 =  DB::table('universities')->where('id',41)->first();
        $id41 = DB::table('results')->where('university_id',41)->count();

        $name42 =  DB::table('universities')->where('id',42)->first();
        $id42 = DB::table('results')->where('university_id',42)->count();

        $name43 =  DB::table('universities')->where('id',43)->first();
        $id43 = DB::table('results')->where('university_id',43)->count();

        $name44 =  DB::table('universities')->where('id',44)->first();
        $id44 = DB::table('results')->where('university_id',44)->count();

        $name45 =  DB::table('universities')->where('id',45)->first();
        $id45 = DB::table('results')->where('university_id',45)->count();

        $name46 =  DB::table('universities')->where('id',46)->first();
        $id46 = DB::table('results')->where('university_id',46)->count();

        $name47 =  DB::table('universities')->where('id',47)->first();
        $id47 = DB::table('results')->where('university_id',47)->count();

        $name48 =  DB::table('universities')->where('id',48)->first();
        $id48 = DB::table('results')->where('university_id',48)->count();

        $name49 =  DB::table('universities')->where('id',49)->first();
        $id49 = DB::table('results')->where('university_id',49)->count();

        $name50 =  DB::table('universities')->where('id',50)->first();
        $id50 = DB::table('results')->where('university_id',50)->count();

    @endphp


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>University Migration Request</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-responsive mt-5">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Student Roll</th>
                                <th>To Migrate</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($pending as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->st_roll }}</td>
                                    <td>{{ $row->university_name }}</td>
                                    <td>
                                        <a href="{{ url('view/migration/info/'.$row->id) }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                        <a href="{{ url('migration/approved/'.$row->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-thumbs-up"></i> </a>
                                        <a href="{{ url('migration/deny/'.$row->id) }}" class="btn btn-sm btn-danger"> <i class="fa fa-thumbs-down"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <h3 class="text-center" style="margin-bottom:25px ;border-bottom: 2px solid black">All University With Their Seats</h3>
                        <input type="text" id="filterInput" placeholder="Search University" class="form-control" style="width: 85%; margin: 25px auto">


                            <ul id="names">
                                <li class="collection-item"><a href="#">{{ $name1->id }}. {{ $name1->university_name }} - {{ $id1 }}/{{ $name1->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name2->id }}. {{ $name2->university_name }} - {{ $id2 }}/{{ $name2->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name3->id }}. {{ $name3->university_name }} - {{ $id3 }}/{{ $name3->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name4->id }}. {{ $name4->university_name }} - {{ $id4 }}/{{ $name4->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name5->id }}. {{ $name5->university_name }} - {{ $id5 }}/{{ $name5->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name6->id }}. {{ $name6->university_name }} - {{ $id6 }}/{{ $name6->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name7->id }}. {{ $name7->university_name }} - {{ $id7 }}/{{ $name7->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name8->id }}. {{ $name8->university_name }} - {{ $id8 }}/{{ $name8->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name9->id }}. {{ $name9->university_name }} - {{ $id9 }}/{{ $name9->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name10->id }}. {{ $name10->university_name }} - {{ $id10 }}/{{ $name10->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name11->id }}. {{ $name11->university_name }} - {{ $id11 }}/{{ $name11->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name12->id }}. {{ $name12->university_name }} - {{ $id12 }}/{{ $name12->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name13->id }}. {{ $name13->university_name }} - {{ $id13 }}/{{ $name13->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name14->id }}. {{ $name14->university_name }} - {{ $id14 }}/{{ $name14->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name15->id }}. {{ $name15->university_name }} - {{ $id15 }}/{{ $name15->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name16->id }}. {{ $name16->university_name }} - {{ $id16 }}/{{ $name16->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name17->id }}. {{ $name17->university_name }} - {{ $id17 }}/{{ $name17->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name18->id }}. {{ $name18->university_name }} - {{ $id18 }}/{{ $name18->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name19->id }}. {{ $name19->university_name }} - {{ $id19 }}/{{ $name19->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name20->id }}. {{ $name20->university_name }} - {{ $id20 }}/{{ $name20->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name21->id }}. {{ $name21->university_name }} - {{ $id21 }}/{{ $name21->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name22->id }}. {{ $name22->university_name }} - {{ $id22 }}/{{ $name22->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name23->id }}. {{ $name23->university_name }} - {{ $id23 }}/{{ $name23->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name24->id }}. {{ $name24->university_name }} - {{ $id24 }}/{{ $name24->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name25->id }}. {{ $name25->university_name }} - {{ $id25 }}/{{ $name25->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name26->id }}. {{ $name26->university_name }} - {{ $id26 }}/{{ $name26->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name27->id }}. {{ $name27->university_name }} - {{ $id27 }}/{{ $name27->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name28->id }}. {{ $name28->university_name }} - {{ $id28 }}/{{ $name28->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name29->id }}. {{ $name29->university_name }} - {{ $id29 }}/{{ $name29->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name30->id }}. {{ $name30->university_name }} - {{ $id30 }}/{{ $name30->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name31->id }}. {{ $name31->university_name }} - {{ $id31 }}/{{ $name31->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name32->id }}. {{ $name32->university_name }} - {{ $id32 }}/{{ $name32->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name33->id }}. {{ $name33->university_name }} - {{ $id33 }}/{{ $name33->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name34->id }}. {{ $name34->university_name }} - {{ $id34 }}/{{ $name34->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name35->id }}. {{ $name35->university_name }} - {{ $id35 }}/{{ $name35->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name36->id }}. {{ $name36->university_name }} - {{ $id36 }}/{{ $name36->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name37->id }}. {{ $name37->university_name }} - {{ $id37 }}/{{ $name37->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name38->id }}. {{ $name38->university_name }} - {{ $id38 }}/{{ $name38->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name39->id }}. {{ $name39->university_name }} - {{ $id39 }}/{{ $name39->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name40->id }}. {{ $name40->university_name }} - {{ $id40 }}/{{ $name40->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name41->id }}. {{ $name41->university_name }} - {{ $id41 }}/{{ $name41->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name42->id }}. {{ $name42->university_name }} - {{ $id42 }}/{{ $name42->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name43->id }}. {{ $name43->university_name }} - {{ $id43 }}/{{ $name43->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name44->id }}. {{ $name44->university_name }} - {{ $id44 }}/{{ $name44->uni_seat }}</a></li>
                                <li class="collection-item"><a href="#">{{ $name45->id }}. {{ $name45->university_name }} - {{ $id45 }}/{{ $name45->uni_seat }}</a></li>
                                @if($name46)
                                    <li class="collection-item"><a href="#">{{ $name46->id }}. {{ $name46->university_name }} - {{ $id46 }}/{{ $name46->uni_seat }}</a></li>
                                @endif
                                @if($name47)
                                    <li class="collection-item"><a href="#">{{ $name47->id }}. {{ $name47->university_name }} - {{ $id47 }}/{{ $name47->uni_seat }}</a></li>
                                @endif
                                @if($name48)
                                    <li class="collection-item"><a href="#">{{ $name48->id }}. {{ $name48->university_name }} - {{ $id48 }}/{{ $name48->uni_seat }}</a></li>
                                @endif
                                @if($name49)
                                    <li class="collection-item"><a href="#">{{ $name49->id }}. {{ $name49->university_name }} - {{ $id49 }}/{{ $name49->uni_seat }}</a></li>
                                @endif
                                @if($name50)
                                    <li class="collection-item"><a href="#">{{ $name50->id }}. {{ $name50->university_name }} - {{ $id50 }}/{{ $name50->uni_seat }}</a></li>
                                @endif
                            </ul>

                    </div>
                </div>
                <br><br>
            </div>


        </div>
    </div>
</div>
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">--}}

    <script>
        let filterInput = document.getElementById('filterInput');

        filterInput.addEventListener('keyup', filterNames);

        function filterNames() {
            let filterValue = document.getElementById('filterInput').value.toUpperCase();

            let ul = document.getElementById('names');
            let li = ul.querySelectorAll('li.collection-item');

            for (let i = 0; i < li.length; i++) {
                let a = li[i].getElementsByTagName('a')[0];

                if (a.innerHTML.toUpperCase().indexOf(filterValue) > -1) {
                    li[i].style.display = '';
                } else {
                    li[i].style.display = 'none';
                }
            }
        }
    </script>


@endsection
