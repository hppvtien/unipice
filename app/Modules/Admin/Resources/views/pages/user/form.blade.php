
<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="name" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control" name="name"
                            value="{{ old('name', $users->name ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="required">Email <span>(*)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                            value="{{ old('email', $users->email ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="required">Phone<span>(*)</span></label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone"
                            value="{{ old('phone', $users->phone ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="required">Address<span>(*)</span></label>
                        <input type="text" class="form-control" id="address" placeholder="Address" name="address"
                            value="{{ old('address', $users->address ?? '') }}">
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
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                            aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                @foreach ($g_status as $key => $item)
                                    <option title="Public" value="{{ $key }}" {{ $users->status == $key ? "selected" : "" }}>{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</form>
