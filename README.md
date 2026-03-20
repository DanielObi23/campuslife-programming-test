## CampusLife Programming Test
### About this test
Here at CampusLife we work with a multitude of languages, PHP being the most used within the Browzer ecosystem.

We use Laravel extensively throughout our platform and you will be working inside of this framework most days.
Laravel's documentation is great and outlines a lot of what is required for this test, such as route and view management.

This test will outline some of the technologies which we at CampusLife use daily, such as XHR requests, Model View Controller (MVC) and Object-Oriented Programming principles.

Please use the internet and any Laravel documentation to help you understand some of the concepts better. This test will give CampusLife a good idea of where your skills are. With this, there is no right or wrong way to do something — we are just trying to understand your technical knowledge, as well as seeing how you tackle issues.

Use of AI is allowed in this test, but please make sure you read and understand what the AI has provided, as we may ask you to explain this during our interview.

We don't expect you to complete everything, we just want to see how you think and tackle issues.

#### Note
Please do not overrun the time limit after you get the application running on your machine, as we want to see what you can achieve in this short amount of time. It does not matter if it's not perfect or fully working — we just want to see your thought process.
If you are struggling to get the application running, please get in contact with [technical@campuslife.co.uk]()

You can do research first before starting the test so that you have the full 3 hours to complete it.

### How to run / Install?
Follow: [https://laravel.com/docs/12.x/installation#installing-php]()
This will install **PHP**, **Composer**

You will then need to install **Node** & **NPM**
Follow: [https://nodejs.org/en]()

Once you have installed the above you are able to continue to run the application.
```
cd campuslife-programming-test
npm install && npm run build
composer run dev
```

Add the environment variables to the **.env** file. (If the file does not exist copy **.env.example** to **.env**)
```
API_ENDPOINT=<REPLACE_WITH_THE_ONE_FROM_EMAIL>
API_TOKEN=<REPLACE_WITH_THE_ONE_FROM_EMAIL>
```

### Engage API Documentation
- [https://engage.browzer.co.uk/docs/api/v1/public]()

### Requirements
- Build a class which interacts with the Browzer API — you can use `app/Utility/BrowzerAPI.php` as a starting point if you would like.
- Build a page in **blade** that pulls in stories and shows them in a list styled accordingly with somewhat modern standards using CSS.
- Build a second page which will load all of the events in a **blade** page and style them with CSS.
- Register a route inside of `web.php` for the stories & events page.
- Use the API to pull in information about the University and display it on the page.

### Extras / Nice to have
## These extra requirements are not required to complete the test, and are not necessary to get the job done but would be great to see how you tackle them.
- Expand the API class to have more utility for adding functionality in the future.
- Expand on the API interaction — show more items/data etc. or use other endpoints available to you.
- Database interaction / storage of liked stories / events etc.
- Add authentication to the application.
- Laravel Livewire Components
- XHR Requests for live updating components
- Tailwind CSS
- Javascript Interactivity
- HTML 5 Conformance
- WCAG 2.1 Conformance
- Documentation for the application

### Rules
- Time limit: **3 Hours**
- AI use: Allowed — just make sure you can explain the output. Do not do the whole project with AI as we will notice.
- Internet use: Allowed — make sure to use all resources available to you (Stackoverflow, Reddit, Laravel Docs)
- No screensharing / help from external people — we want to gauge your skillset.
- Have fun with it — we don't want this to be a tedious task, we want you to enjoy working on this as this is what you will be doing at CampusLife.

Any issues please get in contact with [technical@campuslife.co.uk]()

Reference: [https://laravel.com/docs/12.x/installation]()
