@extends('layouts.sb2')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Inspect {{ $inspect->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/inspect') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/inspect/' . $inspect->id . '/edit') }}" title="Edit Inspect"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('inspect' . '/' . $inspect->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Inspect" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inspect->id }}</td>
                                    </tr>
                                    <tr><th> Student Id </th><td> {{ $inspect->student_id }} </td></tr><tr><th> Name </th><td> {{ $inspect->name }} </td></tr><tr><th> Position Id </th><td> {{ $inspect->position_id }} </td></tr><tr><th> Result </th><td> {{ $inspect->result }} </td></tr><tr><th> Detail </th><td> {{ $inspect->detail }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
