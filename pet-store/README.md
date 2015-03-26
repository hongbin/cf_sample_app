Java Pet Store Sample
=============

This is a Java sample using the Spring framework. This application uses a java
buildpack.


Building the Application
------------------------

To build the application, make sure you have [Maven](http://maven.apache.org/ "Maven") installed.
Then, *cd* into the root directory and execute:

	mvn package

That will create the *jpetstore.war* file in the 'target' directory.

Deploying the Application
-------------------------

To deploy to stackato:

    cf push

Confirm:

    cf apps

You can view the application at the 'urls'.
