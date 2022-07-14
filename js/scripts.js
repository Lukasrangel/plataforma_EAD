//menu mobile
try {
    var icon = document.querySelector('.menu-mobile-icon img')
    var menuMobile = document.querySelector('.menu-mobile')
    menuMobile.style.height = '0px'
    icon.addEventListener('click', function(){
        if(menuMobile.style.height == '0px'){
            menuMobile.style.height = '52px';
            menuMobile.style.overflow = 'unset'
        } else {
            menuMobile.style.height = '0px';
            menuMobile.style.overflow = 'hidden'
        }
    })
} catch {
    console.log('a')
}



//animação diferenciais
try {
    var diferenciais = document.querySelectorAll('.box-wrapper-diferencial');
    var max = diferenciais.length
    var atual = 0
    window.addEventListener('scroll',function(){
        if(window.pageYOffset > 320){
            animate()
            
        }
    })

    function animate(){
        diferenciais.forEach((elemento,index)=>{
            var chamada = setInterval(()=>{
                elemento.classList.add('animate')
            }, 1000 * index)
        })
    }

} catch {
    console.log('a')
}



//verificar senha
try {
    var password = document.querySelector('form input[name=senha_ok]')
    var span = document.querySelector('form span');
    var password_old = document.querySelector('form input[name=senha]')

    password_old.addEventListener('keyup', function(){
        validar()
    })
    
    password.addEventListener('keyup', function(){
        validar()
    }) 
} catch {
    console.log('a')
}

function validar(){
    let submit = document.querySelector('form input[type=submit]')
    if(password.value != password_old.value){
        span.innerHTML = 'Senhas não batem';
    } else if(password.value == ''){
        span.innerHTML = '';
    } else {
        span.innerHTML = '';       
    }

}


//abrir fechar box aulas
var arrow_down = document.querySelectorAll('.modulo-box img.arrow');
console.log(arrow_down)
arrow_down.forEach((value,index)=>{
    value.addEventListener('click', function(){
        div_aulas = document.querySelectorAll('div.aulas')
    
        if(div_aulas[index].classList.contains('h0')){
            div_aulas[index].classList.remove('h0')
        } else {
            div_aulas[index].classList.add('h0')
        }
    })
})

//máscara cpf
function mascara_cpf(){
    let maxlenght = document.querySelector('#cpf').getAttribute('maxlength')
    let valor = document.querySelector('#cpf').value

    const mascaras = {
        CPF: valor.replace(/[^\d]/g, "").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")
      };

      if(maxlenght == valor.length){
        (document.getElementById('cpf').value = mascaras['CPF'])
      }
    console.log(valor)
}