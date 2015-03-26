# CF example app: a hello world web app

Log in and setup.

```bash
cf api http://api.136.159.3.202.xip.io
cf auth admin admin
cf target -o me
cf target -s development
```

Deploy the app.

```bash
cf push hello
```

List deployed apps.

    $ cf apps
    Getting apps in org me / space development as admin...
    OK

    name    requested state   instances   memory   disk   urls
    hello   started           1/1         256M     1G     hello.136.159.3.202.xip.io

Use the app.

```bash
curl hello.136.159.3.202.xip.io
```

Undeploy

```bash
cf delete hello
```
