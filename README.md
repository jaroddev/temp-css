# Temp-css
Front-end of the unison project, twig, css, html and javascript.

## Unison
This repository contains the front-end part of a bigger project named Unison

## How to install the dependencies
 - launch your terminal
 - type the following command "composer install"

## How to create a test
 - go into the test folder
 - create a $page_name variable which must contains a path "<folder_name><file_name>.html.twig"

## How to add data to an existing test
 - create an $options php array if it does not exist
 - put your dummy data set in it

## html-draft
If you wish to first code in a safe way html then create a html-draft folder,
this folder is ignored by git.

## css folder structure
The css is separated in few folders:
 - layouts, it contains all css script all the pages should be using.
 - style, only one page css script should find his way here.
 - components, often used components style like button or cards should be moved here.