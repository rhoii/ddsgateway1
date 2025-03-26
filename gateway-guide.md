# How to Run the API Gateway, ddsbe1, and ddsbe2

## Step 1: Start the API Gateway
- Open a terminal.
- Navigate to the API Gateway directory: `cd C:\xampp\htdocs\ddsbe\ddsbe-gateway`.
- Run the Gateway: `php -S localhost:8002 -t public`.

## Step 2: Start ddsbe1 (Site1)
- Open a new terminal.
- Navigate to the ddsbe1 directory: `cd C:\xampp\htdocs\ddsbe\ddsbe1`.
- Run ddsbe1: `php -S localhost:8000 -t public`.

## Step 3: Start ddsbe2 (Site2)
- Open another terminal.
- Navigate to the ddsbe2 directory: `cd C:\xampp\htdocs\ddsbe\ddsbe2`.
- Run ddsbe2: `php -S localhost:8001 -t public`.

## Step 4: Test Using Postman
### GET Requests
- Open Postman.
- For Site1 users:
  - Send a GET request to `http://localhost:8002/users1`.
  - Expected response: A JSON list of users from ddsbe1.
- For Site2 users:
  - Send a GET request to `http://localhost:8002/users2`.
  - Expected response: A JSON list of users from ddsbe2.

### POST Requests
- For Site1 users:
  - Send a POST request to `http://localhost:8002/users1`.
  - Set the header: `Content-Type: application/x-www-form-urlencoded`.
  - In the Body tab, select `x-www-form-urlencoded` and add the following key-value pairs:
    - `username`: `charlie`
    - `password`: `secret123`
    - `gender`: `Male`
  - Expected response: Status `201 Created`, with the new user data.
- For Site2 users:
  - Send a POST request to `http://localhost:8002/users2`.
  - Set the header: `Content-Type: application/x-www-form-urlencoded`.
  - In the Body tab, select `x-www-form-urlencoded` and add the following key-value pairs:
    - `username`: `david`
    - `password`: `secret456`
    - `gender`: `male`
  - Expected response: Status `201 Created`, with the new user data.

### Other CRUD Operations
- GET a user by ID:
  - `GET http://localhost:8002/users1/{id}` for Site1.
  - `GET http://localhost:8002/users2/{id}` for Site2.
- UPDATE a user:
  - `PUT http://localhost:8002/users1/{id}` for Site1.
  - `PUT http://localhost:8002/users2/{id}` for Site2.
  - In the Body tab, select `x-www-form-urlencoded` and add the following key-value pairs:
    - `username`: `updatedUsername`
    - `password`: `newPassword`
    - `gender`: `female`
- DELETE a user:
  - `DELETE http://localhost:8002/users1/{id}` for Site1.
  - `DELETE http://localhost:8002/users2/{id}` for Site2.

## Step 5: Check Logs for Errors
- If any request fails, check the logs:
  - Gateway: `C:\xampp\htdocs\ddsbe\ddsbe-gateway\storage\logs\laravel.log`.
  - ddsbe1: `C:\xampp\htdocs\ddsbe\ddsbe1\storage\logs\laravel.log`.
  - ddsbe2: `C:\xampp\htdocs\ddsbe\ddsbe2\storage\logs\laravel.log`.