const cbxdivision = document.getElementById('division')
const cbxyear = document.getElementById('year')
const cbxtipo = document.getElementById('tipo')

cbxtipo.addEventListener('change', getNombre)

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
    let division = cbxdivision.value
    let year = cbxyear.value
    let tipo = cbxtipo.value
    let url = 'php/s_getAsignatura.php'
    let formData = new FormData()
    formData.append('division', division)
    formData.append('year', year)
    formData.append('tipo', tipo )

    fetchAndSetData(url, formData, cbxnombre)
}