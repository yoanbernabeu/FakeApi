FROM dunglas/frankenphp

RUN install-php-extensions \
 pdo_pgsql \
 gd \
 intl \
 zip \
 opcache

ENV SERVER_NAME=your-domain-name.example.com
ENV APP_RUNTIME=Runtime\\FrankenPhpSymfony\\Runtime
ENV APP_ENV=prod
ENV DATABASE_URL=postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8
ENV FRANKENPHP_CONFIG="worker ./public/index.php"

COPY . /app/