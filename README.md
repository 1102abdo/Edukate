# 🎓 Edukate – Laravel Educational Platform

**Edukate** is a simple, clean, and powerful educational platform built using Laravel and Blade. It helps instructors share video courses and allows students to browse, preview, and purchase content easily.

---

## 🚀 Features

- ✅ Authentication System (Register / Login)
- 🎥 Video Courses
- 👨‍🏫 Instructor & Student Roles
- 🛒 Purchase Workflow
- 📧 Contact Form
- 📃 Static Pages (About, Team, Testimonials)
- 📱 Responsive Blade Layout



---

## 🛠️ Tech Stack

| Part        | Technology        |
|-------------|-------------------|
| Language    | PHP 8+            |
| Framework   | Laravel 12        |
| Frontend    | Blade + Bootstrap |
| Database    | MySQL             |
| Dev Server  | Laragon / XAMPP   |

---

## 📂 Project Structure

```bash
/edukate
├── /app/Http/Controllers       # Logic (FrontController, AuthController...)
├── /resources/views/front      # Blade views
│   ├── master.blade.php        # Main layout
│   ├── home.blade.php          # Home page
│   ├── about.blade.php
│   ├── contact.blade.php
│   └── ...
├── /routes/web.php             # Web routes
├── /public                     # Assets (images, CSS, JS)
└── README.md

---
## ⚙️ How to Run

### 1. Clone the repo

```bash
git clone https://github.com/your-username/edukate.git
cd edukate


composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

