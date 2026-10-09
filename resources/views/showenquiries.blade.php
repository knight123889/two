@extends("layout.admintemplate")
@section("titlename")
    ENQUIRIES
@endsection

@section("contantarea")
    <style>
       
        .enquiry-box {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .enquiry-box div {
            margin-bottom: 8px;
        }
        
        .enquiry-box div:last-child {
            margin-bottom: 0;
        }
    </style>

    <h2 style="margin-bottom: 20px;">All ENQUIRIES</h2>

    @foreach($data as $v)
        <div class="enquiry-box">
            <div><strong>NAME:</strong> {{$v->name}}</div>
            <div><strong>EMAIL:</strong> {{$v->email}}</div>
            <div><strong>PHONE:</strong> {{$v->phone}}</div>
            <div><strong>MESSAGES:</strong>{{$v->message}}</div>
        </div>
    @endforeach
@endsection