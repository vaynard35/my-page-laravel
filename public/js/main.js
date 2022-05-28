
//init responsive navbar
const nav = new NavComponent('nav')
nav.init()


//init 'matrix animation
const canvas = document.querySelector('canvas')
initMatrix(canvas)


//init text animations on computer screen at the top
const typedElement1 = document.querySelector('.first-line')
const typedElement2 = document.querySelector('.second-line')
const typedElement3 = document.querySelector('.third-line')
const typedElement4 = document.querySelector('.fourth-line')
        



setTimeout( () => {
            initTypingAnimation(typedElement1, texts[0], 100)
            setTimeout(() => initTypingAnimation(typedElement2,texts[1] , 100),texts[0].length*100)
            setTimeout(() => initTypingAnimation(typedElement3,texts[2] , 100),(texts[0].length+texts[1].length)*100)
            setTimeout(() => initTypingAnimation(typedElement4, texts[3], 100),(texts[0].length + texts[1].length + texts[2].length)*100)
}, 1000);


//handle form submission

const form = document.querySelector('form')
const formUrl = '/submitContactForm'


form.addEventListener('submit', e => {
    e.preventDefault()

    const data = new FormData(e.target)

    grecaptcha.ready(function() {
        grecaptcha.execute(recaptchaKey, {action: 'submit'}).then(function(token) {
            // Add your logic to submit to your backend server here.
            data.append('captcha_token',token)
            fetch(formUrl, {body: data, method: 'POST' } )
            .then(response => {

                if(!response.ok){
                    document.querySelector('.response_ok').classList.add('hide')
                    document.querySelector('.response_error').classList.remove('hide')
                    document.querySelector('.error_message').innerHTML = ' status: '+ response.status + '. '+ response.statusText
                    return
                }

                form.reset()
                document.querySelector('.response_ok').classList.remove('hide')
                document.querySelector('.response_error').classList.add('hide')

            })
            .catch(error => {
                document.querySelector('.response_ok').classList.add('hide')
                document.querySelector('.response_error').classList.remove('hide')
                document.querySelector('.error_message').innerHTML = error.message
            })
        });
      });


    

    
})