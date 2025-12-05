<section id="cek-akta" class="relative min-h-screen flex items-center overflow-hidden">
    <style>
        .hero-overlay {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));
        }
        
        .check-icon {
            display: inline-flex;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        
        .check-icon svg {
            width: 24px;
            height: 24px;
            margin-right: 12px;
            flex-shrink: 0;
        }
    </style>

    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1920&h=1080&fit=crop" 
             alt="Lady Justice Background" 
             class="w-full h-full object-cover">
        <div class="hero-overlay absolute inset-0"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Left side - empty for image visibility -->
            <div class="hidden md:block"></div>

            <!-- Right side - Content -->
            <div class="text-white py-12 md:py-20">
                <!-- Tag -->
                <div class="mb-4">
                    <span class="inline-block px-4 py-2 bg-amber-700 bg-opacity-90 text-white text-sm rounded-full">
                        Cek Akta
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Cek Keaslian & Status<br>Akta Anda
                </h1>

                <!-- Description -->
                <p class="text-lg md:text-xl text-gray-200 mb-8 leading-relaxed">
                    Verifikasi akta secara cepat, akurat, dan sesuai<br>
                    regulasi mulai dari pengecekan nomor/QR hingga<br>
                    validasi data pihak terkait.
                </p>

                <!-- Features List -->
                <div class="space-y-4 mb-10">
                    <div class="check-icon">
                        <svg class="text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-lg">Akurat, Transparan, Sesuai Regulasi.</span>
                    </div>

                    <div class="check-icon">
                        <svg class="text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-lg">Legalitas rapi, langkah bisnis lebih pasti.</span>
                    </div>

                    <div class="check-icon">
                        <svg class="text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-lg">Dokumen penting Anda, prioritas kami.</span>
                    </div>
                </div>

                <!-- CTA Button -->
                <div>
                    <a href="#form-cek-akta" 
                       class="inline-block px-8 py-4 bg-amber-700 hover:bg-amber-800 text-white font-semibold rounded-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Mulai Cek Akta
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>