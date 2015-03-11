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

Use the app.

```bash
curl hello.10.244.0.34.xip.io
```

Undeploy

```bash
cf delete hello
```
