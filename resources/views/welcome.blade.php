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
                <td>Patients</td>
                <td>Doctors</td>
                <td>Prescriptions</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="{{ route('patients.index')}}" class="btn btn-primary">List</a></td>
                    <td><a href="{{ route('doctors.index')}}" class="btn btn-primary">List</a></td>
                    <td><a href="{{ route('prescriptions.index')}}" class="btn btn-primary">List</a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('patients.create')}}" class="btn btn-primary">Create</a></td>
                    <td><a href="{{ route('doctors.create')}}" class="btn btn-primary">Create</a></td>
                    <td><a href="{{ route('prescriptions.create')}}" class="btn btn-primary">Create</a></td>
                </tr>
            </tbody>
        </table>
        <div>


@endsection
