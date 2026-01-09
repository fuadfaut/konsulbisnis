@extends('layouts.app')

@section('content')
  <!-- Hero -->
  <section class="relative bg-slate-900 text-white overflow-hidden py-20 lg:py-28">
      <div class="absolute top-0 right-0 w-1/2 h-full bg-amber-500/10 blur-3xl rounded-full translate-x-1/2"></div>
      <div class="absolute bottom-0 left-0 w-1/3 h-full bg-blue-600/10 blur-3xl rounded-full -translate-x-1/2"></div>
      <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto">
          <div class="hero-animate inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold mb-6 border border-amber-500/30">IT KONSULTAN & SISTEM INFORMASI</div>
          <h1 class="hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-6 leading-tight">{{ $hero['title'] }}</h1>
          <div class="hero-animate-delay-2 text-lg text-slate-300 mb-10 leading-relaxed max-w-2xl mx-auto prose prose-invert">
              {!! $hero['content'] !!}
          </div>
          <div class="hero-animate-delay-3 flex flex-col sm:flex-row gap-4 justify-center">
              <button class="btn-ripple pulse-glow px-8 py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded transition-all shadow-lg hover:shadow-amber-500/50" onclick="document.getElementById('contact-form').scrollIntoView({behavior: 'smooth'})">Konsultasi Kebutuhan Sistem</button>
          </div>
      </div>
  </section>

  <!-- Leader (Team Section) -->
  <section class="py-16 bg-gradient-to-r from-blue-50 to-amber-50">
      <div class="container mx-auto px-6">
          @if ($leader)
            <div class="flex flex-col md:flex-row items-center justify-center gap-8">
                <div class="text-center md:text-left">
                    <p class="text-sm text-amber-600 font-semibold mb-2">Dipimpin oleh</p>
                    <h3 class="text-2xl font-bold text-slate-900">{{ $leader->name }}</h3>
                    <p class="text-slate-600">{{ $leader->role }}</p>
                </div>
                <div class="hidden md:block w-px h-16 bg-slate-300"></div>
                <div class="flex items-center gap-6">
                    <div class="text-center"><p class="text-3xl font-bold text-amber-600">S-2</p><p class="text-xs text-slate-500">Ilmu Komputer</p></div>
                    <div class="text-center"><p class="text-3xl font-bold text-amber-600">30+</p><p class="text-xs text-slate-500">Proyek IT</p></div>
                </div>
            </div>
          @endif
      </div>
  </section>

  <!-- Problems (Static) -->
  <section class="py-20 bg-slate-50">
      <div class="container mx-auto px-6">
          <div class="grid md:grid-cols-2 gap-12 items-center">
              <div class="animate-fade-in-left relative">
                  <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dashboard Analytics" class="rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500"/>
                  <div class="float-animation absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-slate-100 max-w-xs">
                      <div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Sebelum Sistem</p></div>
                      <p class="font-bold text-slate-800 mb-4">Stok Selisih, Laporan Telat, Owner Pusing.</p>
                      <div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Sesudah Sistem</p></div>
                      <p class="font-bold text-slate-800">Real-time Data, Stok Akurat, Bisnis Autopilot.</p>
                  </div>
              </div>
              <div class="animate-fade-in-right">
                  <h2 class="text-3xl font-bold text-slate-900 mb-6">Tanda Bisnis Anda Butuh Sistem</h2>
                  <ul class="space-y-4">
                      <li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100"><svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg><div><h4 class="font-bold text-slate-800">Stok Gudang Tidak Sesuai</h4><p class="text-sm text-slate-600">Sering terjadi selisih antara catatan admin dengan fisik barang di gudang (Stock Opname mimpi buruk).</p></div></li>
                      <li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100"><svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><div><h4 class="font-bold text-slate-800">Laporan Keuangan Telat</h4><p class="text-sm text-slate-600">Owner harus menunggu akhir bulan (atau bulan depan) hanya untuk tahu laba rugi bisnis.</p></div></li>
                      <li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100"><svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg><div><h4 class="font-bold text-slate-800">Ketergantungan Pada Orang</h4><p class="text-sm text-slate-600">Jika staff kunci sakit atau resign, operasional berantakan karena tidak ada SOP yang tersistem.</p></div></li>
                  </ul>
              </div>
          </div>
      </div>
  </section>

  <!-- Services Grid (Dynamic) -->
  <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
          <div class="text-center mb-16 max-w-2xl mx-auto">
              <h2 class="text-3xl font-bold text-slate-900 mb-4">Layanan IT Kami</h2>
              <p class="text-slate-600">Kami tidak hanya menjual software, kami merancang arsitektur bisnis yang efisien. Bekerja sama dengan Zahir dan Accurate.</p>
          </div>
          <div class="grid md:grid-cols-3 gap-8">
              @if ($it_services)
                @foreach($it_services as $service)
                  <div class="p-8 border border-slate-100 rounded-2xl bg-white hover:shadow-xl transition-all group service-card">
                      <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-amber-500 group-hover:text-slate-900 transition-colors service-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
                      </div>
                      <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $service->title }}</h3>
                      <div class="text-slate-600 text-sm mb-4">
                          {!! $service->excerpt !!}
                      </div>
                  </div>
                @endforeach
              @else
                <div class="col-span-3 text-center text-slate-500">
                    <p>Belum ada layanan yang ditambahkan.</p>
                </div>
              @endif
          </div>
      </div>
  </section>

  <!-- Projects (Clients CPT) -->
  <section class="py-20 bg-slate-50">
      <div class="container mx-auto px-6">
          <div class="text-center mb-16"><h2 class="text-3xl font-bold text-slate-900 mb-4">Proyek IT Kami</h2><p class="text-slate-600 max-w-2xl mx-auto">Beberapa proyek IT yang telah kami kerjakan untuk klien dari berbagai instansi pemerintah, BUMN, dan perusahaan swasta.</p></div>
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              @if ($projects)
                @foreach($projects as $project)
                  <div class="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                      <div class="flex items-center gap-3 mb-4">
                          <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center overflow-hidden">
                              @if ($project->has_thumbnail)
                                  {!! $project->thumbnail !!}
                              @else
                                  <span class="text-blue-700 font-bold text-sm">C</span>
                              @endif
                          </div>
                          <div>
                              <h4 class="font-bold text-slate-900">{{ $project->title }}</h4>
                              <p class="text-xs text-slate-500">{{ $project->category }}</p>
                          </div>
                      </div>
                      <div class="text-sm text-slate-600">
                          {!! $project->content !!}
                      </div>
                  </div>
                @endforeach
              @endif
          </div>
          <div class="text-center mt-12"><p class="text-slate-500">Dan masih banyak lagi proyek lainnya...</p></div>
      </div>
  </section>

  <!-- Contact Form -->
  <section id="contact-form" class="py-20 bg-slate-900 text-white">
      <div class="container mx-auto px-6 max-w-4xl">
          <div class="bg-white rounded-2xl p-8 md:p-12 shadow-2xl text-slate-800">
              <h2 class="text-3xl font-bold text-center mb-8">Mulai Transformasi Digital Anda</h2>
              <form class="grid md:grid-cols-2 gap-6">
                  <div class="md:col-span-1"><label class="block text-sm font-semibold mb-2">Nama Anda</label><input type="text" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none" placeholder="John Doe"/></div>
                  <div class="md:col-span-1"><label class="block text-sm font-semibold mb-2">Jenis Bisnis</label><select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none"><option>Retail / Toko</option><option>Manufaktur / Pabrik</option><option>Jasa / Service</option><option>F&B / Restoran</option><option>Kontraktor</option><option>Instansi Pemerintah</option><option>Lainnya</option></select></div>
                  <div class="md:col-span-2"><label class="block text-sm font-semibold mb-2">WhatsApp / Email</label><input type="text" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none" placeholder="0812..."/></div>
                  <div class="md:col-span-2"><label class="block text-sm font-semibold mb-2">Kebutuhan Sistem</label><textarea class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none h-24" placeholder="Contoh: Butuh aplikasi kasir terintegrasi dengan akuntansi, website company profile, dll..."></textarea></div>
                  <div class="md:col-span-2"><button class="w-full py-4 bg-amber-500 text-slate-900 font-bold rounded hover:bg-amber-600 transition shadow-lg btn-ripple pulse-glow">Jadwalkan Konsultasi Gratis</button></div>
              </form>
          </div>
      </div>
  </section>
@endsection
