<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phpdoktor</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    
    <link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/nav-component.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <nav >
        
            <div class="logoArea">
                <a href="#home"><div class="logo">PHPDOKTOR</div></a>
                <i class="fas fa-bars hamburger"></i>
            </div>
            
            <ul class="hide">
                <li><a href="#home">{{__('index.nav_home')}}</a></li>
                <li><a href="#about">{{__('index.nav_about')}}</a></li>
                <li><a href="#contact">{{__('index.nav_contact')}}</a></li>
            </ul>
        
    </nav>
    <section id="home" class="container grid">
        <div class="main-img">
            <img src="/assets/mac_black_screen4.png" >
            <span class="first-line"></span>
            <span class="second-line"></span>
            <span class="third-line"></span>
            <span class="fourth-line"></span>
        </div>

        <h2 class="block-shadow-lg">
            <p>{{__('index.hero_1')}}</p>
            <p>{{__('index.hero_2')}} </p>
            <p>{{__('index.hero_3')}}</p>
        </h2>

        <!-- go down arrow-->
        <a href="#about"> 
            <div class="arrow">
              <ul>
                <li></li>
                <li></li>
              </ul>
            </div>
          </a>

    </section>

   

    <section id="about" class="container grid block-shadow">
        
            <h3>{{__('index.about')}}</h3>

            <p> {{__('index.about_1')}}</p>  
            <p> {{__('index.about_2')}}</p> 
            
            <h3>{{__('index.technologies')}}</h3>
            <ul id="skills">
                <li><img src="/assets/skills/js_mini.png" > <span>JS</span></li>
                <li><img src="/assets/skills/jquery_mini.png" > <span>jQuery</span></li>
                <li><img src="/assets/skills/react_mini.png" > <span>React</span></li>

                <li><img src="/assets/skills/css_mini.png" > <span>CSS</span></li>
                <li><img src="/assets/skills/bootstrap_mini.png" > <span>Bootstrap</span></li>
                <li><img src="/assets/skills/tailwind_mini.png" > <span>Tailwind</span></li>
                
                <li><img src="/assets/skills/php_mini.png" > <span>PHP</span></li>
                <li><img src="/assets/skills/codeigniter_mini.png" > <span>Codeigniter</span></li>
                <li><img src="/assets/skills/laravel_mini.png" > <span>Laravel</span></li>
            </ul>
            
            <h3>{{__('index.work_experience')}}</h3>

            <p> {{__('index.work_experience_1')}}</p>  
            <p> {{__('index.work_experience_2')}}</p>
            <p> {{__('index.work_experience_3')}}</p>

            <h3>{{__('index.education')}}</h3>
            <p>{{__('index.education_1')}}</p>
            <p>{{__('index.education_2')}}</p>
        
    </section>

    <section id="contact" class="container grid block-shadow">
        <h3>{{__('index.contact')}}</h3>

        <div class="response_ok hide">
            {{__('index.contact_response_ok')}}
         </div>
        <div class="response_error hide">
            {{__('index.contact_response_error')}} 
            <span class="error_message"></span>
        </div>
        <form >
            @csrf
            <label>
                <span>{{__('index.contact_first_name')}}</span>
                <input type="text" name="first_name" required>
            </label>
            <label>
                <span>{{__('index.contact_last_name')}}</span>
                <input type="text" name="last_name"  required>
            </label>
            <label>
                <span>{{__('index.contact_email')}}</span>
                <input type="email" name="email" required>
            </label>
            <label>
                <span>{{__('index.contact_message')}}</span>
                <textarea name="message" rows="6" required></textarea>
            </label>
            <button>{{__('index.contact_send')}}</button>
            

        </form>

    </section>


    <canvas>

    </canvas>


    


    <script>
        //captions
        const texts = ["{{__('index.computer_caption_1')}}","{{__('index.computer_caption_2')}}", "{{__('index.computer_caption_3')}}", "{{__('index.computer_caption_4')}}" ]
    </script>
    <script src="./js/fx.js"></script>
    <script src="/js/NavComponent.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>