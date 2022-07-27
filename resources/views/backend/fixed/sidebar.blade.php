


<div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="{{url('backend/images/photo.jpg')}}" width="20" alt="">
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>Hasib</b></span>
                                <small class="text-end font-w400">hasibulhasan193@gmail.com</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                    height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="email-inbox.html" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18"
                                    height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="ms-2">Inbox </span>
                            </a>
                            <a href="{{route('admin.logout')}}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                    height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>


<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fas fa-user"></i>
        <span class="nav-text">Admin Manage</span>
    </a>
    <ul>
        <li>
            <a>
                <i class="fa fa-circle"></i>
                <span>Admin List</span>
            </a>
        </li>
        <li>
            <a>
                <i class="fa fa-circle"></i>
                <span>Add Admin</span>
            </a>
        </li>
        <li>
            <a>
                <i class="fa fa-circle"></i>
                <span>Roles</span>
            </a>
        </li>
    </ul>
</li>


<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-025-dashboard"></i>
        <span>Category and Brand</span>
    </a>
    <ul>
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Categories</a>
                                <ul aria-expanded="false">
                                    <a class="collapse-item" href="{{route('list.category')}}">Category List</a>
                <a class="collapse-item" href="{{route('add.category')}}">Add Category</a>
                <a class="collapse-item" href="cards.html">Edit Category</a>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Brand</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Add Brand</a></li>
                                    <li><a href="email-inbox.html">Brand List</a></li>
                                    <li><a href="email-read.html">Edit Brand</a></li>
                                </ul>
                            </li>
    </ul>
</li>
<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="fab fa-product-hunt"></i>
        <span>Products</span>
    </a>
    <ul>
        <li>
            <a class="collapse-item" href="{{route('add.product')}}">
            <i class="fa-brands fa-product-hunt"></i>
                <span>Add Product</span>
            </a>
        </li>
        <li>
            <a class="collapse-item" href="{{route('list.product')}}">
            <i class="fa-brands fa-product-hunt"></i>
                <span>Product List</span>
            </a>
        </li>
        <li>
            <a>
            <i class="fa-brands fa-product-hunt"></i>
                <span>Product Color</span>
            </a>
        </li>
        <li>
            <a>
            <i class="fa-brands fa-product-hunt"></i>
                <span>Product Size</span>
            </a>
        </li>
    </ul>
</li>



        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-041-graph"></i>
                            <span class="nav-text">Order Management</span>
                        </a>
                        <ul aria-expanded="false">
                       
<ul>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
All
<span class="badge badge-info badge-pill ml-1">
21
</span>
 </span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Pending
<span class="badge badge-soft-info badge-pill ml-1">
10
</span>
</span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Confirmed
<span class="badge badge-soft-success badge-pill ml-1">
4
</span>
</span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Processing
<span class="badge badge-warning badge-pill ml-1">
1
</span>
</span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Out for delivery
<span class="badge badge-warning badge-pill ml-1">
0
</span>
</span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Delivered
<span class="badge badge-success badge-pill ml-1">
4
</span>
</span>
</a>
</li>
 <li class="nav-item">
<a >
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Returned
<span class="badge badge-soft-danger badge-pill ml-1">
0
</span>
</span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Failed
<span class="badge badge-danger badge-pill ml-1">
2
</span>
</span>
</a>
</li>
<li>
<a>
<span class="tio-circle nav-indicator-icon"></span>
<span class="text-truncate">
Canceled
<span class="badge badge-soft-dark badge-pill ml-1">
0
</span>
</span>
</a>
</li>
</ul>
</li>


                            
                        </ul>
                    </li>
                    </li>
                    

                    <li>
    <a href="javascript:;" class="has-arrow" aria-expanded="false">
        
            <span class="fas fa-money-bill"></span>
             <span>Shipping</span>
       
    </a>
    <ul>
                  <li>
               <a >Carriers</a>
           </li>
                           <li>
                <a>Shipping Rates</a>
            </li>
        
                    <li data-position="2">
                <a>Pickup Locations</a>
            </li>
                            <li>
                <a >Shipping Orders</a>
            </li>
                            <li>
                <a >Configuration</a>
            </li>
            </ul>
</li>

                     


<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Transactions</span>
                        </a>
                             </li>

                             <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                             <i class="fa fa-gift" aria-hidden="true"></i>

                            <span class="nav-text">Coupon</span>
                        </a>
                             </li>




<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            
                            <i class="fas fa-users"></i>
<span>Users</span>
</a>
 <ul>
<li>
<a>
<i class="fa fa-circle"></i>
<span>Customer List</span>
</a>
</li>
</ul>
                        </a>
                    </li>



                    
                <div class="copyright">
                    <p><strong>Eshop Bd Admin Dashboard</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span>by Hasib</p>
                </div>
            </div>
        </div>