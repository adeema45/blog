@foreach($sections as $sec)
{{$sec->name}}<br>
{{$sec->tracher_id}} {{$sec->staff->name ?? ''}}
@if($sec->teacher_id == '1')
Male
@elseif($sec->teacher_id =='2')
Female
@else()
null
@endif()
<br>
@endforeach()