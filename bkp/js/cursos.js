window.addEventListener('DOMContentLoaded', ()=>{
    const tabela = document.querySelector('#lista-cursos')

    fetch('cursos.php')
    .then(response => response.json())
    .then(cursos => {
        cursos.forEach(curso => {
            let tr = document.createElement('tr')
            let td1 = document.createElement('td')
            td1.innerText = curso.id
            let td2 = document.createElement('td')
            td2.innerText = curso.nome
            let td3 = document.createElement('td')
            td3.innerHTML = '<a href=\"detalhes.php?curso='+curso.id+'\">Detalhes</a>'
            tr.appendChild(td1)
            tr.appendChild(td2)
            tr.appendChild(td3)
            tabela.appendChild(tr)       
        })
    })
})