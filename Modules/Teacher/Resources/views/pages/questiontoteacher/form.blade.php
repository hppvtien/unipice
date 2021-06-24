<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <h2>Câu hỏi của học viên</h2>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Giáo viên <span>(*)</span></label>
                                <input disabled type="text" class="form-control keypress-count" value="{{ old('asw_teacher', $answerToTeacher->asw_teacher ?? '') }}" data-title-seo=".title_seo" name="asw_teacher">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="">Nọi dung câu hỏi </label>
                                <input disabled type="text" class="form-control keypress-count" name="asw_content" value="{{ old('asw_content', $answerToTeacher->asw_content ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                                <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                                    <select name="asw_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                        <option value="0" {{ $answerToTeacher->asw_status == 0 ? 'selected' : '' }}>Vừa tiếp nhận</option>
                                    <option value="1" {{ $answerToTeacher->asw_status == 1 ? 'selected' : '' }}>Đã trả lời</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="">Học viên </label>
                                <input disabled type="number" class="form-control keypress-count" name="asw_id_user" value="{{ old('asw_id_user', $answerToTeacher->asw_id_user ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="">Khóa học </label>
                                <input disabled type="number" class="form-control keypress-count" name="asw_id_course" value="{{ old('asw_id_course', $answerToTeacher->asw_id_course ?? '') }}">
                            </div>
                        </div>
                    </div>
                    <h2>Giáo viên trả lời</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Giáo viên trả lời <span>(*)</span></label>
                                <textarea name="qs_content" class="form-control" id="qs_content" cols="30" rows="4">{{ old('qs_content', $questionsToTeacher->qs_content ?? '') }}</textarea>
                            </div>
                            <input type="hidden" name="qs_answerID" value="{{ old('id', $answerToTeacher->id ?? '') }}">
                            <input type="hidden" name="qs_ID" value="{{ old('id', $questionsToTeacher->id ?? '') }}">
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
        </div>
    </div>
</form>