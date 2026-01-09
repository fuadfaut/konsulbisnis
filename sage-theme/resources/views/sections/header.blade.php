<header class="banner">
  <!-- Top Bar -->
  <div class="bg-slate-900 text-slate-300 py-2 text-xs md:text-sm border-b border-slate-800">
      <div class="container mx-auto px-6 flex justify-between items-center">
          <div class="flex gap-4">
              <span class="flex items-center gap-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                  {{ get_theme_mod( 'topbar_phone', '0813-4624-2556' ) }}
              </span>
              <span class="flex items-center gap-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                  {{ get_theme_mod( 'topbar_email', 'KonsultanKamiBantu@gmail.com' ) }}
              </span>
          </div>
          <div class="hidden md:flex gap-3">
              <a href="{{ get_theme_mod( 'topbar_instagram', '#' ) }}" class="hover:text-white" target="_blank">Instagram</a>
          </div>
      </div>
  </div>

  <!-- Navbar -->
  <nav id="navbar" class="sticky top-0 w-full z-50 transition-all duration-300 border-b border-transparent py-5 bg-white">
      <div class="container mx-auto px-6 flex justify-between items-center">
          <div class="flex items-center gap-3 cursor-pointer" onclick="window.location.href='{{ home_url('/') }}'">
              @php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              @endphp
              
              @if ( has_custom_logo() )
                  <img src="{{ esc_url( $logo[0] ) }}" alt="{{ get_bloginfo( 'name' ) }}" class="w-10 h-10 rounded"/>
              @else
                  <img src="@asset('images/logo.png')" alt="{{ get_bloginfo( 'name' ) }}" class="w-10 h-10 rounded"/>
              @endif

              <div class="leading-tight">
                  <h1 class="text-xl font-bold text-slate-900 tracking-tight">{{ get_bloginfo( 'name' ) }}</h1>
                  <p class="text-[10px] font-medium text-slate-500 tracking-widest uppercase">{{ get_bloginfo( 'description' ) }}</p>
              </div>
          </div>
          
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
                'theme_location' => 'primary_navigation', 
                'container' => false, 
                'menu_class' => 'hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600 list-none m-0 p-0', 
                'fallback_cb' => false
            ]) !!}
          @else
              <!-- Fallback static menu -->
              <div class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                  <a href="{{ home_url('/') }}" class="hover:text-amber-500 transition-colors">Beranda</a>
                  <a href="#services" class="hover:text-amber-500 transition-colors">Layanan</a>
                  <a href="#about" class="hover:text-amber-500 transition-colors">Tentang</a>
                  <a href="#team" class="hover:text-amber-500 transition-colors">Tim</a>
                  <a href="#contact" class="px-5 py-2.5 bg-blue-700 hover:bg-blue-800 text-white rounded font-medium transition-all shadow-md hover:shadow-lg">Hubungi Kami</a>
              </div>
          @endif
          
          <button id="mobile-menu-btn" class="md:hidden text-slate-900">
              <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
          </button>
      </div>
      <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white border-t border-slate-100 shadow-xl p-6 flex-col gap-4 md:hidden">
          <a href="{{ home_url('/') }}" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Beranda</a>
          <a href="#services" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Layanan</a>
          <a href="#about" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Tentang</a>
          <a href="#team" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Tim</a>
          <a href="#contact" class="text-left font-bold text-blue-700 py-2">Hubungi Kami</a>
      </div>
  </nav>
</header>
