<h2>{{$teacher->name}}</h2>
<br>
<table>
    <th>Student names</th>
    @foreach($students as $s)
        <td>{{$s->name}}</td>
    @endforeach

</table>
