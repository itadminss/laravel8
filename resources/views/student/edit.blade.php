@extends('layouts.sb2')
@section('title','Student Edit')
@section('content')
    <div class="container">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12 p-0">
                <div class="card col-md-6">
                    <div class="card-header"> 
                        <a class="btn rounded-circle border-circle border-primary" href=""><i class="fas fa-save "></i></a>
                        <a href="" class="btn rounded-circle border-danger"><i class="fas fa-trash "></i></a>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/student/' . $student->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="control-label">{{ 'Name' }}</label>
                                <input class="form-control" name="name" type="text" id="name" value="{{ isset($student->name) ? $student->name : ''}}" >
                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                                <label for="date" class="control-label">{{ 'Date' }}</label>
                                <input class="form-control" name="date" type="date" id="date" value="{{ isset($student->date) ? $student->date : ''}}" >
                                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                                <label for="gender" class="control-label">{{ 'Gender' }}</label>
                                <input class="form-control" name="gender" type="text" id="gender" value="{{ isset($student->gender) ? $student->gender : ''}}" >
                                {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('class') ? 'has-error' : ''}}">
                                <label for="class" class="control-label">{{ 'Class' }}</label>
                                <input class="form-control" name="class" type="text" id="class" value="{{ isset($student->class) ? $student->class : ''}}" >
                                {!! $errors->first('class', '<p class="help-block">:message</p>') !!}
                            </div>

                        </form>

                    </div>
                </div>
              
                
                  
                
                <div class="col-md-6">
                    <div class="card text-left">
                      <img class="card-img-top" src="holder.js/100px180/" alt="">
                      <div class="card-body">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>วันที่ตรวจ</th>
                                    <th>รายการ</th>
                                    <th>ผลการตรวจ</th>
                                    <th>หมายเหตุ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @if(empty($healchk))

                                    @else
                                    @foreach ($healchk as $item )
                                    <td scope="row">{{ isset($item->date) }}</td>
                                    <td>{{ isset($item->week) }}</td>
                                    <td>{{ isset($item->result) }}</td>
                                    <td>{{ isset($item->remark) }}</td>
                                    @endforeach

                                    @endif
                                  
                                
                                    
                                       
                                    </tr>
                  
                                </tbody>
                        </table>
                     
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
