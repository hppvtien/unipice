<?php
/**
 * Created by PhpStorm .
 * User: unimall .
 * Date: 2/9/21 .
 * Time: 10:58 AM .
 */

return [
    'sidebar' => [
        [
            'name' => 'Tổng quan',
            'route' => 'get_teacher.dashboard',
            'class-icon' => 'la la-tachometer-alt'
        ],
        [
            'name' => 'Khoá học',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Danh sách',
                    'route' => 'get_teacher.course.index'
                ]
            ]
        ],
        [
            'name' => 'Câu hỏi',
            'class-icon' => 'la la-database',
            'sub' => [
                [
                    'name' => 'Danh sách câu hỏi',
                    'route' => 'get_teacher.questiontoteacher.index'
                ]
            ]
        ]
    ]
];
