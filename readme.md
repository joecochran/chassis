# Chassis

## Requirements
- uses gulp.js for sass compilation, image optimization, and js
  concatenation/uglifying [Gulp.js](http://gulpjs.com/)
- Node is required to get Gulp up and running.

## Installation
1. If you have node.js installed already, skip to step 2. Otherwise, I recommend you install [Homebrew](http://brew.sh). Once homebrew is installed, run:
    ```
    brew install node
    ```

2. Gulp needs to be installed globally. Note: if it complains about permissions, run it with sudo. 
    ``` 
    npm install -g gulp
    ```

3. In the project root type `npm install`. This should install all the necessary
components.

4. run `composer install` to get all the php side set up

5. run `gulp` to start watching!

6. you can use artisan to serve this up on localhost and get to work with
   ```
   php artisan serve
   ```
   otherwise, continue to step 7 to get a vagrant vm going.

7. OPTIONAL - A Vagrantfile has been provided with a provision script. After
   [Vagrant](http://vagrantup.com) and [Virtualbox](http://virtualbox.org) have
   been installed, run:
   ```
   vagrant up
   ```
   (if this throws errors, try updating [Virtualbox](http://virtualbox.org).)
   This will serve the site up on http://192.168.5.5

   For simplicity I am running this on a private network, that was, if I want
   to visit http://sitename.dev instead, all I have to do is add an entry to
   /etc/hosts, like `192.168.5.5 sitename.dev` Here's a one liner to accomplish
   that:
   ```
   echo "192.168.5.5 sitename.dev" | sudo tee -a /etc/hosts
   ```
   Obviously change sitename.dev to whatever you want to use.

## Customizations

### app/helpers.php
This is a growing list of unsorted little functions that are useful. At some point if this grows beyond just a few helpful functions I will probably namespace this to Harlo\helpers and move it out to a Package. Right now its just a handful of functions like `get_gravatar($email)` which takes an email, md5s it, and returns a url for the gravatar image of that email.

### app/composers.php
View Composers are amazing. They allow us to package data and bind it to views when they are called. So if I want to have a list of pages, I can simply include an array called pages with the view itself, and keep my controller clean.

Laravel does not provide a default place for these, and some people keep them in routes, but I felt it would keep things simple if I moved them all out to their own place. If these grow to be too much to handle, I might also move some of it out to a namespace and use this file as a router to the namespace, (something like `View::composer('layouts.inc.cms-header', 'Ramone\Composers\CMSHeaderComposer.php');`

### Chassis namespace.
in composer.json I am PSR-4 loading app/Chassis, which will contain all classes in the Chassis namespace. At the moment, I am just using this to abstract the user, page, and setting creation tasks from my controller. Eventually, the page creator will be a fairly cumbersome thing, so I would like to move it out to a package and create a simple interface for it.
app/Chassis/Page contains Creator.php and Updater.php, which handle the creation and updating of pages. This pattern is repeated in app/Chassis/Setting and app/Chassis/User. Eventually, I would like to create a generic creation and updating class, as well as a generic set of success and fail methods to call in order to reduce redundancy.

## Roadmap
- Move helpers out to namespace
- All emails for resets, etc need to use [Ink](http://zurb.com/ink)
- Need to namespace all the things.
- Make this more SOLID.
- Blog:
  - Authors
  - comments
  - Tags within Categories and multiple tags
  - Drafts/Published status
  - Soft Deletes

### License
Copyright (c) 2014, Joe Cochran
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
