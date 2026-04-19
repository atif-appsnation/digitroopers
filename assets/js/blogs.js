document.addEventListener("DOMContentLoaded", function () {

    const blogsContainer = document.getElementById('blogs');
    if (!blogsContainer) return;

    const category = blogsContainer.getAttribute('data-category');

    // Build URL dynamically
    let url = 'proxy.php';
    if (category) {
        url += '?category=' + category;
    }

    fetch(url)
    .then(res => res.json())
    .then(blogs => {

        blogsContainer.innerHTML = '';

        if (!Array.isArray(blogs) || blogs.length === 0) {
            blogsContainer.innerHTML = '<p>No blogs found.</p>';
            return;
        }

        blogs.forEach(blog => {

            const title = blog.title.rendered;
            const link = blog.link;
            const date = new Date(blog.date).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });


            let image = '';
            if (blog._embedded && blog._embedded['wp:featuredmedia']) {
                image = blog._embedded['wp:featuredmedia'][0].source_url;
            }

            blogsContainer.innerHTML += `
                <div class="col-md-4 mb-3">
                    <div class="card blog-card h-100">
                        <img src="${image}" alt="Blog" class="img-fluid">
                        <div class="d-flex justify-content-between bg-success text-white p-3">
                            <p class="mb-0">Digitroopers</p>
                            <p class="mb-0">${date}</p>
                        </div>
                        <div class="card-body">
                            <h6><a href="${link}" target="_blank">${title}</a></h6>
                        </div>
                    </div>
                </div>
            `;
        });

    })
    .catch(err => {
        console.error(err);
        blogsContainer.innerHTML = '<p>❌ Failed to load blogs.</p>';
    });

});