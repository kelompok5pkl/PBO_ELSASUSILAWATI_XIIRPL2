<table border="2"  class="table table-striped" style="background-color: pink;">
	<tr>
		<tittle>Data nama dan kelas by elsa susilawati</tittle>
		<td>id</td>
		<td>student name</td>
		<td>class</td>
	</tr>
	
	@foreach ($students as $data)

	<tr>
		<td>{{$data ['id']}}</td>
		<td>{{$data ['student_name']}}</td>
		<td>{{$data ['class']}}</td>

	</tr>
	@endforeach
</table>