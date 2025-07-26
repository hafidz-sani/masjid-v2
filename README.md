# Masjid Ibnu Sabil Website

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vue.js&logoColor=4FC08D)](https://vuejs.org)
[![Inertia.js](https://img.shields.io/badge/Inertia.js-9553E9?style=for-the-badge&logo=inertia&logoColor=white)](https://inertiajs.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

A modern, responsive website for **Masjid Ibnu Sabil** located in Pisangan Baru, Matraman, Jakarta Timur, DKI Jakarta. This Single Page Application (SPA) provides comprehensive mosque management features and real-time information for the community.

## 🏢 About Masjid Ibnu Sabil

**Location:** Pisangan Baru, Matraman, Jakarta Timur, DKI Jakarta  
**Website Purpose:** Digital platform to serve the mosque community with modern web technologies

## ✨ Features

### 🕐 Prayer Times
- **Real-time Prayer Schedule** for Jakarta Timur region
- Automatic updates based on Islamic calendar
- Location-specific prayer time calculations

### 💰 Financial Management
- **Mosque Financial Information** transparency
- Donation tracking and reporting
- Budget management system

### 📝 Content Management System (CMS)
- Dynamic content management
- News and announcements
- Event scheduling and management
- Community notices

### 🔧 Additional Features
- Responsive design for all devices
- Fast loading Single Page Application
- User-friendly interface
- Modern web standards compliance

## 🛠️ Technology Stack

### Backend
- **Laravel** - PHP framework for robust backend development
- **MySQL** - Reliable database management system

### Frontend
- **Vue.js 3** - Progressive JavaScript framework with Composition API
- **Inertia.js** - Modern monolith approach for SPA development
- **Tailwind CSS** - Utility-first CSS framework for rapid UI development

### Architecture
- **Single Page Application (SPA)** - Seamless user experience
- **Server-Side Rendering** capabilities via Inertia.js
- **Component-based architecture** with Vue 3 Composition API

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** >= 8.1
- **Composer** - PHP dependency manager
- **Node.js** >= 16.x
- **npm** or **yarn** - Package manager
- **MySQL** >= 8.0
- **Git** - Version control

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd masjid-v2
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install JavaScript Dependencies
```bash
npm install
# or
yarn install
```

### 4. Environment Configuration
```bash
cp .env.example .env
```

Edit the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=masjid_ibnu_sabil
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Database Setup
```bash
php artisan migrate
php artisan db:seed
```

### 7. Build Assets
```bash
npm run dev
# or for production
npm run build
```

## 🏃‍♂️ Running the Application

### Development Mode
```bash
# Start Laravel development server
php artisan serve

# In another terminal, start Vite development server
npm run dev
```

### Production Mode
```bash
# Build production assets
npm run build

# Configure your web server to point to the public directory
```

## 📁 Project Structure

```
masjid-v2/
├── app/                    # Laravel application logic
├── resources/
│   ├── js/                # Vue.js components and pages
│   ├── css/               # Stylesheets (Tailwind CSS)
│   └── views/             # Blade templates
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── public/                # Public assets
├── routes/                # Application routes
└── config/                # Configuration files
```

## 🔧 Development

### Adding New Features
1. Create Laravel routes in `routes/web.php`
2. Create Vue components in `resources/js/Components/`
3. Create Inertia pages in `resources/js/Pages/`
4. Style with Tailwind CSS classes

### Database Changes
```bash
# Create new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback
```

### Asset Compilation
```bash
# Development (with hot reload)
npm run dev

# Production build
npm run build

# Watch for changes
npm run watch
```

## 🧪 Testing

```bash
# Run PHP tests
php artisan test

# Run JavaScript tests
npm run test
```

## 📝 API Documentation

The application uses Inertia.js for seamless communication between Laravel and Vue.js. API endpoints are primarily used for:

- Prayer times data fetching
- Financial data management
- Content management operations
- User authentication

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Contact

**Masjid Ibnu Sabil**  
📍 Pisangan Baru, Matraman, Jakarta Timur, DKI Jakarta

For technical support or inquiries about this website, please contact the development team.

## 🙏 Acknowledgments

- Laravel community for the excellent framework
- Vue.js team for the progressive framework
- Inertia.js for bridging server-side and client-side
- Tailwind CSS for the utility-first approach
- The Muslim community for inspiration and support

---

**Built with ❤️ for the Masjid Ibnu Sabil community**