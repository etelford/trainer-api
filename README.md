# Trainer API

Follow these steps to get the test application up and running:

1. Clone the repo
2. Create a database named `trainer_api` and set credentials in `.env`.
3. Setup your DB:

```
php artisan migrate
```

4. Generate client credentials:

```
php artisan passport:client --client
```

5. Take the credentials and request a Bearer token, by sending a `POST` request to `https://trainer-api.test/oauth/token` with the following body:

```
grant_type:client_credentials
client_id:1
client_secret:[SECRET]
scope:*
```

6. To create a trainer, send a `POST` request to `https://trainer-api.test/api/trainers` with an `Authorization` header set to `Bearer [TOKEN]` with the following body:

```
email:john@example.com
first_name:John
last_name:Example
phone:5125551212
```

6. To show a trainer, send a `GET` request to `https://trainer-api.test/api/trainers/:id` with an `Authorization` header set to `Bearer [TOKEN]` and the ID of the trainer created above.
