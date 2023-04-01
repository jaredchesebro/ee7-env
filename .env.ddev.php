ENVIRONMENT=dev

SITE_LICENSE_KEY=
BASE_URL="https://example.ddev.site"

DEBUG=1
SHOW_PROFILER=y

# SECURITY KEYS
# php -r 'echo sha1(uniqid(random_int(-PHP_INT_MAX, PHP_INT_MAX), TRUE));echo "\n";'
ENCRYPTION_KEY=
SESSION_CRYPT_KEY=

# DATABASE
DB_HOSTNAME=db
DB_DATABASE=db
DB_USERNAME=root
DB_PASSWORD=root
DB_PORT=

# COOKIES
COOKIE_DOMAIN=.ddev.site
COOKIE_PREFIX=exp
COOKIE_SAMESITE=Strict
COOKIE_SECURE=y

# MEMCACHED
MEMCACHED_HOST=127.0.0.1
MEMCACHED_PORT=11211

# REDIS
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
