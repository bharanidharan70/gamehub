# 🎮 GameHub - Gaming Web Application

## 📌 Project Overview

GameHub is a gaming web application built using **PHP, MySQL, Bootstrap, HTML, and CSS**.  
Users can explore games, download them, and manage their personal library.

---

## 🚀 Features

### 👤 User Features

* 🔐 User Authentication (Login, Signup, Forgot Password)
* 🔐 OTP-based Password Reset (via Email)
* 🎮 Game Store with multiple games
* ⬇️ Download games and store in user library
* 📚 Personal Library (user-specific games)
* 👥 Community Page
* 🎯 Responsive Design (Mobile Friendly)

---

### 👑 Admin Features

* 🔑 Admin Login (role-based authentication)
* 📊 Admin Dashboard with total users count
* 👥 View all users in table format
* 🔍 Search, Sorting & Pagination (DataTables)
* ✏️ Edit user details (full profile edit)
* ❌ Delete users (admin protected)
* 🚫 Block / Unblock users
* 🔐 Blocked users cannot login

---

## 🔐 Security Features

* 📧 OTP verification using SendGrid API
* ⏳ OTP expiry (time-based validation)
* 🔑 Secure password hashing
* 🚫 No password exposure (no temporary password sharing)
* 🔄 OTP cleared after successful verification

---

## 🧑‍💻 Technologies Used

* Frontend: HTML, CSS, Bootstrap
* Backend: PHP
* Database: MySQL
* Library: jQuery DataTables
* Email Service: SendGrid API

---

## 🗂️ Project Structure

GameHub/
│
├── index.php  
├── login.php  
├── signup.php  
├── forgotpassword.php  
├── verify_otp.php  
├── reset_password.php  
├── dashboard.php  
├── library.php  
├── store.php  
├── community.php  
├── profile.php  
│  
├── admin.php  
├── admin_edit_user.php  
├── delete_user.php  
├── block_user.php  
│  
├── login_action.php  
├── signup_action.php  
├── forgot_action.php  
├── update_password.php  
├── add_to_library.php  
├── remove_game.php  
│  
├── db.php  
├── logout.php  
│  
├── images/  
├── uploads/  

---

## ⚙️ How It Works

1. User creates an account or logs in  
2. User browses games in the store  
3. Clicking **Download** saves the game in database  
4. Games appear in the user’s **Library page**  
5. Admin can manage users (edit, delete, block)  
6. Blocked users cannot access the system  

### 🔐 Forgot Password Flow

1. User enters registered email  
2. OTP is sent via email  
3. User enters OTP for verification  
4. If valid, user can reset password  
5. Password updated securely  

---

## 🎨 UI/UX Features

* Modern card-based design  
* Hover effects and animations  
* Image-based carousel for offers  
* Responsive layout  
* Dashboard-style admin panel  

---

## 🛠️ Setup Instructions

1. Install XAMPP / WAMP  
2. Place project inside `htdocs`  
3. Create database in phpMyAdmin  
4. Import required tables  
5. Update `db.php` with database credentials  
6. Run project in browser  

---

## 📸 Screenshots

### 🏠 Home Page
![Home](images/index.png)

### 🎮 Store Page
![Store](images/store.png)

### 📚 Library Page
![Library](images/library.png)

### 👑 Admin Dashboard
![Admin](images/admin.png)

---

## 📈 Future Enhancements

* ❤️ Wishlist feature  
* 🔍 Advanced search & filters  
* 🎥 Game trailer popup  
* 🌙 Dark/Light mode toggle  
* 📊 Analytics dashboard  
* 🔁 Resend OTP feature  
* ⏳ OTP countdown timer  

---

## 🙌 Conclusion

This project demonstrates full-stack development with authentication, database integration, OTP-based password reset, and modern UI design along with an admin management system.

---

## 👤 Author

**Bharani**