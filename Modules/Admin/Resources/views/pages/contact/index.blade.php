@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Jobs</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
            </div>
        </div>

    </div>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Content</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contact as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->name }}">{{ $item->name }}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->phone }}">{{ $item->phone }}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->email }}">{{ $item->email }}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->name  }}">{{ $item->content }}</a>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" class="v_status" data-ckb="{{ $item->id }}" {{ $item->status == 1 ?'checked':'' }}>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <!-- <td><span class="badge badge-info">{{ $item->status = 1 ? 'Active':'Not-Active' }}</span></td> -->
                                    <td>
                                        <a href="javascript:;" title="{{ $item->name  }}">{{ $item->created_at }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('get_admin.contact.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
    $('.v_status').on('change',function(){
        let v_id = $(this).attr('data-ckb'); 
        $.ajax({
                url: "{{ route('get_admin.contact.edit') }}",
                type : "post",
                dataType:"text",
                data : {
                    v_id : v_id
                },
                success : function (result){
                    console.log(result);
                },
                error : function (result){
                    console.log(result);
                }
            });
    });
    // 
</script>
@stop