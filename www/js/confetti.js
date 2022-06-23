import JSConfetti from 'js-confetti'

const jsConfetti = new JSConfetti()

jsConfetti.addConfetti()


$(".send").on('click', function(event){
    jsConfetti.addConfetti({
        emojis: ['🎉','🎂','🥳'],
        emojiSize: 100,
        confettiNumber: 30,
    })
});

jsConfetti.addConfetti({
    emojis: ['🎉','🎂','🥳'],
    emojiSize: 100,
    confettiNumber: 30,
})