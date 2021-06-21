require('./bootstrap');

const delform = document.querySelectorAll('.delete-post-form');

delform.forEach(form=>{

    form.addEventListener('submit', function(e){
        const resp = confirm('Do you want to delete this post?');

        if(!resp){
            e.preventDefault();
        }
    });
});