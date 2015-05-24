********Order Details********

@foreach($result as $idx => $dishNum)
    {{$idx+1}}.&nbsp;&nbsp; {{ $dishNum->dish->name }}&nbsp;&nbsp;×&nbsp; {{ $dishNum->count }}<br>
@endforeach

Total:&nbsp;S$&nbsp;{{$amount}}
<br/>
********Customer Details********
<br/>
Time:
<em>{{$customTime}}</em> <br/>
Name:
<em>{{$customName}}</em> <br/>
Phone:
<em>{{$customPhone}}</em> <br/>
<br/><br/>

Have a great cooperation!
<br/><br/>
Thanks for hiring <em>Ekoolab</em> !

</body>
</html>