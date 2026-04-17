document.addEventListener("DOMContentLoaded", function () {

    const blogsContainer = document.getElementById('blogs');
    if (!blogsContainer) return;

    const category = blogsContainer.getAttribute('data-category');

    fetch('proxy.php?category=' + category)
    .then(res => res.json())
    .then(response => {

        blogsContainer.innerHTML = '';

        const blogs = (Array.isArray(response) ? response : response.data || []).slice(0, 3);

        if ( blogs.length === 0) {
            blogsContainer.innerHTML = '<p>No blogs found.</p>';
            return;
        }

        blogs.forEach(blog => {

            const title = blog.title.rendered;
            const link = blog.link;
            const date = blog.date.split('T')[0];

            // Featured image
            let image = '';
            if (blog._embedded && blog._embedded['wp:featuredmedia']) {
                image = blog._embedded['wp:featuredmedia'][0].source_url;
            }

            blogsContainer.innerHTML += `
                <div class="col-md-4">
                    <div class="card blog-card">
                        <img src="${image}" alt="" class="img-fluid">
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