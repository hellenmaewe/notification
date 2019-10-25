# Email Notification Library using phpMailer

This library has the function to send email using phpmailer library. Doing this uncomplicated action is essential for any system.

To install the library, run the following command:

```sh
composer require gustavoweb/composer_test
```

To make use of the library, simply require composer autoload, invoke the class, and call the method:

```sh
<? php

require __DIR__. '/lib_ext/autoload.php';

USE Notification\Email;

$email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$email-> sendEmail ("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that all email sending setup is using the magic builder method! Once you invoke the builder method within your application, your system will be able to perform the triggers.

### Developers
* [Gustavo Web] - Developer of this library and tutor of the Composer in Practice course!
* [Robson V. leite] - CEO and Founder UpInside Training
* [UpInside Treinamentos] - Official website of your digital programming and marketing school
* [phpMailer] - Lib to send Email

License
----

MIT

** Another UpInside Training course, make good use! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Robson V. Leite]: <mailto: robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>