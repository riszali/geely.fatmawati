<x-layouts.app>
    @push('head')
        <title>Dealer Resmi Geely Fatmawati Jakarta | Test Drive Geely EX5 & EX2</title>
        <meta name="description" content="Kunjungi Showroom Dealer Resmi Geely Fatmawati, Jakarta Selatan. Temukan era baru mobilitas, dapatkan promo terbaru, dan booking test drive Geely EX5 & EX2 hari ini!">
        <meta name="keywords" content="Geely Fatmawati, Dealer Geely Jakarta, Dealer Geely Jakarta Selatan, Mobil Listrik Geely, Geely EX5, Geely EX2, Harga Geely, Test Drive Geely, Showroom Geely Jakarta">
        <link rel="canonical" href="https://geelyfatmawati.id/">
        
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://geelyfatmawati.id/">
        <meta property="og:title" content="Dealer Resmi Geely Fatmawati Jakarta | Kendaraan Listrik Premium">
        <meta property="og:description" content="Kunjungi Showroom Dealer Resmi Geely Fatmawati Jakarta Selatan. Dapatkan promo terbaru dan test drive Geely EX5 & EX2.">
        <meta property="og:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://geelyfatmawati.id/">
        <meta property="twitter:title" content="Dealer Resmi Geely Fatmawati Jakarta | Kendaraan Listrik Premium">
        <meta property="twitter:description" content="Kunjungi Showroom Dealer Resmi Geely Fatmawati Jakarta Selatan. Dapatkan promo terbaru dan test drive Geely EX5 & EX2.">
        <meta property="twitter:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG">
    @endpush

    <style>
        html { scroll-behavior: smooth; }
        
        body {
            background-color: #030712; /* Dark Slate background for ultra-premium glass contrast */
            color: #f8fafc;
        }

        /* ==========================================
           UTILITIES
           ========================================== */
        /* Menyembunyikan scrollbar untuk Section App Remote */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        /* ==========================================
           ULTRA-PREMIUM GLASSMORPHISM SYSTEM
           ========================================== */
        /* Dark Glass */
        .glass-island {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-left: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px -10px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .glass-island:hover {
            background: rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(20, 184, 166, 0.4); /* Teal highlight on hover */
            box-shadow: 0 40px 70px -10px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }

        /* Light Glass (Untuk Section Baru) */
        .glass-island-light {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 1);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .glass-island-light:hover {
            background: rgba(255, 255, 255, 0.8);
            border-top: 1px solid rgba(20, 184, 166, 0.5); /* Teal highlight on hover */
            box-shadow: 0 30px 60px -10px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 1);
            transform: translateY(-5px);
        }

        .glass-panel-dark {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        /* Ambient Glow Orbs behind Glass */
        .ambient-glow-teal {
            background: radial-gradient(circle, rgba(20, 184, 166, 0.25) 0%, rgba(0, 0, 0, 0) 70%);
            mix-blend-mode: screen;
        }
        .ambient-glow-emerald {
            background: radial-gradient(circle, rgba(16, 185, 129, 0.2) 0%, rgba(0, 0, 0, 0) 70%);
            mix-blend-mode: screen;
        }

        .text-gradient-premium {
            background: linear-gradient(135deg, #ffffff 20%, #34d399 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-noise-overlay::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 10;
        }

        /* Image Hover Zoom within Glass */
        .img-container { overflow: hidden; cursor: pointer; }
        .img-container img { transition: transform 1.2s cubic-bezier(0.19, 1, 0.22, 1); }
        .glass-island:hover .img-container img, .glass-island-light:hover .img-container img { transform: scale(1.08); }

        /* Animation Classes */
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-scale { opacity: 0; transform: scale(0.95); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }

        .btn-shimmer { position: relative; overflow: hidden; }
        .btn-shimmer::after {
            content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }

        body.lightbox-open { overflow: hidden; }
    </style>

    <!-- ==========================================
         SECTION 1: HERO (FLOATING GLASS ISLAND)
    =========================================== -->
    <header class="relative min-h-[100svh] w-full flex items-center justify-center overflow-hidden bg-[#030712]">
        <!-- Full Background Video -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-60 mix-blend-lighten">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#030712_100%)]"></div>
        </div>

        <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6 mt-16 reveal-up">
            <div class="glass-island rounded-[2rem] md:rounded-[3rem] p-8 md:p-16 lg:p-20 relative overflow-hidden">
                <div class="absolute -top-32 -left-32 w-96 h-96 ambient-glow-teal z-0 pointer-events-none"></div>
                <div class="absolute -bottom-32 -right-32 w-96 h-96 ambient-glow-emerald z-0 pointer-events-none"></div>
                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-7 flex flex-col">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-teal-500/30 bg-teal-500/10 mb-6 backdrop-blur-md w-max">
                            <span class="w-2 h-2 rounded-full bg-teal-400 animate-pulse shadow-[0_0_10px_#2dd4bf]"></span>
                            <span class="text-teal-300 text-[10px] font-bold tracking-widest uppercase">Dealer Geely Fatmawati</span>
                        </div>
                        
                        <!-- Judul -->
                        <h1 class="font-geely text-5xl sm:text-6xl md:text-7xl lg:text-[90px] text-white uppercase leading-[0.9] tracking-tighter mb-4 lg:mb-8 drop-shadow-lg w-full">
                            Elevate <br>
                            <span class="text-gradient-premium">The Future.</span>
                        </h1>

                        <!-- Gambar Mobil khusus HP (Disembunyikan di Desktop) -->
                        <div class="flex lg:hidden justify-center items-center relative w-full my-8 sm:max-w-md self-center">
                            <div class="w-64 h-64 sm:w-72 sm:h-72 border border-white/10 rounded-full absolute animate-[spin_30s_linear_infinite]"></div>
                            <div class="w-48 h-48 sm:w-56 sm:h-56 border border-teal-500/30 rounded-full absolute animate-[spin_20s_linear_infinite_reverse]"></div>
                            
                            <div class="w-full transform z-10 p-[6px] rounded-[2rem] bg-white/5 border border-white/20 border-t-teal-400/40 border-l-white/30 backdrop-blur-md shadow-2xl relative">
                                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-br from-white/10 to-transparent pointer-events-none"></div>
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp" alt="Geely EV" class="w-full h-auto rounded-[1.65rem] object-cover relative z-10 pointer-events-none drop-shadow-lg">
                            </div>
                        </div>
                        
                        <!-- Deskripsi -->
                        <p class="text-gray-300 text-sm md:text-lg font-light leading-relaxed max-w-xl mb-10 border-l border-teal-500/50 pl-6 w-full">
                            Desain elegan, kabin nyaman, dan teknologi elektrik kini hadir di Jakarta Selatan untuk pengalaman berkendara yang lebih modern.
                        </p>
                        
                        <!-- Tombol -->
                        <div class="flex flex-col sm:flex-row gap-4 w-full">
                            <a href="/test-drive" class="relative group px-8 py-4 bg-white/10 border border-white/20 text-white font-bold text-[11px] tracking-[0.2em] uppercase overflow-hidden rounded-full flex items-center justify-center gap-3 hover:bg-teal-500 hover:border-teal-400 transition-all duration-500 shadow-[0_0_20px_rgba(255,255,255,0.05)] hover:shadow-[0_0_30px_rgba(20,184,166,0.4)] w-max">
                                <span>Book Test Drive</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Gambar Mobil khusus Desktop (Disembunyikan di HP) -->
                    <div class="hidden lg:flex justify-center items-center relative lg:col-span-5">
                        <div class="w-72 h-72 border border-white/10 rounded-full absolute animate-[spin_30s_linear_infinite]"></div>
                        <div class="w-56 h-56 border border-teal-500/30 rounded-full absolute animate-[spin_20s_linear_infinite_reverse]"></div>
                        
                        <div class="w-[120%] max-w-none transform translate-x-10 scale-110 z-10 p-[6px] rounded-[2rem] bg-white/5 border border-white/20 border-t-teal-400/40 border-l-white/30 backdrop-blur-md shadow-2xl relative">
                            <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-br from-white/10 to-transparent pointer-events-none"></div>
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp" alt="Geely EV" class="w-full h-auto rounded-[1.65rem] object-cover relative z-10 pointer-events-none drop-shadow-lg">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- ==========================================
         SECTION 2 (BARU): GRAND OPENING (LIGHT BACKGROUND)
    =========================================== -->
    <section class="py-24 lg:py-32 relative bg-[#f8fafc] overflow-hidden border-y border-white/10">
        <!-- Light Ambient Glows untuk background terang -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-teal-200/40 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-emerald-200/40 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCI+CjxwYXRoIGQ9Ik0wIDBoNDB2NDBIMHoiIGZpbGw9Im5vbmUiLz4KPHBhdGggZD0iTTAgNDBMMCAwTDIwIDBMNDAgMEw0MCA0MEwyMCA0MEwwIDQweiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utb3BhY2l0eT0iMC4wMiIgc3Ryb2tlLXdpZHRoPSIxIi8+Cjwvc3ZnPg==')] pointer-events-none z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <!-- Header Section Grand Opening -->
            <div class="text-center max-w-3xl mx-auto mb-16 reveal-up">
                <span class="text-teal-600 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Milestone Moment</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl uppercase tracking-tighter text-gray-900 leading-[1.1] mb-6">
                    Grand <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-emerald-500">Opening</span>
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed font-medium">
                    Menandai babak baru mobilitas premium di Jakarta Selatan. Geely Fatmawati resmi beroperasi penuh untuk menghadirkan layanan kelas dunia, inovasi mutakhir, dan pengalaman kendaraan listrik yang tak terlupakan.
                </p>
            </div>

            <!-- Light Glass Bento Grid for Grand Opening Photos -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 h-auto md:h-[500px]">
                
                <!-- Main Image: Peresmian (Span 2 cols, 2 rows) -->
                <div class="col-span-2 md:col-span-2 row-span-2 glass-island-light rounded-[2rem] p-2 relative reveal-up img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-diresmikan-sO5Dd7FcvFkX3wX5.jpg', 'Grand Opening Geely Fatmawati', true)">
                    <div class="w-full h-[300px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-diresmikan-sO5Dd7FcvFkX3wX5.jpg" alt="Peresmian Showroom Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="text-teal-400 text-[10px] font-bold tracking-[0.3em] uppercase mb-1 block drop-shadow-md">Celebration</span>
                            <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight">Resmi Beroperasi</h3>
                        </div>
                        <!-- Zoom Icon overlay -->
                        <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white border border-white/40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- Image 2: Ribbon/Event (Span 2 cols, 1 row) -->
                <div class="col-span-2 md:col-span-2 row-span-1 glass-island-light rounded-[2rem] p-2 relative reveal-left delay-100 img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-3-RgnRXLNbpMYB75ky.webp', 'Suasana Kemeriahan Grand Opening', true)">
                    <div class="w-full h-[200px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-3-RgnRXLNbpMYB75ky.webp" alt="Event Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- Image 3: Fasilitas/Lounge (Span 1 col, 1 row) -->
                <div class="col-span-1 md:col-span-1 row-span-1 glass-island-light rounded-[2rem] p-2 relative reveal-up delay-200 img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-7-G2FMRCtHFFy6nvBp.jpeg', 'Penerimaan Pelanggan Perdana', true)">
                    <div class="w-full h-[200px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-7-G2FMRCtHFFy6nvBp.jpeg" alt="Pelayanan Pelanggan Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-[center_60%]">
                    </div>
                </div>

                <!-- Image 4: Display Mobil Event (Span 1 col, 1 row) -->
                <div class="col-span-1 md:col-span-1 row-span-1 glass-island-light rounded-[2rem] p-2 relative reveal-up delay-300 img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/p1010662-scaled-4y1qGH08npg8QHKO.jpg', 'Lini Kendaraan Masa Depan', true)">
                    <div class="w-full h-[200px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/p1010662-scaled-4y1qGH08npg8QHKO.jpg" alt="Display Grand Opening Geely" class="absolute inset-0 w-full h-full object-cover object-center">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 3: SHOWROOM (OASIS OF INNOVATION)
    =========================================== -->
    <section id="experience" class="py-24 lg:py-32 relative bg-[#030712]">
        <div class="absolute right-0 bottom-0 w-[800px] h-[800px] ambient-glow-teal opacity-30 pointer-events-none"></div>
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6 reveal-up">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <div class="w-10 h-[1px] bg-teal-500"></div>
                        <span class="text-teal-400 text-[10px] font-bold tracking-[0.4em] uppercase">Eksklusivitas Geely Fatmawati</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-[0.9]">
                        Oasis of <br>
                        <span class="text-gray-600">Innovation</span>
                    </h2>
                </div>
                <div class="md:text-right max-w-sm">
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed font-light border-l md:border-l-0 md:border-r border-teal-500/30 pl-4 md:pl-0 md:pr-4">
                        Arsitektur showroom modern yang dirancang khusus untuk kenyamanan Anda. Rasakan pengalaman layanan VIP sejak langkah pertama Anda di Jakarta Selatan.
                    </p>
                </div>
            </div>

            <!-- Layout Diperbaiki: Rasio Foto 1:1 Square -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                
                <!-- Foto 1: Main Showroom Image (Rasio 1:1) -->
                <div class="glass-island rounded-[2rem] p-2 relative reveal-up img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/showroom-fatmawati-cV9nMqwkCe4Ay47Y.jpg', 'Showroom Geely Fatmawati')">
                    <div class="w-full aspect-square rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/showroom-fatmawati-cV9nMqwkCe4Ay47Y.jpg" alt="Showroom Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center brightness-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030712]/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="text-teal-400 text-[9px] font-bold tracking-[0.3em] uppercase mb-1 block">Flagship Dealer</span>
                            <h3 class="font-geely text-3xl md:text-5xl text-white uppercase tracking-tight">Geely Fatmawati</h3>
                            <a href="/location" class="mt-4 inline-flex items-center gap-2 text-xs font-bold text-white hover:text-teal-400 uppercase tracking-widest transition-colors">Lihat Lokasi <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                        </div>
                    </div>
                </div>

                <!-- Foto 2: SPK Image (Rasio 1:1) -->
                <div class="glass-island rounded-[2rem] p-2 relative reveal-up delay-100 img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/spk-XGyyr4bmoYUWkhWY.jpeg', 'Penyerahan SPK Pelanggan Geely Fatmawati')">
                    <div class="w-full aspect-square rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/spk-XGyyr4bmoYUWkhWY.jpeg" alt="Penyerahan SPK Pelanggan Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center brightness-90">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030712]/90 via-[#030712]/20 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <h4 class="font-geely text-2xl md:text-3xl text-white uppercase tracking-tight">Customer Trust</h4>
                            <p class="text-gray-300 text-[10px] md:text-xs uppercase tracking-widest mt-1">Layanan Sepenuh Hati</p>
                        </div>
                    </div>
                </div>

                <!-- Kotak Info (Mengisi Baris Bawah) -->
                <div class="glass-island rounded-[2rem] p-8 flex flex-col justify-center relative overflow-hidden reveal-up delay-200 group min-h-[200px] md:min-h-[250px]">
                    <div class="absolute top-0 right-0 w-32 h-32 ambient-glow-emerald opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-12 h-12 rounded-full border border-teal-500/30 bg-teal-500/10 flex items-center justify-center text-teal-400 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="font-geely text-2xl text-white uppercase tracking-tight mb-2">Fast Charging</h4>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">Prioritas pengisian daya cepat eksklusif untuk efisiensi waktu Anda.</p>
                </div>

                <div class="glass-island rounded-[2rem] p-8 flex flex-col justify-center relative overflow-hidden reveal-up delay-300 group min-h-[200px] md:min-h-[250px]">
                    <div class="absolute top-0 right-0 w-32 h-32 ambient-glow-teal opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-12 h-12 rounded-full border border-teal-500/30 bg-teal-500/10 flex items-center justify-center text-teal-400 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <h4 class="font-geely text-2xl text-white uppercase tracking-tight mb-2">VIP Concierge</h4>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">Asisten pribadi terdedikasi untuk perawatan mobil Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 4: LINEUP (EMBEDDED GLASS CARDS - LIGHT THEME)
    =========================================== -->
    <section id="lineup" class="py-24 lg:py-32 relative bg-white overflow-hidden border-y border-gray-200">
        <!-- Background Putih Bercorak Hijau -->
        <div class="absolute inset-0 z-0 opacity-30" style="background-image: radial-gradient(#10b981 1.5px, transparent 1.5px); background-size: 32px 32px;"></div>
        <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-emerald-200/50 rounded-full blur-[120px] pointer-events-none z-0"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-teal-100/50 rounded-full blur-[120px] pointer-events-none z-0"></div>
        
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 md:mb-24 reveal-up">
                <span class="text-emerald-600 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Masterpiece Collection</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-gray-900 leading-none">
                    Intelligent <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-emerald-500">Motion</span>
                </h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @php
                    $showcase = [
                        [
                            'name' => 'Geely EX5',
                            'type' => 'Premium Smart SUV',
                            'desc' => 'Arsitektur elektrik canggih dengan efisiensi tata ruang maksimal untuk keluarga modern.',
                            'stat1' => '600km', 'stat1_lbl' => 'Range',
                            'stat2' => 'AWD', 'stat2_lbl' => 'Dual Motor',
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp',
                            'link' => '/models/ex5',
                            'delay' => ''
                        ],
                        [
                            'name' => 'Geely EX2',
                            'type' => 'Urban Crossover',
                            'desc' => 'Desain kompak nan agresif, solusi sempurna menembus dinamika kota Jakarta.',
                            'stat1' => '30min', 'stat1_lbl' => 'Fast Charge',
                            'stat2' => 'Agile', 'stat2_lbl' => 'Dynamics',
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg',
                            'link' => '/models/ex2',
                            'delay' => 'delay-100'
                        ],
                        [
                            'name' => 'Starray EM-i',
                            'type' => 'The Future Sedan',
                            'desc' => 'Revolusi super hybrid dengan tingkat efisiensi termal tertinggi di kelasnya.',
                            'stat1' => '0.22', 'stat1_lbl' => 'Cd Aero',
                            'stat2' => 'EM-i', 'stat2_lbl' => 'Hybrid Tech',
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i_3-scaled-YNqMpg35Mvc0vRPX.webp',
                            'link' => '/models/starray-em-i',
                            'delay' => 'delay-200'
                        ]
                    ];
                @endphp

                @foreach($showcase as $car)
                <div class="glass-island-light bg-white/40 border border-white/80 shadow-[0_20px_40px_-15px_rgba(16,185,129,0.1)] rounded-[2rem] h-[550px] flex flex-col relative reveal-up {{ $car['delay'] }}">
                    <div class="relative h-[65%] w-full rounded-t-[2rem] overflow-hidden img-container">
                        <img src="{{ $car['img'] }}" alt="{{ $car['name'] }} - Dealer Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/20 to-transparent opacity-90"></div>
                    </div>
                    
                    <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-xl border border-white shadow-[0_15px_30px_-10px_rgba(0,0,0,0.1)] rounded-3xl p-6 transform transition-transform duration-500 hover:-translate-y-2">
                        <span class="text-emerald-600 text-[9px] font-bold tracking-[0.3em] uppercase block mb-1">{{ $car['type'] }}</span>
                        <h3 class="font-geely text-3xl text-gray-900 uppercase tracking-tight mb-2">{{ $car['name'] }}</h3>
                        <p class="text-gray-500 text-xs font-medium leading-relaxed mb-4 line-clamp-2">{{ $car['desc'] }}</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <div class="flex gap-4">
                                <div>
                                    <p class="text-gray-900 font-geely text-lg leading-none">{{ $car['stat1'] }}</p>
                                    <p class="text-gray-400 text-[8px] uppercase tracking-widest">{{ $car['stat1_lbl'] }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 font-geely text-lg leading-none">{{ $car['stat2'] }}</p>
                                    <p class="text-gray-400 text-[8px] uppercase tracking-widest">{{ $car['stat2_lbl'] }}</p>
                                </div>
                            </div>
                            <a href="{{ $car['link'] }}" class="w-10 h-10 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 hover:bg-emerald-500 hover:border-emerald-400 hover:text-white transition-colors">
                                <svg class="w-4 h-4 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>
    </section>

    <!-- ==========================================
         SECTION 5: PROMO FINANSIAL (RESTORED)
    =========================================== -->
    <section class="py-24 relative overflow-hidden flex items-center justify-center min-h-[60vh] bg-[#030712]">
        <div class="absolute inset-0 z-0">
            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-14-mxB2lNnxMqfjr7pG.webp" alt="Pembiayaan Geely Fatmawati" class="w-full h-full object-cover brightness-50 mix-blend-luminosity opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-[#030712] via-teal-900/40 to-[#030712]"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 reveal-up">
            <div class="glass-island rounded-[3rem] p-10 md:p-16 text-center border-t border-teal-500/30">
                <div class="inline-block p-4 rounded-full bg-teal-500/10 border border-teal-500/20 text-teal-400 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="font-geely text-3xl md:text-5xl text-white uppercase tracking-tighter mb-4">
                    Program Finansial <span class="text-teal-400">Transparan</span>
                </h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-10 max-w-2xl mx-auto">
                    Miliki kendaraan masa depan tanpa beban. Kalkulator pintar kami akan menyesuaikan skema cicilan terbaik dengan fleksibilitas penuh khusus area Jakarta Selatan.
                </p>
                <a href="/credit-simulation" class="btn-shimmer inline-flex px-10 py-5 bg-teal-500 text-white font-bold text-[11px] uppercase tracking-widest rounded-full hover:scale-105 hover:shadow-[0_0_40px_rgba(20,184,166,0.5)] transition-all duration-300">
                    Mulai Simulasi Kredit
                </a>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 6: KESEIMBANGAN SEMPURNA (RESTORED & UPGRADED)
    =========================================== -->
    <section class="py-24 lg:py-32 bg-[#030712] relative overflow-hidden border-t border-white/5">
        <div class="absolute top-32 right-[-10%] w-[600px] h-[600px] ambient-glow-teal opacity-40 z-0"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] ambient-glow-emerald opacity-40 z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 lg:gap-16 items-center">
                
                <div class="lg:col-span-7 order-1 lg:order-2 reveal-right h-full relative z-10">
                    <div class="glass-island rounded-[2rem] p-2 relative h-[50vh] lg:h-[600px] overflow-hidden">
                        <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#030712]/90 via-[#030712]/40 to-transparent"></div>
                            <div class="absolute bottom-20 lg:bottom-8 left-6 lg:left-8 pr-6">
                                <span class="text-teal-400 text-[10px] tracking-[0.3em] font-bold uppercase block mb-2 drop-shadow-md">Flyme Auto</span>
                                <h4 class="font-geely text-2xl md:text-4xl uppercase tracking-tight text-white drop-shadow-lg leading-none">Future in Motion.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 order-2 lg:order-1 reveal-left relative z-20 -mt-16 sm:-mt-24 lg:mt-0 mx-2 sm:mx-8 lg:mx-0">
                    <div class="glass-island p-8 md:p-12 lg:p-14 rounded-[3rem] shadow-[0_-20px_40px_-15px_rgba(0,0,0,0.5)] lg:shadow-none bg-[#030712]/80 lg:bg-transparent backdrop-blur-3xl">
                        <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-teal-500/30 bg-teal-500/10">
                            <span class="text-teal-400 text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                        </div>
                        
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl uppercase tracking-tighter text-white mb-6 leading-[1.1]">
                            Keseimbangan <br> <span class="text-gradient-premium">Sempurna</span>
                        </h2>
                        
                        <div class="space-y-4 text-gray-400 text-sm md:text-base font-light leading-relaxed">
                            <p>Geely EX5 hadir sebagai pilihan terbaik bagi Anda yang mencari SUV dengan performa tangguh, desain elegan, serta teknologi canggih. Ditenagai mesin efisien dan fitur keselamatan lengkap.</p>
                            <p>Desain eksterior modern aerodinamis menawarkan efisiensi optimal. Interior dirancang untuk kenyamanan maksimal dengan material premium dan layar infotainment cerdas.</p>
                            <p>Dilengkapi sistem keamanan tingkat tinggi seperti Adaptive Cruise Control dan Blind Spot Monitoring untuk perlindungan ekstra.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 7: IMMERSIVE ATMOSPHERE / STATS (RESTORED & UPGRADED)
    =========================================== -->
    <section class="py-24 lg:py-32 relative w-full overflow-hidden bg-[#030712]">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] ambient-glow-teal opacity-20 pointer-events-none"></div>

        <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- Left: Video & Stats in Glass -->
                <div class="order-1 lg:col-span-7 flex flex-col reveal-left relative z-10">
                    <div class="glass-island p-2 rounded-[2rem] mb-6 md:mb-8">
                        <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#030712] via-transparent to-transparent opacity-90"></div>
                            <div class="absolute bottom-8 left-8 z-20">
                                <p class="font-geely text-2xl md:text-4xl uppercase tracking-tight mb-1 text-white">Immersive Atmosphere</p>
                                <p class="text-teal-400 text-[10px] tracking-[0.2em] uppercase font-bold">Premium Cabin Experience</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3 Glass Stats Cards -->
                    <div class="grid grid-cols-3 gap-3 md:gap-6 relative z-20">
                        <div class="glass-island p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center">
                            <p class="text-gray-400 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Up to</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-white mb-2"><span class="text-teal-400">495</span><span class="text-[10px] md:text-sm text-gray-500 ml-1">km*</span></h3>
                            <p class="text-gray-500 text-[6px] md:text-[9px] tracking-widest uppercase">NEDC Range</p>
                        </div>
                        <div class="glass-island p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center">
                            <p class="text-gray-400 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Fast Charge</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-white mb-2"><span class="text-emerald-400">20</span><span class="text-[10px] md:text-sm text-gray-500 ml-1">mins**</span></h3>
                            <p class="text-gray-500 text-[6px] md:text-[9px] tracking-widest uppercase">30% - 80%</p>
                        </div>
                        <div class="glass-island p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center">
                            <p class="text-gray-400 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Acceleration</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-white mb-2"><span class="text-teal-400">6.9</span><span class="text-[10px] md:text-sm text-gray-500 ml-1">sec</span></h3>
                            <p class="text-gray-500 text-[6px] md:text-[9px] tracking-widest uppercase">0-100 km/h</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Text Block -->
                <div class="order-2 lg:col-span-5 glass-island p-8 md:p-12 rounded-[2rem] flex flex-col justify-center reveal-right relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 ambient-glow-emerald opacity-50 z-0"></div>
                    <div class="relative z-10">
                        <span class="text-teal-400 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block">All-New EX5</span>
                        <h2 class="font-geely text-4xl md:text-6xl uppercase tracking-tighter mb-8 leading-[0.9] text-white">
                            Ready To <br> <span class="text-gray-600">Explore</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed font-light mb-10">
                            Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                        </p>
                        <a href="/test-drive" class="inline-flex items-center gap-3 text-teal-400 text-[10px] font-bold tracking-[0.2em] uppercase hover:text-white transition-colors w-max pb-2 border-b border-teal-500/30">
                            Book Test Drive <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 8: SPOTLIGHT EX2 BENTO (RESTORED & UPGRADED)
    =========================================== -->
    <section class="py-24 lg:py-32 bg-[#030712] relative overflow-hidden border-t border-white/5">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6 reveal-up">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-10 h-[1px] bg-emerald-500"></div>
                        <span class="text-emerald-400 text-[9px] md:text-[10px] font-bold tracking-[0.4em] uppercase">Spotlight Geely EX2</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-[0.9]">
                        EX2 <span class="text-gray-600">URBAN</span> <br> BLUEPRINT
                    </h2>
                </div>
                <div class="md:text-right pb-2">
                    <p class="text-gray-400 text-sm md:text-base font-light max-w-sm ml-auto">
                        Manifestasi arsitektural antara dinamika perkotaan dan tata ruang kabin futuristik pada lini mobil listrik Geely terbaru.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-none md:grid-rows-2 gap-4 md:gap-6 h-auto md:h-[700px] lg:h-[800px] reveal-up delay-100">
                
                <!-- 01 // Exterior -->
                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg', '01 // Exterior - Aero Stance')" class="col-span-2 md:col-span-2 md:row-span-2 glass-island rounded-[2rem] p-2 cursor-pointer img-container relative">
                    <div class="w-full h-[300px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg" alt="Eksterior Depan Geely EX2 EV" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030712] via-transparent to-transparent opacity-90"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <div>
                                <span class="text-teal-400 text-[10px] font-bold tracking-[0.3em] uppercase block mb-2">Exterior</span>
                                <h3 class="font-geely text-3xl md:text-5xl text-white uppercase tracking-tight">Designed for the City</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white border border-white/20">
                                <svg class="w-5 h-5 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02 // Cockpit -->
                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg', '02 // Cockpit - Digital Oasis')" class="col-span-2 md:col-span-2 md:row-span-1 glass-island rounded-[2rem] p-2 cursor-pointer img-container relative">
                    <div class="w-full h-[220px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg" alt="Interior Kabin Geely EX2" class="absolute inset-0 w-full h-full object-cover object-[center_60%]">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030712] via-transparent to-transparent opacity-90"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-teal-400 text-[9px] font-bold tracking-[0.3em] uppercase block mb-2">Cockpit</span>
                            <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight">Built Around You</h3>
                        </div>
                    </div>
                </div>

                <!-- 03 // Lifestyle -->
                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_05-A1azJbNx5vfMLwxk.webp', '03 // Lifestyle - Agility')" class="col-span-1 md:col-span-1 md:row-span-1 glass-island rounded-[2rem] p-2 cursor-pointer img-container relative">
                    <div class="w-full h-[180px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_05-A1azJbNx5vfMLwxk.webp" alt="Gaya Hidup Berkendara EV" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030712] to-transparent opacity-90"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="text-teal-400 text-[8px] font-bold tracking-[0.3em] uppercase block mb-1">Lifestyle</span>
                            <h3 class="font-geely text-lg md:text-2xl text-white uppercase tracking-tight leading-none">Effortless Mobility</h3>
                        </div>
                    </div>
                </div>

                <!-- 04 // Utility -->
                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/ldspace-B4XeAula05tXqaeN.png', '04 // Utility - Max Cargo', true)" class="col-span-1 md:col-span-1 md:row-span-1 glass-island rounded-[2rem] p-6 cursor-pointer flex flex-col justify-between relative group">
                    <div class="absolute inset-0 bg-gradient-to-b from-teal-900/20 to-transparent rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="z-10">
                        <span class="text-emerald-400 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase block mb-1">Utility</span>
                        <h3 class="font-geely text-lg md:text-2xl text-white uppercase tracking-tight leading-none">Space Reimagined</h3>
                    </div>
                    <div class="relative w-full h-[60%] mt-auto flex items-end justify-center z-10 img-container">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ldspace-B4XeAula05tXqaeN.png" alt="Kapasitas Bagasi Geely EX2" class="w-full h-full object-contain origin-bottom">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         SECTION 9: GEA PLATFORM (HUD DISPLAY LAYOUT)
    =========================================== -->
    <section class="py-24 lg:py-32 bg-[#030712] bg-noise-overlay overflow-hidden relative">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="text-center max-w-4xl mx-auto mb-16 md:mb-20 reveal-up">
                <span class="text-teal-400 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Core Technology</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-white leading-[0.9] mb-6">
                    Global <span class="text-gradient-premium">Architecture</span>
                </h2>
                <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed max-w-2xl mx-auto">
                    Platform GEA mengintegrasikan superkomputer on-board dengan arsitektur baja boron terkuat, mendefinisikan ulang standar keselamatan dan kecerdasan mobil listrik dunia.
                </p>
            </div>

            <div class="relative w-full aspect-video md:h-[650px] max-w-6xl mx-auto glass-island rounded-[2rem] p-2 flex items-center justify-center reveal-scale">
                <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative z-10">
                    <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-70 mix-blend-screen">
                        <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-inside-the-gea-intelligent-electric-platform---geely-auto-720p-h264-tjCY49tcStbBVMrV.mp4" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#030712_100%)] opacity-80 pointer-events-none"></div>
                </div>

                <div class="absolute top-10 left-10 hidden md:block glass-panel-dark p-6 rounded-2xl border border-white/10 shadow-2xl z-20 w-64 reveal-left delay-200">
                    <span class="text-teal-400 text-[9px] font-bold tracking-widest uppercase block mb-2">Neural Core</span>
                    <h4 class="font-geely text-2xl text-white uppercase tracking-tight mb-2">AI Integration</h4>
                    <p class="text-gray-400 text-[10px] leading-relaxed">Sinkronisasi millidetik sensor Lidar dan Radar pintar.</p>
                </div>

                <div class="absolute bottom-10 right-10 hidden md:block glass-panel-dark p-6 rounded-2xl border border-white/10 shadow-2xl z-20 w-64 reveal-right delay-300">
                    <span class="text-emerald-400 text-[9px] font-bold tracking-widest uppercase block mb-2">Thermal Mgmt</span>
                    <h4 class="font-geely text-2xl text-white uppercase tracking-tight mb-2">Hyper Efficiency</h4>
                    <p class="text-gray-400 text-[10px] leading-relaxed">Melindungi sel baterai dan memaksimalkan jarak tempuh absolut.</p>
                </div>

                <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 text-teal-500/30 pointer-events-none animate-[spin_20s_linear_infinite] z-20" fill="none" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="48" stroke="currentColor" stroke-width="0.5" stroke-dasharray="4 8"/>
                    <circle cx="50" cy="50" r="20" stroke="currentColor" stroke-width="1"/>
                    <path d="M50 0v10M50 90v10M0 50h10M90 50h10" stroke="currentColor" stroke-width="1"/>
                </svg>
            </div>
            
            <div class="grid grid-cols-1 gap-4 mt-6 md:hidden">
                 <div class="glass-island p-6 rounded-2xl">
                    <h4 class="font-geely text-xl text-white uppercase mb-1">AI Integration</h4>
                    <p class="text-gray-400 text-[10px]">Sinkronisasi millidetik sensor Lidar dan Radar pintar.</p>
                </div>
                <div class="glass-island p-6 rounded-2xl">
                    <h4 class="font-geely text-xl text-white uppercase mb-1">Hyper Efficiency</h4>
                    <p class="text-gray-400 text-[10px]">Manajemen termal canggih perlindungan baterai.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================
         SECTION 10: EM-I SUPER HYBRID (RESTORED & UPGRADED)
    =========================================== -->
    <div class="relative w-full pb-10 bg-[#030712]">
        
        <!-- Sticky Background Video -->
        <div class="sticky top-0 w-full aspect-video md:h-[100vh] overflow-hidden z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-lighten">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely---coming-soon-starray-em-i---geely-epping-1080p-h264-YZ9EbbbjRws55ErL.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-[#030712] to-transparent pointer-events-none z-10"></div>
            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#030712] to-transparent pointer-events-none z-10"></div>
        </div>

        <section class="mt-[40vh] md:mt-[70vh] py-16 md:py-24 lg:py-32 bg-[#030712] relative z-30 shadow-[0_-30px_60px_rgba(3,7,18,1)] min-h-[100vh] rounded-t-[3rem] border-t border-white/5">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] ambient-glow-teal opacity-30 pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] ambient-glow-emerald opacity-30 pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-6 md:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-x-20 lg:gap-y-12 items-center lg:items-start">
                
                <div class="order-1 lg:col-start-1 lg:row-start-1 flex flex-col justify-center">
                    <h3 class="text-teal-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Efficiency meets intelligent
                    </h3>
                    <h2 class="font-geely text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 reveal-up delay-100 leading-tight">
                        EM-i <br> <span class="text-gradient-premium">Super Hybrid</span>
                    </h2>
                    <p class="text-gray-400 text-sm md:text-base lg:text-lg font-light leading-relaxed mb-4 lg:mb-10 reveal-up delay-200">
                        EM-i or E-Motive intelligence is Geely's advanced hybrid technology, combining the benefits of fuel and battery for greater efficiency, capability, and lower emissions.
                    </p>
                </div>

                <div class="order-2 lg:col-start-2 lg:row-start-1 relative reveal-left delay-300">
                    <div class="glass-island p-2 rounded-[2rem] relative z-10">
                        <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden img-container">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://geelyprod-assets.oss-ap-southeast-5.aliyuncs.com/products/starray-emi/section-2/EM-i-Super-Hybrid.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="order-3 lg:col-start-2 lg:row-start-2 glass-island p-8 rounded-[2rem] reveal-up delay-400 relative z-10 group overflow-hidden">
                    <div class="absolute -right-10 -top-10 w-32 h-32 ambient-glow-teal opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <h4 class="text-white font-geely text-2xl mb-4 relative z-10 group-hover:text-teal-300 transition-colors drop-shadow-sm">
                        Highest Thermal Efficiency (46.5%)
                    </h4>
                    <p class="text-gray-400 text-sm md:text-base relative z-10 leading-relaxed font-light">
                        Globally leading platform thermal efficiency, surpassing industry standards.
                    </p>
                </div>

                <div class="order-4 lg:col-start-1 lg:row-start-2 glass-island p-8 rounded-[2rem] reveal-up delay-300 relative group overflow-hidden">
                    <div class="absolute -right-10 -top-10 w-32 h-32 ambient-glow-emerald opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <h4 class="text-white font-geely text-2xl mb-4 relative z-10 group-hover:text-emerald-300 transition-colors drop-shadow-sm">
                        High Efficiency Electric Drive
                    </h4>
                    <p class="text-gray-400 text-sm md:text-base relative z-10 leading-relaxed font-light">
                        Class-leading PHEV with high-efficiency drive and continuous variable voltage performance.
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- ==========================================
         SECTION 11: GEELY APP REMOTE
    =========================================== -->
    <section id="app-remote" class="py-24 lg:py-32 relative bg-[#030712] border-t border-white/5">
        <div class="max-w-[1400px] w-full mx-auto px-6 md:px-12 relative z-10">
            
            <div class="text-center mb-16 md:mb-24 reveal-up">
                <span class="text-teal-400 text-[10px] font-bold tracking-[0.4em] uppercase mb-4 block">Flyme Auto</span>
                <h2 class="font-geely text-4xl md:text-6xl uppercase tracking-tighter text-white mb-6">
                    Control At Your <span class="text-gray-600">Fingertips</span>
                </h2>
            </div>

            <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-3 lg:gap-8 pb-8 md:pb-0 px-4 md:px-0">
                <!-- Card 1 -->
                <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-island rounded-[2rem] p-3 flex flex-col reveal-up delay-100 group img-container">
                    <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/always-carghed.jpg-sPvzxctIegkiPhzC.webp" alt="Always Charged" class="w-full h-full object-cover opacity-80">
                        <div class="absolute inset-0 bg-teal-900/20 mix-blend-multiply group-hover:opacity-0 transition-opacity duration-500"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-white font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-teal-400 transition-colors">Always Charged</h4>
                        <p class="text-gray-400 text-xs leading-relaxed font-light">Monitor daya baterai dan jadwalkan pengisian secara remote dari smartphone Anda.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-island rounded-[2rem] p-3 flex flex-col reveal-up delay-200 group img-container">
                    <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/never-lost.jpg-9JUUSHg9iMEbQsEN.webp" alt="Never Lost" class="w-full h-full object-cover opacity-80">
                        <div class="absolute inset-0 bg-teal-900/20 mix-blend-multiply group-hover:opacity-0 transition-opacity duration-500"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-white font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-teal-400 transition-colors">Never Lost</h4>
                        <p class="text-gray-400 text-xs leading-relaxed font-light">Pelacakan posisi kendaraan presisi tinggi dengan fitur "Find My Car" real-time.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-island rounded-[2rem] p-3 flex flex-col reveal-up delay-300 group img-container">
                    <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/full-control.jpg-ycOYdP2jZuNB3u9w.webp" alt="Full Control" class="w-full h-full object-cover opacity-80">
                        <div class="absolute inset-0 bg-teal-900/20 mix-blend-multiply group-hover:opacity-0 transition-opacity duration-500"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-white font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-teal-400 transition-colors">Full Control</h4>
                        <p class="text-gray-400 text-xs leading-relaxed font-light">Kendalikan suhu kabin dan akses kunci pintu sebelum Anda tiba di mobil.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 flex md:hidden justify-center items-center gap-2 text-teal-400 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <!-- Lightbox Element (Sesuai original) -->
    <div id="lightbox" class="fixed inset-0 hidden items-center justify-center bg-[#030712]/95 backdrop-blur-md opacity-0 transition-opacity duration-300" style="z-index: 9999;" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" class="absolute top-6 right-6 md:top-10 md:right-10 text-white/60 hover:text-white transition-colors bg-white/5 p-2 rounded-full border border-white/10 hover:bg-white/10 cursor-pointer" style="z-index: 10000;">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="relative w-full max-w-7xl h-full flex flex-col items-center justify-center p-4 md:p-12 pointer-events-none">
            <div class="relative max-h-[80vh] w-full flex justify-center items-center group pointer-events-auto">
                <img id="lightbox-img" src="" alt="Fullscreen preview" class="max-w-full max-h-[75vh] md:max-h-[85vh] object-contain rounded-xl shadow-2xl transition-transform duration-300 transform scale-95">
            </div>
            <div class="mt-6 md:mt-8 pointer-events-auto text-center">
                <p id="lightbox-caption" class="font-geely text-teal-400 text-lg md:text-2xl tracking-widest uppercase drop-shadow-lg"></p>
            </div>
        </div>
    </div>

    <!-- Scripts Khusus Observer Transisi Fade-In -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale');
            revealElements.forEach(el => revealObserver.observe(el));
        });

        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');

        function openLightbox(imgSrc, caption, isLightImage = false) {
            lightboxImg.src = imgSrc;
            lightboxCaption.textContent = caption;
            
            if(isLightImage) {
                lightboxImg.classList.add('bg-white', 'p-8');
            } else {
                lightboxImg.classList.remove('bg-white', 'p-8');
            }

            lightboxImg.classList.replace('scale-95', 'scale-100');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            });
            document.body.classList.add('lightbox-open');
        }

        function closeLightbox(e) {
            if (e && e.target === lightboxImg) return;
            lightboxImg.classList.replace('scale-100', 'scale-95');
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImg.src = '';
                document.body.classList.remove('lightbox-open');
            }, 300); 
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    </script>

    <!-- SCHEMA MARKUP FATMAWATI (Dipertahankan) -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "AutoDealer",
          "name": "Dealer Resmi Geely Fatmawati Jakarta",
          "image": "https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG",
          "@@id": "https://geelyfatmawati.id",
          "url": "https://geelyfatmawati.id",
          "telephone": "+628111234567", 
          "description": "Dealer mobil listrik resmi Geely Fatmawati Jakarta Selatan. Melayani test drive, pembelian tunai/kredit, dan servis resmi Geely EX5, EX2, dan Starray EM-i.",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Jl. RS. Fatmawati Raya",
            "addressLocality": "Jakarta Selatan",
            "addressRegion": "DKI Jakarta",
            "postalCode": "12430",
            "addressCountry": "ID"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": -6.2945, 
            "longitude": 106.7994
          },
          "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:30",
            "closes": "17:30"
          },
          "priceRange": "$$$"
        }
      ]
    }
    </script>
</x-layouts.app>