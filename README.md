# 📝 Task Tracker

Task Tracker is a **Laravel-based web application** that helps you manage your daily tasks efficiently.  
It uses **Supabase** for authentication, database, and backend services, providing a modern and scalable solution.

---

## 🚀 Features

-   **Task Management**: Add, edit, delete, and list tasks.
-   **Supabase Integration**:
    -   Authentication (Sign up / Login).
    -   Store and manage tasks in Supabase database.
-   **Clean UI**: Built with Blade templates + Tailwind CSS.
-   **RESTful Architecture**: Laravel routes & controllers structure.
-   **Scalable**: Can be deployed easily on platforms like Vercel, Railway, or Laravel Forge.

---

## 📂 Project Structure

```bash
task-tracker/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── UserController.php
│   │   │   └── TaskController.php
│   │   └── Middleware/
│   ├── Models/
│   │   ├── User.php
│   │   └── Task.php
│   └── ...
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   │   ├── layout/
│   │   ├── auth/
│   │   └── tasks/
│   └── ...
├── routes/
│   └── web.php
└── ...
```

---

## 📖 Usage

1. Register/Login using Supabase Auth.

2. Create tasks with title, description, and status.

3. Edit or delete tasks anytime.

4. Tasks are synced in Supabase Database.

---
## 🛠️ Technologies Used

1. Laravel 10 – PHP Framework

2. Supabase – Auth & Database

3. Blade – Templating Engine

4. Tailwind CSS – Styling

5. Node.js – JavaScript Runtime

6. npm – Package Manager

---
## ⚙️ Setup and Run

```bash
# Clone the repo
git clone https://github.com/Mostafa2115/Task-Tracker.git
cd Task-Tracker

# Install dependencies
composer install
npm install && npm run dev

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate


# Start the development server
php artisan serve

# Open your browser and visit
http://localhost:8000

```

## 👨‍💻 Author
Developed by [Mostafa Mahmoud](https://github.com/Mostafa2115)
