# Xperts-Assesment
Assesment for mini CRM

## 🚀 Quick Start Guide (Using Laragon)

This project is optimized for deployment on a local **Laragon** development environment. Follow these steps to get the application up and running on your machine.

### Prerequisites
* **Laragon** installed (with PHP >= 8.2 and MySQL enabled)
* **Composer** global installation
* **Node.js & NPM**

---

### Step-by-Step Installation

### 1. Place the Project in Laragon
Clone or move this project folder directly into your root Laragon web directory:

```bash
C:\laragon\www\xperts-assesment
```

### 2. Install Dependencies
1. Open the **Laragon** desktop application.
2. Click the **Terminal** button. This opens a root command prompt pre-configured with the correct PHP and MySQL environment paths.
3. Navigate to your project folder:
```
   cd xperts-assesment
```
4. And run Package Installations
Inside Laragon's terminal, run the following commands to set up your vendors and configurations:
```
# Install PHP dependencies
composer install

# Install Tailwind/Vite dependencies
npm install
```


### 3. Environment Setup & App Key
Create your local environment file and generate the application encryption key:

Copy the env.example to env
```
cp .env.example .env
```
generate the application encryption key
```
php artisan key:generate
```

### 4. Create Database & Run Migrations
1. Open Laragon, click Start All.

2. Click the Database button in Laragon (or open your preferred client like HeidiSQL) and create a blank database named: xperts_assesment.

3. Verify your .env matches your local database settings (the default Laragon connection configuration is shown below):
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xperts_assesment
DB_USERNAME=root
DB_PASSWORD=
```
4. Run the database migrations to build tables and load factory seed data:
```
php artisan migrate --seed
```
### 5. Link File Storage
Generate the symbolic link so uploaded company logos display properly in the dashboard:
```
php artisan storage:link
```

### 💻 Running the Application

1. Ensure Laragon is running (Start All).

2. Start the Vite asset compiler for the Tailwind CSS user interface:

```
npm run dev
```
3. Open your browser and navigate to the auto-generated local domain:
👉 http://xperts-assesment.test
