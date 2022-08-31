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
      - [ ] skill schema table
          - id
          - name 
          - image_url
          - is_public
          - user_id
      - [ ] relations
        - [ ] skill has one user
      - [ ] Methods
        - [ ] index
        - [ ] store
        - [ ] update
        - [ ] delete

### social_account module
      - [ ] social_account schema table
          - id
          - url
          - name
          - is_public
          - image_url
          - user_id
      - [ ] relations
        - [ ] social_account has one user
      - [ ] Methods
        - [ ] index
        - [ ] store
        - [ ] update
        - [ ] delete

### project module
      - [ ] project schema table
          - id
          - name
          - description
          - is_published
          - image_url
          - is_opensource
          - user_id
      - [ ] relations
        - [ ] project has one user
      - [ ] Methods
        - [ ] index
        - [ ] store
        - [ ] update
        - [ ] delete

### job module
      - [ ] job schema table
          - id
          - company_name
          - started_at
          - ended_at
          - is_ended
          - role
          - user
      - [ ] relations
        - [ ] job has one user
      - [ ] Methods
        - [ ] index
        - [ ] store
        - [ ] update
        - [ ] delete

### contact_me module
      - [ ] contact_me schema table
