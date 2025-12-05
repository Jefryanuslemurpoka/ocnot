<style>
    /* Smooth Scroll Behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Offset untuk fixed navbar */
    section {
        scroll-margin-top: 80px;
    }
    
    /* Active link styling */
    .active-link {
        color: #fbbf24 !important; /* amber-400 */
        font-weight: 600;
    }
    
    /* Smooth transition untuk active state */
    nav a {
        transition: all 0.3s ease;
    }
</style>

<nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2 sm:space-x-3">
                <div class="relative w-10 h-10 sm:w-12 sm:h-12">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-amber-500 rounded-2xl blur-sm opacity-60 animate-pulse"></div>
                    <!-- Logo Container -->
                    <div class="relative bg-gradient-to-br from-amber-400 via-amber-500 to-amber-700 w-full h-full rounded-2xl flex items-center justify-center shadow-2xl border border-amber-300/50 backdrop-blur-sm">
                        <!-- Modern Minimalist Law Icon -->
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <!-- Scale Balance Modern -->
                            <path d="M12 3v18M8 21h8M5 8h14M7 8L5 13h4L7 8zM17 8l-2 5h4l-2-5z"/>
                            <circle cx="7" cy="13" r="0.5" fill="white"/>
                            <circle cx="17" cy="13" r="0.5" fill="white"/>
                            <line x1="5" y1="13" x2="9" y2="13" stroke-width="2.5"/>
                            <line x1="15" y1="13" x2="19" y2="13" stroke-width="2.5"/>
                        </svg>
                    </div>
                </div>
                <span class="text-xl sm:text-2xl font-bold text-white">OCNOT</span>
            </div>

            <!-- Navigation Links - Center (Desktop) -->
            <div class="hidden lg:flex space-x-6 xl:space-x-8 absolute left-1/2 transform -translate-x-1/2">
                <a href="#home" class="nav-link text-white hover:text-amber-400 transition font-medium text-sm xl:text-base">Beranda</a>
                <a href="#about" class="nav-link text-white hover:text-amber-400 transition font-medium text-sm xl:text-base">Tentang</a>
                <a href="#services" class="nav-link text-white hover:text-amber-400 transition font-medium text-sm xl:text-base">Layanan</a>
                <a href="#testimonial" class="nav-link text-white hover:text-amber-400 transition font-medium text-sm xl:text-base">Testimoni</a>
                <a href="#cek-akta" class="nav-link text-white hover:text-amber-400 transition font-medium text-sm xl:text-base">Cek Akta</a>
                <a href="#galeri" class="nav-link text-white hover:text-amber-400 transition font-medium text-sm xl:text-base">Galeri</a>
            </div>

            <!-- Login Button (Desktop & Tablet) -->
            <div class="hidden md:block">
                <a href="#login" class="bg-amber-700 text-white px-6 lg:px-8 py-2 lg:py-2.5 rounded-lg hover:bg-amber-800 transition font-medium text-sm lg:text-base shadow-lg">
                    Login
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4">
            <div class="flex flex-col space-y-3">
                <a href="#home" class="nav-link text-white hover:text-amber-400 transition font-medium py-2 border-b border-gray-700">Beranda</a>
                <a href="#about" class="nav-link text-white hover:text-amber-400 transition font-medium py-2 border-b border-gray-700">Tentang</a>
                <a href="#services" class="nav-link text-white hover:text-amber-400 transition font-medium py-2 border-b border-gray-700">Layanan</a>
                <a href="#testimonial" class="nav-link text-white hover:text-amber-400 transition font-medium py-2 border-b border-gray-700">Testimoni</a>
                <a href="#cek-akta" class="nav-link text-white hover:text-amber-400 transition font-medium py-2 border-b border-gray-700">Cek Akta</a>
                <a href="#galeri" class="nav-link text-white hover:text-amber-400 transition font-medium py-2 border-b border-gray-700">Galeri</a>
                <a href="#login" class="bg-amber-700 text-white px-6 py-2.5 rounded-lg hover:bg-amber-800 transition font-medium text-center mt-2">
                    Login
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-gray-900', 'shadow-lg');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-gray-900', 'shadow-lg');
                navbar.classList.add('bg-transparent');
            }

            // Active link highlight saat scroll
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active-link');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active-link');
                }
            });
        });

        // Mobile menu toggle
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll untuk semua nav links
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip jika href hanya "#" atau bukan internal link
                if (!href || href === '#' || !href.startsWith('#')) return;
                
                e.preventDefault();
                
                const targetId = href.substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    // Smooth scroll ke section
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Tutup mobile menu jika terbuka
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                    
                    // Update URL tanpa jump
                    history.pushState(null, null, href);
                }
            });
        });
    });
</script>