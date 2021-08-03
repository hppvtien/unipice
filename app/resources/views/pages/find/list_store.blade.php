@forelse ($uni_store as $key => $item)
<div class="m-heading get-map-google" data-lat="{{ $item->store_lat }}" data_lng="{{ $item->store_lng }}">
    <div class="m-heading__cta">
        <h2 class="m-heading__headline heading_namestore">{{ $item->store_name }}</h2>
        <p class="m-media-block-aligned__description">Địa chỉ: {{ $item->store_address }}</p>
        <p class="m-media-block-aligned__description">Số điện thoại: {{ $item->store_phone }}</p>
        <p class="go-map">Xem bản đồ</p>
    </div>
</div>
@empty
    
@endforelse