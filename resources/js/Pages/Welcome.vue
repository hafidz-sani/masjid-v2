<template>
  <AppLayout>
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-islamic-green-600 via-islamic-green-700 to-islamic-green-800 dark:from-islamic-green-800 dark:via-islamic-green-900 dark:to-black">
      <!-- Background Pattern -->
      <div class="absolute inset-0 bg-islamic-pattern opacity-10"></div>
      
      <!-- Floating Elements -->
      <div class="absolute top-20 left-10 w-20 h-20 bg-islamic-gold-400 rounded-full opacity-20 animate-float"></div>
      <div class="absolute top-40 right-20 w-16 h-16 bg-white rounded-full opacity-10 animate-float" style="animation-delay: 1s;"></div>
      <div class="absolute bottom-40 left-20 w-12 h-12 bg-islamic-gold-300 rounded-full opacity-15 animate-float" style="animation-delay: 2s;"></div>
      
      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Main Content -->
        <div class="animate-fade-in">
          <!-- Islamic Greeting -->
          <div class="mb-8">
            <p class="text-islamic-gold-300 text-lg md:text-xl font-arabic mb-2">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</p>
            <p class="text-white/80 text-sm md:text-base">Bismillahirrahmanirrahim</p>
          </div>
          
          <!-- Main Heading -->
          <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Selamat Datang di<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-islamic-gold-300 to-islamic-gold-500 animate-pulse">
              Masjid Ibnu Sabil
            </span>
          </h1>
          
          <!-- Subtitle -->
          <p class="text-xl md:text-2xl lg:text-3xl text-white/90 mb-4 font-light">
            Pisangan Baru, Matraman
          </p>
          <p class="text-lg md:text-xl text-white/70 mb-12">
            Jakarta Timur, DKI Jakarta
          </p>
          
          <!-- Call to Action Buttons -->
          <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
            <button @click="scrollToSection('prayer-times')" class="btn-primary group">
              <svg class="w-5 h-5 mr-2 group-hover:animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Lihat Jadwal Sholat
            </button>
            <button @click="scrollToSection('features')" class="btn-secondary group">
              <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Pelajari Layanan
            </button>
          </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
          </svg>
        </div>
      </div>
    </section>

    <!-- Prayer Times Section -->
    <section id="prayer-times" class="py-20 bg-white dark:bg-gray-900 relative overflow-hidden">
      <div class="absolute inset-0 hero-pattern"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-slide-up">
          <h2 class="section-title">
            Jadwal Sholat Hari Ini
          </h2>
          <p class="section-subtitle">
            Waktu sholat yang akurat untuk wilayah Jakarta Timur berdasarkan perhitungan astronomi
          </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
          <div 
            v-for="(prayer, index) in prayerTimes" 
            :key="prayer.name" 
            class="prayer-time-card group animate-slide-up"
            :style="{ animationDelay: `${index * 0.1}s` }"
          >
            <div class="relative z-10 text-center">
              <div class="text-3xl mb-3">{{ prayer.icon }}</div>
              <h3 class="text-lg font-semibold mb-2">{{ prayer.name }}</h3>
              <p class="text-3xl font-bold mb-1">{{ prayer.time }}</p>
              <p class="text-sm opacity-80">{{ prayer.period }}</p>
            </div>
          </div>
        </div>
        
        <div class="text-center mt-12">
          <p class="text-gray-600 dark:text-gray-400 flex items-center justify-center">
            <svg class="w-5 h-5 mr-2 text-islamic-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Waktu untuk wilayah Jakarta Timur • Diperbarui secara otomatis
          </p>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50 dark:bg-gray-800 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-slide-up">
          <h2 class="section-title">
            Layanan Masjid
          </h2>
          <p class="section-subtitle">
            Fasilitas dan layanan modern untuk mendukung kegiatan keagamaan dan sosial umat
          </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div 
            v-for="(feature, index) in features" 
            :key="feature.title"
            class="card group animate-slide-up"
            :style="{ animationDelay: `${index * 0.1}s` }"
          >
            <div class="text-center">
              <div class="feature-icon">
                <i :class="feature.icon" class="text-2xl"></i>
              </div>
              <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">
                {{ feature.title }}
              </h3>
              <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                {{ feature.description }}
              </p>
              <button class="btn-outline">
                Pelajari Lebih Lanjut
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white dark:bg-gray-900 relative overflow-hidden">
      <div class="absolute inset-0 bg-islamic-pattern opacity-5"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <!-- Content -->
          <div class="animate-slide-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
              Tentang Masjid Ibnu Sabil
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
              Masjid Ibnu Sabil adalah pusat kegiatan keagamaan dan sosial yang berlokasi di 
              Pisangan Baru, Matraman, Jakarta Timur. Kami berkomitmen untuk melayani umat 
              dengan sebaik-baiknya dan menyediakan fasilitas yang nyaman untuk beribadah.
            </p>
            
            <div class="space-y-6 mb-8">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-islamic-green-100 dark:bg-islamic-green-900 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-islamic-green-600 dark:text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Fasilitas Modern</h3>
                  <p class="text-gray-600 dark:text-gray-300">Dilengkapi dengan teknologi modern untuk kenyamanan jamaah</p>
                </div>
              </div>
              
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-islamic-green-100 dark:bg-islamic-green-900 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-islamic-green-600 dark:text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Program Sosial</h3>
                  <p class="text-gray-600 dark:text-gray-300">Berbagai program sosial untuk membantu masyarakat sekitar</p>
                </div>
              </div>
              
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-islamic-green-100 dark:bg-islamic-green-900 rounded-xl flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-islamic-green-600 dark:text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Kajian Rutin</h3>
                  <p class="text-gray-600 dark:text-gray-300">Kajian Islam rutin untuk meningkatkan pemahaman agama</p>
                </div>
              </div>
            </div>
            
            <button class="btn-primary">
              Hubungi Kami
            </button>
          </div>
          
          <!-- Image Placeholder -->
          <div class="animate-slide-up" style="animation-delay: 0.2s;">
            <div class="relative">
              <div class="aspect-w-4 aspect-h-3 bg-gradient-to-br from-islamic-green-100 to-islamic-green-200 dark:from-islamic-green-900 dark:to-islamic-green-800 rounded-2xl overflow-hidden shadow-2xl">
                <div class="flex items-center justify-center">
                  <div class="text-center">
                    <div class="text-6xl mb-4">🕌</div>
                    <p class="text-islamic-green-700 dark:text-islamic-green-300 text-lg font-medium">
                      Foto Masjid Ibnu Sabil
                    </p>
                  </div>
                </div>
              </div>
              
              <!-- Decorative Elements -->
              <div class="absolute -top-4 -right-4 w-24 h-24 bg-islamic-gold-400 rounded-full opacity-20 animate-float"></div>
              <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-islamic-green-400 rounded-full opacity-30 animate-float" style="animation-delay: 1s;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-islamic-green-600 to-islamic-green-800 dark:from-islamic-green-800 dark:to-black text-white relative overflow-hidden">
      <div class="absolute inset-0 bg-islamic-pattern opacity-10"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-slide-up">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            Mari Bergabung Bersama Kami
          </h2>
          <p class="text-xl text-white/80 max-w-3xl mx-auto">
            Jadilah bagian dari komunitas Masjid Ibnu Sabil dan ikuti berbagai kegiatan yang bermanfaat
          </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
          <div class="text-center animate-slide-up">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-islamic-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Alamat</h3>
            <p class="text-white/80">Pisangan Baru, Matraman<br>Jakarta Timur, DKI Jakarta</p>
          </div>
          
          <div class="text-center animate-slide-up" style="animation-delay: 0.1s;">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-islamic-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Telepon</h3>
            <p class="text-white/80">(021) 123-4567</p>
          </div>
          
          <div class="text-center animate-slide-up" style="animation-delay: 0.2s;">
            <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-islamic-gold-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Email</h3>
            <p class="text-white/80">info@masjidibnusabil.org</p>
          </div>
        </div>
        
        <div class="text-center">
          <button class="btn-primary bg-white text-islamic-green-600 hover:bg-gray-100">
            Hubungi Kami Sekarang
          </button>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

// Enhanced prayer times data with icons and periods
const prayerTimes = ref([
  { name: 'Subuh', time: '04:45', icon: '🌅', period: 'Fajar' },
  { name: 'Dzuhur', time: '12:00', icon: '☀️', period: 'Siang' },
  { name: 'Ashar', time: '15:15', icon: '🌤️', period: 'Sore' },
  { name: 'Maghrib', time: '18:05', icon: '🌅', period: 'Petang' },
  { name: 'Isya', time: '19:15', icon: '🌙', period: 'Malam' }
])

// Features data
const features = ref([
  {
    title: 'Jadwal Sholat Real-time',
    description: 'Dapatkan informasi jadwal sholat yang akurat untuk wilayah Jakarta Timur secara real-time dengan notifikasi otomatis.',
    icon: 'fas fa-clock'
  },
  {
    title: 'Transparansi Keuangan',
    description: 'Pantau keuangan masjid secara transparan termasuk donasi, pengeluaran, dan laporan keuangan bulanan.',
    icon: 'fas fa-chart-line'
  },
  {
    title: 'Berita & Pengumuman',
    description: 'Dapatkan informasi terbaru tentang kegiatan, kajian, dan pengumuman penting masjid melalui platform digital.',
    icon: 'fas fa-bullhorn'
  },
  {
    title: 'Donasi Online',
    description: 'Kemudahan berdonasi secara online dengan berbagai metode pembayaran yang aman dan terpercaya.',
    icon: 'fas fa-hand-holding-heart'
  },
  {
    title: 'Kajian & Pendidikan',
    description: 'Program kajian Islam rutin, pendidikan Al-Quran, dan berbagai kelas keagamaan untuk semua usia.',
    icon: 'fas fa-book-open'
  },
  {
    title: 'Layanan Sosial',
    description: 'Program bantuan sosial, santunan anak yatim, dan berbagai kegiatan kemasyarakatan lainnya.',
    icon: 'fas fa-hands-helping'
  }
])

// Smooth scroll to section
const scrollToSection = (sectionId) => {
  const element = document.getElementById(sectionId)
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' })
  }
}
</script>