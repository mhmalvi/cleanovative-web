# Cleanovative Web

A web application for a professional cleaning service business, built with Laravel. This platform allows customers to explore cleaning services, request quotes, and manage bookings. Features a modern frontend compiled with Webpack Mix.

## Tech Stack

- **PHP** ^7.3 | ^8.0
- **Laravel** ^8.65
- **Webpack Mix** for asset compilation
- **Docker** support via Docker Compose
- **PHPUnit** for automated testing

## Features

- Service catalog and descriptions
- Online booking and quote requests
- Customer account management
- Admin dashboard for managing services and bookings
- Responsive design for all devices
- Docker-ready development environment

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL or compatible database

### Installation

```bash
# Clone the repository
git clone https://github.com/mhmalvi/cleanovative-web.git
cd cleanovative-web

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run database migrations
php artisan migrate

# Compile assets
npm run dev
```

### Development

```bash
# Start the development server
php artisan serve

# Watch for asset changes
npm run watch
```

### Docker

```bash
docker-compose up -d
```

### Testing

```bash
php artisan test
```

## Project Structure

```
cleanovative-web/
├── app/                # Application logic
├── bootstrap/          # Framework bootstrap files
├── config/             # Configuration files
├── database/           # Migrations, factories, and seeders
├── public/             # Public assets and entry point
├── resources/          # Views, raw assets, and language files
├── routes/             # Route definitions
├── storage/            # Logs, cache, and compiled files
├── tests/              # Automated tests
├── docker-compose.yml  # Docker configuration
└── webpack.mix.js      # Asset compilation configuration
```

## Related

- [Cleanovative V2](https://github.com/mhmalvi/cleanovative-v2) — Redesigned version

## License

MIT