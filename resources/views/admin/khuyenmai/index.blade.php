@extends("layouts.template")
@section("content")
<div class="container-fluid">
                        <h1 class="mt-4">Khuyến mại</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Khuyến mại</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>% KM</th>
                                                <th>Ngày bắt đầu</th>
                                                <th>Ngày kết thúc</th>
                                                <th>Is_Active</th>
                                                <th>Chi tiết</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>% KM</th>
                                                <th>Ngày bắt đầu</th>
                                                <th>Ngày kết thúc</th>
                                                <th>Is_Active</th>
                                                <th>Chi tiết</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
											@foreach ($khuyenmais as $khuyenmai)
											<tr>
                                                <td>{{$khuyenmai->id}}</td>
                                                <td>{{$khuyenmai->phantramkhuyenmai}}</td>
                                                <td>{{$khuyenmai->ngaybatdau->format('d/m/Y')}}</td>
                                                <td>{{$khuyenmai->ngayketthuc->format('d/m/Y')}}</td>
                                                <td>{{$khuyenmai->is_active}}</td>
                                                <td><a href="{{ route('khuyenmai.edit',$khuyenmai->id) }}">Xem</a></td>
                                            </tr>
											@endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection