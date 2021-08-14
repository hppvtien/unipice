<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Code <span>(*)</span></label>
                        <div class="row">
                            <div class="col-9" id="code-generate">
                                <input type="text" class="form-control" value="{{ old('code',$voucher->code ?? '') }}" placeholder="Ấn Generate Code để render code " name="code" >
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-info" id="generate-code"><i class="la text-success"></i> Generate Code</button>
                            </div>
                        </div>
                        @if($errors->first('code'))
                            <span class="text-danger">{{ $errors->first('code') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Phần trăm voucher <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('model_percent',$voucher->model_percent ?? '') }}" data-title-seo=".title_seo"  name="model_percent" >
                        @if($errors->first('model_percent'))
                            <span class="text-danger">{{ $errors->first('model_percent') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('model_qty',$voucher->model_qty ?? '') }}" data-title-seo=".title_seo"  name="model_qty" >
                        @if($errors->first('model_qty'))
                            <span class="text-danger">{{ $errors->first('model_qty') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('description',$voucher->description ?? '') }}" data-title-seo=".title_seo"  name="description" >
                        @if($errors->first('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hạn Voucher <span>(*)</span></label>
                        <input type="date" class="form-control keypress-count" data-title-seo=".title_seo" value="{{ old('expires_at',$voucher->expires_at ?? '') }}" name="expires_at">
                        @if($errors->first('expires_at'))
                            <span class="text-danger">{{ $errors->first('expires_at') }}</span>
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
        </div>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#generate-code').on('click', function() {
        $.ajax({
            url: "{{ route('get_admin.voucher.generate_code') }}",
            type: "post",
            dataType: "text",
            success: function(result) {
                let code_vc = result;
                console.log(code_vc);
                $('#code-generate').html('<input type="text" class="form-control" value="'+result+'" name="code" >');
            },
            error: function(result) {
                console.log(result, +'ssssss');
            }
        });
    });
    // 
</script>
