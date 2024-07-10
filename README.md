# Web-week-2-tast-2
week 2 smart methods internship - web decapline 

# Last Command Viewer

This project provides a web interface to view the last command sent to a robot. It displays the last command stored in a MySQL database and allows the user to refresh the view to get the latest command.

## Project Overview

The project consists of an HTML page that displays the last command sent to a robot. It retrieves this information from a MySQL database using a PHP script. Users can refresh the page to get the latest command.

## Setup Instructions

1.	As followed in ()

2.	Configure the script:
-	Html
-	php

3.	Run a local server:
    - Use a local server environment like XAMPP
    - Place the project files in the server's root directory.

5. Open the HTML file in a browser
    - Navigate to `http://localhost/last-command-viewer/index.html`.

## Code Explanation

### HTML
<img width="458" alt="html 3" src="https://github.com/EngJana/Web-week-2-tast-2/assets/173661625/e0eba2ee-f2a9-467d-b360-3a63172bc7ee">
<img width="584" alt="html 4" src="https://github.com/EngJana/Web-week-2-tast-2/assets/173661625/3da861ba-a39d-4ad4-9c99-5fc529c600e4">

#### HTML Structure
  - The HTML file sets up the basic structure of the webpage, including the `head` section for metadata and `body` for content.
  - It includes a button to display the last command and another button to refresh the command.

### PHP
<img width="696" alt="php" src="https://github.com/EngJana/Web-week-2-tast-2/assets/173661625/1100a158-8daa-4b5c-b3b6-1b717c3b92ae">

#### PHP Script
  - `get_last_command.php` handles the incoming request, retrieves the last command from the `robot_control` database table, and returns it in JSON format.
  - Returns a JSON response indicating success or failure.
    
<img width="929" alt="last command" src="https://github.com/EngJana/Web-week-2-tast-2/assets/173661625/a8a25805-8043-4e4f-a6f9-c3843fd3a8af">
<img width="930" alt="sql data" src="https://github.com/EngJana/Web-week-2-tast-2/assets/173661625/ac5985cd-2207-47b9-821c-2b0f260d854a">


