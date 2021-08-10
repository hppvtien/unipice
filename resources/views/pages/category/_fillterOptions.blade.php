<div class="t-plp__nav">
    <nav class="m-breadcrumb" aria-label="Breadcrumb">
        <h2 class="visually-hidden">Breadcrumb</h2>
        <ol class="m-breadcrumb__list">
            <li class="m-breadcrumb__item">
                <a class="a-anchor" href="/">Home</a>
            </li>
            <li class="m-breadcrumb__item m-breadcrumb__item--active">
                <a class="a-anchor" aria-current="page">{{ $category->name }}</a>
            </li>
        </ol>
    </nav>
    <div class="t-plp__filter-bar js-filter-bar">
        <div class="c-filter-bar">
            <button class="c-filter-bar__filter-btn a-icon-text-btn a-icon-text-btn--icon-right js-toggle-filters" type="button">
                <span class="icon-filters a-icon-text-btn__icon" aria-hidden="true"></span>
                <span class="a-icon-text-btn__label">
                    <span class="c-filter-bar__label--show">Hiện bộ lọc</span>
                    <span class="c-filter-bar__label--hide">Ẩn bộ lọc</span>
                </span>
            </button>
            <div class="c-filter-bar__sorting">
                <div class="m-sort-by">
                    <label class="m-sort-by__label" for="sort_by">Sort By</label>
                    <select class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
                        <option value="price" selected>Theo giá</option>
                        <option value="name">Theo tên</option>
                    </select>
                    <span class="m-sort-by__arrow"></span>
                </div>
                <div class="m-sort-by">
                    <label class="m-sort-by__label" for="order_by">Sắp xếp</label>
                    <select class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                        <option value="asc" selected>Tăng dần</option>
                        <option value="desc">Giảm dần</option>
                    </select>
                    <span class="m-sort-by__arrow"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="t-plp__quick-filters js-mobile-quick-filters">
    </div>
</div>