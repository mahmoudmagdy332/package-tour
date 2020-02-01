@extends('layouts.app1')
@section('content2')
   
<div class="table-history-user">
    <table >
        <tr class="th">
      
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>City</th>
            <th>Packages</th>
        </tr>

@foreach($user as $a)
            <tr>
             
  
            <td>{{$a->fname}}</td>
            <td>{{$a->lname}}</td>
            <td>{{$a->email}}</td>
            <td>{{$a->phone}}</td>
            <td>{{$a->city}}</td>
            <td><a href="/profile/{{$a->id}}" >Veiw user detials</a>
              
              </tr>
@endforeach
    </table>
</div>

@endsection
