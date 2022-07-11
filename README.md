# Minimal reproduction

1. `docker compose up`
2. `docker compose exec backend composer install`
3. Visit [localhost:3000](localhost:3000)
4. You can see the `url` specified in `config.localhost.php` is not picked up.
5. Rename `config.localhost.php` as `config.php`
6. Refresh the page: the result is now correct.
