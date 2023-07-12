<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4" id="aboutTitle">Your About Me Short Title</p>
                    <p class="text-muted" id="aboutDes">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit
                        dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque
                        officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!" id="tLink"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!" id="lLink"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!" id="gLink"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>

    const aboutTitle = document.getElementById('aboutTitle');
    const aboutDes = document.getElementById('aboutDes');

    const tLink = document.getElementById('tLink');
    const lLink = document.getElementById('lLink');
    const gLink = document.getElementById('gLink');


    axios.get('http://127.0.0.1:8000/api/aboutMe')
        .then(response => {
            const aboutData = response.data;
            // console.log(aboutData);

            aboutTitle.innerHTML = aboutData.title;
            aboutDes.innerHTML = aboutData.details;

        })
        .catch(error => {
            console.log('Error fetching API data:', error);
        });


    axios.get('http://127.0.0.1:8000/api/socialLink')
        .then(response => {
            const socialLink = response.data;
            console.log(socialLink);

            tLink.href = socialLink.twitterLink;
            lLink.href = socialLink.linkedinLink
            gLink.href = socialLink.githubLink

        })
        .catch(error => {
            console.log('Error fetching API data:', error);
        });
</script>