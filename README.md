# Sanat_Gala
**An event management website**
The website starts with the initial page (index.html) and is directed to the (02li.html) for login.
A successful login branches into 2 access modes: 
1. Member mode -
   1.1 That can view the event categories and look into all events of each category,
   1.2 Can view the events that are assigned to them by the Admin.
2. Admin mode -
   2.1 Can view the event categories and events the same way as that for a user in member mode,
   2.2 Can create an event,
   2.3 Can assign members to the created event.

**Front-end technologies:**
1. HTML
2. CSS
Note: Bootstrap templates used as references for css
Preview - 
index.html - starting point of website.
02li.html - Login page.
02li.php - To verify the provided credentials.
03home.php - To explore the event categories.
04events.php - To view each event of the chosen category.
05CreateEvent.php - to create an event(accessed only by admin).
06AddMembers.php - to add members to the event created(accessed only by admin).
07profile.php - To view the events assigned to them by the admin(accessed only by members/non-admin).

**Back-end technologies:**
1. PHP
2. MySQL
Preview -
creds - This table stores the user credentials such as name, field of interest, experience, username and password.
ecategories - This table stores information of event categories such as tech, music, sports in the format of categoryName and its brief description.
events - Contains list of events along with their category, date, venue and its motive.
groups - Each event is assigned to a certain group for organising. The members of the group are tracked in this table.
