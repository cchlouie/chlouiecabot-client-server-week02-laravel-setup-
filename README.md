# client-server-week02-laravel-setup

A simple Laravel application created as part of the Week 02 activity for **ITST 302 – Client-Server Technologies**.

---

## 👩‍💻 Developer Info

| Field       | Details                              |
|-------------|--------------------------------------|
| Name        | Chlouie Cabot                        |
| Student No. | 0124-1201                            |
| Course      | ITST 302 – Client-Server Technologies |
| Section     | BSIT 3C                              |

---

## 📋 Project Description

This project demonstrates the basic setup of a Laravel application. The homepage displays a personalized welcome message with developer information, styled with a pink website layout.

---

## 🚀 How to Run

### Requirements
- PHP >= 8.2
- Composer
- Laravel 11

### Installation Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/cchlouie/chlouiecabot-client-server-week02-laravel-setup-.git
   cd chlouiecabot-client-server-week02-laravel-setup-
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Start the development server:
   ```bash
   php artisan serve
   ```

5. Open your browser and go to:
   ```
   http://localhost:8000
   ```

---

## 📁 Project Structure

```
hello-laravel/
├── routes/
│   └── web.php               # Defines the homepage route
├── resources/
│   └── views/
│       └── welcome.blade.php # Homepage view with styling
├── .env                      # Environment configuration
└── README.md
```

---

## 🛠️ Technologies Used

- **Laravel 11** – PHP Web Framework
- **Blade** – Laravel templating engine
- **CSS3** – Custom pink styling with Google Fonts (Poppins)

---

© 2025 Chlouie Cabot – ITST 302 Client-Server Technologies
