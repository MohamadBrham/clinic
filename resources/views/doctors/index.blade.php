@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Gender</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Start Work</td>
                <td>Finish Work</td>
                <td>Vacation</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($shares as $share)
                <tr>
                    <td>{{$share->id}}</td>
                    <td>{{$share->first_name}}</td>
                    <td>{{$share->last_name}}</td>
                    <td>{{$share->sex}}</td>
                    <td>{{$share->mobile}}</td>
                    <td>{{$share->email}}</td>
                    <td>{{$share->start_work}}</td>
                    <td>{{$share->finish_work}}</td>
                    <td>{{$share->vacation}}</td>
                    <td><a href="{{ route('doctors.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('doctors.destroy', $share->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
@endsection
