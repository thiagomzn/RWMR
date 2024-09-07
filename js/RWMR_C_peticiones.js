const cbxcurso = document.getElementById('curso')
cbxcurso.addEventListener('change', getNombre)

const cbxnombre = document.getElementById('nombre')

function fetchAndSetData(url, formData, targetElement) {
    return fetch(url, {
        method:"POST",
        body: formData,
        mode: 'cors'
    })
        .then (response => response.json())
        .then (data => {
            targetElement.innerHTML = data
        })
        .catch(err => console.log(err))
}


function getNombre(){
    let curso = cbxcurso.value
    let url = 'php/C_getAsignatura.php'
    let formData = new FormData()
    formData.append('curso', curso)
 
    fetchAndSetData(url, formData, cbxnombre)
}