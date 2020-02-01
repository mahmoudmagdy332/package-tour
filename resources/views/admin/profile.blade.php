@extends('layouts.app')
@section('content')
<div class="Profile">
		<div class="profile_static">
			<ul>
				<li>{{$user->fname}}</li>
				<li>{{$user->lname}}</li>	
				<li>{{$user->email}}</li>
				<li>{{$user->phone}}</li>	
				<li>{{$user->city}}</li>
					
			</ul>
		</div>
	 <div class="table-history-user">
                <table >
                        <tr class="th">
                          <th> order </th>    
                        <th >package </th>
                        <th>member</th>
                        <th>price</th>
                        <th>visa</th>
                        <th>time</th>
                    </tr>
                   
 
               
              
    @foreach($order as $a)           
         
      
                       <tr>
                        <td>{{$a->order_id}}</td>   
                        <td>{{$a->package_name}}</td>
                        <td>{{$a->member_nomber}}</td>
                        <td>{{$a->total_price}}</td>
                        <td>{{$a->to_zip}}</td>
                        <td>{{$a->going_time}}</td>
                       
                    </tr>
           @endforeach              
                   
                </table>
            </div>
	</div>			
						

@endsection