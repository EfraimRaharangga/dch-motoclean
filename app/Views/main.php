<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DCH Motoclean</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Konfigurasi variabel warna global & utilitas kustom Tailwind
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              // Warna hitam arang pekat premium
              dark: 'oklch(0.26 0 0)',
              // Warna merah terakota hangat premium (aksen utama)
              accent: 'oklch(0.58 0.22 27)',
              // Warna aksen versi hover (sedikit lebih terang)
              'accent-hover': 'oklch(0.62 0.22 27)',
            }
          },
          boxShadow: {
            // Re-map efek .glow bawaan
            'brand-glow': '0 0 25px oklch(0.58 0.22 27 / 0.25)',
          },
          backgroundImage: {
            // Re-map efek .hero-bg bawaan langsung terintegrasi dengan gradasi oklch
            'hero-motor': "linear-gradient(rgba(0, 0, 0, .55), oklch(0.26 0 0)), url('https://dchmotoclean.lovable.app/__l5e/assets-v1/7737b859-d663-4b96-8e23-7eb7b069fed5/shop-detailing.jpg')"
          }
        }
      }
    }
  </script>
</head>
<body class="bg-brand-dark text-white">

  <nav class="fixed top-0 left-0 w-full z-50 bg-white/[0.04] backdrop-blur-xl border-b border-white/[0.06]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      
      <a href="#" class="flex items-center">
        <img src="<?= base_url('img/logo.png') ?>" 
             alt="DCH Motoclean Logo" 
             class="h-10 w-auto object-contain transition duration-200 hover:opacity-90">
      </a>
      
      <div class="hidden md:flex gap-8 text-gray-300">
        <a href="#pricing" class="hover:text-white transition">Pricing</a>
        <a href="#why-us" class="hover:text-white transition">Why Us</a>
        <a href="#the-work" class="hover:text-white transition">The Work</a>
        <a href="#book" class="hover:text-white transition">Book</a>
        <a href="#lab" class="hover:text-white transition">Detailing Lab</a>
      </div>

      <a href="https://wa.me/628123456789" class="bg-brand-accent hover:bg-brand-accent-hover px-5 py-2 rounded-xl font-semibold transition text-white">
        Book Now
      </a>
    </div>
  </nav>

  <section class="bg-hero-motor bg-cover bg-center min-h-screen flex items-center">
    <div class="max-w-6xl mx-auto px-6">
      <h1 class="text-5xl md:text-7xl font-black mb-8 tracking-tight">
        The Master<br>
        <span class="text-brand-accent">Detailing Protocol</span>
      </h1>
      
      <div class="space-y-4 text-xl text-gray-300 border-l-2 border-brand-accent pl-4">
        <p>Premium motorcycle & helmet</p>
        <p>Maintenance for the discerning rider</p>
        <p>We don't just wash — we restore</p>
      </div>
    </div>
  </section>

  <!-- SECTION: WHY DCH -->
  <section id="why-dch" class="py-24 border-t border-white/[0.03]">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-4xl font-black tracking-tight mb-4">Why DCH?</h2>
        <p class="text-gray-400 text-sm">Standar eksekusi tinggi tanpa kompromi untuk proteksi maksimal aset berharga Anda.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <!-- Point 1: Certified Detailers -->
        <div class="bg-white/[0.02] border border-white/[0.05] p-8 rounded-3xl transition duration-300 hover:border-brand-accent/30 group">
          <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center border border-brand-accent/20 mb-6 group-hover:scale-110 transition duration-300">
            <svg class="w-6 h-6 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3 tracking-wide text-gray-200">Certified Detailers</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Trained technicians, not weekend washers. Setiap personil dibekali sertifikasi keahlian khusus tata cara poles dan penanganan material sensitif.</p>
        </div>

        <!-- Point 2: Premium Chemicals -->
        <div class="bg-white/[0.02] border border-white/[0.05] p-8 rounded-3xl transition duration-300 hover:border-brand-accent/30 group">
          <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center border border-brand-accent/20 mb-6 group-hover:scale-110 transition duration-300">
            <svg class="w-6 h-6 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3 tracking-wide text-gray-200">Premium Chemicals</h3>
          <p class="text-gray-400 text-sm leading-relaxed">Pro-grade compounds, ceramic coating, and medical ozone. Kami hanya menggunakan produk global berlisensi untuk menjaga cat bodi tetap prima.</p>
        </div>

        <!-- Point 3: 4,893 Reviews -->
        <div class="bg-white/[0.02] border border-white/[0.05] p-8 rounded-3xl transition duration-300 hover:border-brand-accent/30 group relative overflow-hidden">
          <!-- Aksen subtle di belakang angka -->
          <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-brand-accent/5 rounded-full blur-2xl"></div>
          
          <div class="w-12 h-12 rounded-2xl bg-brand-accent/10 flex items-center justify-center border border-brand-accent/20 mb-6 group-hover:scale-110 transition duration-300">
            <svg class="w-6 h-6 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.381-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
            </svg>
          </div>
          <h3 class="text-3xl font-black text-brand-accent mb-1 tracking-tight">4,893+</h3>
          <h4 class="text-md font-bold mb-2 tracking-wide text-gray-200">Reviews & Counting</h4>
          <p class="text-gray-400 text-sm leading-relaxed">The most trusted moto studio in Semarang. Ribuan pengendara puas telah mempercayakan restorasi kendaraan mereka pada protokol kami.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: THE WORK (BENTO GALLERY GRID) -->
  <section id="the-work" class="py-24 bg-black/10 border-t border-b border-white/[0.02]">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-4xl font-black tracking-tight mb-4">The Work</h2>
        <p class="text-gray-400 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore corporis rerum nisi voluptatibus aliquid dolores facere sit esse, inventore laborum!
        </p>
      </div>

      <!-- Bento Grid System -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[220px]">
        
        <!-- Item 1: Besar Mendatar (Row 1, Col 1-2) -->
        <div class="md:col-span-2 md:row-span-2 rounded-3xl overflow-hidden relative group border border-white/[0.06]">
          <img src="https://dchmotoclean.lovable.app/__l5e/assets-v1/7737b859-d663-4b96-8e23-7eb7b069fed5/shop-detailing.jpg" 
               alt="Premium Detailing Protocol Execution" 
               class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80 pointer-events-none"></div>
          <div class="absolute bottom-6 left-6 z-10">
            <span class="text-[10px] uppercase font-bold tracking-widest bg-brand-accent text-white px-2.5 py-1 rounded-md mb-2 inline-block">Master Protocol</span>
            <h4 class="text-lg font-bold text-gray-200">Full Paint Correction & Shield</h4>
          </div>
        </div>

        <!-- Item 2: Kotak Tinggi Kebawah (Row 1-2, Col 3) -->
        <div class="md:row-span-2 rounded-3xl overflow-hidden relative group border border-white/[0.06]">
          <!-- Menggunakan link asset utama yang terkonfirmasi ada -->
          <img src="https://dchmotoclean.lovable.app/__l5e/assets-v1/7737b859-d663-4b96-8e23-7eb7b069fed5/shop-detailing.jpg" 
               alt="Helmet Decontamination Process" 
               class="w-full h-full object-cover object-left transition duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80 pointer-events-none"></div>
          <div class="absolute bottom-6 left-6 z-10">
            <span class="text-[10px] uppercase font-bold tracking-widest bg-white/10 backdrop-blur-md text-gray-300 px-2.5 py-1 rounded-md mb-2 inline-block">Helmet Clean</span>
            <h4 class="text-md font-bold text-gray-200">Ozone Disassembly</h4>
          </div>
        </div>

        <!-- Item 3: Kotak Standar (Row 1, Col 4) -->
        <div class="rounded-3xl overflow-hidden relative group border border-white/[0.06]">
          <img src="https://dchmotoclean.lovable.app/__l5e/assets-v1/7737b859-d663-4b96-8e23-7eb7b069fed5/shop-detailing.jpg" 
               alt="Hydrophobic Layer Effect" 
               class="w-full h-full object-cover object-bottom transition duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80 pointer-events-none"></div>
          <div class="absolute bottom-4 left-4 z-10">
            <h4 class="text-sm font-bold text-gray-200">Hydrophobic Sheeting</h4>
          </div>
        </div>

        <!-- Item 4: Kotak Standar (Row 2, Col 4) -->
        <div class="rounded-3xl overflow-hidden relative group border border-white/[0.06]">
          <img src="https://dchmotoclean.lovable.app/__l5e/assets-v1/7737b859-d663-4b96-8e23-7eb7b069fed5/shop-detailing.jpg" 
               alt="Engine Degreasing Precision" 
               class="w-full h-full object-cover object-right-bottom transition duration-500 group-hover:scale-105">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-transparent to-transparent opacity-80 pointer-events-none"></div>
          <div class="absolute bottom-4 left-4 z-10">
            <h4 class="text-sm font-bold text-gray-200">Engine Deep Polish</h4>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- GOOGLE REVIEWS SLIDER -->
  <section class="py-24 overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12 tracking-tight">Trusted By Riders</h2>
      
      <!-- Wrapper Luar Slider -->
      <div class="relative w-full">
        <!-- Jendela Slider (Membatasi tampilan elemen yang keluar) -->
        <div class="overflow-hidden w-full">
          <!-- Track Jalur Slider (Akan digeser oleh JavaScript) -->
          <div id="reviewTrack" class="flex transition-transform duration-500 ease-out gap-6" style="transform: translateX(0px);">
            
            <!-- Review 1 -->
            <div class="w-full md:w-[calc(50%-12px)] shrink-0 bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between min-h-[220px]">
              <div>
                <span class="text-brand-accent text-sm">★★★★★</span>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed italic">"Hasil cuci helmnya bener-bener bersih total luar dalam dan wanginya awet banget. Pengerjaannya detail dan teliti!"</p>
              </div>
              <div class="mt-6 flex items-center gap-3 border-t border-white/[0.05] pt-4">
                <div class="w-9 h-9 rounded-full bg-brand-accent/20 border border-brand-accent/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">AP</div>
                <div>
                  <h4 class="text-xs font-bold text-gray-200">Aditya Prasetyo</h4>
                  <p class="text-[10px] text-gray-500">Helmet Wash Customer</p>
                </div>
              </div>
            </div>

            <!-- Review 2 -->
            <div class="w-full md:w-[calc(50%-12px)] shrink-0 bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between min-h-[220px]">
              <div>
                <span class="text-brand-accent text-sm">★★★★★</span>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed italic">"Rekomendasi banget buat yang mau detailing motor. Motor saya jadi mengkilap maksimal seperti baru keluar dari dealer. Pelayanannya top!"</p>
              </div>
              <div class="mt-6 flex items-center gap-3 border-t border-white/[0.05] pt-4">
                <div class="w-9 h-9 rounded-full bg-brand-accent/20 border border-brand-accent/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">DW</div>
                <div>
                  <h4 class="text-xs font-bold text-gray-200">Dimas Wahyu</h4>
                  <p class="text-[10px] text-gray-500">Moto Detailing Customer</p>
                </div>
              </div>
            </div>

            <!-- Review 3 -->
            <div class="w-full md:w-[calc(50%-12px)] shrink-0 bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between min-h-[220px]">
              <div>
                <span class="text-brand-accent text-sm">★★★★★</span>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed italic">"Suka sekali dengan ketelitian krunya saat membersihkan sela-sela mesin dan roda yang sulit dijangkau. Hasil polesannya super rapi."</p>
              </div>
              <div class="mt-6 flex items-center gap-3 border-t border-white/[0.05] pt-4">
                <div class="w-9 h-9 rounded-full bg-brand-accent/20 border border-brand-accent/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">TH</div>
                <div>
                  <h4 class="text-xs font-bold text-gray-200">Taufik Hidayat</h4>
                  <p class="text-[10px] text-gray-500">Deep Cleaning Expert</p>
                </div>
              </div>
            </div>

            <!-- Review 4 -->
            <div class="w-full md:w-[calc(50%-12px)] shrink-0 bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between min-h-[220px]">
              <div>
                <span class="text-brand-accent text-sm">★★★★★</span>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed italic">"Paket Nano Ceramic Coating-nya juara! Efek daun talasnya kuat banget pas kena hujan, dan bodi motor jadi gampang dibersihkan."</p>
              </div>
              <div class="mt-6 flex items-center gap-3 border-t border-white/[0.05] pt-4">
                <div class="w-9 h-9 rounded-full bg-brand-accent/20 border border-brand-accent/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">ZA</div>
                <div>
                  <h4 class="text-xs font-bold text-gray-200">Zacky Alamsyah</h4>
                  <p class="text-[10px] text-gray-500">Nano Ceramic Coating</p>
                </div>
              </div>
            </div>

            <!-- Review 5 -->
            <div class="w-full md:w-[calc(50%-12px)] shrink-0 bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between min-h-[220px]">
              <div>
                <span class="text-brand-accent text-sm">★★★★★</span>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed italic">"Harganya sangat worth it dibanding workshop lain. Cuci premium di sini pelayanannya cepat tapi hasilnya tidak asal-asalan."</p>
              </div>
              <div class="mt-6 flex items-center gap-3 border-t border-white/[0.05] pt-4">
                <div class="w-9 h-9 rounded-full bg-brand-accent/20 border border-brand-accent/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">NH</div>
                <div>
                  <h4 class="text-xs font-bold text-gray-200">Naufal Hakim</h4>
                  <p class="text-[10px] text-gray-500">Premium Wash Customer</p>
                </div>
              </div>
            </div>

            <!-- Review 6 -->
            <div class="w-full md:w-[calc(50%-12px)] shrink-0 bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between min-h-[220px]">
              <div>
                <span class="text-brand-accent text-sm">★★★★★</span>
                <p class="mt-4 text-gray-300 text-sm leading-relaxed italic">"Rajin, rapih, telaten, hasilnya luar biasa lebih baik daripada yang pernah saya cuci ditempat lainya sebelumnya 👍👍💪💪"</p>
              </div>
              <div class="mt-6 flex items-center gap-3 border-t border-white/[0.05] pt-4">
                <div class="w-9 h-9 rounded-full bg-brand-accent/20 border border-brand-accent/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">NH</div>
                <div>
                  <h4 class="text-xs font-bold text-gray-200">Oktito Nanda</h4>
                  <p class="text-[10px] text-gray-500">Premium Wash Customer</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section id="pricing" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-center text-4xl font-bold mb-16 tracking-tight">Pricing</h2>

      <!-- SEGMENT 1: HELMET WASH -->
      <h3 class="text-2xl font-bold mb-6 tracking-wide text-gray-200 border-l-2 border-brand-accent pl-3">Helmet Wash</h3>
      <div class="grid md:grid-cols-3 gap-6 mb-16">
        
        <!-- Card 1: Basic Clean -->
        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl transition duration-300 hover:shadow-brand-glow hover:border-brand-accent/40 group flex flex-col justify-between">
          <div>
            <h4 class="text-xl font-bold tracking-wide group-hover:text-brand-accent transition">Basic Clean</h4>
            <ul class="mt-4 space-y-2 text-gray-400 text-sm">
              <li>✓ Interior lining wash</li>
              <li>✓ Visor polish</li>
              <li>✓ Air dry</li>
            </ul>
          </div>
          <div>
            <p class="text-gray-500 text-xs mt-6">Start from</p>
            <p class="text-brand-accent text-3xl font-bold tracking-tight">Rp35.000,-</p>
          </div>
        </div>

        <!-- Card 2: Ozone Premium -->
        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl transition duration-300 hover:shadow-brand-glow hover:border-brand-accent/40 group flex flex-col justify-between">
          <div>
            <h4 class="text-xl font-bold tracking-wide group-hover:text-brand-accent transition">Ozone Premium</h4>
            <ul class="mt-4 space-y-2 text-gray-400 text-sm">
              <li>✓ Full disassembly</li>
              <li>✓ Anti-bacterial ozone</li>
              <li>✓ Shell wax & visor coat</li>
            </ul>
          </div>
          <div>
            <p class="text-gray-500 text-xs mt-6">Start from</p>
            <p class="text-brand-accent text-3xl font-bold tracking-tight">Rp 75.000,-</p>
          </div>
        </div>

      </div>

      <!-- SEGMENT 2: MOTO DETAILING -->
      <h3 class="text-2xl font-bold mb-6 tracking-wide text-gray-200 border-l-2 border-brand-accent pl-3">Moto Detailing</h3>
      <div class="grid md:grid-cols-3 gap-6 mb-16">
        
        <!-- Card 1: Express Wash -->
        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl transition duration-300 hover:shadow-brand-glow hover:border-brand-accent/40 group flex flex-col justify-between">
          <div>
            <h4 class="text-xl font-bold tracking-wide group-hover:text-brand-accent transition">Express Wash</h4>
            <ul class="mt-4 space-y-2 text-gray-400 text-sm">
              <li>✓ Snow foam body wash</li>
              <li>✓ Chain clean & lube</li>
              <li>✓ Tire dressing</li>
            </ul>
          </div>
          <div>
            <p class="text-gray-500 text-xs mt-6">Start from</p>
            <p class="text-brand-accent text-3xl font-bold tracking-tight">Rp 75.000,-</p>
          </div>
        </div>

        <!-- Card 2: Full Detail -->
        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl transition duration-300 hover:shadow-brand-glow hover:border-brand-accent/40 group flex flex-col justify-between">
          <div>
            <h4 class="text-xl font-bold tracking-wide group-hover:text-brand-accent transition">Full Detail</h4>
            <ul class="mt-4 space-y-2 text-gray-400 text-sm">
              <li>✓ Engine degrease</li>
              <li>✓ Body polish & wax</li>
              <li>✓ Chrome restoration</li>
              <li>✓ Interior plastic treatment</li>
            </ul>
          </div>
          <div>
            <p class="text-gray-500 text-xs mt-6">Start from</p>
            <p class="text-brand-accent text-3xl font-bold tracking-tight">Rp 350.000,-</p>
          </div>
        </div>

        <!-- Card 3: Master Protocol -->
        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl transition duration-300 hover:shadow-brand-glow hover:border-brand-accent/40 group flex flex-col justify-between">
          <div>
            <h4 class="text-xl font-bold tracking-wide group-hover:text-brand-accent transition">Master Protocol</h4>
            <ul class="mt-4 space-y-2 text-gray-400 text-sm">
              <li>✓ Full Detail package</li>
              <li>✓ Paint correction (1-step)</li>
              <li>✓ Leather conditioning</li>
              <li>✓ 6-month sealant</li>
            </ul>
          </div>
          <div>
            <p class="text-gray-500 text-xs mt-6">Contact Us</p>
            <p class="text-brand-accent text-3xl font-bold tracking-tight">Rp 850.000,-</p>
          </div>
        </div>

      </div>

      <!-- SEGMENT 3: NANO CERAMIC -->
      <h3 class="text-2xl font-bold mb-6 tracking-wide text-gray-200 border-l-2 border-brand-accent pl-3">Nano Ceramic Coating</h3>
      <div class="grid md:grid-cols-3 gap-6">
        
        <!-- Card 1: CarPro cQuartz 3.0 -->
        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl transition duration-300 hover:shadow-brand-glow hover:border-brand-accent/40 group flex flex-col justify-between">
          <div>
            <h4 class="text-xl font-bold tracking-wide group-hover:text-brand-accent transition">CarPro cQuartz 3.0</h4>
            <ul class="mt-4 space-y-2 text-gray-400 text-sm">
              <li>✓ Pro-grade paint decontamination</li>
              <li>✓ Single-stage paint correction</li>
              <li>✓ CarPro cQuartz 3.0 application</li>
              <li>✓ 2-year hydrophobic protection</li>
              <li>✓ Authorized CarPro detailer</li>
            </ul>
          </div>
          <div>
            <p class="text-gray-500 text-xs mt-6">Start from</p>
            <p class="text-brand-accent text-3xl font-bold tracking-tight">Rp 1.500.000,-</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="book" class="py-24">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12">Book Service</h2>
      
      <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] rounded-3xl p-8">
        <select id="serviceType" 
                class="w-full p-4 rounded-xl text-white mb-6 border border-gray-700 appearance-none focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition duration-200" 
                style="background: oklch(0.26 0 0) url('data:image/svg+xml;charset=US-ASCII,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"292.4\" height=\"292.4\" fill=\"white\"><path d=\"M287 69.4a17.6 17.6 0 0 0-13-5.4H18.4c-5 0-9.3 1.8-12.9 5.4A17.6 17.6 0 0 0 0 82.2c0 5 1.8 9.3 5.4 12.9l128 127.9c3.6 3.6 7.8 5.4 12.8 5.4s9.2-1.8 12.8-5.4L287 95c3.5-3.5 5.4-7.8 5.4-12.8 0-5-1.9-9.2-5.5-12.8z\"/></svg>') no-repeat right 1rem center; background-size: 0.65rem auto;">
          <option value="" class="bg-brand-dark rounded-xl">Choose Service</option>
          <option value="helmet" class="bg-brand-dark rounded-xl">Helmet Wash</option>
          <option value="motor" class="bg-brand-dark rounded-xl">Moto Detailing</option>
        </select>

        <form id="dynamicForm">
          </form>
      </div>
    </div>
  </section>

  <section id="lab" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12">Detailing Lab</h2>
      
      <div class="grid md:grid-cols-2 gap-10">
        <div>
          <iframe class="w-full h-[400px] rounded-3xl invert-[0.85] hue-rotate-180 opacity-80" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1621651181094!2d110.38281599999999!3d-6.9901721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bae0c7579ed%3A0x83a7890186edebf3!2sDCH%20motoclean%20%26%20helmetclean!5e0!3m2!1sid!2sid!4v1781159374041!5m2!1sid!2sid"></iframe>
        </div>

        <div class="bg-white/[0.04] backdrop-blur-xl border border-white/[0.06] p-8 rounded-3xl flex flex-col justify-between">
          <div>
            <h3 class="text-2xl font-bold mb-4 tracking-wide">DCH Motoclean Studio</h3>
            
            <p class="text-gray-300 text-sm leading-relaxed mb-6">
              Jl. Sri Rejeki III, Kalibanteng Kidul, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50145
            </p>
            
            <div class="border-t border-white/[0.06] pt-4 space-y-3">
              <h4 class="text-xs uppercase tracking-widest text-gray-500 font-semibold">Operational Hours</h4>
              
              <div class="flex justify-between items-center text-sm">
                <span class="text-gray-400">Senin - Sabtu</span>
                <span class="font-semibold text-gray-200">10.00 – 18.00</span>
              </div>
              
              <div class="flex justify-between items-center text-sm">
                <span class="text-gray-400">Minggu</span>
                <span class="font-bold text-brand-accent uppercase tracking-wider text-xs bg-brand-accent/10 px-2.5 py-0.5 rounded-md border border-brand-accent/20">Tutup</span>
              </div>
            </div>
          </div>
          
          <div>
            <a href="https://maps.app.goo.gl/yDKXkpD5yhRXVGpy9" class="mt-8 w-full sm:w-auto inline-block bg-brand-accent hover:bg-brand-accent-hover px-6 py-3 rounded-xl font-semibold text-white text-center transition duration-200">
              Get Directions
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="border-t border-gray-900 py-10 bg-black/20">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h3 class="font-bold text-xl tracking-wider">DCH Motoclean</h3>
      <p class="text-gray-500 mt-3 text-sm">Premium Motorcycle & Helmet Detailing Studio</p>
      
      <div class="mt-6 flex justify-center gap-6 text-sm text-gray-400">
        <a href="#" class="hover:text-white transition">Instagram</a>
        <a href="#" class="hover:text-white transition">TikTok</a>
        <a href="#" class="hover:text-white transition">WhatsApp</a>
      </div>
      
      <p class="mt-8 text-xs text-gray-600">© 2026 DCH Motoclean. All Rights Reserved.</p>
    </div>
  </footer>

  <script src="<?= base_url('js/booking.js') ?>"></script>
  <script src="<?= base_url('js/slider.js') ?>"></script>
</body>
</html>