@extends("layout.dashboard")
@section("titlename")
    PROJECTS
@endsection

@section("contantarea")
    <form action="/saveproject" method="post">
        @csrf
        TITLE:-<input type="text" name="title"><br>
        DESCRIPTION:-<input type="text" name="description"><br>
        TECH_USED:-<input type="text" name="tech_used"><br>
        URL:-<input type="text" name="url"><br>
        <input type="submit" value="Add">
    </form>
@endsection