function carregar() {
    var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('imagem')
    var data = new Date()
    var hora = data.getHours()
    var hora = 18
    msg.innerHTML = `Agora sao ${hora} horas`
    if(hora >= 0 && hora < 12) {
        img.src = 'fotomanha.jpg'
        document.body.style.background = 'rgb(231, 238, 137)'
    }else if(hora >= 12 && hora < 18) {
        img.src = 'fototarde.jpg'
        document.body.style.background = 'rgb(226, 152, 16)'
    }else{
        img.src = 'fotonoite.jpg'
        document.body.style.background = 'rgb(42, 10, 102)'
    }
}