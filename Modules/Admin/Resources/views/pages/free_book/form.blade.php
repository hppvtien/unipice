<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"
                            value="{{ old('name', $freebook->name ?? '') }}" data-title-seo=".title_seo"
                            data-slug=".slug" name="name">
                        @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Desscription </label>
                        <input type="text" class="form-control keypress-count" name="desscription"
                            value="{{ old('desscription', $freebook->desscription ?? '') }}">
                        @if ($errors->first('desscription'))
                            <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Count Download </label>
                        <input type="number" class="form-control keypress-count" name="count_down"
                            value="{{ old('count_down', $freebook->count_down ?? '') }}">
                        @if ($errors->first('count_down'))
                            <span class="text-danger">{{ $errors->first('count_down') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">File <span>(*)</span></label>
                        <input type="file" class="form-control" name="file_fb"  value="{{ old('file_fb', $freebook->file_fb ?? '') }}">
                        @if(isset($freebook) && $freebook->file_fb)
                        <p><a href="{{ pare_url_file($freebook->file_fb,'uploads_Ebook') }}" download="">{{ $freebook->file_fb }}</a></p>
                        @endif                    
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
                        <label for="exampleInputEmail1"> Avatar </label>
                        <input type="hidden" name="d_avatar" value="{{ old('f_avatar', $freebook->f_avatar ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="f_avatar" id="avatar_uploads">
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label class="" for="exampleInputEmail1"> Nổi bật </label>
                        <div class="form-group">
                            <label class="box-checkbox"> Nổi bật
                                <input type="radio" name="is_hot" {{ ($freebook->is_hot ?? 0) == 1 ? 'checked' : '' }} value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="box-checkbox"> Không nổi bật
                                <input type="radio" name="is_hot" {{ ($freebook->is_hot ?? 0) ==  0 ? 'checked' : '' }} value="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
