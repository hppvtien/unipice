<style>
    .text-wrap .example .form-group {
        margin-bottom: 1rem;
    }
    .tab-course-content .lists .item{
        border: 1px solid #dedede;
        margin-bottom: 10px;
        padding: 10px;
    }
    .tab-course-content .lists .item p{
        margin-bottom: 0.2rem;
    }
    .tab-course-content .lists .item p:last-child span{
        font-size: 13px;
        color: #031b4e;
        font-weight: 700;
    }
</style>
<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="text-wrap">
                    <div class="example">
                        <div class="panel panel-primary tabs-style-1">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs main-nav-line">
                                        <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">Thông tin</a></li>
                                        <li class="nav-item"><a href="#tab3" class="nav-link " data-toggle="tab">Nội dung bài viết</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                                            <input type="text" class="form-control keypress-count" value="{{ old('name',$uni_post->name ?? '') }}"
                                                   data-title-seo=".meta_title" data-slug=".slug" name="name" >
                                            @if($errors->first('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                                            <input type="text"  class="form-control slug"  name="slug" value="{{ old('slug',$uni_post->slug ?? '') }}">
                                            @if($errors->first('slug'))
                                                <span class="text-danger">{{ $errors->first('slug') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Order <span>(*)</span></label>
                                            <input type="number"  class="form-control order"  name="order" value="{{ old('order',$uni_post->order ?? '') }}">
                                            @if($errors->first('order'))
                                                <span class="text-danger">{{ $errors->first('order') }}</span>
                                            @endif
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="required"> Tags <span>(*)</span></label>
                                                    <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                                                        <select name="tags[]" class="form-control  SumoUnder js-select2" tabindex="-1" multiple>
                                                            @foreach($uni_tag as $tag)
                                                            <option title="{{ $tag->name }}" {{ in_array($tag->id, $tagOld) ? "selected" : "" }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="required">Category <span>(*)</span></label>
                                                    <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                                                        <select name="category_id" class="form-control SlectBox SumoUnder"  tabindex="-1">
                                                            @foreach($uni_postcategory as $category)
                                                                <option title="{{ $category->name }}" {{ old('category_id',$uni_post->category_id ?? 0 ) == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if($errors->first('category_id'))
                                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Description <span>(*)</span></label>
                                            <input type="text" class="form-control keypress-count" data-desscription-seo=".meta_desscription" name="desscription" value="{{ old('desscription', $uni_post->desscription ?? '') }}">
                                            @if($errors->first('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                        <div class="card  box-shadow-0">
                                            <div class="card-header">
                                                <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i class="la la-edit"></i> Edit</a></h4>
                                                <div class="view-seo">
                                                    <a href="" class="view-seo-title meta_title">It is Very Easy to Customize and it uses in your website apllication.</a>
                                                    <p class="view-seo-slug">It is Very Easy to Customize and it uses in your website apllication. <span class="slug">121212121</span></p>
                                                    <p class="mb-2 view-seo-description meta_desscription">It is Very Easy to Customize and it uses in your website apllication.</p>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3 box-seo hide">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Meta Title <span>(*)</span></label>
                                                    <input type="text" class="form-control meta_title"  value="{{ old('meta_title', $uni_post->meta_title ?? '') }}" name="meta_title" id="inputName" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Meta Desscription <span>(*)</span></label>
                                                    <input type="text" class="form-control meta_desscription" name="meta_desscription" value="{{ old('meta_desscription', $uni_post->meta_desscription ?? '') }}" id="inputName" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                       
                                        <textarea name="content" class="form-control" id="article-ckeditor" cols="30" rows="10">{{ old('content',$uni_post->content ?? '') }}</textarea>
                                        @if($errors->first('content'))
                                            <span class="text-danger">{{ $errors->first('content') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Action <span>(*)</span></label>
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
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" value="0">No Active</option>
                                <option title="Public" value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Avatar </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" value="{{ old('thumbnail',$uni_post->thumbnail ?? '') }}" id="avatar_uploads">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@section('scriptck')
<script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">

    CKEDITOR.replace( 'article-ckeditor', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    } );
    
</script>
@stop