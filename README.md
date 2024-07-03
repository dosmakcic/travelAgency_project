# Travel Agency Web Application

Welcome to the Travel Agency Web Application! This web app allows users to explore various travel packages, book trips, and manage their travel itineraries.
This README file provides an overview of the project, installation instructions, features, and other relevant details.

## Features

- Travel Packages: Browse and search for various travel packages.
- Booking System: Book travel packages and manage bookings.
- User Profile: View and edit user profiles.
- Admin Panel: Manage travel packages and bookings (admin users only).

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript

## Installation

To run this project locally, follow these steps:

1. **Clone the repository**:
    ```sh
    git clone https://github.com/dosmakcic/travelAgency_webApp.git
    cd travelAgency_webApp
    ```

2. **Set up your web server**:
    - Ensure you have Apache installed with PHP support.
    - Place the project files in the web root directory of your server (e.g., `/var/www/html`).

3. **Import the database**:
    - Create a MySQL database.
    - Import the `travelAgency.sql` file into your database.
      ```sh
      mysql -u username -p database_name < travelAgency.sql
      ```

4. **Update database configuration**:
    - Open `db.php` and `db2.php`.
    - Update the database connection details (`host`, `username`, `password`, `database`).

5. **Set file permissions**:
    - Ensure the web server has read/write permissions to the necessary files.
      ```sh
      sudo chown -R www-data:www-data /path/to/your/project
      sudo chmod -R 755 /path/to/your/project
      ```

6. **Access the application**:
    - Open your web browser and navigate to `http://localhost` or your server's IP address.

## Usage

### User Authentication

- **Register**: Navigate to `/register.php` to create a new account.
- **Login**: Navigate to `/login.php` to access your account.

### Browsing Travel Packages

- View available travel packages on the homepage (`home.php`).
- Use the search functionality to find specific packages.

### Booking a Trip

- Click on a travel package to view its details.
- Book a trip by clicking the "Book Now" button and providing the required information.

### User Profile

- Access your profile by navigating to `/profile.php`.
- Edit your profile information and view your booking history.

### Admin Panel

- Access the admin panel by navigating to `/admin.php`.
- Manage travel packages and bookings.

## Database Schema

The application uses a MySQL database. Below is a simplified schema:

### Users Table

| Column      | Type        | Description             |
|-------------|-------------|-------------------------|
| id          | INT         | Primary key             |
| username    | VARCHAR(50) | Unique username         |
| password    | VARCHAR(255)| Hashed password         |
| email       | VARCHAR(100)| User email              |

### Packages Table

| Column       | Type        | Description             |
|--------------|-------------|-------------------------|
| id           | INT         | Primary key             |
| name         | VARCHAR(100)| Package name            |
| description  | TEXT        | Package description     |
| price        | DECIMAL     | Package price           |

### Bookings Table

| Column       | Type        | Description             |
|--------------|-------------|-------------------------|
| id           | INT         | Primary key             |
| user_id      | INT         | Foreign key (Users)     |
| package_id   | INT         | Foreign key (Packages)  |
| booking_date | DATE        | Date of booking         |


