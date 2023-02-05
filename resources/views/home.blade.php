@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9 pull-left">
                            {{ __('Employees') }}
                        </div>
                        <div class="col-3 pull-right">
                            <a href="{{ route('user.create') }}" class="btn btn-success">Add Employee</a>
                        </div>
                    </div>    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="container">
                        <table class="table table-bordered mb-5">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">#</th>
                                    <th scope="col">First name</th>
                                    <th scope="col">Last name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>{{ Carbon\Carbon::parse($user->created_at)->format('Y-m-d'); }}</td>
                                    <td>
                                        <a href="{{ route('user.edit',['id' => $user->id]) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('user.delete',['id' => $user->id]) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
