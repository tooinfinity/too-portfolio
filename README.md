<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## too-portfolio API

### todo

#### [ ] user module
      - [ ] user schema table
          - id
          - firstname
          - lastname
          - email
          - password
          - about_me
      - [ ] relations
        - [ ] user has many education
        - [ ] user has many certification
        - [ ] user has many skill
        - [ ] user has many social-account
        - [ ] user has many project
        - [ ] user has many job 
#### [ ] education module
      - [ ] education schema table
          - id
          - degree_name
          - institute_name
          - started_at
          - ended_at
          - is_completed
          - user_id
      - [ ] relations
        - [ ] education has one user
      - [ ] crud
#### [ ] certification module
      - [ ] certification schema table
          - id
          - name
          - url
          - is_published
          - start_at
          - ended_at
          - user_id
      - [ ] relations
        - [ ] certification has one user
      - [ ] crud
#### [ ] skill module
      - [ ] skill schema table
          - id
          - name 
          - image_url
          - is_public
          - user_id
      - [ ] relations
        - [ ] skill has one user
      - [ ] crud
#### [ ] social_account module
      - [ ] social_account schema table
          - id
          - url
          - name
          - is_public
          - image_url
          - user_id
      - [ ] relations
        - [ ] social_account has one user
      - [ ] crud
#### [ ] project module
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
      - [ ] crud
#### [ ] job module
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
      - [ ] crud
#### [ ] contact_me module
      - [ ] contact_me schema table
