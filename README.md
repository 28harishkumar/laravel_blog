# simple Blog applicatoin in laravel
------------
what is application?
* It is simple blogging app.
* users can login/register
* users can write/update blogs
* users can read blogs
* users can comment on blogs

Demo
------------
Demo is at [Show me demo](http://serene-fjord-57767.herokuapp.com/)

Install
------------
download source code and add .env file to blog directory. Config .env file as in part-1 of tutorials.

Tutorials
------------
Tutorials are on [Flowkl Website](https://www.flowkl.com/tutorial/web-development/simple-blog-application-in-laravel-7/)

Database tables
------------
* users (default + role)
* posts (id, author, title, body, slug, published_on, last_modified, active)
* comments (id, on_post, from_user, body, at_time)

Quick install without Tutorial
------------
If you want to skip the tutorials and get this up and running quickly, follow these instructions:

1.  Clone the repository

  git clone https://github.com/28harishkumar/blog.git [your project name]

2.  Follow the [Setup database instructions](https://www.flowkl.com/tutorial/web-development/simple-blog-application-in-laravel-7/simple-blog-application-in-laravel-5-part-1-setup-database) which includes:

  * Edit the .env.example file to match your database and rename to .env
  * Set up and run the migrations
3. run `composer install` and `npm install`
4. Ensure that the permissions on the storage folder are set correctly. You will get a 500 error otherwise.

5. Ensure that you have set the correct image path for justboil.me to the appropriate folder or just use the default /images and make sure that folder has the correct permissions to upload images (usually owned by the webserver user).

