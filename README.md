BlogApplication
=============


How To Install
===================

1. Clone git repository into a new installation of Symfony 2.
2. Run composer install to install required bundles.
3. Create an admin account by using app/console fos:user:create and login to admin panel.
4. Go to settings and generate settings information.


About This Application
=========================

A Symfony 2 project that includes Blogging CMS, User account creation and Blog post commenting.

Bootstrap example Blog template is used for the front-end blog.  SB Admin 2 is used for the back-end Admin panel.

Posts have a wyziwyg, Bootstrap 3 wyziwyg HTML 5.

This application uses the following doctrine 2 conventions:
oneToMany
manyToOne
manyToMany

This application uses FOS:UserBundle for its Admin Panel and User Panel.  Users can generate an account and add comments to the blog posts.  Admin users can create and edit blogs posts, add tags to the blog posts, view and edit messages and edit user information.
