# CF example app: a hello world web app

Log in and setup.

```bash
export no_proxy=192.168.50.4,xip.io
cf api --skip-ssl-validation https://api.10.244.0.34.xip.io
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
    hello   started           1/1         256M     1G     hello.10.244.0.34.xip.io

Use the app.

```bash
curl hello.10.244.0.34.xip.io
```

Undeploy

```bash
cf delete hello
```
