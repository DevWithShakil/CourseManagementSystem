# Course Management System

A simple Laravel project:

-   Handling request data and storing in session
-   Logging user information
-   Database migrations with foreign keys
-   Blade layout and conditional display

---

## Routes

1. /info

    - Method: GET
    - Example: /info?name=Shakil&email=shakil@example.com
    - Function: Stores name and email in session, logs them, returns JSON:

2. /dashboard

    - Method: GET
    - Function: Shows Welcome, {name} and a table of 3 contacts (hardcoded).
    - Missing email shows N/A.

## Database Tables (PostgreSQL)

| Table       | Fields                    | Notes                                                             |
| ----------- | ------------------------- | ----------------------------------------------------------------- |
| courses     | id, name, description     | Course list                                                       |
| students    | id, name, email           | Students                                                          |
| enrollments | id, student_id, course_id | Links students and courses, foreign keys with `cascadeOnDelete()` |

## Notes

-   Blade layout: layouts/app.blade.php

-   Dashboard template: dashboard.blade.php

-   Session data used for name display

-   Handles missing email in contact list
