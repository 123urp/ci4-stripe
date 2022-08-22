# Stripe with CodeIgniter 4 Framework

1. Start with create account at stripe.

2. Now, for codeigniter 4 install it via composer or get with github code. Below, link has installation process mentioned or you can get whole code directly from github, code link also mentioned in link. Link is here: https://codeigniter.com/user_guide/installation/index.html

3. Once setup of code, run spark command for run ci4 project. you will get welcome page.

4. Now, please refer route pages from app/config folder and get sigin and signup controllers and required view with that from above code.

5. For create stripe controller, install the stripe package with below command.
    - composer require stripe/stripe-php

6. now, get Publishable key and Secret key from your stripe account and Define them in constant page.

7. Run below command and create stripe controller with add the code from above code:
   - php spark make:controller StripeController

8. Get view page file and create stripe page's component elements.

9. Define route as like below.

    $routes->get('/stripe', 'StripeController::index');
    $routes->post('/stripe/create-charge', 'StripeController::createCharge');
  
10. run the below command for ci4.
    - php spark serve
    
From above steps, you can get stripe payment with registration, login, logout and stripe-payment. 
