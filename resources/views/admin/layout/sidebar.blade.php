<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="{{ route('home') }}" class="site_title">
                    <i class="fa fa-paw"></i>
                    <span>Frouzen Flour</span>
                </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="{{ asset('img/logo.jpg') }}" alt="Profile Image" class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>Admin!</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fa fa-home"></i> Dashboard
                                <span class="fa fa-chevron-down"></span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-list"></i> Category Manager
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('category.list') }}">List</a></li>
                                <li><a href="{{ route('category.create') }}">Create</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>
                                <i class="fa fa-product-hunt"></i> Product Manager
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('product.list') }}">List</a></li>
                                <li><a href="{{ route('product.create') }}">Create</a></li>
                            </ul>
                        </li>

                        <li>
                            <a>
                                <i class="fa fa-product-hunt"></i> Images Manager
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('productimages.index') }}">List</a></li>
                                <li><a href="{{ route('productimages.create') }}">Create</a></li>
                            </ul>
                        </li>

                        <li>
                            <a>
                                <i class="fa fa-product-hunt"></i> Discount Manager
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('discount.list') }}">List</a></li>
                                <li><a href="{{ route('discount.create') }}">Create</a></li>
                            </ul>
                        </li>

                        <li>
                            <a>
                                <i class="fa fa-product-hunt"></i> Orders Manager
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('order.list') }}">Order List</a></li>
                                <li><a href="{{ route('directorder.list') }}">Direct Order List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a>
                                <i class="fa fa-ticket"></i> Coupon Manager
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('coupon.list') }}">List</a></li>
                                <li><a href="{{ route('coupon.create') }}">Create</a></li>
                            </ul>
                        </li>

                        <li>
                            <a><i class="fa fa-product-hunt"></i> User Manager<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="{{ route('admin.users') }}">List</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->

            <!-- menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
</div>
