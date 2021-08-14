<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"  value="{{ old('name', $uni_comment->name ?? '') }}"  name="name">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"  value="{{ old('phone', $uni_comment->phone ?? '') }}"  name="phone">
                        @if($errors->first('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control email" name="email" value="{{ old('email', $uni_comment->email ?? '') }}">
                        @if($errors->first('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nội dung câu hỏi<span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="noi_dung_question" value="{{ old('noi_dung_question', $uni_comment->noi_dung_question ?? '') }}">
                        @if($errors->first('noi_dung_question'))
                        <span class="text-danger">{{ $errors->first('noi_dung_question') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nội dung câu trả lời <span>(*)</span></label>
                        <input type="text" class="form-control content" name="noi_dung_answer" value="{{ old('noi_dung_answer', $uni_comment->noi_dung_answer ?? '') }}">
                        @if($errors->first('noi_dung_answer'))
                        <span class="text-danger">{{ $errors->first('noi_dung_answer') }}</span>
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
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="Public" value="1">Public</option>
                                <option title="hide" value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>