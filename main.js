let back = []

for(let i = 1; i < 5; i++) {
    back.push('./img/back/' + i + '.jpg');
}

document.getElementsByTagName('body')[0].style.backgroundImage = 'url('+ back[Math.floor(Math.random() * back.length)] +')';
