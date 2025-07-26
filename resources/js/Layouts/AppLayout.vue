<template>
  <div class="min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="glass-effect sticky top-0 z-40 transition-all duration-300">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
          <!-- Logo -->
          <div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-gradient-to-br from-islamic-green-500 to-islamic-green-700 rounded-xl flex items-center justify-center shadow-lg">
              <span class="text-white text-xl font-bold">🕌</span>
            </div>
            <div>
              <h1 class="text-xl font-bold text-islamic-green-600 dark:text-islamic-green-400">
                Masjid Ibnu Sabil
              </h1>
              <p class="text-xs text-gray-500 dark:text-gray-400">Jakarta Timur</p>
            </div>
          </div>
          
          <!-- Desktop Navigation -->
          <div class="hidden lg:flex items-center space-x-2">
            <a href="#home" class="nav-link">Beranda</a>
            <a href="#prayer-times" class="nav-link">Jadwal Sholat</a>
            <a href="#features" class="nav-link">Layanan</a>
            <a href="#about" class="nav-link">Tentang</a>
            <a href="#contact" class="nav-link">Kontak</a>
          </div>
          
          <!-- Dark Mode Toggle & Mobile Menu -->
          <div class="flex items-center space-x-4">
            <!-- Dark Mode Toggle -->
            <button 
              @click="toggleDarkMode" 
              class="p-3 rounded-xl bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-islamic-green-100 dark:hover:bg-islamic-green-900 transition-all duration-300"
              :title="isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
            >
              <svg v-if="!isDark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
              </svg>
              <svg v-else class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
              </svg>
            </button>
            
            <!-- Mobile Menu Button -->
            <button 
              @click="toggleMobileMenu" 
              class="lg:hidden p-3 rounded-xl bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-islamic-green-100 dark:hover:bg-islamic-green-900 transition-all duration-300"
            >
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div 
      v-if="isMobileMenuOpen" 
      class="mobile-menu lg:hidden"
      :class="isMobileMenuOpen ? 'translate-x-0' : 'translate-x-full'"
    >
      <div class="flex flex-col h-full">
        <div class="flex justify-between items-center p-6 border-b border-gray-200 dark:border-gray-700">
          <h2 class="text-xl font-bold text-islamic-green-600 dark:text-islamic-green-400">Menu</h2>
          <button @click="toggleMobileMenu" class="p-2 rounded-lg text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <nav class="flex-1 p-6 space-y-4">
          <a href="#home" @click="toggleMobileMenu" class="block py-3 text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-islamic-green-600 dark:hover:text-islamic-green-400 transition-colors">Beranda</a>
          <a href="#prayer-times" @click="toggleMobileMenu" class="block py-3 text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-islamic-green-600 dark:hover:text-islamic-green-400 transition-colors">Jadwal Sholat</a>
          <a href="#features" @click="toggleMobileMenu" class="block py-3 text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-islamic-green-600 dark:hover:text-islamic-green-400 transition-colors">Layanan</a>
          <a href="#about" @click="toggleMobileMenu" class="block py-3 text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-islamic-green-600 dark:hover:text-islamic-green-400 transition-colors">Tentang</a>
          <a href="#contact" @click="toggleMobileMenu" class="block py-3 text-lg font-medium text-gray-700 dark:text-gray-300 hover:text-islamic-green-600 dark:hover:text-islamic-green-400 transition-colors">Kontak</a>
        </nav>
      </div>
    </div>

    <!-- Main Content -->
    <main>
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-white relative overflow-hidden">
      <div class="absolute inset-0 bg-islamic-pattern opacity-5"></div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
          <!-- Mosque Info -->
          <div class="md:col-span-2">
            <div class="flex items-center space-x-3 mb-6">
              <div class="w-12 h-12 bg-gradient-to-br from-islamic-green-500 to-islamic-green-700 rounded-xl flex items-center justify-center">
                <span class="text-white text-xl">🕌</span>
              </div>
              <div>
                <h3 class="text-xl font-bold text-islamic-green-400">Masjid Ibnu Sabil</h3>
                <p class="text-gray-400 text-sm">Jakarta Timur</p>
              </div>
            </div>
            <p class="text-gray-300 mb-6 leading-relaxed">
              Masjid Ibnu Sabil adalah pusat kegiatan keagamaan dan sosial yang berlokasi di 
              Pisangan Baru, Matraman, Jakarta Timur. Kami berkomitmen melayani umat dengan 
              fasilitas modern dan program yang bermanfaat.
            </p>
            <div class="text-gray-400">
              <p class="flex items-center mb-2">
                <svg class="w-5 h-5 mr-3 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Pisangan Baru, Matraman, Jakarta Timur
              </p>
              <p class="flex items-center mb-2">
                <svg class="w-5 h-5 mr-3 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                info@masjibibnusabil.org
              </p>
              <p class="flex items-center">
                <svg class="w-5 h-5 mr-3 text-islamic-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                (021) 123-4567
              </p>
            </div>
          </div>
          
          <!-- Prayer Times -->
          <div>
            <h4 class="text-lg font-semibold mb-6 text-islamic-green-400">Jadwal Sholat Hari Ini</h4>
            <div class="space-y-3">
              <div v-for="prayer in prayerTimes" :key="prayer.name" class="flex justify-between items-center py-2 border-b border-gray-700">
                <span class="text-gray-300">{{ prayer.name }}</span>
                <span class="font-semibold text-white">{{ prayer.time }}</span>
              </div>
            </div>
          </div>
          
          <!-- Quick Links -->
          <div>
            <h4 class="text-lg font-semibold mb-6 text-islamic-green-400">Tautan Cepat</h4>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-300 hover:text-islamic-green-400 transition-colors">Jadwal Kajian</a></li>
              <li><a href="#" class="text-gray-300 hover:text-islamic-green-400 transition-colors">Donasi Online</a></li>
              <li><a href="#" class="text-gray-300 hover:text-islamic-green-400 transition-colors">Laporan Keuangan</a></li>
              <li><a href="#" class="text-gray-300 hover:text-islamic-green-400 transition-colors">Galeri Kegiatan</a></li>
              <li><a href="#" class="text-gray-300 hover:text-islamic-green-400 transition-colors">Hubungi Kami</a></li>
            </ul>
          </div>
        </div>
        
        <div class="border-t border-gray-700 mt-12 pt-8 text-center">
          <p class="text-gray-400">
            &copy; {{ new Date().getFullYear() }} Masjid Ibnu Sabil. Semua hak cipta dilindungi.
          </p>
          <p class="text-gray-500 text-sm mt-2">
            Dibuat dengan ❤️ untuk kemajuan umat Islam
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

// Reactive state
const isDark = ref(false)
const isMobileMenuOpen = ref(false)

// Sample prayer times data
const prayerTimes = ref([
  { name: 'Subuh', time: '04:45' },
  { name: 'Dzuhur', time: '12:00' },
  { name: 'Ashar', time: '15:15' },
  { name: 'Maghrib', time: '18:05' },
  { name: 'Isya', time: '19:15' }
])

// Dark mode functionality
const toggleDarkMode = () => {
  isDark.value = !isDark.value
  if (isDark.value) {
    document.documentElement.classList.add('dark')
    localStorage.setItem('darkMode', 'true')
  } else {
    document.documentElement.classList.remove('dark')
    localStorage.setItem('darkMode', 'false')
  }
}

// Mobile menu functionality
const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

// Close mobile menu when clicking outside
const handleClickOutside = (event) => {
  if (isMobileMenuOpen.value && !event.target.closest('.mobile-menu')) {
    isMobileMenuOpen.value = false
  }
}

// Initialize dark mode from localStorage
onMounted(() => {
  const savedDarkMode = localStorage.getItem('darkMode')
  if (savedDarkMode === 'true') {
    isDark.value = true
    document.documentElement.classList.add('dark')
  }
  
  // Add click outside listener
  document.addEventListener('click', handleClickOutside)
})

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside)
})
</script>