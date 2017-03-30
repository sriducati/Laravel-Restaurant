# Laravel Restaurant

![Alt text](/public/screenshot.JPG?raw=true "Find distance using from current location to restaurant using Laravel")

Admin Panel:
- Able to manage restaurants with fields such as name,category, lat/lng
	- Create Restaurant
	- Update Restaurant
	- Delete Restaurant

Visitor panel:
- Able to display restaurants location in google map(Plot markers on map)
- Able to detect current location and calculate distance from current location to restaurant, with turn by turn driving details using google api
- Responsive

Additional Features Added:

- Register and login Admin.
- Error Handling.
- Display Notification.

# Setup

- composer update
- rename .env.example to .env
- php artisan key:generate
- php artisan serve

Note: please check test_restaurant.sql for current DB dump.

any issues? mail me at srihost9@gmail.com or sriducati@gmail.com