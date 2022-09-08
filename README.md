<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## too-portfolio API

### todo

### user module
      - [x] user schema table
          - id
          - firstname
          - lastname
          - email
          - password
          - about_me
      - [x] Methods
          - [x] Login
          - [x] register
          - [x] getProfile
          - [x] updateProfile
      - [x] relations
        - [x] user has many education
        - [x] user has many certification
        - [x] user has many skill
        - [x] user has many social-account
        - [x] user has many project
        - [x] user has many job 
  
### education module
      - [x] education schema table
          - id
          - degree_name
          - institute_name
          - started_at
          - ended_at
          - is_completed
          - user_id
      - [x] relations
        - [x] education has one user
      - [x] Methods
        - [x] index
        - [x] store
        - [x] update
        - [x] delete

### certification module
      - [x] certification schema table
          - id
          - name
          - url
          - is_published
          - start_at
          - ended_at
          - user_id
      - [x] relations
        - [x] certification has one user
      - [x] Methods
        - [x] index
        - [x] store
        - [x] update
        - [x] delete

### skill module
      - [x] skill schema table
          - id
          - name 
          - image_url
          - is_public
          - user_id
      - [x] relations
        - [x] skill has one user
      - [ x Methods
        - [x] index
        - [x] store
        - [x] update
        - [x] delete

### social_account module
      - [x] social_account schema table
          - id
          - url
          - name
          - is_public
          - image_url
          - user_id
      - [x] relations
        - [x] social_account has one user
      - [x] Methods
        - [x] index
        - [x] store
        - [x] update
        - [x] delete

### project module
      - [x] project schema table
          - id
          - name
          - description
          - url
          - image_url
          - is_published
          - is_opensource
          - user_id
      - [x] relations
        - [x] project has one user
      - [x] Methods
        - [x] index
        - [x] store
        - [x] update
        - [x] delete

### job module
      - [x] job schema table
          - id
          - company_name
          - role
          - started_at
          - ended_at
          - is_ended
          - user
      - [x] relations
        - [x] job has one user
      - [x] Methods
        - [x] index
        - [x] store
        - [x] update
        - [x] delete

### contact_me module
      - [x] contact_me schema table
          - id
          - name
          - email
          - subject
          - message
      - [x] Methods
        - [x] store 

      - [x] adding this to .env
          MAIL_MAILER=smtp
          MAIL_HOST=smtp.gmail.com
          MAIL_PORT=587
          MAIL_USERNAME=your_email
          MAIL_PASSWORD=generated_google_application_password
          MAIL_ENCRYPTION=null

### API Documentation

#### Installation package generator docs

You can install the package via composer:

```bash
composer require rakutentech/laravel-request-docs --dev
```


You can publish the config file with:

```bash
php artisan vendor:publish --tag=request-docs-config
```

#### Usage

View in the browser on ``/request-docs/``

Generate a static HTML and open api specification

```php
php artisan lrd:generate
```

Docs HTML is generated inside ``docs/``.

### setting up cors for frontend

 add this key to .env file

    SANCTUM_STATEFUL_DOMAINS=domain.too
    SESSION_DOMAIN=.domain.too