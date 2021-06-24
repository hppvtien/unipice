@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Danh sách câu hỏi của học viên</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Teachers</th>
                                        <th>Nội dung</th>
                                        <th>Khóa học</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($answerToTeacher as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th> 
                                        <td><span>{{ ('\App\Models\Education\Teacher')::find($item->asw_teacher)->t_name }}<span class="text-danger"> - [ID: {{ $item->asw_teacher }}]</span></span></td>
                                        <td><span>{{ $item->asw_content }}</span></td>
                                        <td><span>{{ ('\App\Models\Education\Course')::find($item->asw_id_course)->c_name }}<span class="text-danger"> - [ID: {{$item->asw_id_course}}]</span></span></td>
                                        <td><span class="badge {{ $item->asw_status == 1 ? 'badge-info': 'badge-warning' }}">{{ $item->asw_status == 1 ? 'Đã trả lời': 'Chưa trả lời' }}</span></td>
                                        <td>
                                            <a href="{{ route('get_admin.answer_and_questions.questions', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="{{ route('get_admin.answer_and_questions.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
@stop
