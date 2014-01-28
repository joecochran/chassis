# CMS

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

6. A Vagrantfile has been provided with a provision script. After
   [Vagrant](http://vagrantup.com) and [Virtualbox](http://virtualbox.org) have
   been installed, run
   > vagrant up
   
   This will serve the site up on http://localhost:8080


## Roadmap
- All emails for resets, etc need to use [Ink](http://zurb.com/ink)
- User management area. Add, remove, update users.
    - Can also send a password reset email directly to a user from here.
- Settings management area. Here we set sitewide variables (facebook url, etc)
- The ominous _blog_ area. Posts, authors, categories, tags, comments, and
  up/down votes on comments. Blog registration/oauth with facebook, twitter,
  g+, github, and a opt in blog digest email list - mailchimp api or something?
- 
