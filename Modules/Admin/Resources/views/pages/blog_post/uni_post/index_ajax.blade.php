<table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SEO</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($uni_post as $item)
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
                                                <span class="page-description-seo description_seo">{{ $item->meta_desscription }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge {{ $item->status == 1 ? 'badge-success':'badge-danger'; }}">{{ $item->status == 1 ? 'Active':'Not-Active' }}</span></td>
                                    <td>
                                        <a href="{{ route('get_admin.post.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.post.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <p>Dữ liệu chưa cập nhật</p>
                                @endforelse
                            </tbody>
                        </table>