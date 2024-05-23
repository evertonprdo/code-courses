function verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById('txtano')
    var res = document.querySelector('div#res')
    
    if(fano.value.length == 0 || Number(fano.value) > ano) {
        window.alert('Erro!')
    } else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var genero = ''
        
        var img = document.createElement('img')
        img.setAttribute('id', 'foto')
        
        if (fsex[0].checked) {
            genero = 'Oriente'
            if (idade < 15) {
                window.alert('O que pensa que está procurando?')
            } else if (idade >= 14 && idade < 17) {
                //f 16
                img.setAttribute('src', 'img/16f.png')
            } else if (idade < 27){
                //f 22
                img.setAttribute('src', 'img/22f.png')                
            } else if (idade < 40){
                //f 40
                img.setAttribute('src', 'img/40f.png')                
            } else {
                //f 60
                img.setAttribute('src', 'img/60f.png')                
            }
       
        } else if (fsex[1].checked) {
            genero = 'Ociedente'
            
            if (idade < 15) {
                window.alert('O que pensa que está procurando?')
            } else if (idade >= 0 && idade < 17) {
                //f 16 jap
                img.setAttribute('src', 'img/jap16f.png')                
            } else if (idade < 27){
                //f 22 jap
                img.setAttribute('src', 'img/jap22f.png')                
            } else if (idade < 40){
                //f 40 jap
                img.setAttribute('src', 'img/jap40f.png')                
            } else {
                //f 60 jap
                img.setAttribute('src', 'img/jap60f.png')                    
            }
        }
        
        res.innerHTML = `Detectamos ${genero} com ${idade} anos.`
        res.appendChild(img)
    }
}