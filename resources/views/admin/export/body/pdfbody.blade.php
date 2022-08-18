@extends('admin.export.pdf')

@section('post')
<table>
    <tr>
      <th>FullName</th>
      <th>Gender</th>
      <th>Email</th>
      <th>BirthDate</th>
      <th>Age</th>
      <th>BirthPlace</th>
      <th>Contact</th>
      <th>Address</th>
   
    </tr>
    @foreach ($data as $item)
        <tr>
            <td> {{ $item->lastname }}, {{ $item->firstname }}  {{ $item->middlename }}. </td>
            <td> {{ $item->gender }}</td>
            <td> {{ $item->email }}</td>
            <td> {{ $item->birthday }}</td>
            <td>{{ $item->age }}</td>
            <td> {{ $item->birthplace }}</td>
            <td> {{ $item->phonenumber }}</td>
            <td> {{ $item->address }}</td>

      </tr>
    @endforeach
    
   
  </table>
 

@endsection