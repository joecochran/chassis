# Chassis

## Requirements
- uses gulp.js for sass compilation, image optimization, and js
  concatenation/uglifying [Gulp.js](http://gulpjs.com/)
- Node is required to get Gulp up and running.

## Installation
1. If you have node.js installed already, skip to step 2. Otherwise, I recommend you install [Homebrew](http://brew.sh). Once homebrew is installed, run
   > brew install node

2. Gulp needs to be installed gulp globally. Note: if it complains about
   permissions, run it with sudo.
   > npm install -g gulp

3. In the project root type npm install. This should install all the necessary
components.

4. run composer install to get all the php side set up

5. run "gulp" to start watching!

6. you can use artisan to serve this up on localhost and get to work with
   > php artisan serve
   otherwise, continue to step 7 to get a vagrant vm going.

7. OPTIONAL - A Vagrantfile has been provided with a provision script. After
   [Vagrant](http://vagrantup.com) and [Virtualbox](http://virtualbox.org) have
   been installed, run
   > vagrant up
   
   This will serve the site up on http://192.168.5.5

   For simplicity I am running this on a private network, that was, if I want
   to visit http://sitename.dev instead, all I have to do is add an entry to
   /etc/hosts, like 192.168.5.5 sitename.dev Here's a one liner to accomplish
   that:
   > echo "192.138.5.5 sitename.dev" | sudo tee -a /etc/hosts

   Obviously change sitename.dev to whatever you want to use.


## Roadmap
- All emails for resets, etc need to use [Ink](http://zurb.com/ink)
- User management area. Add, remove, update users.
- Settings management area. Here we set sitewide variables (facebook url, etc)
