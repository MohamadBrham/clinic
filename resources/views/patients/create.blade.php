@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Patient
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('patient.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" name="first_name"/>
                </div>
                <div class="form-group">
                    <label for="name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name"/>
                </div>
                <div class="form-group">
                    <label for="price">Gender :</label>
                    <input type="text" class="form-control" name="sex"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Mobile</label>
                    <input type="text" class="form-control" name="mobile"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Email</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
