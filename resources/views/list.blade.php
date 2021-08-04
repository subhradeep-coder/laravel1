<h1>Students List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone No</td>
        <td>Place</td>
        <td>Department</td>
        <td>Remove</td>

    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$student['email']}}</td>
        <td>{{$student['phone']}}</td>
        <td>{{$student['place']}}</td>
        <td>{{$student['department']}}</td>
        <td><a href="{{"delete/".$student['id']}}">Remove</a></td>

</tr>
@endforeach
</table>
