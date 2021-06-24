<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Câu hỏi thường gặp <span>(*)</span></label>
                        <input type="text" class="form-control" value="{{ old('title',$courseFaq->title ?? '') }}"
                               name="title" >
                        @if($errors->first('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Câu trả lời <span>(*)</span></label>
                        <textarea type="text" class="form-control" 
                               name="content">{{ old('content',$courseFaq->content ?? '') }}</textarea>
                        @if($errors->first('content'))
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                    <input type="hidden" name="course_id" value="{{ $id }}">
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
        </div>
    </div>
</form>
