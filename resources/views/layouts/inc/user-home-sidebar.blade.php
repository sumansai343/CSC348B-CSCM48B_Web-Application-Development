            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav p-3">
                            @if (isset($latest_posts) && $latest_posts->isNotEmpty())
                                <h5>Blog Posts</h5>
                                @foreach ($latest_posts as $latest_post_item)
                                    <div class="card card-body bg-gray shadow mb-1 mt-4 user-sidebar">
                                        <a href="{{ url('tutorial/' . $latest_post_item->category->slug . '/' . $latest_post_item->slug) }}"
                                            class="text-decoration-none">
                                            <h5 class="text-dark mb-0">
                                                {{ $latest_post_item->name }}
                                            </h5>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
