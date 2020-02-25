Installation instruction
========================

1. Upload project into your folder that is accessible through web browser
2. There are no additional steps required. .htaccess handles all requests through correct app files. 
 App is accessible under '/' url
3. If app does not work, run `bin/console cache:clear --env=prod`

How does it work
========================
1. Created a form that contains 2 numbers and a dropdown with emojis.
2. Form values are passed through json API request to API controller
3. API controller uses a calculator service and returns a result 
4 Result is displayed in a box to the right


Technical approach description
========================
1. Added usage of Bootstrap 4.4.1 for basic layout of the app
2. Basic validation of form is done on html level - Symfony's number type provide that + fields are required
3. Advanced validation is done on routing level. Numbers are validated to be numbers, operand parameter is validated to be strictly one of four allowed operands
4. Added usage of `FosRestBundle` for Restful API
5. Added usage of `FosJsRoutingBundle` so the url generated in Twig template is dynamic and we avoid hardcoding urls in multiple places
6. Added custom twig layout to allow emojis being rendered as part of Symfony form select dropdown
7. Added unit tests for classes that required it
