# Hacktivist Laravel Application

## Hosted Application

[Live Demo](https://your-app-domain.com)

## Features

- User authentication and registration
- Admin dashboard with restricted access
- Access control to prevent IDOR

## Security Measures

- HTTPS enforced
- Secure session management
- CSRF protection enabled

## Testing Access Control

1. Register a new user.
2. Attempt to access the admin dashboard (`/admin`) without admin privileges.
3. Verify that non-admin users are redirected to the homepage.

## Setup Instructions

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/hacktivist.git
    ```

2. Install dependencies:
    ```bash
    cd hacktivist
    composer install
    npm install
    npm run dev
    ```

3. Configure the environment:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Set up the database:
    ```bash
    php artisan migrate
    php artisan db:seed
    ```

5. Serve the application:
    ```bash
    php artisan serve
    ```

## Contact

For any issues, please contact [osun0001@hz.nl](mailto:osun0001@hz.nl).
