@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>
            Users
            <a href="{{route('user.create')}}" class="btn btn-primary float-start">
                New User
            </a>
        </h1>
        @include('component.err')

        <table class="table table-striped table-bordered table-hover text-center">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Mobile
                </th>
                <th>
                    -
                </th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td dir="ltr">
                        {{$user->mobile}}
                    </td>
                    <td>
                        <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger ms-2">X</a>
                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-secondary "><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="Pagination mt-4 ">
            {{$users->links()}}
        </div>


    </div>

@endsection

