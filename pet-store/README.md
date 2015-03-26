Java Pet Store Sample
=============

This is a Java sample using the Spring framework. This application uses a java
buildpack.


Building the Application (optional)
-----------------------------------

To build the application, make sure you have [Maven](http://maven.apache.org/ "Maven") installed.
Then, *cd* into the root directory and execute:

	mvn package

That will create the *jpetstore.war* file in the 'target' directory.

Login to Cloud Foundry
----------------------

Login to cloud foundry first

    cf api http://api.136.159.3.202.xip.io
    cf auth admin XXX
    cf target -o me
    cf target -s development

Deploying the Application
-------------------------

To deploy to stackato:

    cf push

Confirm:

    cf apps

You can view the application at the 'urls'.
