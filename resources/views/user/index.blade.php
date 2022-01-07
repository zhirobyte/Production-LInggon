
@extends('adminlte::page')

@section('title', 'AdminLTE')
     
@section('content')
    <div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>Laman user Linggon</h2>
            </div>
            <div class="pull-center">
                <a class="btn btn-success" href="/user/create"> Create New User</a>
                <a href="/admin/dashboard" class="btn btn-primary">Dashboard</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   

    <table class="table table-bordered">
        <tr>
            <th>is_admin</th>
            <th>Nama</th>
            <th>Google Id</th>
            <th>email</th>
            <th>birth date</th>
            <th>profession</th>
            <th>address</th>
            <th>province</th>
            <th>city</th>
            <th>district</th>
            <th>zip code</th>
            <th>instagram</th>
            <th>phone</th>
            <th>Action</th>
        </tr>

        @foreach ($user as $user)
        <tr>
            <td>{{ $user->is_admin }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->google_id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->birth_date }}</td>
            <td>{{ $user->profession }}</td>
            <td>{{ $user->province }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->district }}</td>
            <td>{{ $user->zip_code }}</td>
            <td>{{ $user->instagram }}</td>
            <td>{{ $user->phone }}</td>
            <td><img src="/image/{{ $user->image }}" width="100px"></td>
            <td>
                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    

@endsection