const buttons = document.querySelectorAll('.btn')
const form = document.querySelector('form')
const inputs = document.querySelectorAll('.active')
const result = document.querySelector('.input-result')
const feedback = document.querySelectorAll('.invalid-feedback')

    //valida os dados do form, manda para o PHP  via POST e recebe o resultado
buttons[0].addEventListener('click', async (e) => {
    e.preventDefault()

    var formData = new FormData(form)

    if(validate()){
        var request = await fetch('calculo.php',{
            method: 'post',
            body: formData
        })
        var response = await request.text()
        result.value = response 
    }  

})

    //Limpa os campos do form
buttons[1].addEventListener('click', (e) => { 
    e.preventDefault()
    inputs.forEach(element => {
        element.value = ""
        element.classList.remove('is-invalid')
    });
    result.value = "";
})

inputs.forEach((element, i) => {
    element.addEventListener('input', (e) => {
        const val = removeCommas(element)
        if(val == ""){
            feedback[i].innerHTML = "Preencha este campo."
            element.classList.add('is-invalid')
        }else if(isNaN(val)){
            feedback[i].innerHTML = "Valor inválido."
            element.classList.add('is-invalid')
        }else{
            element.classList.remove('is-invalid')
        }
    })
})

function validate(){
    var result = true
    inputs.forEach((element, i) => {
        if(element.value == ""){
            feedback[i].innerHTML = "Preencha este campo."
            element.classList.add('is-invalid')
            result = false;
        }
        if(element.classList.contains('is-invalid')){
            result = false
        }
    })
    return result;
}

function removeCommas(e){
    return e.value.trim().replace(',', '.')
}