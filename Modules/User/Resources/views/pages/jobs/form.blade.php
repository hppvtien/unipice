<form class="form-horizontal" id="jobs_submit" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="card  box-shadow-0">
        <div class="card-body pt-3">
            <div class="form-group">
                <label for="exampleInputEmail1" class="required">Tin tuyển dụng <span>(*)</span></label>
                <input type="text" class="form-control keypress-count" id="title" value="{{ old('name',$jobedit->name ?? '') }}" onkeyup="ChangeToSlug();" data-title-seo=".title_seo" data-slug=".slug" name="name">
                @if($errors->first('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="required">Đường link <span>(*)</span></label>
                <input id="slug" type="text" class="form-control slug" name="slug" value="{{ old('slug',$jobedit->slug ?? '') }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="">Mô tả tin tuyển dụng </label>
                <textarea class="form-control keypress-count" id="desscription_job" name="desscription" cols="10" rows="3">{{ old('desscription',$jobedit->desscription ?? '') }}</textarea>
                @if($errors->first('desscription'))
                <span class="text-danger">{{ $errors->first('desscription') }}</span>
                @endif
                <span class="text-danger" id="count_des"></span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="">Nội dung tin tuyển dụng </label>
                <textarea name="content" id="article-ckeditor" cols="30" rows="5">{!! old('content',$jobedit->content ?? '') !!}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="">Số điện thoại nhà tuyển dụng </label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone',$jobedit->phone ?? '') }}">
                @if($errors->first('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="">Email nhà tuyển dụng </label>
                <input type="text" class="form-control" name="email" value="{{ old('email',$jobedit->email ?? '') }}">
                @if($errors->first('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="">Địa chỉ nhà tuyển dụng </label>
                <input type="text" class="form-control" name="address" value="{{ old('address',$jobedit->address ?? '') }}">
                @if($errors->first('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="required">Logo nhà tuyển dụng <span>(*)</span></label>
                <input type="file" class="form-control" name="j_avatar" value="{{ old('j_avatar', $jobedit->j_avatar ?? '') }}" placeholder="{{ old('j_avatar', $jobedit->j_avatar ?? '') }}">
                <input type="hidden" class="form-control" name="d_avatar" value="{{ old('j_avatar', $jobedit->j_avatar ?? '') }}">
            </div>
            <div class="form-group">
                <div>
                    <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<script>
    $("#desscription_job").keyup(function() {
        $("#count_des").text("Ký tự: " + (150 - $(this).val().length) + " (Nội dung 100-150 ký tự)");
        $("#count_des").text("Ký tự: " + (150 - $(this).val().length) + " (Nội dung 100-150 ký tự)");
    });

    function ChangeToSlug() {
        var title, slug;

        //Lấy text từ thẻ input title 
        title = document.getElementById("title").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
@stop