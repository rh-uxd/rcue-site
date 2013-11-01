WP-BOOTSTRAP
===================

Bootstrap (http://twitter.github.io/bootstrap) in Wordpress theme form. Using Eddie Machado's Bones for a starting point (https://github.com/eddiemachado/bones). 

FEATURES
________

We’ve built the WP-Bootstrap theme so that it could be used as-is or as a starting point for theme developers. It’s built on top of the brilliant Bones theme framework by Eddie Machado and based on v2.3.1 of Bootstrap.

Star this project on Github to keep up with its progress.

Responsive
__________

We stick as closely as possible to bootstrap so this thing is natually responsive. 

Page Templates
______________

We’ve packaged four different page templates into this theme.

    - Homepage template (seen on the homepage of this site)
    - Standard page with right sidebar (this page)
    - Page with left sidebar
    - Full width page

Theme Options Panel
___________________

Want to change some colors? Want the top nav to scroll with the content? Hide the search box in the top nav? Do it in the options panel.

Shortcodes
__________

We’ve built in some shortcodes so you can easily add UI elements found in Twitter Bootstrap.

Sidebars
________

We’ve built in two different sidebars. One for the homepage and one for the other pages. Add widgets to them.


Development
___________

Development setup requires nodejs. If you do not already have nodejs and npm installed on your system, please see https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager for how to install on your distribution.

After ensuring nodejs and npm are available, install [Bower](http://bower.io/) globally:

    npm install -g bower

Now that bower is available, we can install the required development components:

    bower install

At this point, you should now have a library/components/ folder with all dependencies listed in the bower.json file installed.
