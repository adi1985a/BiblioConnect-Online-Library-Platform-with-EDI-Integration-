# 📚🔗 BiblioConnect: Online Library Platform with EDI Integration 🇵🇱
_A Laravel-based online library platform for students, featuring book browsing, borrowing, reviews, notifications, and Electronic Data Interchange (EDI) capabilities, with a Polish user interface._

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP](https://img.shields.io/badge/PHP-%3E%3D8.0-777BB4.svg?logo=php)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-Framework-FF2D20.svg?logo=laravel)](https://laravel.com/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1.svg?logo=mysql)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-UI%20Framework-7952B3.svg?logo=bootstrap)](https://getbootstrap.com/)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6%2B-F7DF1E.svg?logo=javascript)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

## 📋 Table of Contents
1.  [Overview](#-overview)
2.  [Key Features](#-key-features)
3.  [Screenshots (Conceptual)](#-screenshots-conceptual)
4.  [Technology Stack & Requirements](#-technology-stack--requirements)
5.  [Local Development Setup (XAMPP)](#️-local-development-setup-xampp)
6.  [Usage Guide](#️-usage-guide)
7.  [Project File Structure (Laravel Standard)](#️-project-file-structure-laravel-standard)
8.  [Important Notes & Considerations](#-important-notes--considerations)
9.  [Contributing](#-contributing)
10. [License](#-license)
11. [Contact](#-contact)

## 📄 Overview

**BiblioConnect**, developed by Adrian Lesniak, is a modern online library platform built using the **Laravel PHP framework**. Designed primarily for students, it provides a comprehensive virtual library experience, allowing users to browse an extensive catalog of books, check availability, borrow, and return books seamlessly through a web interface. A key feature is its planned **Electronic Data Interchange (EDI)** integration (e.g., using EDIFACT standards) for efficient backend data exchange related to borrowing, returns, and potential fees. The platform also incorporates robust user management, powerful search and filtering capabilities, user reviews and ratings, automated notifications, and a strong emphasis on security best practices. The user interface is responsive, built with Bootstrap, and presented in **Polish**.

![Demo GIF](screenshots/1.gif)

## ✨ Key Features

*   📖 **Virtual Library Access**: Browse a rich online catalog of books with detailed information including title, author, publication year, category, cover image, and current availability status.
*   🔄 **Book Borrowing & Returns**: Intuitive web interface for users to check book availability, borrow books, and manage returns.
*   🔗 **EDI Integration (Planned)**: Designed to incorporate EDI standards (e.g., EDIFACT) for streamlined and automated data exchange for processes like borrowing records, return confirmations, and fee processing with other systems.
*   🔍 **Advanced Search & Filtering**: Powerful search functionality allowing users to find books by title, author, category, or user rating. Results can be further filtered to refine searches.
*   🔔 **Automated Notifications**: System-generated email reminders for upcoming book due dates and electronic invoices for any applicable library fees, enhancing user engagement and accountability.
*   👤 **User Management & Profiles**: Secure user registration, login, and profile management (personal details, password changes).
*   📊 **Borrowing History & Activity**: Users can view their complete borrowing history, outstanding fees, and interact with the online catalog by viewing ratings and reviews.
*   🛡️ **Robust Security**: Implements key security measures including CSRF token protection, secure password hashing (e.g., bcrypt via Laravel), XSS (Cross-Site Scripting) prevention, and safeguards against SQL injection.
*   📱 **Responsive User Interface**: Built with Bootstrap, ensuring the platform adapts gracefully to various screen sizes for optimal viewing on desktops, tablets, and smartphones.
*   💬 **Community Engagement**:
    *   Users can add their own book reviews and ratings.
    *   Ability to read comments and reviews from other users.
    *   Potential for sharing book recommendations.
*   🇵🇱 **Polish Language Interface**: The primary user interface and content are presented in Polish (`lang="pl"`).

## 🖼️ Screenshots

_Screenshots showcasing: the book browsing interface, search results, user profile, borrowing process, review section, and other key pages of the BiblioConnect platform._

<p align="center">
  <img src="screenshots\1.jpg" width="300"/>
  <img src="screenshots\2.jpg" width="300"/>
  <img src="screenshots\3.jpg" width="300"/>
  <img src="screenshots\4.jpg" width="300"/>
  <img src="screenshots\5.jpg" width="300"/>
  <img src="screenshots\6.jpg" width="300"/>
  <img src="screenshots\7.jpg" width="300"/>
  <img src="screenshots\8.jpg" width="300"/>
  <img src="screenshots\9.jpg" width="300"/>
  <img src="screenshots\10jpg" width="300"/>
</p>

## 🛠️ Technology Stack & Requirements

### Core Technologies:
*   **Backend**: PHP >= 8.0, Laravel Framework
*   **Database**: MySQL
*   **Frontend**: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5 (or similar)
*   **Dependency Management**: Composer

### Development Environment (Recommended for Local):
*   **Web Server Stack**: XAMPP (includes Apache, MySQL, PHP, phpMyAdmin) or similar (WAMP, MAMP, Laragon).
*   **IDE**: Visual Studio Code, PhpStorm, or any preferred code editor.
*   **PHP Package Manager**: Composer (globally installed).
*   **Laravel Installer**: (Optional, for creating new Laravel projects) `composer global require laravel/installer`.

### Local Assets (Standard Laravel Structure):
*   `public/`: Compiled CSS, JavaScript, images, and other public assets.
*   `vendor/`: Composer-managed third-party dependencies.
*   `resources/views/`: Blade templating files for UI.
*   `storage/`: Application logs, session files, cached views, user-uploaded files (e.g., book cover images if applicable).

## ⚙️ Installation and Setup (Local Development)

1.  **Clone the Repository**:
    ```bash
    git clone <repository-url>
    # Example: git clone https://github.com/yourusername/biblioconnect.git
    cd biblioconnect
    ```

2.  **Install Software (if not already present)**:
    *   **Visual Studio Code**: Download from [code.visualstudio.com](https://code.visualstudio.com/).
    *   **XAMPP**: Download and install from [apachefriends.org](https://www.apachefriends.org/). Start Apache and MySQL services via the XAMPP Control Panel.
    *   **Composer**: Download and install from [getcomposer.org](https://getcomposer.org/). Ensure it's added to your system's PATH.

3.  **Install Project Dependencies**:
    Navigate to the project root (`biblioconnect`) in your terminal and run:
    ```bash
    composer install
    ```

4.  **Environment Configuration**:
    *   Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    *   Open the `.env` file and configure your database connection details. For a typical XAMPP setup, it might look like this:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=biblioconnect  # Choose your database name
        DB_USERNAME=root           # Default XAMPP username
        DB_PASSWORD=               # Default XAMPP password (empty)
        ```
    *   Generate an application key:
        ```bash
        php artisan key:generate
        ```

5.  **Database Setup**:
    *   Using a tool like phpMyAdmin (accessible via XAMPP), create a new MySQL database with the name you specified in `.env` (e.g., `biblioconnect`).
    *   Run database migrations to create the necessary tables:
        ```bash
        php artisan migrate
        ```
    *   (Optional) Seed the database with initial data if seeders are available:
        ```bash
        php artisan db:seed
        ```

6.  **Frontend Setup (Bootstrap)**:
    *   Ensure Bootstrap CSS and JS are linked in your main layout file (e.g., `resources/views/layouts/app.blade.php`). This might involve installing Bootstrap via npm and compiling assets if using Laravel Mix/Vite, or directly linking CDN versions.
    *   If using Laravel Mix/Vite:
        ```bash
        npm install
        npm run dev # or npm run build for production
        ```

7.  **Serve the Application**:
    *   Start the Laravel development server:
        ```bash
        php artisan serve
        ```
    *   Access the application in your web browser, typically at `http://localhost:8000`.

    *(For production, you would configure a proper web server like Apache or Nginx to point to the `public` directory of your Laravel project.)*

## 💡 Usage Guide

1.  Access the BiblioConnect website in your web browser (e.g., `http://localhost:8000` for local development).
2.  **Interface & Navigation**:
    *   **Registration/Login**: New users can sign up by providing their name, email, and password. Existing users can log in with their credentials.
    *   **Book Browsing**: Navigate the library catalog. Books are typically displayed with details like title, author, category, and a cover image.
    *   **Search & Filter**: Use the search bar to find books by keywords (title, author). Apply filters (category, rating) to narrow down results.
3.  **Core Actions**:
    *   **Borrowing Books**: If a book is available, authenticated users can initiate a borrowing process.
    *   **Returning Books**: Manage returns through the user dashboard or book detail page.
    *   **Viewing History**: Access personal borrowing history, checked-out books, and any associated fees.
    *   **Adding Reviews**: Rate books and write reviews/comments to share opinions with the community.
    *   **Profile Management**: Logged-in users can update their personal details and change their password.
4.  **Notifications**:
    *   Keep an eye on your registered email for due date reminders and invoices for any library fees.

## 🗂️ Project File Structure (Laravel Standard)

*   `app/`: Contains the core code of your application (Controllers, Models, Providers, Http Kernel, Console Kernel, etc.).
    *   `app/Http/Controllers/`: Handles incoming requests and business logic.
    *   `app/Models/`: Eloquent models representing database tables (e.g., `User`, `Book`, `Borrowing`).
*   `config/`: Application configuration files (database, cache, mail, services, etc.).
*   `database/`:
    *   `migrations/`: Database schema definitions.
    *   `factories/`: Model factories for generating fake data for testing/seeding.
    *   `seeders/`: Database seeders for populating tables with initial/test data.
*   `public/`: The web server's document root. Contains compiled assets (CSS, JS), images, and the `index.php` entry point.
*   `resources/`:
    *   `css/`, `js/`: (If using Laravel Mix/Vite) Source SASS/LESS/JS files.
    *   `lang/`: Language files for localization (e.g., `pl/` for Polish).
    *   `views/`: Blade templates that define the application's user interface.
*   `routes/`:
    *   `web.php`: Defines routes for the web interface.
    *   `api.php`: Defines routes for the API (if applicable).
*   `storage/`:
    *   `app/`: Application-generated files (e.g., user uploads).
    *   `framework/`: Cache, sessions, compiled views.
    *   `logs/`: Application log files (`laravel.log`).
*   `tests/`: Contains automated tests (Unit, Feature).
*   `vendor/`: Composer-managed third-party PHP libraries.
*   `.env`: Environment configuration file (database credentials, API keys, etc.).
*   `composer.json`: Lists project dependencies for Composer.
*   `artisan`: The Laravel command-line interface tool.
*   `README.md`: This documentation file.

## 📝 Important Notes & Considerations

*   **Polish UI/Content**: The application primarily uses Polish (`lang="pl"`) for its user interface elements and content.
*   **Design Patterns**: Built following Laravel's conventions, which promote MVC (Model-View-Controller), and potentially uses patterns like Repository, Service Layers, and Dependency Injection for better organization and testability.
*   **Security Focus**: Implements standard Laravel security features: CSRF protection, password hashing (bcrypt), XSS prevention (via Blade templating), and SQL injection protection (via Eloquent ORM).
*   **Placeholder Content**: The description mentions "Placeholder pages (e.g., book list table) need implementation." This indicates that while the structure is there, some UI elements or data displays might require further development.
*   **EDI Integration Status**: The EDI integration (e.g., using EDIFACT standards) is a planned feature and may require significant further setup and development, including defining message structures and communication protocols.
*   **Frontend Assets**: Assumes `main.js` and `styles.css` (or their compiled equivalents) exist and are properly linked. These would need to be implemented or generated via Laravel's asset pipeline (Mix/Vite).
*   **Thorough Testing**: A project of this complexity requires comprehensive testing: unit tests for individual components, integration tests for module interactions, security vulnerability scanning, and performance testing.
*   **Future Enhancements**: Potential future developments include a dedicated mobile application, multi-language support, premium user features, or advanced recommendation algorithms.

## 🤝 Contributing

Contributions to **BiblioConnect** are highly encouraged! If you have ideas for new features, improvements to existing ones, bug fixes, or enhancements to the EDI integration:

1.  Fork the repository.
2.  Create a new branch for your feature (`git checkout -b feature/YourAwesomeIdea`).
3.  Make your changes, adhering to Laravel best practices and coding standards.
4.  Write relevant tests for your new feature or fix.
5.  Commit your changes (`git commit -m 'Feature: Implement YourAwesomeIdea'`).
6.  Push to the branch (`git push origin feature/YourAwesomeIdea`).
7.  Open a Pull Request with a clear description of your changes.

## 📃 License

This project is licensed under the **MIT License**.
(If you have a `LICENSE` file in your repository, refer to it: `See the LICENSE file for details.`)

## 📧 Contact

Project developed by **Adrian Lesniak** 
For questions, feedback, or issues, please open an issue on the GitHub repository or contact the repository owner/author.

---
🚀 _Connecting students with knowledge, powered by Laravel and EDI innovation._
