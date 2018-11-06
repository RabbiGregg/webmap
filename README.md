# GIS Developer Recruitment Exercise

#Dataset used: pretoria_attractions.geojson

# Setup on local machine:
 - Download and Install MAMP/XAMP Server - https://www.mamp.info/en/
 - Clone project into the htdocs folder in the MAMP/XAMP directory
 - Start MAMP server.
 - Visit localhost:[REPlACE WITH PORT NUMBER] in your browser.

# DB Setup:
 -Download and Install PostgreSQL - https://www.pgadmin.org/download/
 -Download and Install QGis - https://www.qgis.org/en/site/ 
 -Download and Install PgAdmin - https://www.pgadmin.org/download/

 - Step 1: Launch PostreSQL and click initialize to start database server.
 - Step 2: Launch PgAdmin, right click Servers and create a new Server named PostgreSQL.
 - Step 3: Right click on databases, create a new database named pretoria and select postgres as Owner.
 - Step 4: Click on the newly created database and in the Tools menu item select SQL Query and execute this command to enable postgis inorder for us to store our dataset correctly --> CREATE EXTENSION postgis;

 - Step 5: Launch QGIS
 - Step 6: Right click PostGIS and create a new connection.
 - tep 7: Use following info for Connection Information and Authentication:
           - Name: pretoria
           - Host: localhost
           - Port: 5432
           - Database: pretoria
-------------------------------------------
           Authentication: **SELECT BASIC**
           - Username: postgres 
           - Password: 1234
           **TEST CONECTION PLEASE** 


 - Step 8: In the menu tool bar click on Layer --> Add Vector Layer
 - Step 9: Select File as the Source Type and select the pretoria_attractions.geojson file which can be found in a folder named data in the projects root directory.
 - Step 10: Select Database --> DB Manager in the menu tool bar.
 - Step 11: Select PostGIS --> pretoria --> public and click on import Layer/File.
 - Step 12: Select the pretoria_attractions.geojson file.  Name the table pretoria_attractions and click on the following check boxes under options:

           - Primary key
           - Geometry column
           - Source SRID
           - Target SRID
           - Encoding
           - Create spatial index

#### That's it for the database setup.  In pgAdmin execute this query to see table contents SELECT * FROM pretoria_attractions;

# Webmap User Guide.
 User can filter and select an attraction from the dropdown box.
 User can click on any region of the map to add a new attraction.
 User can edit or delete existing attractions.
 User can view the closest 5 attractions with distance in kilometers

## Libraries used:
Bootstrap 4 - Bootstrap is a front-end component library that handles the UI very well.

Leafletjs - Leafletjs is an open-source JavaScript library for mobile-friendly interactive maps.

Turfjs - Turfjs is a JavaScript library for spatial analysis.

Jquery - jQuery is a fast, small, and feature-rich JavaScript library.

Javascript - Javascript is an object-oriented computer programming language commonly used to create interactive effects within web browsers.

AJAX -AJAX stands for Asynchronous JavaScript And XML. In a nutshell, it is the use of the XMLHttpRequest object to communicate with servers. It can send and receive information in various formats, including JSON, XML, HTML, and text files

PHP - PHP  is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

## Known bugs & limitations:
 - Buffer functionality was removed, it caused application to crash - to be resolved.
 - Listing  of all attractions seems to have a slight bug - to be resolved.
 - Shape files were not loaded.

## Areas of improvement:
  - Adding of shape files and raster files.
