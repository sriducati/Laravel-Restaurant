# Laravel Restaurant

Admin Panel:
- Able to manage restaurants with fields such as name,category, lat/lng
	- Create Restaurant
	- Update Restaurant
	- Delete Restaurant

![Alt text](/public/screenshot_admin.JPG?raw=true "Enter location to get Latitude and Longitude")	
	
Visitor panel:
- Able to display restaurants location in google map(Plot markers on map)
- Able to detect current location and calculate distance from current location to restaurant, with turn by turn driving details using google api
- Responsive

![Alt text](/public/screenshot.JPG?raw=true "Find distance using from current location to restaurant using Laravel")


Additional Features Added:

- Register and login Admin.
- Find Latitude,longitude coordinates for any given place entered.
- Error Handling.
- Display Notification.

# Setup

- composer update
- rename .env.example to .env
- php artisan key:generate
- php artisan serve

Note: please check test_restaurant.sql for current DB dump.

any issues? mail me at srihost9@gmail.com or sriducati@gmail.com