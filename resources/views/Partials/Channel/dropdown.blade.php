<select name="" id="">
@foreach($channels as $channel)
    <option value="{{$channel->name}}">
        {{$channel->name}}
    </option>
@endforeach


</select>
