# CloudFoundry PHP Example Application: Wordpress

This is an out-of-the-box implementation of Wordpress 4.0.

#### Usage

Log in and setup.

```bash
export no_proxy=192.168.50.4,xip.io
cf api --skip-ssl-validation https://api.10.244.0.34.xip.io
cf auth admin admin
cf target -o me
cf target -s development
```

Create a MySQL service.

```bash
cf marketplace
cf create-service p-mysql 100mb-dev mysqlservice
cf services
```

Deploy the app.

```bash
cf push
```

List deployed apps.

    $ cf apps
    Getting apps in org me / space development as admin...
    OK

    name          requested state   instances   memory   disk   urls
    mywordpress   started           1/1         128M     1G     wordpress-on.10.244.0.34.xip.io

Scale the app.

```bash
cf scale mywordpress -i 2
cf apps
cf scale mywordpress -m 256M
cf apps
```

Undeploy

```bash
cf delete mywordpress
```

Cleanup

```bash
cf delete-service mysqlservice
cf delete-security-group p-mysql
```
