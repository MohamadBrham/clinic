@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Doctor
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
            <form method="post" action="{{ route('doctors.update', $share->id) }}">
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
                <div class="form-group">
                    <label for="quantity">Start Work</label>
                    <input type="text" class="form-control" name="start_work" value={{ $share->start_work }} />
                </div>
                <div class="form-group">
                    <label for="quantity">Finish Work</label>
                    <input type="text" class="form-control" name="finish_work" value={{ $share->finish_work }} />
                </div>
                <div class="form-group">
                    <label for="quantity">Vacation</label>
                    <input type="text" class="form-control" name="vacation" value={{ $share->vacation }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
