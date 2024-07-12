# REST API Documentation

## API Endpoints

### Register a new user (POST /Register)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/register`


    ```json
    [
        {
            
            "name": "Harry Gold",
            "email": "harry@gmail.com",
            "password": "0987700997"
           
        }
    ]
    ```

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    [
        {
            "id": 1,
            "name": "Harry Gold",
            "email": "harry@gmail.com",
            "password": "0987700997",
            "Role_id": "1",
            "created_at": "2023-09-11T09:45:32.000000Z"
        }
    ]
    ```






    

### Login a User (POST /login})

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/login`

  ```json
    [
        {
            
           
            "email": "harry@gmail.com",
            "password": "0987700997"
           
        }
    ]
    ```

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjMxMjFiZjZmZmIyZjQ4Y2M3NzZiYzFjZWE3YTU5ZDE2ZTY0Y2E3NTU2ZmQyNmE3ODc3NmRmODQ3ODZhMzFmZjQyY2QxYjE5N2ZjZTc5NTJhIn0",
    "token_type": "Bearer",
    "user": {
        "id": 1,
        "name": "Harry Gold",
        "email": "harry@gmail.com",
        "created_at": "2023-09-10T12:34:56.000000Z"
    }}


    ```












### Create a New Person (POST /api)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/api`
  - Request Body (JSON):

    ```json
    {
        "name": "New Person",
        "email": "newperson@example.com",
        "password": "hashedpassword",
        "Role_id": 1
    }
    ```

- **Response:**
  - Status Code: 201 Created
  - Response Body (JSON):

    ```json
    {
        "id": 3,
        "name": "New Person",
        "email": "newperson@example.com",
        "Role_id": 1,
        "created_at": "2023-09-12T15:22:18.000000Z",
        "updated_at": "2023-09-12T15:22:18.000000Z"
    }
    ```













### Update an Existing User (PUT /update/{user_id})

- **Request:**
  - Method: PUT
  - URL: `http://localhost:8000/update/{user_id}`
  - Request Body (JSON):

    ```json
    {
        "name": "Updated Name",
        "email": "updatedname@example.com",
        "Role_id": 2
    }
    ```

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "id": 1,
        "name": "Updated Name",
        "email": "updatedname@example.com",
        "Role_id": 1,
        "created_at": "2023-09-10T12:34:56.000000Z",
        "updated_at": "2023-09-13T10:15:42.000000Z"
    }
    ```









### Delete a Person (DELETE /api/{user_id})

- **Request:**
  - Method: DELETE
  - URL: `http://localhost:8000/api/{user_id}`

- **Response:**
  - Status Code: 204 No Content

---

### Blogs Table

#### Create a New Blog (POST /api/blogs)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/api/blogs`
  - Request Body (JSON):

    ```json
    {
        "title": "New Blog Post",
        "body": "Content of the blog post.",
        "user_id": 1
    }
    ```

- **Response:**
  - Status Code: 201 Created
  - Response Body (JSON):

    ```json
    {
        "id": 1,
        "title": "New Blog Post",
        "body": "Content of the blog post.",
        "user_id": 1,
        "created_at": "2023-09-12T15:22:18.000000Z",
        "updated_at": "2023-09-12T15:22:18.000000Z"
    }
    ```

#### Update a Blog Post (PUT /api/blogs/{blog_id})

- **Request:**
  - Method: PUT
  - URL: `http://localhost:8000/api/blogs/{blog_id}`
  - Request Body (JSON):

    ```json
    {
        "title": "Updated Blog Post Title",
        "body": "Updated content of the blog post."
    }
    ```

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "id": 1,
        "title": "Updated Blog Post Title",
        "body": "Updated content of the blog post.",
        "user_id": 1,
        "created_at": "2023-09-12T15:22:18.000000Z",
        "updated_at": "2023-09-13T10:15:42.000000Z"
    }
    ```

#### Delete a Blog Post (DELETE /api/blogs/{blog_id})

- **Request:**
  - Method: DELETE
  - URL: `http://localhost:8000/api/blogs/{blog_id}`

- **Response:**
  - Status Code: 204 No Content

---

### Payment Table

#### Create a New Payment Transaction (POST /api/payments)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/api/payments`
  - Request Body (JSON):

    ```json
    {
        "amount": 100.50,
        "user_id": 1,
        "status": "pending",
        "payment_method": "Stripe",
        "transaction_id": "stripe_transaction_id_123"
    }
    ```

- **Response:**
  - Status Code: 201 Created
  - Response Body (JSON):

    ```json
    {
        "id": 1,
        "amount": 100.50,
        "user_id": 1,
        "status": "pending",
        "payment_method": "Stripe",
        "transaction_id": "stripe_transaction_id_123",
        "created_at": "2023-09-12T15:22:18.000000Z",
        "updated_at": "2023-09-12T15:22:18.000000Z"
    }
    ```

#### Update Payment Status (PUT /api/payments/{payment_id})

- **Request:**
  - Method: PUT
  - URL: `http://localhost:8000/api/payments/{payment_id}`
  - Request Body (JSON):

    ```json
    {
        "status": "paid",
        "transaction_id": "updated_stripe_transaction_id_456"
    }
    ```

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "id": 1,
        "amount": 100.50,
        "user_id": 1,
        "status": "paid",
        "payment_method": "Stripe",
        "transaction_id": "updated_stripe_transaction_id_456",
        "created_at": "2023-09-12T15:22:18.000000Z",
        "updated_at": "2023-09-13T10:15:42.000000Z"
    }
    ```

#### Delete Payment Transaction (DELETE /api/payments/{payment_id})

- **Request:**
  - Method: DELETE
  - URL: `http://localhost:8000/api/payments/{payment_id}`

- **Response:**
  - Status Code: 204 No Content
