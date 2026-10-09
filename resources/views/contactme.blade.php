@extends("layout.webtemplate")
@section("titlename")
    CONTACT ME
@endsection

@section("contantarea")
    <form action="/save" method="post">
        @csrf
        NAME:-<input type="text" name="name"><br>
        EMAIL:-<input type="text" name="email"><br>
        PHONE NO.:-<input type="text" name="phone"><br>
        MESSAGE:-<input type="text" name="message"><br>
        <input type="submit" value="submit ">
    </form>
@endsection