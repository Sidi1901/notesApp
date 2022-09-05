# notesApp
This application is made for writing and saving notes for both individuals and teams. 

User can write, save edit and delete notes. User can login and logout with with his/her username. Users can share one ID to write notes together at the same time.

### Technology

- *html* is used for markup.
- *css* and *bootstap* is used for styling.
- *php* is used as a backend language for interactions client and server.
- *MySql* is as database management system.
- *heroku* is used for hosting. 


#### home page
![image](https://user-images.githubusercontent.com/62303912/180290610-4f9e3a14-8b32-4a1d-a7f1-9927346f90bd.png)

#### dasboard 
![image](https://user-images.githubusercontent.com/62303912/180292114-2fd54492-1589-478e-95ae-341a202a9410.png)

#### sign in 
![image](https://user-images.githubusercontent.com/62303912/180292588-29e57ab0-bd40-43bf-8519-a8c7a29577ed.png)

#### sign up 
![image](https://user-images.githubusercontent.com/62303912/180292855-289f6a83-8657-4647-9468-10b4c0382138.png)


check out the link 
https://notesmine.herokuapp.com/

#### Summary

Home is seen as a first appearing page. User can select team if he/she wants to work in a team or personal for using application personally. If the user is not logged in, he/she is direct to login page. This redirection occurs with the help of php SESSSION varaiables. If user doesn't have any accout he,she needs to first submit sign in form. The user details is stored into users database. after successful sign up and login, user can now access dasboard. If user chooes team option. He/she now can work with others by seeing the activity. User name is displayed in one column who edts a particular row note last time. The session runs until user click logout button. It destroys all the login information and asks user to login again. 

..

# Entity Relationship digram of project

![image](https://user-images.githubusercontent.com/62303912/187466328-718cb691-e126-48cc-b957-cfbfaa1da100.png)


https://lucid.app/lucidchart/de2ba365-eb14-4b9c-8118-395fbddbf639/edit?viewport_loc=-192%2C-102%2C1859%2C869%2C0_0&invitationId=inv_09d4499b-92f0-4204-8072-050f382622ff#

