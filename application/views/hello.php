<!DOCTYPE html>
<html>
  <head>
    <title>My Gym Site</title>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="text-gray-700 body-font">
      <div
        class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
      >
        <a
          class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
            ></path>
          </svg>
          <span class="ml-3 text-xl">Body Maniac</span>
        </a>
        <nav
          class="md:ml-auto flex flex-wrap items-center text-base justify-center"
        >
          <a href="/" class="mr-5 hover:text-gray-900">Home</a>
          <!-- <a class="mr-5 hover:text-gray-900">Services</a>
          <a class="mr-5 hover:text-gray-900">About</a>
          <a class="mr-5 hover:text-gray-900">Contact</a> -->
        </nav>
      </div>
    </header>
    <hr/>
    <section class="text-gray-700 body-font">
      <div
        class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center"
      >
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
          <img
            class="object-cover object-center rounded"
            alt="hero"
            src="https://source.unsplash.com/720x600?gym"
          />
        </div>
        <div
          class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-

center"
        >
          <h1
            class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"
          >
            Look in the mirror <br class="hidden lg:inline-block" />that's
            your competition.
          </h1>
          <p class="mb-8 leading-relaxed">
          Self-discipline is about controlling your desires and impulses <br> while staying focused on what needs to get done to <br> achieve your goal.
          </p>
          <!-- <div class="flex justify-center">
            <button
              class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded 

text-lg"
            >
              Button
            </button>
            <button
              class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 

rounded text-lg"
            >
              Button
            </button> -->
          <!-- </div> -->
        </div>
      </div>
    </section>
    <hr />
    <section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://source.unsplash.com/NOMEabTIxk4/300x300">
          <p class="leading-relaxed">I wouldn't and don't order from any other online supplement company than you. I am extremely please with your service and products that i have received from your company. I would also like to compliment you for the huge selection of products and information. Thanks Again!</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Cathy L.</h2>
          <p class="text-gray-500">(United States)</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://source.unsplash.com/eSjmZW97cH8/302x302">
          <p class="leading-relaxed">The service I received from Bodybuilding.com was first class. The order was processed quickly and shipped expediently. Foremost I would like to commend your selection and prices, the products I purchased were bought at half the price I would have otherwise bought them for. Thank you, and keep up the excellent work.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Alper Kamuz</h2>
          <p class="text-gray-500">(Russia)</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://source.unsplash.com/wys9Jty8wNQ/305x305">
          <p class="leading-relaxed">First of all I'd like to say that your products are great and your timely shipping is amazing! This along with you keeping in touch with your customers is exactly how you keep your customers. It's never been so easy dealing with a business online! Great on delivery, great customer service, great products! Who can ask for anything more?</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Jeff T.</h2>
          <p class="text-gray-500">(Norway)</p>
        </div>
      </div>
    </div>
  </div>
</section>
    <hr />

    <section class="text-gray-700 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever your problem is, we have a every possible solution for it.</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
    <form action="" method="POST">  
    <div class="flex flex-wrap -m-2">
        
        <div class="p-2 w-1/2">
          <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" name="Name" type="text" required >
        </div>
        <div class="p-2 w-1/2">
          <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" name="Email" type="email" required >
        </div>
        <div class="p-2 w-full">
          <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" name="Message" placeholder="Message" required ></textarea>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
        </div>

      </div>
      </form>
    </div>
  </div>
</section>

<hr/>

    <footer class="text-gray-700 body-font">
      <div
        class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col"
      >
        <a
          class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
            ></path>
          </svg>
          <span class="ml-3 text-xl">Body Maniac</span>
        </a>
        <p
          class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
        >
          � 2020 bodymaniac �
          <a
            href="https://www.linkedin.com/in/akshay-bisht-901b01157"
            class="text-gray-600 ml-1"
            rel="noopener noreferrer"
            target="_blank"
            >@Akshay</a
          >
        </p>
        <span
          class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
        >
          <a class="text-gray-500">
            <svg
              fill="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <path
                d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
              ></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg
              fill="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 

2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
              ></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path
                d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
              ></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg
              fill="currentColor"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="0"
              class="w-5 h-5"
              viewBox="0 0 24 24"
            >
              <path
                stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
              ></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </footer>
  </body>
</html>