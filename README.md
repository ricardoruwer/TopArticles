# TopArticles
If you'd like to show, e.g.: the top 10 articles of your website by week

- Uses Google Analytics API

## 1.
- Go to: https://console.developers.google.com/apis/credentials
- Create credentials
- Service account key
- New service account
- Put the name, select JSON and Create!

## 2.
- Open the downloaded file.
- Copy the e-mail at "client_email".
- Go to: https://analytics.google.com
- Admin
- Select your account and go to User Management
- Paste the e-mail on the input and Add!
- Now copy the JSON file at your project.

## 3.
- Open your terminal and:
```shell
composer require google/apiclient:^2.0
```

## 4.
- Get the file YourCode.php and do whatever you want :)

If you have any doubts about the options of GA: https://ga-dev-tools.appspot.com/query-explorer/

#### Doubts?
In `$params['filters']` I used the operator `=~` that is "Contains a match for the regular expression" but you can also use: `==` (Exact match), `!=` (Does not match), `=@` (	Contains substring), `!@` (Does not contain substring) and `!~` (Does not match regular expression).
