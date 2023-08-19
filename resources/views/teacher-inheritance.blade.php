{{-- week03-1 --}}
@extends("inheritance/themequiz")
@section("title","Teacher")
@section("content")
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ชื่อสกุล</th>
                                            <th>รายละเอียด</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>ชื่อสกุล</th>
                                            <th>รายละเอียด</th>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>อาจารย์ชวลิต โควีระวงศ์</td>
                                            <td><a href="">รายละเอียด</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>อาจารย์ ดร.ประณมกร อัมพรพรรดิ์</td>
                                            <td><a href="">รายละเอียด</a></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
@endsection