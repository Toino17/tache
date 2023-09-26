fetch("../http/get.php")
.then(response => response.json())
.then(data => data.forEach(element => {
    
    const createP = document.createElement("p");
    createP.innerHTML = `${element.task}`;
    let body = document.querySelector('body');
    body.appendChild(createP);

}))

