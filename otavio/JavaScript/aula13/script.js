function verificar() {
   var data = new Date()
   var ano = data.getFullYear()
   var fano = document.getElementById('txtano')
   var res = document.querySelector('div#res')
   if (fano.value.length == 0 || fano.value > ano) {
      window.alert('Verifique os dados novamente!')
   } else {
      var fsex = document.getElementsByName('radsex')
      var idade = ano - Number(fano.value)
      var genero = ''
      if (fsex[0].checked) {
         genero = 'Homem'
      } else if (fsex[1].checked) {
         genero = 'Mulher'
      }
      res.style.textAlign = 'center'
      res.innerHTML = `detectamos ${genero} com ${idade} anos`
   }

}