# Dublin Grill House (WordPress)

A WordPress restaurant website built locally on XAMPP for an academic CMS deployment task.

## Features
- Restaurant theme with custom pages (Home, About, Menu, Book a Table, Contact)
- Booking form/page
- Map section on the Contact page
- Consistent branding (logo, colour palette, typography)

## Tech Stack
- WordPress (local installation)
- XAMPP (Apache + MySQL + PHP)
- Theme: Restaurant WDA / Restaurant Elementor (depending on your active theme)
- Plugins: 
   - Akismet
   - Booking Calendar (WpDevArt) → pasta booking-calendar
   - Business Hours Indicator → pasta business-hours-indicator
   - GTranslate → pasta gtranslate
   - Restaurant Reservations → pasta restaurant-reservations
   - WP Google Maps → pasta wp-google-maps

## Local Setup (XAMPP)
1. Install and start XAMPP (Apache + MySQL).
2. Copy the project folder into: `C:\xampp\htdocs\grill`
3. Create a MySQL database named: `grill`
4. Configure WordPress:
   - Create `wp-config.php` locally (do not commit it to GitHub)
   - Set DB name/user/password/host to match your local MySQL settings
5. Open the website:
   - http://localhost/grill
   - Admin: http://localhost/grill/wp-admin

## Notes
- Database exports (*.sql) and wp-config.php are intentionally not included in this repository to avoid exposing secrets.
- Required plugins should be installed through the WordPress admin dashboard.
