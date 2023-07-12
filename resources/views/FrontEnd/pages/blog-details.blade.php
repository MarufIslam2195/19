<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js') }}"></script>

    <style>
        .banner-wrapper {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .banner-inner {
            background-color: rgba(5, 5, 5, 0.562);
            height: 100%;
        }
    </style>
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap px-5 pt-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('assets/blogLogo.png') }}" width="80" alt="">
                <span class="ml-3 text-2xl text-[#1E9C79] font-bold">JB BLOG</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 text-lg font-medium hover:text-[#1E9C79]  text-gray-900"
                    href="{{ route('home') }}">Home</a>
                <a class="mr-5 text-lg font-medium text-[#1E9C79]" href="{{ route('blogs') }}">Blogs</a>
                <a class="mr-5 text-lg font-medium hover:text-[#1E9C79] text-gray-900"
                    href="{{ route('resume') }}">Resume</a>
                <a class="mr-5 text-lg font-medium hover:text-[#1E9C79] text-gray-900"
                    href="{{ route('project') }}">Projects</a>
                <a class="mr-5 text-lg font-medium hover:text-[#1E9C79] text-gray-900"
                    href="{{ route('contact') }}">Contact</a>
            </nav>

        </div>
    </header>



    <main class="my-10">

        <div class="banner-wrapper" id="top-banner">

            <div class="banner-inner flex items-center justify-center">
                <div class="w-3/4 ">
                    <div class="my-32">
                        <h2 class="my-4  font-bold text-center">
                            <span class="text-[#1E9C79] text-2xl uppercase" id="blogTag"> </span><span
                                class="text-2xl text-slate-50" id="dateTime"> </span></span>
                        </h2>
                        <h2 class="my-4  font-bold text-center">
                            <span class="text-slate-50 text-6xl " id="BlogTitle"> </span>
                        </h2>
                        <div class="flex items-center justify-center">
                            <div class="w-82 flex items-center justify-center">
                                <div class="w-1/3 flex  justify-center">
                                    <img src="" class="rounded-full w-20" alt="" id="userImg">
                                </div>
                                <div class="w-2/3  ">
                                    <div class="ps-3">
                                        <h1 class="text-slate-50 text-xl font-bold pt-2" id="userName">

                                        </h1>
                                        <span class="text-[#1E9C79] text-md font-bold">
                                            Author
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-center my-20">
            <div class="w-4/5">
                <p id="fullDetails">
                </p>
            </div>
        </div>


    </main>


    {{-- Comment Section  --}}

    <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comments <span
                        id="commentCount"></span></h2>
            </div>
            <form class="mb-6" id="contactForm">
                <div
                    class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <textarea id="comment" rows="6"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                        placeholder="Write a comment..."></textarea>
                </div>
                <button type="submit"
                    class="inline-flex   items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 ring-1 ring-gray-200  focus:ring-gray-200 dark:focus:ring-gray-900 hover:bg-primary-800">
                    Post comment
                </button>
            </form>
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white" id="noCommentLabel"></h2>
            </div>
            <div id="comment-list">

            </div>
        </div>
    </section>





    <footer class="text-gray-400 body-font bg-gray-900 mt-20">
        <div class=" flex justify-center items-center h-35 ">
            <div class="text-center py-20">
                <div class="flex mb-3 justify-center">
                    <img src="{{ asset('assets/blogLogo.png') }}" width="80" alt="">
                </div>
                <span class="ml-3  text-2xl text-gray-400 font-semibold">JB BLOG</span>
                <p class="mt-6">
                    <span class="inline-flex">
                        <a class="text-[#1E9C79]">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-4 text-[#1E9C79]">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-4 text-[#1E9C79]">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5"
                                    ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-4 text-[#1E9C79]">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                            </svg>
                        </a>
                    </span>
                </p>
            </div>
        </div>

    </footer>
    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
    <script>
        const url = window.location.href;
        const id = url.match(/\/(\d+)$/)[1];
        let apiCall = '/api/blogs-details/' + id;
        // console.log(apiCall);

        getDetails(apiCall)
        async function getDetails(url) {
            let response = await axios.get(url);
            data = response.data;
            // console.log(data);

            // Set Background Image
            const bgImg = document.getElementById("top-banner");
            bgImg.style.backgroundImage = `url(${data.thumb})`;

            // Set Tag 
            if (data.blogdetail !== undefined && data.blogdetail !== null) {



                document.getElementById('blogTag').innerHTML = data.blogdetail.tag_name;

                // Set Author
                document.getElementById('userName').innerHTML = data.user.name;

                // Set img
                document.getElementById('userImg').src = data.user.profile;

                // Set Content
                document.getElementById('fullDetails').innerHTML = data.blogdetail.content;



            } else {
                document.getElementById('blogTag').innerHTML = "Tag";
                document.getElementById('userName').innerHTML = "User";
                document.getElementById('userImg').src = "https://i.ibb.co/4RXwstF/Avatar.jpg";
                document.getElementById('fullDetails').innerHTML = "No Content Here";
            }


            // Set Date
            document.getElementById('dateTime').innerHTML = " - " + data.created_at;

            // Set title
            document.getElementById('BlogTitle').innerHTML = data.title;



            // console.log(data['comments']);
            if (data['comments'].length > 0) {

                document.getElementById('commentCount').innerHTML = "(" + data['comments'].length + ")";

                data['comments'].forEach(element => {
                    document.getElementById('comment-list').innerHTML += `

                    <article class="p-6 mb-6 text-base bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <footer class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                        class="mr-2 w-6 h-6 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                        alt="visitor">Visitor</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12"
                                        title="${element.created_at}">${element.created_at}</time></p>
                            </div>
                            <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                            </button>
                            
                        </footer>
                        <p class="text-gray-500 dark:text-gray-400">${element.comment}</p>
                        <div class="flex items-center mt-4 space-x-4">
                            <button type="button"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                Reply
                            </button>
                        </div>
                    </article>

                    `;
                });

            } else {
                document.getElementById('noCommentLabel').innerHTML = 'No Comment Here';
            }
        }

        let contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            let comment = document.getElementById('comment').value;
            console.log(comment);

            if (comment.length === 0) {
                alert('Name is required');
            } else {
                let dataComment = {
                    userComment: comment,
                    blogId: id
                }

                axios.post('/commentRequest', dataComment)
                    .then(function(response) {
                        // Handle the success response
                        console.log(response.data);
                        alert("Comment Successfully Added");
                        location.reload();
                        
                    })
                    .catch(function(error) {
                        // Handle the error response
                        console.error(error);
                    });
            }
        })
    </script>
</body>

</html>
