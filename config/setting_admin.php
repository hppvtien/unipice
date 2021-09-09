<?php
return [
    'sidebar' => [
        [
            'name' => 'Tổng quan',
            'route' => 'get_admin.dashboard',
            'class-icon' => 'la la-tachometer-alt'
        ],
        [
            'name' => 'Quản lý khách hàng',
            'class-icon' => 'la la-user',
            'sub' => [
                [
                    'name' => 'Thành viên mua lẻ',
                    'route' => 'get_admin.user.index'
                ],
                [
                    'name' => 'Thành viên Spice Club',
                    'route' => 'get_admin.user.index_spice_club'
                ],
                [
                    'name' => 'Thành viên đại lý',
                    'route' => 'get_admin.user.store_index'
                ],
                [
                    'name' => 'Tài khoản bị khóa',
                    'route' => 'get.indexmovetrash'
                ],
            ]
        ],
        [
            'name' => 'Tags',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Danh sách',
                    'route' => 'get_admin.uni_tag.index'
                ]
            ]
        ],
        [
            'name' => 'Quản lý sản phẩm',
            'class-icon' => 'la la-book-open',
            'sub' => [
                [
                    'name' => 'Sản phẩm',
                    'route' => 'get_admin.uni_product.index'
                ],
                [
                    'name' => 'Danh mục sản phẩm',
                    'route' => 'get_admin.uni_category.index'
                ],
                [
                    'name' => 'Thương hiệu',
                    'route' => 'get_admin.uni_trade.index'
                ],
                [
                    'name' => 'Trọng lượng',
                    'route' => 'get_admin.uni_size.index'
                ],
                // [
                //     'name' => 'Màu sắc',
                //     'route' => 'get_admin.uni_color.index'
                // ],
                [
                    'name' => 'Nhà cung cấp',
                    'route' => 'get_admin.uni_supplier.index'
                ],
                [
                    'name' => 'Lô hàng',
                    'route' => 'get_admin.uni_lotproduct.index'
                ],

            ]
        ],
       
        // [
        //     'name' => 'Quản lý cửa hàng',
        //     'class-icon' => 'la la-book-open',
        //     'sub' => [
        //         [
        //             'name' => 'Danh sách cửa hàng',
        //             'route' => 'get_admin.uni_store.index'
        //         ],
        //     ]
        // ],
        [
            'name' => 'Gói Sale off',
            'class-icon' => 'la la-book-open',
            'sub' => [
                [
                    'name' => 'Tạo chiến dịch',
                    'route' => 'get_admin.uni_flashsale.index'
                ],
            ]
        ],
        [
            'name' => 'Voucher',
            'class-icon' => 'la la-cart-arrow-down',
            'sub' => [
                [
                    'name' => 'Danh sách voucher',
                    'route' => 'get_admin.voucher.index'
                ],
            ]
        ],
        [
            'name' => 'Đơn hàng',
            'class-icon' => 'la la-cart-arrow-down',
            'sub' => [
                [
                    'name' => 'Danh sách',
                    'route' => 'get_admin.uni_order.index'
                ],
                [
                    'name' => 'Đơn hàng rác',
                    'route' => 'get_admin.uni_order.trash'
                ]
            ]
        ],
        [
            'name' => 'Nạp tiền spice club',
            'class-icon' => 'la la-cart-arrow-down',
            'sub' => [
                [
                    'name' => 'Danh sách',
                    'route' => 'get_admin.uni_spice_club.index'
                ],
                [
                    'name' => 'Nạp thẻ bị loại',
                    'route' => 'get_admin.uni_spice_club.trash'
                ]
            ]
        ],
        [
            'name' => 'Quản lý Page',
            'class-icon' => 'la la-cart-arrow-down',
            'sub' => [
                [
                    'name' => 'Danh sách',
                    'route' => 'get_admin.page.index'
                ]
            ]
        ],
        [
            'name' => 'Quản lý tin tức',
            'class-icon' => 'la la-book-open',
            'sub' => [
                [
                    'name' => 'Danh mục bài viết',
                    'route' => 'get_admin.post_category.index'
                ],
                [
                    'name' => 'Bài viết',
                    'route' => 'get_admin.post.index'
                ],
            ]
        ],
       
        [
            'name' => 'Đánh giá và Câu hỏi',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Câu hỏi',
                    'route' => 'get_admin.uni_comment.index'
                ],
                [
                    'name' => 'Đánh giá',
                    'route' => 'get_admin.uni_comment.index_rv'
                ],
            ]
        ],
        // [
        //     'name' => 'Jobs',
        //     'class-icon' => 'la la-database',
        //     'sub' => [
        //         [
        //             'name' => 'Danh sách',
        //             'route' => 'get_admin.jobs.index'
        //         ],
        //     ]
        // ],
        [
            'name' => 'Quản lý liên hệ',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Liên hệ',
                    'route' => 'get_admin.uni_contact.index'
                ],
                [
                    'name' => 'Theo dõi bảng tin',
                    'route' => 'get_admin.uni_contact.indexNew'
                ],
            ]
        ],
        [
            'name' => 'Thống kê',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Tồn kho',
                    'route' => 'get_admin.bill.index'
                ],
                [
                    'name' => 'Doanh thu',
                    'route' => 'get_admin.bill.index_order'
                ],
            ]
        ],
        [
            'name' => 'Dữ liệu nền',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Slide',
                    'route' => 'get_admin.slide.index'
                ],
                [
                    'name' => 'Web Setting',
                    'route' => 'get_admin.configuration.index'
                ],
            ]
        ],
        [
            'name' => 'Admin',
            'class-icon' => 'la la-cogs',
            'sub' => [
                [
                    'name' => 'Permission',
                    'route' => 'get_admin.permission.index'
                ],
                [
                    'name' => 'Role',
                    'route' => 'get_admin.role.index'
                ],
                [
                    'name' => 'Quản trị viên',
                    'route' => 'get_admin.account.index'
                ],
                [
                    'name' => 'Banking',
                    'route' => 'get_admin.bank_info.index'
                ],
            ]
        ],


    ]
];
