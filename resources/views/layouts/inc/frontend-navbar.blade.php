 {{-- <div class="global-navbar bg-white"> --}}
 {{-- <div class="container"> --}}
 {{-- <div class="row">
             <div class="col-md-3">
                 <img src="{{ asset('assets/images/logo.png') }}" width="40px" height="40px" alt="logo" />
             </div>
             <div class="col-md-9 my-auto">
                 <div class="border text-center p-2">
                     <h5>
                         Advertise Here
                     </h5>
                 </div>
             </div>
         </div> --}}
 {{-- </div> --}}
 {{-- </div> --}}
 <div class="sticky-top">
     <nav class="navbar navbar-expand-lg navbar-dark bg-green">
         <div class="container">
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="btn bg-white border-0 rounded-sm m-2 text-black" href="{{ url('/') }}">Home
                             Page</a>
                     </li>
                 </ul>
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0 inner  display-contents">
                     @if (Auth::check())
                         @if (Auth::user()->role_as == '0')
                             <li>
                                 <a class="btn bg-white border-0 rounded-sm m-2 text-black"
                                     href="{{ url('user/dashboard') }}">Dashboard</a>
                             </li>
                         @else
                             <li>
                                 <a class="btn bg-white border-0 rounded-sm m-2 text-black"
                                     href="{{ url('admin/dashboard') }}">Admin Dashboard</a>
                             </li>
                         @endif

                         <li>
                             <a class="btn bg-white border-0 rounded-sm m-2 text-black" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </li>
                     @else
                         <li>
                             <a class=" btn bg-white border-0 rounded-sm m-2 text-black" href="/login">Log In</a>

                         </li>
                         <li>
                             <a class=" btn bg-white border-0 rounded-sm m-2 text-black" href="/register">Register
                                 User</a>

                         </li>
                     @endif

                 </ul>

             </div>
         </div>
     </nav>
 </div>
