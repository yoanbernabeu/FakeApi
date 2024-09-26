# Fake API

Fake API is a simple API to generate fake data for testing purposes.

## Requirements

- Docker (+ Docker Compose)
- Symfony CLI
- PHP 8.3
- Composer
- Make
- Git

## Installation

```bash
git clone https://github.com/yoanbernabeu/fake-api.git
cd fake-api
composer install
docker-compose up -d
symfony serve -d
```

## Usage

### API

The API is available at `http://localhost:8000`.

You can use the API key `APK-6e6eca93-5ce1-471a-bd4a-ceb639878e48` in the `X-Api-Key` header.

#### With cURL

```curl
curl -X GET -H "X-Api-Key: APK-6e6eca93-5ce1-471a-bd4a-ceb639878e48" https://localhost:8000
```

#### With Bruno

You can use the [Bruno](https://www.usebruno.com/) tool to test the API.

The collection is available in [this directory: .doc/FakeApi](.doc/FakeApi).

## Build

To build the Docker image (with the amazing [FrankenPHP](https://github.com/dunglas/frankenphp)), run the following command:

```bash
make build
```

To push the Docker image to Docker Hub, run the following command:

```bash
make push
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.