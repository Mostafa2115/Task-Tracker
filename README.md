# 📝 Task Tracker

Task Tracker is a **Laravel-based web application** that helps you manage your daily tasks efficiently.  
It uses **MySQL** for authentication, database, and backend services, providing a modern and scalable solution.

---

## 🚀 Features

-   **Task Management**: Add, edit, delete, and list tasks.
-   **MySQL Integration**:
    -   Authentication (Sign up / Login).
    -   Store and manage tasks in MySQL database.
-   **Clean UI**: Built with Blade templates + Tailwind CSS.
-   **RESTful Architecture**: Laravel routes & controllers structure.
-   **Scalable**: Can be deployed easily on platforms like Vercel, Railway, or Laravel Forge.

---

## 🎯 Goals

1. Provide a seamless task management experience.
2. Ensure data persistence with MySql.
3. Create a responsive and user-friendly interface.
4. Implement robust authentication and authorization.
5. Facilitate easy deployment and scalability.

---

## 📖 Usage

1. Register/Login using MySQL Auth.

2. Create tasks with title, description, and status.

3. Edit or delete tasks anytime.

4. Tasks are synced in MySQL Database.

---

## 🛠️ Technologies Used

-   **Backend**: Laravel
-   **Frontend**: Blade Templates, Tailwind CSS
-   **Database & Auth**: MySQL

---

## 💾 Database Schema

-   **Users Table**: Managed by MySQL Auth.
-   **Tasks Table**: Stores task details (title, description, status).

---

## 🗺️ Routing

-   **GET /**: Home page (task list).
-   **GET /login**: Login page.
-   **GET /register**: Registration page.
-   **POST /tasks**: Create a new task.
-   **PUT /tasks/{id}**: Update a task.
-   **DELETE /tasks/{id}**: Delete a task.

---

## ⚙️ Controllers

-   **UserController**: Manages user authentication and profile.
-   **TaskController**: Handles task CRUD operations.

---

## 📸 Screenshots

## ![Main Page](https://via.placeholder.com/800x400.png?text=Task+Tracker+Screenshot)

---

## 🚀 Project Setup

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/your-repository.git
    cd your-repository
    ```

2.  **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3.  **Environment Configuration:**
    Create a `.env` file by copying the example file:

    ```bash
    cp .env.example .env
    ```

    Then, generate the application key:

    ```bash
    php artisan key:generate
    ```

4.  **Run Migrations:**

    ```bash
    php artisan migrate
    ```

5.  **Serve the application:**
    In two separate terminals, run the following commands:
    ```bash
    npm run dev
    ```
    ```bash
    php artisan serve
    ```
    The application will be available at `http://127.0.0.1:8000`.

---

## 👨‍💻 Author

Developed by [Mostafa Mahmoud](https://github.com/Mostafa2115)
