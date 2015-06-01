<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
Hi CurrynCurry,<br/>
<br/>
Congratulations!
<br/>
********Order Details********
<br/>
@foreach($result as $idx => $dishNum)
    {{ $dishNum->dish->menu_index }}.&nbsp;&nbsp; <em>{{ $dishNum->dish->name }}</em>&nbsp;&nbsp;×&nbsp; {{ $dishNum->count }}<br>
@endforeach
<br/>
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