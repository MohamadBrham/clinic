@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Patient
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
            <form method="post" action="{{ route('patients.update', $share->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" name="first_name"value={{ $share->first_name }} />
                </div>
                <div class="form-group">
                    <label for="name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value={{ $share->last_name }} />
                </div>
                <div class="form-group">
                    <label for="price">Gender :</label>
                    <input type="text" class="form-control" name="sex" value={{ $share->sex }} />
                </div>
                <div class="form-group">
                    <label for="quantity">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value={{ $share->mobile }} />
                </div>
                <div class="form-group">
                    <label for="quantity">Email</label>
                    <input type="text" class="form-control" name="email" value={{ $share->email }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
