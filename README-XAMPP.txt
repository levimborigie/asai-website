ASAI website XAMPP setup

1. Copy the full asai-website folder into your XAMPP htdocs folder.
   Example:
   C:\xampp\htdocs\asai-website

2. Start Apache in the XAMPP Control Panel.

3. Open the website in your browser:
   http://localhost/asai-website/

4. Submitted form data will be saved as CSV files in:
   C:\xampp\htdocs\asai-website\data

Files created by the backend:
- registrations.csv
- events.csv
- contacts.csv

Keep the api and data folders inside the same asai-website folder. The website forms submit to the PHP files in api.

Important:
- Open the site through http://localhost/asai-website/ so PHP can run.
- Opening index.html directly from the file system will show the page, but form submissions will not save.
- If saving fails, right-click the data folder, check permissions, and make sure Apache can write to it.
