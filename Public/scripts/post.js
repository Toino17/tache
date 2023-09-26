const form = document.querySelector('.form');
const tache = document.querySelector('.addTaskInput')


form.addEventListener("submit", function(event){
    event.preventDefault();
    let formData = new FormData;
    const tacheValue = tache.value
    formData.append('addTaskInput', tacheValue);

    fetch('../http/post.php',{
        method: 'POST',
        body: formData
    })
    .then(response =>{
        if (!response.ok) {
            throw new Error('Erreur lors de la requête.');
        }
            return response.json();
    })
    .then(data => 
        console.log(data)
    )
    .catch(error => {
        console.error(error);
    });
})
