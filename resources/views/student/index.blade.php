@extends('layouts.sb2')
@section('title', 'Student Index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-1">
                        <a  class="btn rounded-circle border-1 border-success addstudent   "><i class="fas fa-plus py-1"></i></a>
                        {{-- <a href="" class="btn rounded-circle border-1 border-primary   "><i
                                class="fas fa-save"></i></a>
                        <a href="" class="btn rounded-circle border-1 border-danger   "><i
                                class="fas fa-trash"></i></a>
                        <a href="" class="btn rounded-circle border-1 border-info   "><i class="fas fa-undo"></i></a> --}}
                    </div>
                    <div class="card-body p-0">
                        {{-- <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        {{-- <form method="GET" action="{{ url('/student') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div> --}}
                        </form>
 
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อนักเรียน</th>
                                        <th>วันที่ตรวจ</th>
                                        <th>เพศ</th>
                                        <th>ระดับชั้น</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $item)
                                        <tr ondblclick="window.location='{{ url('student/'.$item->id.'/edit') }}'"  >
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>{{ $item->class }}</td>
                                            {{-- <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm "><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                 onclick="return confirm(&quot;Confirm delete?&quot;)"
                                                 ><i class="fa fa-trash-o confirm-button" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $student->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Small modal --> 

<div class="modal fade bd-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modalstudent">
  <div class="modal-dialog modal-md">

    <form method="POST" action="{{ url('/student') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" id="std_id" hidden value="{{ isset($student->id)?$student->id:'' }}">

        <div class="modal-content p-2">
            <div class="modal-header">เพิ่มนักเรียน</div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                <label for="name" class="control-label">ชื่อนักเรียน</label>
                <input class="form-control" name="name" type="text" id="name" value="{{ isset($student->name) ? $student->name : ''}}" >
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                <label for="date" class="control-label">วันที่</label>
                <input class="form-control" name="date" type="date" id="date" value="{{ isset($student->date) ? $student->date : ''}}" >
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                <label for="gender" class="control-label">เพศ</label>
                <select class="form-select form-control" aria-label="Default select example" name="gender" type="text" id="gender" >
                    <option selected>เลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                    
                  </select>
              
            </div>
          

            <div class="form-group {{ $errors->has('class') ? 'has-error' : ''}}">
                <label for="class" class="control-label">ระดับชั้น</label>
                <input class="form-control" name="class" type="text" id="class" value="{{ isset($student->class) ? $student->class : ''}}" >
                {!! $errors->first('class', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="modal-footer">
                <button  type="submit"class="btn rounded-circle border-1 border-primary   "><i
                                       class="fas fa-save"></i></button>

    </form>
    
    
                           <a href="" class="btn rounded-circle border-1 border-danger   "><i
                                   class="fas fa-trash"></i></a>
                           <a href="" class="btn rounded-circle border-1 border-info   "><i class="fas fa-undo"></i></a>
       </div>
    </div>
   
  </div>
</div>
<script>    
$('.addstudent').on('click',function(){
    $("#modalstudent").modal('show');
})
</script>
    <style>
        tr:hover {
            cursor: pointer;
        }
    </style>
@endsection
