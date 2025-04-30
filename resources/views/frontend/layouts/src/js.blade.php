<script>
    document.querySelectorAll('.main-category').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        let categoryId = this.dataset.id;

        fetch(`/categories/${categoryId}/subcategories`)
            .then(res => res.json())
            .then(data => {
                let container = document.getElementById('subcategories-container');
                container.innerHTML = '';
                data.forEach(sub => {
                    let el = document.createElement('a');
                    el.href = `/subcategory/${sub.id}`;
                    el.textContent = sub.title;
                    container.appendChild(el);
                });
            });
    });
});
</script>


{{-- Custom Js  --}}
@stack('js_links')

@stack('js')
