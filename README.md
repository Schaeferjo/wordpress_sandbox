# Usage

Run:
```
npm install

npm run build
# or
npm run dev
```

Followed by
```
docker compose up
```

In another terminal run:
```
docker compose exec -it --user www-data wordpress wp core install --url=http://localhost:8080 --title='Wordpress Sandbox' --admin_user=admin --admin_password=test1234 --admin_email=admin@example.com
docker compose exec -it --user www-data wordpress wp theme activate trc
```


To wipe out the wordpress installation:
```
docker compose down -v
```
