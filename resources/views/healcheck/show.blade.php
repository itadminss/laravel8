@extends('layouts.sb2')

@section('content')
    <div class="container">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Healcheck {{ $healcheck->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/healcheck') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/healcheck/' . $healcheck->id . '/edit') }}" title="Edit Healcheck"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('healcheck' . '/' . $healcheck->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Healcheck" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $healcheck->id }}</td>
                                    </tr>
                                    <tr><th> Student Id </th><td> {{ $healcheck->student_id }} </td></tr><tr><th> Date </th><td> {{ $healcheck->date }} </td></tr><tr><th> Week </th><td> {{ $healcheck->week }} </td></tr><tr><th> Result </th><td> {{ $healcheck->result }} </td></tr><tr><th> Detail </th><td> {{ $healcheck->detail }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
