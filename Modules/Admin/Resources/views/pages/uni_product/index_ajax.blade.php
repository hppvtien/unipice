
<table class="table mg-b-0 text-md-nowrap">
    <thead>
        <tr>
            <th>#</th>
            <th>SEO</th>
            <th>Số lượng</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>

    <tbody>
        @foreach($uni_product as $key => $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>
                <div class="existed-seo-meta">
                    <h5>{{ $item->name }}</h5>
                    <span class="page-title-seo title_seo">{{ $item->meta_title }}</span>
                    <div class="page-url-seo ws-nm">
                        <p><span class="slug">{{ $item->slug }}</span></p>
                    </div>
                    <div class="ws-nm">
                        <span style="color: #70757a;">{{ $item->created_at }} - </span>
                        <span class="page-description-seo meta-desscription">{{ $item->meta_desscription }}</span>
                    </div>
                </div>
            </td>
            <td>
                <span class="badge badge-info">{{ $item->qty }}</span>
            </td>
            <td>
                <span class="badge {{ $item->status == 1 ? 'badge-success':'badge-danger' }}">{{ $item->status == 1 ? 'Active':'Not-Active' }}</span>
            </td>
            <td>
                <a href="{{ route('get_admin.uni_product.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                <a href="{{ route('get_admin.uni_product.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                <a href="{{ route('get_admin.uni_product.import', $item->id) }}" class="btn btn-xs btn-success"><i class="la la-file-import"></i></a>
            </td>
        </tr>

        @endforeach
    </tbody>

</table>