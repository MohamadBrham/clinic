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
            <form method="post" action="{{ route('prescriptions.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Doctor ID:</label>
                    <input type="text" class="form-control" name="doctor_id"/>
                </div>
                <div class="form-group">
                    <label for="name">Patient ID:</label>
                    <input type="text" class="form-control" name="patient_id"/>
                </div>
                <div class="form-group">
                    <label for="name">Description :</label>
                    <input type="text" class="form-control" name="description"/>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
