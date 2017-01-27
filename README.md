Sportlery Project v.5 (Facebook Showcase Release)
===============================
    
Minimal Viable Product; v.7
- User Minimal
    - Login
    - Register
    - Account Dashboard
    - Sportbuddies
    - User Chat
    - Event Creation
    - First Payment method (Ideal)
- Admin Minimal
    - Newsletter
    - Data Checking
    - Event Creation
    
Contest Release; v.6
    Koppeling met Contest systeem
    geen grote overhauls, geen db usage
- Mayor Changes
    - Design
    - Koppeling Contest Systeem

First Release; v.5
    Showcase website voor Sportlery.nl
    Geen Register en Login Alleen display
 


    

-------------------
Used Listing (what we use and added ourselves)
```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
        site/            contains the primary website, first layer used in v.5
            index.php
            sportclub.php
            trainer.php
            overons.php
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
