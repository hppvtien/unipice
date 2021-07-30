<?php
return [
    'sidebar' => [
        [
            'name' => 'Tổng quan',
            'route' => 'get_admin.dashboard',
            'class-icon' => 'la la-tachometer-alt'
        ],
        // [
        //     'name' => 'Khoá học',
        //     'class-icon' => 'la la-book-open',
        //     'sub' => [
        //         [
        //             'name' => 'Từ khoá',
        //             'route' => 'get_admin.tag.index'
        //         ],
        //         [
        //             'name' => 'Danh mục',
        //             'route' => 'get_admin.category.index'
        //         ],
        //         [
        //             'name' => 'Giáo viên',
        //             'route' => 'get_admin.teacher.index'
        //         ],
        //         [
        //             'name' => 'Khoá học',
        //             'route' => 'get_admin.course.index'
        //         ],
        //     ]
        // ],
        // [
        //     'name' => 'Tin tức && Sự kiện',
        //     'class-icon' => 'la la-edit',
        //     'sub' => [
        //         [
        //             'name' => 'Từ khoá',
        //             'route' => 'get_admin.keyword.index'
        //         ],
        //         [
        //             'name' => 'Menu',
        //             'route' => 'get_admin.menu.index'
        //         ],
        //         [
        //             'name' => 'Bài viết',
        //             'route' => 'get_admin.article.index'
        //         ],
        //     ]
        // ],
        [
            'name' => 'Người dùng',
            'class-icon' => 'la la-user',
            'sub' => [
                [
                    'name' => 'Thành viên',
                    'route' => 'get_admin.user.index'
                ],
                [
                    'name' => 'Tài khoản bị khóa',
                    'route' => 'get.indexmovetrash'
                ],
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
                    'name' => 'Đóng gói (Size)',
                    'route' => 'get_admin.uni_size.index'
                ],
                [
                    'name' => 'Màu sắc',
                    'route' => 'get_admin.uni_color.index'
                ],
                [
                    'name' => 'Nhà cung cấp',
                    'route' => 'get_admin.uni_supplier.index'
                ],
                [
                    'name' => 'Tags',
                    'route' => 'get_admin.uni_tag.index'
                ],
                [
                    'name' => 'Lô hàng',
                    'route' => 'get_admin.uni_lotproduct.index'
                ],
               
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
            'name' => 'Quản lý cửa hàng',
            'class-icon' => 'la la-book-open',
            'sub' => [
                [
                    'name' => 'Danh sách cửa hàng',
                    'route' => 'get_admin.uni_store.index'
                ],
            ]
        ],
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
        // [
        //     'name' => 'Free Ebook',
        //     'class-icon' => 'la la-database',
        //     'sub' => [
        //         [
        //             'name' => 'Danh sách',
        //             'route' => 'get_admin.free_book.index'
        //         ],
        //     ]
        // ],
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
                    'name' => 'Danh sách',
                    'route' => 'get_admin.uni_contact.index'
                ],
            ]
        ],
        [
            'name' => 'Thống kê',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Danh sách hóa đơn',
                    'route' => 'get_admin.bill.index'
                ],
                // [
                //     'name' => 'Danh sách câu hỏi của học viên',
                //     'route' => 'get_admin.answer_and_questions.index'
                // ],
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
                    'name' => 'Votes',
                    'route' => 'get_admin.votes.index'
                ],
            ]
        ],
        
        
    ]
];
