<section id="testimonial" class="py-16 bg-gray-50 relative overflow-hidden">
    <style>
        .testimonial-slide {
            display: none;
        }
        
        .testimonial-slide.active {
            display: grid;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .nav-button {
            transition: all 0.3s ease;
        }

        .nav-button:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .dot {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .dot:hover {
            transform: scale(1.2);
        }

        /* Statue Justicia decorations */
        .statue-left, .statue-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.25;
            pointer-events: none;
            width: 250px;
            height: 450px;
        }

        .statue-left {
            left: 10px;
        }

        .statue-right {
            right: 10px;
        }

        @media (max-width: 768px) {
            .statue-left, .statue-right {
                width: 120px;
                height: 250px;
                opacity: 0.15;
            }
            .statue-left {
                left: 0;
            }
            .statue-right {
                right: 0;
            }
        }
    </style>

    <!-- Decorative Lady Justice Statues -->
    <div class="statue-left">
        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=400&h=600&fit=crop" 
             alt="Lady Justice" 
             class="w-full h-full object-cover rounded-3xl">
    </div>

    <div class="statue-right">
        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=400&h=600&fit=crop" 
             alt="Lady Justice" 
             class="w-full h-full object-cover rounded-3xl">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center mb-12">
            <p class="text-gray-600 text-sm mb-2">What People Say's About Us</p>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Testimoni</h2>
        </div>

        <!-- Carousel Container -->
        <div class="relative max-w-6xl mx-auto">
            <!-- Navigation Buttons -->
            <button onclick="prevTestimonial()" class="nav-button absolute -left-4 md:-left-16 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-3 shadow-lg">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button onclick="nextTestimonial()" class="nav-button absolute -right-4 md:-right-16 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-3 shadow-lg">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Slides Container -->
            <div class="relative px-8 md:px-4">
                <!-- Slide 1 -->
                <div class="testimonial-slide active grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 - Ahmad Budiman -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-blue-200 flex items-center justify-center mr-4">
                                <span class="text-blue-600 font-bold text-xl">AB</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Ahmad Budiman</h4>
                                <p class="text-sm text-gray-600">Pengusaha</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Proses pembuatan akta perusahaan sangat mudah dan cepat. Tim OCNOT sangat profesional dan responsif dalam membantu pengurusan legalitas bisnis saya!
                        </p>
                    </div>

                    <!-- Card 2 - Siti Permata -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-pink-200 flex items-center justify-center mr-4">
                                <span class="text-pink-600 font-bold text-xl">SP</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Siti Permata</h4>
                                <p class="text-sm text-gray-600">Developer</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Sangat membantu untuk pengurusan akta jual beli properti. Semua prosesnya transparan dan terpercaya, dokumentasi lengkap dan sesuai hukum yang berlaku.
                        </p>
                    </div>

                    <!-- Card 3 - Rudi Hermawan -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-green-200 flex items-center justify-center mr-4">
                                <span class="text-green-600 font-bold text-xl">RH</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Rudi Hermawan</h4>
                                <p class="text-sm text-gray-600">CEO Startup</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Layanan terbaik untuk pembuatan perjanjian kerjasama dan akta notaris. Hemat waktu dan biaya, highly recommended untuk kebutuhan legal perusahaan!
                        </p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="testimonial-slide grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 4 - Linda Wijaya -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-purple-200 flex items-center justify-center mr-4">
                                <span class="text-purple-600 font-bold text-xl">LW</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Linda Wijaya</h4>
                                <p class="text-sm text-gray-600">Pengacara</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Pengurusan akta notaris untuk klien saya jadi lebih efisien. Pelayanan cepat, dokumen akurat, dan proses administrasi yang sangat memudahkan.
                        </p>
                    </div>

                    <!-- Card 5 - Budi Santoso -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-yellow-200 flex items-center justify-center mr-4">
                                <span class="text-yellow-600 font-bold text-xl">BS</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Budi Santoso</h4>
                                <p class="text-sm text-gray-600">Direktur PT</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Pembuatan akta pendirian PT sangat terbantu dengan layanan OCNOT. Prosesnya jelas, harga transparan, dan hasilnya memuaskan. Terima kasih!
                        </p>
                    </div>

                    <!-- Card 6 - Maya Kusuma -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-red-200 flex items-center justify-center mr-4">
                                <span class="text-red-600 font-bold text-xl">MK</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg">Maya Kusuma</h4>
                                <p class="text-sm text-gray-600">Notaris</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed">
                            Sebagai notaris, saya merekomendasikan OCNOT untuk layanan akta digital. Sistemnya modern, aman, dan memudahkan koordinasi dengan klien.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dots Indicator -->
            <div class="flex justify-center gap-2 mt-8">
                <button onclick="goToSlide(0)" class="dot w-3 h-3 rounded-full bg-blue-600" id="dot-0"></button>
                <button onclick="goToSlide(1)" class="dot w-3 h-3 rounded-full bg-gray-300" id="dot-1"></button>
            </div>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function showSlide(index) {
            // Remove active from all
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            dots.forEach(dot => {
                dot.classList.remove('bg-blue-600');
                dot.classList.add('bg-gray-300');
            });

            // Add active to current
            slides[index].classList.add('active');
            dots[index].classList.remove('bg-gray-300');
            dots[index].classList.add('bg-blue-600');
        }

        function nextTestimonial() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function prevTestimonial() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }

        // Auto slide every 5 seconds
        let autoSlide = setInterval(nextTestimonial, 5000);

        // Pause auto slide on hover
        const carouselContainer = document.querySelector('#testimonial');
        carouselContainer.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });

        carouselContainer.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextTestimonial, 5000);
        });
    </script>
</section>