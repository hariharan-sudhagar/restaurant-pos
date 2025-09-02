
---

# 🟧 Laravel Backend (API & Admin)

```markdown
# 🍴 Restaurant POS Backend (Laravel API + Admin Dashboard)

This is the **backend API and admin panel** for the Cross-Platform Food Ordering & POS System.  
It powers the mobile apps and web frontend by handling **business logic, database operations, and analytics**.

---

## 🚀 Features
- 🛠️ REST APIs for menu, orders, and users  
- 📊 Admin dashboard for monitoring sales & analytics  
- 📦 CRUD operations for menu items  
- 🏷️ Real-time order status updates (Pending → In Progress → Ready → Delivered)  
- 🔑 Authentication & session handling  

---

## 🛠️ Tech Stack
- **Backend Framework:** Laravel 10 (PHP)  
- **Database:** MySQL  
- **Server:** Apache (AWS EC2 Ubuntu instance)  
- **Hosting:** AWS EC2  

---

## ⚙️ Installation
```bash
# Clone the repository
git clone https://github.com/hariharan-sudhagar/restaurant-pos.git
cd restaurant-pos

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate

# Update .env with database credentials

# Run migrations
php artisan migrate

# Start local server
php artisan serve
🌐 Deployment

Backend Hosted on AWS EC2: http://13.49.224.75/

Frontend (React App): https://my-new-pos.netlify.app/
