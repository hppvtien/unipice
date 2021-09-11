<!-- main-header -->
<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo">
                <a href="/"><img src="{{ pare_url_file($configuration->logo) }}" class="logo-1" alt="logo"></a>
                <a href="/"><img src="{{ pare_url_file($configuration->logo) }}" class="dark-logo-1" alt="logo"></a>
                <a href="/"><img src="{{ asset('img/brand/favicon.png') }}" class="logo-2" alt="logo"></a>
                <a href="/"><img src="{{ asset('img/brand/favicon.png') }}" class="dark-logo-2" alt="logo"></a>
            </div>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="empty#"><i class="header-icon fe fe-align-left"></i></a>
                <a class="close-toggle" href="empty#"><i class="header-icons fe fe-x"></i></a>
            </div>
            <!--<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
                <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
            </div>-->
        </div>
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="nav-link" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <i class="fas fa-times"></i>
                                </button>
                                <button type="submit" class="btn btn-default nav-link resp-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="dropdown nav-item main-header-message ">
                    <a class="new nav-link" href="index.html#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-left">
                            <div class="d-flex">
                                <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Liên hệ</h6>
                                <span class="badge badge-pill badge-warning ml-auto my-auto float-right">Đánh dấu đã kiểm tra</span>
                            </div>
                        </div>
                        <div class="main-message-list chat-scroll">
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.uni_comment.index_rv')}}">
                                <div class="notifyimg bg-success">
                                    <i class="la la-check-circle text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Đánh giá sản phẩm</h5>
                                    <div class="notification-subtext">{{ alertStar(0) }} Đánh giá mới</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.uni_comment.index')}}">
                                <div class="notifyimg bg-danger">
                                    <i class="la la-question-circle text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Câu hỏi sản phẩm</h5>
                                    <div class="notification-subtext">{{ alertQuestion(0) }} câu hỏi mới</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.uni_contact.index')}}">
                                <div class="notifyimg bg-info">
                                    <i class="la la-send text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Yêu cầu liên hệ</h5>
                                    <div class="notification-subtext">{{ alertContact(0) }} yêu cầu mới</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.uni_contact.indexNew')}}">
                                <div class="notifyimg bg-warning">
                                    <i class="la la-envelope-open text-white" ></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Email nhận theo dõi</h5>
                                    <div class="notification-subtext">{{ alertSubscribe(0) }} Email mới</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="dropdown nav-item main-header-notification">
                    <a class="new nav-link" href="index.html#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-left">
                            <div class="d-flex">
                                <h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Thông báo mới</h6>
                                <span class="badge badge-pill badge-warning ml-auto my-auto float-right">Đánh dấu tất cả đã đọc</span>
                            </div>
                        </div>
                        <div class="main-notification-list Notification-scroll">
                            
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.uni_order.index')}}">
                                <div class="notifyimg bg-success">
                                    <i class="la la-shopping-basket text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Đơn hàng mới</h5>
                                    <div class="notification-subtext">{{ alertCountOrder(0) }} đơn hàng</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.uni_spice_club.index')}}">
                                <div class="notifyimg bg-danger">
                                    <i class="la la-usd text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Nạp tiền mới Spice Club</h5>
                                    <div class="notification-subtext">{{ alertCountOrderNap(0) }} đơn nạp</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.user.index')}}">
                                <div class="notifyimg bg-warning">
                                    <i class="la la-user-check text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Khách hàng chưa xác minh</h5>
                                    <div class="notification-subtext">{{ alertUser(0) }} khách hàng</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="{{ route('get_admin.user.store_index')}}">
                                <div class="notifyimg bg-primary">
                                    <i class="la la-user-check text-white"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Duyệt tài khoản đại lý</h5>
                                    <div class="notification-subtext">{{ alertStoreDK(0) }} yêu cầu duyệt</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                           
                        </div>
                        
                    </div>
                </div>
               
                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="empty"><img alt="" src="{{ asset('img/faces/6.jpg') }}"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt="" src="{{ asset('img/faces/6.jpg') }}" class=""></div>
                                <div class="ml-3 my-auto">
                                    <h6>{{ get_data_user('admins','name') }}</h6>
                                    <span>Administrator</span>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('get_admin.logout') }}" title="Đăng xuất"><i class="bx bx-log-out"></i> Sign Out</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->