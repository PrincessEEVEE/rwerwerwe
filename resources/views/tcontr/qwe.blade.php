<!DOCTYPE html>  
<html>  
<head>  
<title>My view</title>  
</head>  
<body>  
<a href="{{ $href }}">{{ $text }}</a> </br> 
{{-- date('d.m.Y') --}} </br>
{{isset($location['country']) ? $location['country'] : 'Россия'}} </br>
{{isset($location['city']) ? $location['city'] : 'Москва'}} </br> 
</br>
{{($day)?? date('d')}}
{{($month) ?? date('m')}}
{{($year) ?? date('Y')}} 
</br>
{!! $str !!}
</br>
@php
echo '2423421421'
@endphp
</body> 
</html>	

