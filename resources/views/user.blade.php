@extends('layouts.admin_page')
@section('mainContent')
<div class="p-3" id="product">  
    <h1 class="text-center fw-bold">User List</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        @if ($user->role == 0)
                            Administrator
                        @elseif($user->role == 1)
                            Staff
                        @else
                            Customer
                        @endif
                    </td>
                    <td><a class="btn btn-danger" href="/user/delete/{{ $user['id'] }}" >hapus</a></td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</div>
@endsection