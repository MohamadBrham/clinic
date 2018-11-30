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
            <form method="post" action="{{ route('prescriptions.update', $share->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="name">Doctor ID</label>
                    <input type="text" class="form-control" name="first_name"value={{ $share->doctor_id }} />
                </div>
                <div class="form-group">
                    <label for="name">Patient ID</label>
                    <input type="text" class="form-control" name="last_name" value={{ $share->patient_id }} />
                </div>
                <div class="form-group">
                    <label for="name">description :</label>
                    <input type="text" class="form-control" name="sex" value={{ $share->description }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
