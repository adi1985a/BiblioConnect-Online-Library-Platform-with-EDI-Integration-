# BiblioConnect: Online Library with EDI

## Overview
BiblioConnect is a Laravel-based online library platform designed for students, enabling book browsing, borrowing, and electronic data interchange (EDI). Built with PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap, it offers user registration, search, reviews, notifications, and secure data handling.

## Features
- **Virtual Library Access**: Browse books online with details (title, author, year, category, availability).
- **Book Borrowing**: Check availability, borrow, and return books via a web interface.
- **EDI Integration**: Uses EDI standards (e.g., EDIFACT) for efficient data exchange (borrowing, returns, fees).
- **Search and Filter**: Search books by title, author, category, or rating; filter results.
- **Notifications**: Sends email reminders for due dates and electronic invoices for fees.
- **User History**: View borrowing history, fees, and online catalog with ratings/reviews.
- **Security**: Implements CSRF tokens, password hashing, XSS prevention, and SQL injection protection.
- **Responsive UI**: Adapts to desktops, tablets, and smartphones using Bootstrap.
- **Community Features**: Add reviews, ratings, and comments; share book recommendations.
- **User Management**: Register, log in, and manage profiles (personal details, password).

## Requirements
- Web server with PHP >= 8.0 (e.g., Apache with PHP-FPM)
- MySQL database
- Composer for dependency management
- XAMPP for local development (Apache, MySQL)
- Visual Studio Code or similar IDE
- Local assets:
  - `public/`: CSS, JavaScript, images
  - `vendor/`: Composer dependencies
  - `resources/views/`: Blade templates
  - `storage/`: Logs, uploaded images

## Setup
1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd biblioconnect
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Install software:
   - **Visual Studio Code**: Download from official site.
   - **XAMPP**: Install and start Apache/MySQL.
   - **Composer**: Install from official site.
   - **Laravel**: Run `composer global require laravel/installer`.
4. Create Laravel project:
   ```bash
   laravel new biblioconnect
   cd biblioconnect
   ```
5. Configure database in `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=biblioconnect
   DB_USERNAME=root
   DB_PASSWORD=
   ```
6. Create database:
   ```bash
   php artisan migrate
   ```
7. Add Bootstrap to `resources/views/layouts/app.blade.php` (link CSS/JS).
8. Host the site:
   ```bash
   php artisan serve
   ```
   Or configure Apache/Nginx for production.
9. Access at `http://localhost:8000`.

## Usage
1. Open the website in a browser.
2. **Interface**:
   - **Registration/Login**: Sign up with name, email, password; log in with credentials.
   - **Book Browsing**: View book list with details (title, author, category, image).
   - **Search**: Use search/filter by title, author, or category.
   - **Borrowing**: Borrow/return books; view history.
   - **Reviews**: Add ratings, reviews, and comments.
   - **Notifications**: Receive due date reminders and fee invoices.
   - **Profile**: Update personal details and password.
3. **Actions**:
   - Register/log in to access features.
   - Search and borrow books.
   - Add reviews and interact with community features.
   - Manage profile and check notifications.

## File Structure
- `app/`: Controllers, models, and core logic.
- `config/`: Application and database configurations.
- `database/`: Migrations, factories, and seeds.
- `public/`: CSS, JavaScript, images.
- `resources/`: Blade templates, language files.
- `routes/`: Web and API route definitions.
- `storage/`: Logs, session files, images.
- `tests/`: Unit and functional tests.
- `vendor/`: Composer dependencies.
- `README.md`: This documentation.

## Notes
- Uses Polish (`lang="pl"`) for UI/content.
- Built with Laravel’s MVC, repository, and dependency injection patterns.
- Security: CSRF tokens, hashed passwords, XSS/SQL injection prevention.
- Placeholder pages (e.g., book list table) need implementation.
- EDI integration (e.g., EDIFACT) requires further setup.
- Assumes `main.js` and `styles.css` exist; implement as needed.
- Test thoroughly (unit, integration, security, performance).
- Future enhancements: mobile app, multi-language support, premium features.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make changes and commit (`git commit -m "Add feature"`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For questions or feedback, open an issue on GitHub or contact Adrian Lesniak (index: 154256).