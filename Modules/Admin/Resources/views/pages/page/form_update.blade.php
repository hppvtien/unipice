<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tiêu đề trang <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title" value="{{ old('p_name', $pages->p_name ?? '') }}" data-slug=".slug" name="p_name">
                        @if($errors->first('p_name'))
                        <span class="text-danger">{{ $errors->first('p_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="p_slug" value="{{ old('p_slug', $pages->p_slug ?? '') }}">
                        @if($errors->first('p_slug'))
                        <span class="text-danger">{{ $errors->first('p_slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-desscription-seo=".meta_desscription" name="p_desscription" value="{{ old('p_desscription', $pages->p_desscription ?? '') }}">
                        @if($errors->first('p_desscription'))
                        <span class="text-danger">{{ $errors->first('p_desscription') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Kiểu trang <span>(*)</span> </label>
                        <input type="text" class="form-control keypress-count" name="p_style" value="{{ old('p_style', $pages->p_style ?? '') }}">
                        @if ($errors->first('p_style'))
                        <span class="text-danger">{{ $errors->first('p_style') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ ($pages->p_style == 'spice-club' ? '':'d-none') }}" >
                        <label for="exampleInputEmail1" class="">Chiết khấu Spice Club <span>(*)</span> </label>
                        <input type="text" class="form-control keypress-count" name="discount" value="{{ old('discount', $pages->discount ?? '') }}">
                        @if ($errors->first('discount'))
                        <span class="text-danger">{{ $errors->first('discount') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Nội dung </label>
                        <textarea name="p_content" id="article-ckeditor" cols="30" rows="5">{!! old('p_content',$pages->p_content ?? '') !!}</textarea>
                        @if ($errors->first('p_content'))
                        <span class="text-danger">{{ $errors->first('p_content') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <a href="{{ route('get_admin.content_page.create', $pages->id) }}" class="btn btn-xs btn-success"><i class="la la-file-import"></i>Thêm mới</a>
            </div>
            <div class="card  box-shadow-0">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Ảnh</th>
                                    <th>Thứ tự</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($content_pages as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        <a title="{{ $item->name }}">{{ $item->name }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ $item->thumbnail }}" target="_blank" style="width: 200px;height: 100px;display: inline-block">
                                            <img style="height: 100%;border-radius: 10px;border: 1px solid #dedede;width: 100%" src="/storage/uploads/{{ $item->thumbnail }}" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->order }}">{{ $item->order }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('get_admin.content_page.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.content_page.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
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
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i class="la la-edit"></i> Edit</a></h4>
                    <div class="view-seo">
                        <a href="" class="view-seo-title meta_title">
                        {{ old('p_title_seo', $pages->p_title_seo ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </a>
                        <p class="view-seo-slug slug">
                        {{ old('p_slug', $pages->p_slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                        <p class="mb-2 view-seo-description meta_desscription">
                        {{ old('p_desscription_seo', $pages->p_desscription_seo ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                            
                        </p>
                    </div>
                </div>
                <div class="card-body pt-3 box-seo hide">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tiêu đề SEO<span>(*)</span></label>
                        <input type="text" class="form-control meta_title" name="p_title_seo" id="meta_title" value="{{ old('p_title_seo', $pages->p_title_seo ?? '') }}">
                        @if($errors->first('p_title_seo'))
                        <span class="text-danger">{{ $errors->first('p_title_seo') }}</span><br>
                        @endif
                        <span class="text-danger" id="count_title"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả SEO <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription" name="p_desscription_seo" id="meta_desscription" value="{{ old('p_desscription_seo', $pages->p_desscription_seo ?? '') }}">
                        @if($errors->first('p_desscription_seo'))
                        <span class="text-danger">{{ $errors->first('p_desscription_seo') }}</span><br>
                        @endif
                        <span class="text-danger" id="count_des"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <div>
                            <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                            <button class="btn btn-success"><i class="la la-check-circle"></i> Save & Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Ảnh </label>
                        <input type="hidden" name="d_avatar" value="{{ old('p_banner', $pages->p_banner ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="p_banner" id="avatar_uploads">
                    </div>
                    @if(isset($pages->p_banner))
                    <p>
                        <img src="{{ pare_url_file($pages->p_banner) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>

@section('scriptck')
<script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('article-ckeditor', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    });
</script>
@stop