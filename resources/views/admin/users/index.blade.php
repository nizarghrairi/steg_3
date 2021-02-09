@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste des gestionnaire</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td >{{$user->name}}</td>
                                    <td >{{$user->email}}</td>
                                    <td >{{ implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>
                                        <a href="{{route('admin.users.edit', $user->id)}}"><button class="btn btn-primary float-left">editer</button></a>
                                        @can('delete-users')
                                            <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline ">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning">supprimer</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="float-right">
                                            {!! $users->links() !!}
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
