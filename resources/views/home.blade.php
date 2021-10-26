@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col" colspan="2"><center>Utils</center></th>
                      </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{$response['user']['id']}}</td>
                                <td>{{$response['user']['name']}}</td>
                                <td>{{$response['user']['email']}}</td>
                                <form action="{{route('user.destroy',__($response['user']['id']))}}" method="post">
                                    <td><a class="btn btn-primary" href="{{ route('user.edit',__($response['user']['id'])) }}">Edit</a></td>
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                </form>
                            </tr>
                    </tbody>
                  </table>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
