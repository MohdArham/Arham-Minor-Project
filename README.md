# Arham-Minor-Project
# Project - Student HelpDesk Management System



## Table of contents

- Introduction
- Problem Statement
- Objective
- Requirments
- Installation
- Maintainers

## Introduction

A web-based student helpdesk system is an online platform that enables students to request academic, technical, and administrative support from their educational institution.

The system is accessible from anywhere with an internet connection, making it easier for students to receive timely assistance and improve their academic experience.

## Problem Statement
The problem is to create a web-based system to facilitate student helpdesk support for a university or college. The system should be able to receive requests from students and route them to appropriate support staff. The system should be able to track the status of each request and provide updates to the student who submitted it.



## Objective
The Help Desk Management System is a set of programs which run as a software providing assistance to all the complaints, queries and services to the customers within a set of organization. It is a web based software which has made the working procedure of organization much easy.
This software will fulfill customer’s need by providing them technical support for their relevant issues as well as time period considered for solving the problems will be much shorter. All the queries and issues that will be posted in portal will be saved into the database for future reference. 
The software is an intranet based software which can be used within the organization. It is basically a customer care management system. This software is very efficient in future time because it is an E-help desk system which tries to solve the problems of all the customer via internet medium and digital medium and thus reducing even the working time for the users too, to solve their problems and queries. 


## Requirements

This module requires the following modules:

- [Views](https://www.drupal.org/project/views)
- [Panels](https://www.drupal.org/project/panels)
This module requires no modules outside of Drupal core.
Recommended modules
The optional recommended modules section lists modules that are not required, but that may enhance the usefulness or user experience of your project. Make sure to describe the benefits of enabling these modules.


## Installation
To run the website locally, follow these steps:

1. Clone the repository to your local machine
2. Set up a local server environment using XAMPP software
3. Import the SQL database provided in the database folder
4. Update the database connection settings in the all files containing `.php` file
5. Launch the website by opening the `index.html` file in your web browser

## Configuration

1. Enable the module at Administration > Extend.
1. When creating a new field on a content type or custom entity type, choose
   "Double Field" from the drop-down menu.
1. On the Field Settings form for the Double Field, define the two subfields
   as you would with any other field.
1. Optionally, on the "Edit" form for the Double Field, you may choose
   options for whether or not the subfields are "required".

The module has no menu or modifiable settings. There is no configuration. When
enabled, the module will prevent the links from appearing. To get the links
back, disable the module and clear caches.
Troubleshooting & FAQ
The optional Troubleshooting & FAQ sections address questions that are asked frequently in the issue queue. Outline common problems that people encounter along with solutions.

External links are acceptable if the steps are complex. However, maintainers should provide a summary since external links can become inactive.
## Tools Used
## Methods
## Result Analysis
Overall, the Student Helpdesk project uses a combination of HTML, CSS, JavaScript, and PHP to create a user-friendly interface that allows students to request help and support from their educational institution. The project features support request handling, a messaging system, and analytics and reports to help staff members provide effective support and improve their performance.
## Refernces
## Software Requirements
## Technology Used
+ HTML-front-end development
HTML stands for Hypertext Markup Language, which is used for creating the structure and content of web pages. In the Student Helpdesk project, HTML is used to define the layout and structure of the web pages that make up the application. HTML tags are used to create elements such as forms, buttons, text fields, and other user interface components.
+ CSS- Front-end development
CSS stands for Cascading Style Sheets and is used to add style and formatting to web pages. In the Student Helpdesk project, CSS is used to define the visual appearance of the web pages, including the colors, fonts, and layout. CSS stylesheets are linked to the HTML pages to apply the desired visual design.

+ JavaScript client-side scripting
JavaScript is a programming language used for adding interactive features and behavior to web pages. In the Student Helpdesk project, JavaScript is used to validate form inputs, perform client-side data manipulation, and handle events such as button clicks and form submissions.
+ PHP server-side scripting
 PHP stands for Hypertext Preprocessor, and it is a server-side scripting language used for building dynamic web applications. In the Student Helpdesk project, PHP is used for handling server-side requests, processing form data, connecting to databases, and generating dynamic content.
+ MySQL database management
MySQL is a popular open-source database management system used for storing and managing data. In the Student Helpdesk project, MySQL is used to store user data, discussion forum posts, and other information related to the application. The database is designed using SQL, and PHP scripts are used to interact with the database and retrieve or modify data as needed.

Bootstrap front-end framework
Bootstrap is a popular front-end framework used for building responsive and mobile-first web applications. In the Student Helpdesk project, Bootstrap is used to provide a consistent and modern visual design across all web pages. Bootstrap components such as grids, forms, and navigation bars are used to create a responsive and user-friendly interface.

Web server (e.g., Apache or Nginx)
A web server is software that runs on a computer and responds to incoming HTTP requests from web browsers. In the Student Helpdesk project, a web server such as Apache or Nginx is required to serve the web pages and handle requests from users.

Code editor (e.g., VS Code, Sublime Text)
A code editor is a software tool used for writing, editing, and debugging code. In the Student Helpdesk project, a code editor such as VS Code or Sublime Text is recommended for editing HTML, CSS, JavaScript, and PHP files.

Git version control system
Git is a version control system used for tracking changes to code and collaborating with other developers. In the Student Helpdesk project, Git can be used to track changes to the code, share code with other developers, and roll back changes if necessary.


## Languages
HTML: 

CSS: 
JavaScript: 

PHP:
## Hardware Requirments
## Recommended modules
## Troubleshooting

If the menu does not display, check the following:

- Are the "Access administration menu" and "Use the administration pages and
  help" permissions enabled for the appropriate roles?
- Does html.tpl.php of your theme output the `$page_bottom` variable?


## FAQ

**Q: I want to prevent robots from indexing my custom error pages by
setting the robots meta tag in the HTML head to "noindex".**

**A:** There is no need to. **Customerror** returns the correct HTTP
status codes (403 and 404). This will prevent robots from indexing the
error pages.

**Q: I want to customize the custom error template output.**

**A:** In your theme template folder for your site, copy the template
provided by the **Customerror** module
(i.e. `templates/customerror.html.twig`) and then make your
modifications there.

**Q: I want to have a different template for my 404 and 403 pages.**

**A:** Copy `customerror.html.twig` to
`customerror--404.html.twig` and `customerror--403.html.twig`. You
do not need a `customerror.html.twig` for this to work.
Maintainers
The optional maintainer section lists current project maintainers. The section can also list historical maintainers.

This section replaces any legacy, standalone MAINTAINERS.md file.
# Features
+ Course information: students can access information on course schedules, syllabi, assignments, and more.
+ Tutoring services: students can schedule appointments with tutors and access online resources to help them succeed in their courses.
+ Academic resources: students can find information on academic policies, procedures, and resources to support their academic success.
+ Contact form: students can reach out to the help desk team for support and assistance.
# License
This project is licensed under the MIT License.

## Maintainers

- Mohd Arham - [sun](https://www.drupal.org/u/sun)



Index: This is the main landing page of the website, where students can learn about the different services offered by the help desk. It includes a brief introduction of the help desk and a list of the different services provided.

Login panel: This is a secure login panel where registered students can log in to access their account. The login panel is protected with a strong password policy and secure authentication.

FAQs: This section includes a list of frequently asked questions related to different services provided by the help desk. This is a helpful resource for students who need quick answers to common queries.

Discussion forum: This section provides a platform for students to ask questions, seek advice and share knowledge with other students. It includes a discussion board where students can create threads and participate in discussions.

Overall, the student help desk website is designed to provide students with the necessary resources and support they need to succeed academically.
