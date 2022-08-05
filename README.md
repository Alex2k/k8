1. Create `env.php` based on `example.env.php` and filled it.

2. Run `php bin/migrations` to create tables.

3. Run `php bin/fixtures` to fill data.

4. Add `php commands/find_expired_users` and `php commands/notify_expired_users` to crontab.
