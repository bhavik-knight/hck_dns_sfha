# [Halifax Canoe and Kayak](http://35.182.245.62/)

## A Project for Digital Nova Scotia : Skills for Hire
## Web-dev : Team Blue

## Developed by: Bhavik Bhagat (email: bhavik.bhagat.jobs@gmail.com)

---

## Phase 1
index / home page
### challenges:
- Style/css alignment-justify from scratch
- JQuery to combine with CSS for dark-mode
- The footer is the trickiest to keep at the bottom
---

## Phase 2
book, thank-you page

- made the paddle logo a home button for the website
### challenges:
- lampstack was very difficult to set up for Ubuntu 20.04 - WSL, switched back to Ubuntu 18.04 - WSL
- php
- redirection to a new page after validation
- to make dark-mode persist on all pages
- to partially fill the form from the thank-you page for another trip
- couldn't figure out the hosting part

---

## Phase 3
- Admin-add, admin-confirm, all-adventure page, DB to add adventures<br>
- Hosting is done on Heroku: ~~https://dns-hck-bhavik.herokuapp.com/~~ (heroku removed free tier support) <br>
- Hosting is done on AWS: ~~http://35.182.245.62/~~ (Ran out of AWS Free Credits)
- <ade db via phpmyadmin UI interface
---

## Docker
- Containerized the app using Docker
- Restructured webapp to make it suitable for containerization
- The webapp is in a PHP-Apache container
- The database is on the server, which is another container
- The containers are communicating via the `docker-compose.yml` file

### To run this app on your local machine
- download and install [docker-desktop](https://www.docker.com/products/docker-desktop/) <br>
- pull the Docker image using `docker pull b05k19/hck-dns-sfha` from Docker Hub <br>
- create the container using `docker run -d -p 2023:80 b05k19/hck-dns-sfha` from the docker-image<br>
- run the container in the web browser using `localhost:2023`<br>

---
### challenges
- Where to put db, table information
- Connecting to db via PHP was relatively easy
- After connection, if something doesn't work UI breaks without showing errors on screen
- The above part is difficult to debug if something is wrong, as you cannot see errors
- Object-oriented vs Procedural way for CRUD: I chose object-oriented
- tried PDO - to make life easier when we need to deal with different kinds of DB - didn't work due to some errors
- ~~still couldn't figure out the hosting part~~
- ~~still couldn't make dark-mode persist (solution could be cookies or session)~~

---

## Future Scope
- Make the form validation button disappear, and make the submit button do both parts (if valid -> submit, if not -> reload form)
- ~~Make dark-mode persist (learn cookies, session use, this may help in the 1st problem as well)~~
- Create a booking table -- stores all the bookings
- Create a Menu page: this page will have a register/login form for the users
- Create another table for users -- users can book multiple adventures
- Relational DB development - connect tables on keys, cardinality (one to one, one to many, many to many, etc.)
- ~~Host on some platform, create a domain name or something~~
- Right now, React is not used; the pages are modularized already, TODO react-js
- Using React to create the components - will improve UI Performance

---

## Out of scope
- Use Django to create the similar project: ReactJS for frontend, Django for backend, PostgreSQL for db, ~~host~~, ~~docker~~, ~~aws~~, testing
