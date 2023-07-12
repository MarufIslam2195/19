<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div id="projectCard">



                </div>
                
            </div>
        </div>
    </div>
</section>



<script>
    getProjects()
    async function getProjects() {
        try {
            let response = await axios.get('/api/projects');
            data = response.data;
            // console.log(data);
            data.forEach(item => {
                document.getElementById('projectCard').innerHTML += (`
                 <a href='${item['previewLink']}' class="text-decoration-none text-dark" title='View Live' target='blank'>
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">${item['title']}</h2>
                                    <p>${item['details']}</p>
                                </div>
                                <img class="img-fluid" src="${item['thumbnailLink']}" style='width: 250px; height: 35vh' alt="..." />
                            </div>
                        </div>
                    </div>
                </a>
                `);
            });
        } catch (error) {

        }
    }
</script>