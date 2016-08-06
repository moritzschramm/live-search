# live-search
Simple live search with jQuery, Bootstrap, PHP and MySQL.<br>
Enter a character or a word. While you type something in, jQuery sends an HTTP post request in the background. A php script looks for similar entries in your database table (in this case names of cheeses) and returns all matching results (as JSON). After that, all results wil be shown in the dropdown under the input field.<br>If a suggestion is clicked, its content will be copied into the search field. One could also modify this, so that a suggestion is a link to another page or has some other usage.


# Setup
1. Create a MySQL Database 
2. Import "cheeses.sql" from the "sql" folder
3. Change $db_name, $db_host, $db_user and $db_password in "inc/db_connect.php"

# File structure
<strong>inc folder</strong>: all back-end php files (namely database connection and the search process)<br>
<strong>js folder</strong>: contains the javascript file which handles the inputed text and displays the results<br>
<strong>sql folder</strong>: sql file for initialization<br>
<strong>styles folder</strong>: css for the dropdown container and the list items<br>
<strong>index.php</strong>: displays the actual search box
