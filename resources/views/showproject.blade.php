@extends("layout.webtemplate")
@section("titlename")
    PROJECTS
@endsection

@section("contantarea")
    <style>
       
        .project-box {
            background-color: #f4f4f4;
            border: 1px solid #cccccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .project-box div {
            margin-bottom: 8px;
        }
        
        .project-box div:last-child {
            margin-bottom: 0;
        }
    </style>

    <h2 style="margin-bottom: 20px;">All Projects</h2>

    @foreach($data as $v)
        <div class="project-box">
            <div><strong>TITLE:</strong> {{$v->title}}</div>
            <div><strong>DESCRIPTION:</strong> {{$v->description}}</div>
            <div><strong>TECH_USED:</strong> {{$v->tech_used}}</div>
            <div><strong>URL:</strong> <a href="{{$v->url}}" target="_blank">{{$v->url}}</a></div>
        </div>
    @endforeach
@endsection
