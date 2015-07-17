<html>
<t1>{{ $posts->name }}</t1>
    @foreach($comments as $co)
        <li> {{$co->content}}</li>
    @endforeach
</html>