            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion bg-green" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link text-white  {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                                href="{{ url('admin/dashboard') }}">
                                Blogs
                            </a>

                            <div class="expand {{ Request::is('admin/add-post') || Request::is('admin/posts') || Request::is('admin/post/*') ? 'show' : '' }}"
                                id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="nav">
                                    <a class="nav-link text-white {{ Request::is('admin/add-post') ? 'active' : '' }}"
                                        href="{{ url('admin/add-post') }}">Add Post</a>
                                    <a class="nav-link text-white {{ Request::is('admin/posts') || Request::is('admin/post/*') ? 'active' : '' }}"
                                        href="{{ url('admin/posts') }}">View Post</a>
                                </nav>
                            </div>
                            <a class="nav-link text-white {{ Request::is('admin/users') ? 'active' : '' }}"
                                href={{ url('admin/users') }}>
                                Users
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
