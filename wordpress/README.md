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

Create security group (if haven't created before). This allows the application to connect to MySQL.

```bash
cf create-security-group p-mysql rule.json
cf bind-running-security-group p-mysql
```

Create a MySQL service (if you don't have one already).

```bash
cf create-service p-mysql 100mb mysqlservice
```

Deploy the app.

```bash
cf push
```

Undeploy

```bash
cf delete mywordpress
```
