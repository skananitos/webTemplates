# Leaf4Life
This project is a registration form. We use HTML5, Javascript and PHP techniques to validate each field.


![alt tag](https://github.com/skananitos/webTemplates/blob/master/registration-form/preview.png)


### Concept:

Here is some brief explanation of what are we going to do. The main point is the implementation of a registration form. We cover several field types including standard input field, password field, repeat password field, email field, options list, check field and file upload. 

We tried to keep the design of the web page pleasant, modern and responsive in order to keep users on the page. Specifically, through our implementation:
- we tried to look neat and clean;
- we tried to work seamlessly and without any strange behavior or errors;
- we tried to reduce number of fake submissions.


### Description:

*This project provides a single web page containing:*

- a header
- a footer
- a registration form for some kind of service

*The implementation satisfies the following requirements:*

The form contains the following fields:

- Full name (valid if present)
- Birthdate (valid if present and the date is in the right format)
- Address (valid if present)
- Nationality (valid if present, better if selected from a predefined set)
- Email address (valid if present and formally correct)
- Password and password confirmation (valid if present and if they match)
- Checkbox to accept term and conditions (must be checked)
- Submit button

The form also contains:

- Avatar image
- Graphical hint on how strong the password is
- Password cannot contain 3 consecutive numbers (like “foo123” or “foo789”)
- Check to let only register users that are 18+

In case of one or more validation errors, the user is warned in a nice way

The design of the web page (included the form) is responsive, pleasant and modern

The form is sent to a PHP script to perform the same validations that are in place in the browser

Loading the page the first time presents the user a disclaimer about the usage of cookie 


### Limitations:

- Compliance with low end browsers
- JavaScript disabled: 
	1. Graphical hint on how strong the password: non functional; 
	2. Disclaimer about the usage of cookie: non functional.


### Installation instructions

##### Prerequisites 

*Step 1. (for Windows)* Since PHP is a server-side language, we need to have a server that can execute our PHP code before we can view it in a browser. The easiest and most hassle-free way to get a PHP server running on your Windows computer is to use a package called XAMPP. Here you can download the latest version of [XAMPP](www.apachefriends.org). Once XAMPP is installed, open up Windows Explorer, go to the new folder C:\xampp. There will be a folder in there called htdocs. Files in this folder will be available at your localhost web address. Create a folder named 'leaf4life'.

*Step 2.* You need git to clone the leaf4life repository. Download [git](http://git-scm.com/).

##### Clone leaf4life

*Step 3.* Clone the leaf4life repository using [git](http://git-scm.com/):
```
git clone https://github.com/skananitos/webTemplates/tree/master/registration-form.git
cd registration-form
```
*OR*

If you just want to start a new project without the leaf4life commit history then you can do:

`git clone --depth=1 https://github.com/skananitos/webTemplates/tree/master/registration-form.git <your-project-name>`

The `depth=1` tells git to only pull down one commit worth of historical data.

##### Run leaf4life

*Step 4.* Copy all files of this project and paste them into the new folder C:\xampp\htdocs\leaf4life.

*Step 5.* On you web browser type as URL http://localhost/leaf4life/

That's it! :+1: Enjoy leaf4life! :smiley:
