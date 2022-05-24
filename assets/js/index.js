const buttons = document.querySelectorAll('.btn')
const form = document.querySelector('form')
const inputs = document.querySelectorAll('.input')
const result = document.querySelector('.input-result')

buttons[0].addEventListener('click', async (e) => {
    e.preventDefault()

    var formData = new FormData(form)

    var request = await fetch('calculo.php',{ //faz a requisição para o PHP via POST
        method: 'post',
        body: formData
    })
    var response = await request.text() //adquire a resposta da requisição
    result.value = response 
})

buttons[1].addEventListener('click', (e) => {
    e.preventDefault()
    clear()
})
    //limpa os inputs
function clear(){
    inputs.forEach(element => {
        element.value = ""
    });
    result.value = "";
}
    //valida os dados do form
function validate(){
    
}