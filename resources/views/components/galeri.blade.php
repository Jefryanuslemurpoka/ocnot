<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .gradient-text {
        background: linear-gradient(135deg, #d97706 0%, #f59e0b 50%, #d97706 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        background-size: 200% auto;
        animation: shimmer 3s linear infinite;
    }

    @keyframes shimmer {
        0% { background-position: 0% center; }
        100% { background-position: 200% center; }
    }

    .fancy-underline {
        position: relative;
        display: inline-block;
    }

    .fancy-underline::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, #d97706, transparent);
        animation: expandLine 2s ease-in-out infinite;
    }

    @keyframes expandLine {
        0%, 100% { width: 0%; }
        50% { width: 100%; }
    }
</style>

<section id="galeri" class="py-16 lg:py-24 bg-gray-50 relative overflow-hidden">
    <!-- Decorative Lady Justice - Left -->
    <div class="absolute left-0 top-1/2 -translate-y-1/2 opacity-[0.06] hidden xl:block animate-float">
        <img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb?q=80&w=400" alt="" class="h-[500px] w-auto object-contain">
    </div>

    <!-- Decorative Lady Justice - Right -->
    <div class="absolute right-0 top-1/2 -translate-y-1/2 opacity-[0.06] hidden xl:block animate-float" style="animation-delay: 2s;">
        <img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb?q=80&w=400" alt="" class="h-[500px] w-auto object-contain scale-x-[-1]">
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Enhanced Header -->
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <p class="text-amber-600 font-bold mb-2 text-sm sm:text-base tracking-[0.3em] uppercase fancy-underline">
                    Our Moment
                </p>
            </div>
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-black mb-2">
                <span class="gradient-text">Galeri</span>
            </h2>
            <div class="flex justify-center items-center gap-2 mt-4">
                <div class="h-[2px] w-12 bg-gradient-to-r from-transparent to-amber-600"></div>
                <div class="w-2 h-2 rounded-full bg-amber-600 animate-pulse"></div>
                <div class="h-[2px] w-12 bg-gradient-to-l from-transparent to-amber-600"></div>
            </div>
        </div>

        <!-- Gallery Grid - 3 Columns -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 max-w-6xl mx-auto">
            <!-- Image 1 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=600" 
                     alt="Business Meeting 1" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <!-- Image 2 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=600" 
                     alt="Business Meeting 2" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <!-- Image 3 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600" 
                     alt="Professional Woman" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <!-- Image 4 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=600" 
                     alt="Office Discussion" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <!-- Image 5 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=600" 
                     alt="Team Meeting" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            <!-- Image 6 -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600" 
                     alt="Business Discussion" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
        </div>
    </div>
</section>