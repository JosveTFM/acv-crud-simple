@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                    {{-- <td><a class="btn btn-primary" disabled href="{{ route('user.edit',__($response['user']['id'])) }}">Edit</a></td> --}}
                                    <td><button type="submit" class="btn btn-primary" disabled>Edit</button></td>
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                </form>
                            </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="col-md-12">
            <div class="card">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Año Edicion</th>
                    <th scope="col">Lugar Edicion</th>
                    <th scope="col">Ejemplares</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col" colspan="2"><center>Utils</center></th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i=0;$i<8;$i++)
                        <tr>
                            <th scope="row">{{$data[$i]['id']}}</th>
                            <td>{{$data[$i]['titulo']}}</td>
                            <td>{{$data[$i]['anyoed']}}</td>
                            <td>{{$data[$i]['lugared']}}</td>
                            <td>{{$data[$i]['nejemplares']}}</td>
                            <td>{{$data[$i]['observaciones']}}</td>
                            <form action="{{route('libro.destroy',__($data[$i]['id']))}}" method="post">
                                {{-- <td><a class="btn btn-primary" disabled href="{{ route('libro.edit',__($data[$i]['id'])) }}">Edit</a></td> --}}
                                <td><button type="submit" class="btn btn-primary" disabled>Edit</button></td>
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger" disabled>Delete</button></td>
                            </form>
                        </tr>
                    @endfor
                </tbody>
                </table>
            </div>
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
@endsection
