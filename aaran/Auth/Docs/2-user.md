# Aaran/Auth/User - User Module Documentation

## Overview

The **User Module** in Aaran-BMS provides a robust **Role-Based Access Control (RBAC)** system, API support with **Sanctum authentication**, middleware, Livewire components, Blade views, database migrations, repositories, service classes, controllers, policies, request validation, and Pest tests.

## Folder Structure


## **📂 Aaran/Auth/User - Folder Structure**
```
Aaran/ 🚀
│── Auth/ 🔐
│   ├── User/ 👤
│   │   ├── Config/ ⚙️
│   │   │   ├── user.php 🛠️
│   │   ├── Database/ 🗄️
│   │   │   ├── Migrations/ 📜
│   │   │   │   ├── 2025_03_08_000000_create_users_table.php 🏗️
│   │   │   │   ├── 2025_03_08_000001_create_roles_table.php 🏗️
│   │   │   │   ├── 2025_03_08_000002_create_permissions_table.php 🏗️
│   │   │   │   ├── 2025_03_08_000003_create_role_user_table.php 🔗
│   │   │   │   ├── 2025_03_08_000004_create_permission_role_table.php 🔗
│   │   │   ├── Seeders/ 🌱
│   │   │       ├── UserSeeder.php 👤🌱
│   │   │       ├── RoleSeeder.php 🎭🌱
│   │   │       ├── PermissionSeeder.php 🔑🌱
│   │   ├── Http/ 🌍
│   │   │   ├── Controllers/ 🎮
│   │   │   │   ├── UserController.php 👤🎛️
│   │   │   │   ├── RoleController.php 🎭🎛️
│   │   │   │   ├── PermissionController.php 🔑🎛️
│   │   │   ├── Middleware/ 🛡️
│   │   │   │   ├── RoleMiddleware.php 🎭🛡️
│   │   │   │   ├── PermissionMiddleware.php 🔑🛡️
│   │   │   ├── Requests/ 📩
│   │   │       ├── StoreUserRequest.php 👤✅
│   │   │       ├── UpdateUserRequest.php 👤✏️
│   │   │       ├── StoreRoleRequest.php 🎭✅
│   │   │       ├── StorePermissionRequest.php 🔑✅
│   │   ├── Livewire/ ⚡
│   │   │   ├── UserForm.php 👤📝
│   │   │   ├── RoleForm.php 🎭📝
│   │   │   ├── PermissionForm.php 🔑📝
│   │   ├── Models/ 🏛️
│   │   │   ├── User.php 👤
│   │   │   ├── Role.php 🎭
│   │   │   ├── Permission.php 🔑
│   │   ├── Policies/ 🛡️
│   │   │   ├── UserPolicy.php 👤🛡️
│   │   │   ├── RolePolicy.php 🎭🛡️
│   │   │   ├── PermissionPolicy.php 🔑🛡️
│   │   ├── Providers/ 📦
│   │   │   ├── UserServiceProvider.php 👤📦
│   │   │   ├── AuthServiceProvider.php 🔑📦
│   │   ├── Repositories/ 🏗️
│   │   │   ├── UserRepository.php 👤💾
│   │   │   ├── RoleRepository.php 🎭💾
│   │   │   ├── PermissionRepository.php 🔑💾
│   │   ├── Services/ 🛠️
│   │   │   ├── UserService.php 👤⚙️
│   │   │   ├── RoleService.php 🎭⚙️
│   │   │   ├── PermissionService.php 🔑⚙️
│   │   ├── Routes/ 🛤️
│   │   │   ├── api.php 🌐
│   │   │   ├── web.php 🖥️
│   │   ├── Tests/ 🧪
│   │   │   ├── Feature/ 🔍
│   │   │   │   ├── UserTest.php 👤✅
│   │   │   │   ├── RoleTest.php 🎭✅
│   │   │   │   ├── PermissionTest.php 🔑✅
│   │   │   ├── Unit/ 🏗️
│   │   │       ├── UserServiceTest.php 👤⚙️✅
│   │   │       ├── RoleServiceTest.php 🎭⚙️✅
│   │   │       ├── PermissionServiceTest.php 🔑⚙️✅
│   │   ├── Views/ 👀
│   │   │   ├── livewire/ ⚡
│   │   │       ├── user-form.blade.php 👤📝
│   │   │       ├── role-form.blade.php 🎭📝
│   │   │       ├── permission-form.blade.php 🔑📝
│   │   ├── User.php 👤 (Facade for service access)
│   │   ├── helpers.php 🛠️ (Helper functions)
```
---

## Features

- **RBAC (Role-Based Access Control)** ✅
- **API Support with Sanctum Authentication** 🔑
- **Middleware for Permission Handling** 🚦
- **Livewire Forms for User Management** ⚡
- **Repository Pattern for Data Access** 🏛️
- **Eloquent Models for User, Role, and Permission** 📦
- **User Authorization Policies** 🔒
- **Pest Tests for API & Feature Testing** 🧪
- **Blade UI Components for User Forms** 🎨
- **Automatic Seeder Execution** 🌱

## 📊 RBAC Database Tables 🗃️

| Table Name        | users                     |
| ----------------- |---------------------------|
| `users`           | Stores user details       |
| `roles`           | Stores role names         |
| `permissions`     | Stores permission names   |
| `role_user`       | Maps users to roles       |
| `permission_role` | Maps roles to permissions |


Here is the **Users Table Structure** for the User module, following RBAC principles and enterprise-level security.

---

### **🗄️ Users Table Schema**

| Column Name     | Data Type        | Constraints                                      | Description                           |
|----------------|----------------|--------------------------------------------------|---------------------------------------|
| `id`           | `bigIncrements` | `Primary Key, Auto-Increment`                   | Unique identifier for the user.      |
| `name`         | `string(255)`   | `Not Null`                                      | Full name of the user.               |
| `email`        | `string(255)`   | `Not Null, Unique`                              | Email address of the user.           |
| `password`     | `string(255)`   | `Not Null`                                      | Hashed password for authentication.  |
| `status`       | `enum`          | `Active, Inactive, Suspended, Banned`          | User account status.                 |
| `email_verified_at` | `timestamp` | `Nullable`                                      | Timestamp of email verification.     |
| `remember_token` | `string(100)` | `Nullable`                                      | Token for "Remember Me" sessions.    |
| `created_at`   | `timestamp`     | `Auto`                                          | User creation timestamp.             |
| `updated_at`   | `timestamp`     | `Auto`                                          | Last update timestamp.               |

---

### ** Status**
- `status` → **Controlled by** predefined ENUM values (Manages account state).

---

Here's the complete **Role-Based Access Control (RBAC) Schema** with detailed explanations for **Roles, Permissions, and Pivot Tables** (`role_user`, `permission_role`).

---

## **🛡️ Roles Table**
| Column Name | Data Type     | Constraints                     | Description                         |
|------------|-------------|---------------------------------|-------------------------------------|
| `id`       | `bigIncrements` | `Primary Key, Auto-Increment`  | Unique identifier for each role.   |
| `name`     | `string(255)`   | `Unique, Not Null`            | Name of the role (e.g., Admin, Editor). |
| `slug`     | `string(255)`   | `Unique, Not Null`            | URL-friendly identifier (e.g., `admin`, `editor`). |
| `description` | `text`      | `Nullable`                    | Brief description of the role.     |
| `created_at` | `timestamp`  | `Auto`                         | Timestamp when the role was created. |
| `updated_at` | `timestamp`  | `Auto`                         | Last update timestamp. |

**🔹 Features:**
✔ Ensures roles have **unique** names & slugs.  
✔ Supports role descriptions for better **clarity** in admin panels.

---

## **🔑 Permissions Table**
| Column Name | Data Type     | Constraints                     | Description                          |
|------------|-------------|---------------------------------|--------------------------------------|
| `id`       | `bigIncrements` | `Primary Key, Auto-Increment`  | Unique identifier for the permission. |
| `name`     | `string(255)`   | `Unique, Not Null`            | Name of the permission (e.g., `Edit Post`). |
| `slug`     | `string(255)`   | `Unique, Not Null`            | URL-friendly identifier (`edit-post`). |
| `description` | `text`      | `Nullable`                    | Brief description of what the permission allows. |
| `created_at` | `timestamp`  | `Auto`                         | Timestamp when permission was created. |
| `updated_at` | `timestamp`  | `Auto`                         | Last update timestamp. |

**🔹 Features:**
✔ **Unique permissions** prevent duplicates.  
✔ **Slug-based access** allows easy policy implementation.  
✔ **Descriptions** help in managing permission clarity.

---

## **🔄 Role-User Pivot Table (role_user)**
| Column Name  | Data Type     | Constraints                                      | Description                          |
|-------------|-------------|--------------------------------------------------|--------------------------------------|
| `user_id`   | `bigInteger` | `Foreign Key -> users(id), Not Null, Cascade Delete` | Links a user to a role.              |
| `role_id`   | `bigInteger` | `Foreign Key -> roles(id), Not Null, Cascade Delete` | Links a role to a user.              |
| `created_at` | `timestamp`  | `Auto`                                          | Timestamp when the role was assigned. |

**🔹 Features:**
✔ **Many-to-Many Relationship** between users & roles.  
✔ **Cascade delete ensures** no orphaned data.  
✔ **Users can have multiple roles** dynamically.

---

## **🔄 Permission-Role Pivot Table (permission_role)**
| Column Name  | Data Type     | Constraints                                      | Description                          |
|-------------|-------------|--------------------------------------------------|--------------------------------------|
| `role_id`   | `bigInteger` | `Foreign Key -> roles(id), Not Null, Cascade Delete` | Links a role to a permission.       |
| `permission_id` | `bigInteger` | `Foreign Key -> permissions(id), Not Null, Cascade Delete` | Links a permission to a role.       |
| `created_at` | `timestamp`  | `Auto`                                          | Timestamp when permission was assigned. |

**🔹 Features:**
✔ **Assigns permissions to roles** dynamically.  
✔ **Allows multiple permissions per role** for flexible RBAC.  
✔ **Cascade delete ensures** permissions don’t stay orphaned.

---

# **🚀 Summary**
✔ **RBAC is fully scalable** with user-role and role-permission relationships.  
✔ **Optimized for high performance** using indexed foreign keys.  
✔ **Prepares for future enhancements** (team-based roles, hierarchical roles).

Here’s the **Laravel migration schema** for the **Users, Roles, Permissions, and their relationships**, including **indexing for performance**.

---

### **📜 Laravel Migrations for Users & RBAC Schema**

```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAndRbacTables extends Migration
{
    public function up()
    {
        // 🔹 Users Table
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // User full name
            $table->string('email')->unique(); // Unique email with index
            $table->string('password'); // Encrypted password
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->rememberToken(); // Token for "Remember Me" sessions
            $table->timestamps(); // Created at & Updated at timestamps

            // Indexing for faster lookups
            $table->index(['email']);
        });

        // 🔹 Roles Table
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name')->unique(); // Unique role name
            $table->string('slug')->unique(); // Unique role identifier
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created at & Updated at timestamps

            // Indexing for better performance
            $table->index(['slug']);
        });

        // 🔹 Permissions Table
        Schema::create('permissions', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name')->unique(); // Unique permission name
            $table->string('slug')->unique(); // Unique permission identifier
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created at & Updated at timestamps

            // Indexing for fast lookups
            $table->index(['slug']);
        });

        // 🔹 Role-User Pivot Table (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); // Foreign key to roles
            $table->timestamps(); // Timestamp for tracking assignments

            // Composite primary key for optimization
            $table->primary(['user_id', 'role_id']);

            // Indexing for faster queries
            $table->index(['user_id', 'role_id']);
        });

        // 🔹 Permission-Role Pivot Table (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); // Foreign key to roles
            $table->foreignId('permission_id')->constrained('permissions')->onDelete('cascade'); // Foreign key to permissions
            $table->timestamps(); // Timestamp for tracking assignments

            // Composite primary key for optimization
            $table->primary(['role_id', 'permission_id']);

            // Indexing for faster queries
            $table->index(['role_id', 'permission_id']);
        });
    }

    public function down()
    {
        // Drop tables in reverse order to avoid foreign key constraint issues
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
    }
}
```

---

### **🚀 Key Enhancements in this Schema:**
✔ **Fully structured RBAC system** with relationships.  
✔ **Foreign keys with `CASCADE DELETE`** to maintain data integrity.  
✔ **Composite primary keys** in pivot tables for performance.  
✔ **Indexes on `email`, `slug`, and pivot tables** for **faster queries**.  
✔ **Timestamps for tracking user, role, and permission changes.**
