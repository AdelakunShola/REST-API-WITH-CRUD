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








### Login a User (POST /login)

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









### Update an Existing User (PUT /update/{user_id})

- **Request:**
  - Method: PUT
  - URL: `http://localhost:8000/update/{user_id}`
  - Request Body (JSON):

    ```json
    {
        "name": "Updated Name",
        "email": "updatedname@example.com",
      
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









### Delete a User (DELETE /delete/{user_id})

- **Request:**
  - Method: DELETE
  - URL: `http://localhost:8000/delete/{user_id}`

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "message": "User with ID {user_id} deleted successfully."
    }
    ```

---














### Blogs Table

#### Create a New Blog (POST /blogs)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/blogs`
  - Request Body (JSON):

    ```json
    {
        "title": "New Blog Post",
        "body": "Content of the blog post."     
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
        "created_at": "2023-09-12T15:22:18.000000Z"
    }
    ```

#### Update a Blog Post (PUT /blogs/{blog_id})

- **Request:**
  - Method: PUT
  - URL: `http://localhost:8000/blogs/{blog_id}`
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

   ```json
    {
        "message": "User with ID {user_id} deleted successfully."
    }
    ```

---

### Payment Table

#### Create a New Payment Transaction (POST /api/payments)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/payments`
  - Request Body (JSON):

    ```json
    {
        "amount": 1000.50,
        "user_id": 1,
        "status": "pending",
        "payment_method": "Stripe",
        "transaction_id": "id_12765789u8765433"
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
        "status": "Successful",
        "payment_method": "Stripe",
        "transaction_id": "id_12765789u8765433",
        "created_at": "2023-09-12T15:22:18.000000Z"
    }
    ```



  - Method: PUT
  - URL: `http://localhost:8000/payments/{payment_id}`
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






























### Create a new Organization (POST /Register)

- **Request:**
  - Method: POST
  - URL: `http://localhost:8000/register`


    ```json
    [
        {
            
            "name": "First Org",
            "description": "A new dawn",
           
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
            "name": "First Org",
            "description": "A new dawn",
            "created_at": "2023-09-11T09:45:32.000000Z"
        }
    ]
    ```


















### Update an Existing Organization (PUT /update/{org_id})

- **Request:**
  - Method: PUT
  - URL: `http://localhost:8000/update/{org_id}`
  - Request Body (JSON):

    ```json
    {
        "name": "Updated Organization Name",
        "description": "Updated Organization Description",
      
    }
    ```

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "id": 1,
        "name": "Updated Organization Name",
        "description": "Updated Organization Description",
        "created_at": "2023-09-10T12:34:56.000000Z",
        "updated_at": "2023-09-13T10:15:42.000000Z"
    }
    ```


### Delete Organization (DELETE /delete/{org_id})

- **Request:**
  - Method: DELETE
  - URL: `http://localhost:8000/delete/{org_id}`

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "message": "Organization with ID {org_id} deleted successfully."
    }
    ```

---

