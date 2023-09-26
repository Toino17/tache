fetch("../http/get.php")
.then(response => response.json())
.then(data => data.forEach(element => {

    let body = document.querySelector('body');
    let formBase = document.querySelector('.formBase')
    const createP = document.createElement("p");
    createP.innerHTML = `${element.task}`;
    createP.className=`p${element.id_task}`;
    const createInputDelete = document.createElement('input');
    createInputDelete.type = "submit";
    createInputDelete.value = "Supprimer";
    createInputDelete.name =`inputDelete${element.id_task}`
    createInputDelete.classList.add(`inputDelete${element.id_task}`);
    formBase.appendChild(createP);
    formBase.appendChild(createInputDelete);
    let inputdelete = document.querySelector(`.inputDelete${element.id_task}`);
    let pdelete = document.querySelector(`.p${element.id_task}`);

    inputdelete.addEventListener("click", function(event){
        event.preventDefault();
        let id = element.id_task;
        formDataDelete = new FormData;
        formDataDelete.append(`id`, id);

        fetch('../http/post.php', {
            method: 'POST',
            body: formDataDelete
        })
        .then(response =>{
            if (!response.ok) {
                throw new Error('Erreur lors de la requête.')
            }
            if(response.ok){
                inputdelete.remove()
                pdelete.remove()
            }
            return response.json()
        .then(data => 
            console.log(data))
        .catch(error =>
            console.error(error))
        })
    })
}))



