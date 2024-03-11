<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>FullName</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
@foreach($users as $user)
<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->fullname}}</td>
    <td>{{$user->email}}</td>
    <td>{{Carbon\Carbon::parse($user->$birthdate)->diffForHumans() }}</td>
    <td>{{$user->phone}}</td>
    {{-- <td>{{$user->created_at->locale('es')->diffForHumans()}}</td> --}}
    <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
</tr>
@endforeach
</tbody>
</table>