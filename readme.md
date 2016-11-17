# SheetPub

## Introduction

SheetPub is a part of project in Information Technology Fundamentals subject, IT@KMITL.

Share Once, Surf Anywhere, By Everyone is the main concept of SheetPub.

## Running the App

### Requirement
1. PHP >= 5.6.4
2. OpenSSL PHP Extension
3. PDO PHP Extension
4. Mbstring PHP Extension
5. Tokenizer PHP Extension
6. XML PHP Extension
7. Composer

### Runing this app
1. Install the defined dependencies.
```
# Using composer
composer install --no-dev
```
2. Environment configuration.
```
# Create .env file if not exist.
APP_ENV=production
APP_KEY=base64:[YOUR_KEY]
APP_DEBUG=false
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=[DATABASE_HOST]
DB_PORT=3306
DB_DATABASE=[DATABASE_NAME]
DB_USERNAME=[DATABASE_USERNAME]
DB_PASSWORD=[DATABASE_PASSWORD]

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_KEY=
PUSHER_SECRET=
```

3. MySQL structure import.
4. Launch the project in path **/public**

### Tools.

1. Laravel 5.3
2. jQuery 3.1.1
