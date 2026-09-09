# Track Tech Solution

A web platform built for apparel and textile manufacturing operations. The project provides product information, interactive factory tools, ROI estimation, and demo booking for garment digitization systems such as realtime sewing line tracking, RFID fabric control, and digital quality management.

## Tech Stack

1. PHP 8.2 or newer
2. Laravel 12
3. Blade Templating Engine
4. Tailwind CSS configured via browser runtime
5. HTML5 Canvas and Vanilla JavaScript for interactive 3D elements
6. SQLite Database
7. Apache and Docker for containerized hosting

## Application Features

1. Product Pages: Dedicated showcase pages for seven manufacturing solutions including Production Tracking System (PTS), Cutting Room Management (TrackCut), Fabric and Inventory Control, AI Quality Control, Maintenance and Asset Management, Worker Skill Matrix, and Central Analytics.
2. Canvas Visuals: Pure HTML5 Canvas animations for background particle depth, mouse movement parallax, and interactive home page factory rendering without external 3D library dependencies.
3. Interactive Utilities: Working ROI and waste reduction calculator with dynamic formula updates, five step factory process pipeline, and interactive system demonstration flow.
4. Inquiry and Booking System: Form handling for quote requests, contact messages, and demo bookings. Submissions are validated and stored in the SQLite database with email notifications dispatched through Laravel Mail.
5. Production Readiness: Preconfigured reverse proxy handling for HTTPS termination and Apache URL rewriting for platforms such as Render.

## Project Structure

1. app/Http/Controllers: PageController handles route data and views, ContactController handles form submissions and notification emails.
2. app/Models: Inquiry model for storing form submissions.
3. database/migrations: Schema migration for the inquiries table.
4. resources/views: Blade templates for home, product catalog, individual product details, about, case studies, demo, contact, and email templates.
5. public/js: Canvas animation scripts for background visuals, factory rendering, and custom cursor tracking.
6. public/css: Core style rules and layout definitions.
7. Dockerfile: Container image definition for deployment.

## Local Development Setup

Prerequisites:
1. PHP 8.2 or newer installed locally
2. Composer package manager
3. Git

Setup Steps:

1. Clone the repository to your machine
git clone https://github.com/yourusername/repository.git

2. Navigate into the project folder
cd repository

3. Install PHP dependencies
composer install

4. Create your local environment file
cp .env.example .env

5. Generate the application encryption key
php artisan key:generate

6. Create the SQLite database file if it does not exist
touch database/database.sqlite

7. Run database migrations
php artisan migrate

8. Start the local development server
php artisan serve

The application will be accessible at http://127.0.0.1:8000 in your browser.

## Mail Configuration

To send actual email confirmations for contact inquiries, update the following fields in your .env file:

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="Track Tech Solution"

If these values are left empty, inquiries will still save to the SQLite database successfully while email attempts are safely logged.

## Docker and Deployment

The project includes a Dockerfile configured for deployment on cloud services like Render.

1. Base image uses official PHP 8.2 Apache.
2. Required PHP extensions include pdo, pdo_sqlite, pdo_mysql, mbstring, exif, pcntl, bcmath, gd, zip, and opcache.
3. Apache is configured to point its document root to the public folder with rewrite modules enabled.
4. Reverse proxy SSL termination is supported via trusted proxy configuration in bootstrap/app.php.
5. The container start command automatically binds to the port supplied by the host environment and applies database migrations.
