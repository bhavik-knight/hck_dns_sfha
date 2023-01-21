# [Halifax Canoe and Kayak](http://35.182.245.62/)

## A Project for Digital Nova Scotia : Skills for Hire
## Web-dev : Team Blue

## Developed by: Bhavik Bhagat (email: bhavik.bhagat.jobs@gmail.com)

---

## Phase 1
index / home page
### challenges:
- style/css alignment-justify from scratch
- jquery to combined with css for dark-mode
- footer is the trickiest to keep it at the bottom
---

## Phase 2
book, thank-you page

- made the paddle-logo a home button for the website
### challenges:
- lampstack was very difficult to set up for Ubuntu 20.04 - WSL, switched back to Ubuntu 18.04 - WSL
- php
- redirection to new page after validation
- to make dark-mode persist on all pages
- to partially fill the form from the thank-you page for another trip
- couldn't figure out the hosting part

---

## Phase 3
admin-add, admin-confirm, all-adventure page, DB to add adventures<br>
hosting is done on Heroku: ~~https://dns-hck-bhavik.herokuapp.com/~~ (heroku removed free tier support) <br>
hosting is done on AWS: http://35.182.245.62/

- made db via phpmyadmin UI interface
### challenges:
- where to put db, table information
- connect to db via php was relatively easy
- after connection if something doesn't work UI breaks without showing errors on screen
- that above part is very difficult to debug if something is wrong when you cannot see errors
- Object oriented vs Procedural way for CRUD: I chose Object oriented
- tried PDO - to make life easier when we need to deal with different kind of db - didn't work due to some errors
- ~~still couldn't figure out hosting part~~
- still couldn't make dark-mode persist (solution could be cookies or session)

---

## Future Scope
- Make form validation button disappear, and make submit button to do both parts (if valid -> submit, if not -> reload form)
- Make dark-mode persist (learn cookies, session use, this may help in the 1st problem as well)
- Create a booking table -- stores all the bookings
- Create a Menu page: this page will have register/login form for the users
- Create another table for users -- users can book multiple adventures
- Relational db devalopment - connect tables on keys, cardinality (one to one, one to many, many to many, etc.)
- ~~Host on some platform, create a domain name or something~~
- Right now react is not used, the pages are modularized already, TODO react-js
- Using react to create the components - will make UI improved in performance

---

## Out of scope
- Use Django to create the similar project: react for frontend, Django for backend, Postgre for db, host, docker, aws, testing
