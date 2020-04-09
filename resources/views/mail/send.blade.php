<form action="{{action('ContactController@process')}}" method="post">

    {{$contact->name}}

    {{$contact->email}}

    {{$contact->message}}

    <input type="submit" value="Submit">

    @foreach($contact->getAttributes() as $key => $value)
    <input type="hidden" name="{{$key}}" value="{{$value}}">
    @endforeach

    <input type="submit" name="action" value="back">

<input type="submit" name="action" value="submit">

</form>