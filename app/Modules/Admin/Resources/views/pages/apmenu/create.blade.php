@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
	<!-- breadcrumb -->
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
				<div class="row">
			        <div class="col-sm-12" style="padding-bottom: 30px; padding-top: 10px;">
			            <form action="" method="POST">
			                <input type="hidden" id="nestable-output" name="jsonMenu">
			                <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
			                <button class="btn btn-success" type="submit" style="">Cập nhật menu</button>
			                <button class="btn btn-info" data-toggle="modal" data-target="#addMenu" type="button">Thêm mới</button>
			                <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#createSlugBrand" type="button">Tạo liên kết thương hiệu</button> -->
			            </form>
			        </div>
			        <div class="col-sm-12">
			            <div class="dd" id="nestable">
			                <ol class="dd-list">
			                    @foreach ($data as $item)
			                        @if (empty($item->parent_id))
			                            <li class="dd-item" data-id="{{ $item->id }}">
			                                <div class="dd-handle">
			                                    {{ $item->title }} (<i>{{ $item->url }}</i>)
			                                </div>
			                                <div class="button-group">
			                                    <a href="javascript:;" class="modalEditMenu" data-id="{{ $item->id }}"> 
			                                        <i class="fa fa-pencil fa-fw"></i> Sửa
			                                    </a> &nbsp; &nbsp; &nbsp;
			                                    <a class="text-danger" href="" onclick="return confirm('Bạn có chắc chắn xóa không ?')" title="Xóa"> <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
			                                </div>
			                                <?php menuChildren($data, $item->id, $item ) ?>
			                            </li>
			                         @endif
			                    @endforeach
			                </ol>
			            </div>
			        </div>
			    </div>
			    <div class="modal" id="addMenu">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Thêm mới</h4>
			                </div>
			                <form action="{{ route('setting.menu.addItem', $id ) }}" method="POST" class="frm_add">
			                    <div class="modal-body">
			                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			                        <fieldset class="form-group">
			                            <label>Tiêu đề</label>
			                            <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="title" required>
			                        </fieldset>
			                        <div class="form-group">
	                        			<label for="">Icon ( Nêu có )</label>
				                        <div class="image">
				                            <div class="image__thumbnail " style="">
				                                <img src="{{ __IMAGE_DEFAULT__ }}"
				                                     data-init="{{ __IMAGE_DEFAULT__ }}">
				                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
				                                    <i class="fa fa-times"></i></a>
				                                <input type="hidden" value="" name="icon"/>
				                                <div class="image__button" onclick="fileSelect(this)">
				                                	<i class="fa fa-upload"></i>
				                                    Upload
				                                </div>
				                            </div>
				                        </div>
				                    </div>
			                        <fieldset class="form-group">
			                            <label>Đường đẫn</label><br>
			                            <label>Chỉ coppy phần bôi đỏ: <br>
			                                {{ url('/') }}<span style="color: red; font-weight: bold;">/gioi-thieu</span>
			                            </label>
			                            <div class="input-group">
			                                <span class="input-group-addon">{{ url('/') }}</span>
			                                <input type="text" class="form-control" placeholder="Nhập đường dẫn" name="url" required>
			                            </div>
			                        </fieldset>
			                        <fieldset class="form-group">
			                            <label>Loại trang</label>
			                            <select name="class" class="form-control">
			                                <option value="">Trang bình thường</option>
			                                <option value="page-product">Trang sản phẩm</option>
			                                 <option value="page-blog">Trang tin tức</option>
			                            </select>
			                        </fieldset>
			                    </div>
			                    <div class="modal-footer">
			                        <button type="submit" class="btn btn-success">Thêm mới</button>
			                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			    <div class="modal" id="editMenu">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Sửa Menu</h4>
			                </div>
			                <form action="{{ route('setting.menu.editItem' ) }}" method="POST" class="frm_add">
			                    <div class="modal-body">
			                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
			                        <fieldset class="form-group">
			                            <label>Tiêu đề</label>
			                            <input type="text" class="form-control" id="editTitle" name="title" required >
			                            <input type="hidden" value="" id="id_menu" name="id">
			                        </fieldset>
			                         <div class="form-group">
	                        			<label for="">Icon ( Nêu có )</label>
				                        <div class="image">
				                            <div class="image__thumbnail " id="iconEdit">
				                                <img src="{{ __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
				                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
				                                    <i class="fa fa-times"></i></a>
				                                <input type="hidden" value="" name="icon"/>
				                                <div class="image__button" onclick="fileSelect(this)">
				                                	<i class="fa fa-upload"></i>
				                                    Upload
				                                </div>
				                            </div>
				                        </div>
				                    </div>
			                        <fieldset class="form-group">
			                            <label>Đường đẫn</label>
			                            <input type="text" class="form-control" id="editUrl" name="url" required>
			                        </fieldset>
			                    </div>
			                    <div class="modal-footer">
			                        <button type="submit" class="btn btn-success">Sửa</button>
			                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			                    </div>
			                </form>
			            </div>
			        </div>
			    </div>
			    <div class="modal" id="createSlugBrand">
			    	 <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h4 class="modal-title">Tạo liên kết danh mục / thương hiệu</h4>
			                </div>
			                <div class="modal-body">
		                        <div class="form-group">
		                        	<label for="">Danh mục</label>
		                        	<select class="form-control" id="categories">
		                        		<option value="">Danh mục</option>
		                        		<?php $categories = \App\Models\Categories::where('type', 'product_category')->get(); ?>
		                        		<?php menuMultiSlug( $categories , 0 , '' ,   null); ?>
		                        	</select>
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Thương hiệu</label>
		                        	<?php $brands = \App\Models\Categories::where('type', 'brand_category')->get(); ?>
		                        	<select class="form-control" id="brand">
		                        		<option value="">Thương hiệu</option>
		                        		@foreach ($brands as $item)
		                        			<option value="{{ $item->slug }}">{{ $item->name }}</option>
		                        		@endforeach
		                        	</select>
		                        </div>
		                        <div class="form-group">
		                        	<label for="">Đường đẫn</label>
		                        	<input type="text" id="inputCreate" class="form-control">
		                        </div>
		                    </div>
		                    <div class="modal-footer">
		                        <button type="button" class="btn btn-success" id="createSlug" >Tạo</button>
		                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		                    </div>
			               
			            </div>
			        </div>
			    </div>
            </div>
        </div>
    </div>
	<!-- row -->
</div>
@stop