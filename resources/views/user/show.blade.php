@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">User {{ $user->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/user/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('user' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $user->name }} </td></tr><tr><th> Email </th><td> {{ $user->email }} </td></tr><tr><th> Email Verified At </th><td> {{ $user->email_verified_at }} </td></tr><tr><th> Password </th><td> {{ $user->password }} </td></tr><tr><th> Remember Token </th><td> {{ $user->remember_token }} </td></tr><tr><th> Role </th><td> {{ $user->role }} </td></tr>
                                </tbody>
                            </table>
                            
                            @php
                            if ($user->vehicles()->count()>0) {
                                $vehicle = $user->vehicles()->where("brand","Honda")->orderBy("year","desc")->get()->toQuery()->paginate(6);
                            }                                
                             
                           @endphp
                           
   
                              
                                
                       
                        

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Brand</th><th>Serie</th><th>Color</th><th>Year</th><th>Mileage</th><th>User Id</th>
                                        <th>User Email</th><th>User Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(($user->vehicles()->count()>0))
                                @foreach($vehicle as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->brand }}</td><td>{{ $item->serie }}</td><td>{{ $item->color }}</td><td>{{ $item->year }}</td><td>{{ $item->mileage }}</td><td>{{ $item->user_id }}</td>
                                        <td>{{ isset($item->user->email) ? $item->user->email : ""}}</td>
                                        <td>{{ isset($item->user->role) ? $item->user->role : ""}}</td>

                                        <td>
                                            <a href="{{ url('/vehicle/' . $item->id) }}" title="View Vehicle"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/vehicle/' . $item->id . '/edit') }}" title="Edit Vehicle"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/vehicle' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vehicle" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                               
                                </tbody>
                            </table>
                            @if(($user->vehicles()->count()>0))
                            <div class="pagination-wrapper"> {!! $vehicle->appends(['search' => Request::get('search')])->render() !!} </div>
                           @endif
                                
                            
                           
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
