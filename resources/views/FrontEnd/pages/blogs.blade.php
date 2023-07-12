<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('https://cdn.tailwindcss.com') }}"></script>

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js') }}"></script>
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



    <main class="container my-10 mx-36">
        <h2 class="text-lg font-bold text-[#1E9C79] my-2">
            Lorem Ipsam Doller
        </h2>
        <h2 class="text-3xl font-bold">
            Featured Posts
        </h2>

        <div id="blogList">

        </div>


    </main>





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
        getBlog()
        async function getBlog() {
            try {
                let response = await axios.get('/api/blogs');
                data = response.data;
                // console.log(data);

                data.forEach(item => {
                    document.getElementById('blogList').innerHTML += `

                    <a href="{{ route('blogs') }}/${item.id}">
                    <div class="my-10 flex">
                        <div class="basis-1/4">
                            <img src="${item.thumb}" class="w-full rounded-lg h-48" alt="">
                        </div>
                        <div class="basis-3/4 ps-10 flex  items-center">
                            <div>
                                <h2 class="text-2xl font-bold  my-2">
                                    ${item.title}
                                </h2>
                                <span>
                                    <h2 class="my-4  font-bold ">
                                        <span class="text-[#1E9C79]"><i class="fa-regular fa-pen-to-square"></i> ${item.user.name}
                                        </span> <span class="text-gray-400"><br> <i class="fa-regular fa-calendar"></i> ${item.created_at} </span>
                                    </h2>
                                </span>
                                <h2 class="text-lg font-semibold text-gray-400">
                                    ${item.short_des}
                                </h2>
                            </div>
                        </div>
                    </div>
                </a>

                    `;
                });

            } catch (error) {
                alert(error);
            }
        }
    </script>
</body>

</html>
