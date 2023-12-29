# Laravel Userable

This package transforms Laravel's User model to be an "abstract-like" model so that you can create as much separate userable (user-type) models as you wish.

## Installation

You can install the package via composer:

```bash
composer require fer-projekt/laravel-userable
```

## Usage

## Development

Clone the package from the github:

```bash
git clone https://github.com/fer-projekt/laravel-userable.git

cd laravel-userable
```

Starting & stopping docker

```bash
docker-compose up -d
```

```bash
docker-compose down
```

Install dependencies via composer and testing:

```bash
docker-compose exec app bash
```

```bash
composer update
```

```bash
phpunit
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
