<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('name',$jobs->name ?? '') }}" data-title-seo=".title_seo" data-slug=".slug" name="name" >
                        @if($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Desscription </label>
                        <input type="text" class="form-control keypress-count" name="desscription" value="{{ old('desscription',$jobs->desscription ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Content </label>
                        <input type="text" class="form-control keypress-count" name="content" value="{{ old('content',$jobs->content ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Phone </label>
                        <input type="text" class="form-control keypress-count" name="phone" value="{{ old('phone',$jobs->phone ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Email </label>
                        <input type="text" class="form-control keypress-count" name="email" value="{{ old('email',$jobs->email ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Address </label>
                        <input type="text" class="form-control keypress-count" name="address" value="{{ old('address',$jobs->address ?? '') }}">
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
                            <select name="status" class="form-control SlectBox SumoUnder"  tabindex="-1">
                                <option title="Public" value="1">Active</option>
                                <option title="hide" value="0">No Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label class="" for="exampleInputEmail1"> Hot Job </label>
                        <div class="form-group">
                            <label class="box-checkbox"> Nổi bật
                                <input type="radio" name="is_hot" {{ ($jobs->is_hot ?? 0) == 1 ? 'checked' : '' }}  value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="box-checkbox"> Không nổi bật
                                <input type="radio" name="is_hot" {{ ($jobs->is_hot ?? 0) ==  0 ? 'checked' : '' }} value="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Images </label>
                        <input type="file" data-type="avatar" class="filepond" name="avatar">
                        <input type="hidden" name="image" id="avatar_uploads">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>
