 <!-- Header -->
 <header>
     <nav class="navbar">
         <div class="container">
             <a href="{{ route('home') }}" class="logo">
                 <i class="fas fa-heartbeat"></i>
                 <span>BLOOD CARE</span>
             </a>
             <ul class="nav-menu" id="navMenu">
                 <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                 <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About
                         Us</a></li>
                 <li><a href="{{ route('services') }}"
                         class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                 <li><a href="{{ route('check-report') }}"
                         class="{{ request()->routeIs('check-report') ? 'active' : '' }}">Check Report</a></li>
                 <li><a href="{{ route('contact') }}"
                         class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                 <li><a href="{{ route('book-appointment') }}" class="admin-btn">Book Appointment</a></li>
             </ul>
             <div class="hamburger" id="hamburger">
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </div>
     </nav>
 </header>
