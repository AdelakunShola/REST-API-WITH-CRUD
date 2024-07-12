# Database Blueprint/design Documentation




## API Endpoints





[DB DIAGRAM LINK](https://dbdiagram.io/d/669152f79939893daec95175)


## API Documentation
## Standard Formats for Requests and Responses
## Request Formats
1.	Register a new user (POST /Register)
2.	Login a User (POST /login)
3.	Update an Existing User (PUT /update/{user_id})
4.	Delete a User (DELETE /delete/{user_id})
5.	Create a New Blog (POST /blogs)
6.  Update a Blog Post (PUT /blogs/{blog_id})
7.  Delete a Blog Post (DELETE /api/blogs/{blog_id})
8.  Create a new Organization (POST /Register)
9.  Update an Existing Organization (PUT /update/{org_id})
10. Delete Organization (DELETE /delete/{org_id})
11. Create a New Payment Transaction (POST /api/payments)
12. Delete Payment Transaction (DELETE /api/payments/{payment_id})





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







###     Organization Table


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
        "amount": 1000.50,
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

#### Delete Payment Transaction (DELETE /api/payments/{payment_id})

- **Request:**
  - Method: DELETE
  - URL: `http://localhost:8000/api/payments/{payment_id}`

- **Response:**
  - Status Code: 200 OK
  - Response Body (JSON):

    ```json
    {
        "message": "Payment Transaction with ID {payment_id} deleted successfully."
    }
    ```








# _Known Limitations and Assumptions_

This documentation assumes that the API is running locally on http://localhost:8000. Adjust the base URL accordingly if your API is deployed to a different location.
The API assumes that you have a MySQL or compatible database configured and running, as the code uses Eloquent ORM to interact with the database. Ensure your database connection settings are correctly configured in Laravel's .env file.
Validation and error handling are implemented.

## _Setting Up and Deploying the API Locally or on a Server_
To set up and deploy the API, follow these general steps:
1.	Clone your Laravel project repository to your local machine using Git.
2.	Configure your database connection settings in the .env file.
3.	Install Composer dependencies: Run composer install in the project root directory.
4.	Generate an application key: Run php artisan key:generate.
5.	Run database migrations: Run php artisan migrate to create the necessary database tables.
6.	Start the development server: Run php artisan serve to run the API locally.
7.	Access the API endpoints using the base URL (http://localhost:8000/api) and follow the sample usage instructions mentioned earlier.
8.	Use Postman to test the API.
For deploying the API on a server, you will typically need to set up a web server (e.g., Apache or Nginx) and configure it to serve your Laravel application. The exact steps may vary depending on your server environment and hosting provider.
Remember to secure your server, configure environment variables, and follow best practices for production deployments.


## _Using Postman for API Testing_
Postman is a popular tool for testing APIs. You can use Postman to send HTTP requests to your API endpoints and validate the responses. Follow these steps to set up Postman for testing your Laravel API:
_Download and Install Postman:_
If you haven't already, download and install Postman from the official website.
Import API Requests:
You can import the API requests into Postman by using a collection. A collection is a group of saved requests. You can either manually create requests in Postman or import a JSON or YAML file containing the requests. To import your API requests, follow these steps:
In Postman, click on the "Import" button in the top-left corner.
Choose the option to import a "File" and select the JSON or YAML file that contains your API requests. Ensure that your requests are organized within folders and named appropriately for clarity.
Set Environment Variables (Optional):
If your API requires authentication tokens, base URLs, or other variables, you can define them as environment variables in Postman. This allows you to easily switch between different environments (e.g., development, production) without modifying the requests. To set up environment variables:
Click on the gear icon in the top-right corner of Postman.
Select "Manage Environments" and create a new environment. Define the necessary variables like base_url, api_key, or access_token.
Run API Requests:
Open the collection that contains your API requests.
Select the request you want to run.
Make sure you have set the appropriate environment if needed.
Click the "Send" button to send the request to your API.
Observe the response to verify that your API is working as expected.


## _Deploying the API on a Server:_
1. Choose a Hosting Environment:
Choose a hosting provider or server environment for deploying your Laravel API. Common options include shared hosting, VPS (Virtual Private Server), cloud providers (e.g., AWS, Azure, DigitalOcean), or a dedicated server.
2. Set Up a Web Server:
Configure a web server (e.g., Apache, Nginx) to serve your Laravel application. Create a virtual host or server block that points to your project's public directory.
3. Configure Domain and DNS (if applicable):
If you have a custom domain, configure the DNS settings to point to your server's IP address.
4. Server Environment Setup:
SSH into your server and set up the necessary environment. Install PHP, a database (e.g., MySQL), Composer, and any required extensions.
5. Upload Project Files:
Upload your Laravel project files to the server, excluding the .env file.
6. Environment Configuration:
Create a .env file on the server and configure it with the appropriate environment variables, especially the database connection details.
7. Install Dependencies:
Install PHP dependencies using Composer on the server:
bashCopy code
composer install 
8. Generate Application Key:
Generate a unique application key on the server:
bashCopy code
php artisan key:generate 
9. Database Migration:
Run database migrations to create the necessary tables:
bashCopy code
php artisan migrate 
10. Configure Web Server:
Configure your web server to serve your Laravel application. Ensure that it points to the public directory.
11. Secure Your Application:
Implement security best practices, including setting up SSL/TLS for HTTPS, configuring firewalls, and securing sensitive files.
12. Monitor and Maintain:
Regularly monitor your server for performance and security. Set up backups and implement a maintenance plan.






























