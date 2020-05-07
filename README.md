# Web-Dev-Final
Final project for Web Development 1

4/26
Project ideas:
-Study tool web application - inspired by quizlet
  drag and drop matching
  preload study questions, or should users input study questions?
  show definition, user must type term
-Game - 
  could be inspired by Object Oriented final project - go fish card game
  could be a different kind of card game, but card game relied on Java objects as the cards
  would have to have many different levels of functionality to fully show class material
  maybe a virtual escape room, user would have to do certain actions to "escape" - inspired by that idiot test app
-Blog / Social media site
  easy to add many different functionalities and pages
  could have a game built in, like facebook games

4/28
Began work on project: chose to do the "escape room"-inspired game
  Will have levels where user must perform certain functions in order to move on to the next page
Created login functions and checks
Created a homepage and basic structure for level 1 page

4/29
Began and finished work on Level 1: rainbow drag-and-drop
  Created colored draggable boxes using JQuery UI
  Created gray droppable boxes using JQuery UI
  When colored box is dropped on gray box, JQuery checks if colored in in correct position
Once all colored boxes are in correct position, button for Level 2 pops up

5/4
Began and finished work on Level 2: riddles game
  Created form with riddles and boxes for answers
  Form is checked on front end to make sure user cannot submit with blank form
  Form is checked on back end with PHP to see if user input/answers is correct
When form is submitted with correct inputs/answers, page moves to Level 3 page

5/7
Fixed bug in logout function
Movement between level now uses a single PHP file that controls which level is "next"
  Level 1 accesses this PHP file through an AJAX POST request
  Level 2 accesses this PHP file through a SESSION variable
"Continue game" button functionality
  As levels are completed, a cookie is set to indicate the last completed level
  When continue game is clicked (on homepage), it gets the cookie and sends user to the correct level
To do:
Multiple photos on a page
Youtube/video embedded in page
Public content (about page)
