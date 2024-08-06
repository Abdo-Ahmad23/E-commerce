
AOS.init();
// declaration
let moonIcon=document.getElementById("moonIcon");
let body=document.querySelector("body");
let toggleNavIcon=document.getElementById("toggleNavIcon");
let header=document.querySelector("header");
let btnLearnMore1=document.getElementById("btnLearnMore1");
let hiddenoptions=document.getElementById("hiddenoptions");
let elem = document.querySelectorAll('div');
let changecolor=document.querySelectorAll("div #changecolor");
let btnCategory=document.querySelectorAll(".buttonGroup button");
let option=document.querySelectorAll("#option");
let email=document.getElementById("email");
let validationBtnEmail=document.getElementById("validationBtnEmail");
let exampleModal=document.getElementById("exampleModal");
let idSec=document.getElementById("idSec");
let fParagraph=document.getElementById("fParagraph")
let fReadMoreBtn=document.getElementById("fReadMoreBtn")
btnCategory[0].classList.add("activated");
moonIcon.addEventListener("click",()=>{

    if(moonIcon.innerHTML==`<i class="fa-solid fa-moon"></i>`){
        moonIcon.innerHTML=`<i class="fa-solid fa-sun text-warning"></i>`;
        body.classList.add("dark");
        body.classList.remove("blue");
        header.classList.add("dark");
        header.classList.remove("blue");
        console.log("dark");
        for(let i=0;i<changecolor.length;i++)
    {
        changecolor[i].classList.add("lightDark");
    }
        
            
    }
    else 
    {
        moonIcon.innerHTML=`<i class="fa-solid fa-moon"></i>`;
        body.classList.remove("dark");
        body.classList.add("blue");
        header.classList.remove("dark");
        header.classList.add("blue");
        console.log("blue");
        for(let i=0;i<changecolor.length;i++)
    {
        changecolor[i].classList.remove("lightDark");
    }
    }
    


});
toggleNavIcon.addEventListener("click",()=>{
    if(toggleNavIcon.innerHTML==`<i class="navbar-toggler-icon text-white"></i>`)
    {
        toggleNavIcon.innerHTML=`<i class="fa-solid fa-xmark text-white"></i>`;
        toggleNavIcon.innerHTML=`<i class="navbar-toggler-icon text-white"></i>`;

    }
    else 
    {
        toggleNavIcon.innerHTML=`<i class="navbar-toggler-icon text-white"></i>`;
    }




});
function myfunction(){
    if(window.scrollY>=82)
    {
        header.classList.add("after100");
        // console.log(window.scrollY)
    }
    else
    {
        header.classList.remove("after100");

    }
}
    $("#Icon1").hide(1000);
      $("#Icon2").hide(1000);
      $("#Icon3").hide(1000);
// second section operations
window.addEventListener("scroll",myfunction);
$(document).ready(function(){
    $("#btnLearnMore1").click(function(){
       if($("#btnLearnMore1").text()=="Learn More")
       {
        $("#btnLearnMore1").text("Learn Less");
       }
       else 
       {
        $("#btnLearnMore1").text("Learn More");
       }
      $("#Icon1").toggle(1000);
      $("#Icon2").toggle(1000);
      $("#Icon3").toggle(1000);
    });
  });
// console.log(Math.sqrt(1000000000*100));
//   Third Section operation
// TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com 
// Initialization for ES Users

// section 5 

for(let i=0;i<btnCategory.length;i++)
{
    btnCategory[i].addEventListener("click",()=>{
        for(let j=0;j<btnCategory.length;j++)
        {
            btnCategory[j].classList.remove("activated");
            if(i==j)
            {
                option[i].classList.remove("d-none")
            }
            else {
                option[j].classList.add("d-none");
            }
        }
    btnCategory[i].classList.add("activated");



    })
}

const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };
  
  const validate = () => {
    const $result = $('#result');
    const email = $('#email').val();
    $result.text('');
  
    if(validateEmail(email)){
      $result.text(email + ' is valid.');
      $result.css('color', 'green');
    } else{
      $result.text(email + ' is invalid.');
      $result.css('color', 'red');
    }
    return false;
  }
  
  $('#email').on('input', validate);
  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});

$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500);
    return false;
});


// Testimonials carousel
$(".owl-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    dots: true,
    loop: true,
    margin:10,
    nav:true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        1200:{
            items:2
        },
        2000:{
            items:3
        }
    }
});

fReadMoreBtn.addEventListener("click",()=>{
    console.log(fReadMoreBtn.textContent);
    if(fReadMoreBtn.textContent=='Read More')
    {
        fReadMoreBtn.textContent='Read Less';
        fParagraph.innerHTML=`<p id="fParagraph">juicy burgers. That's what snow's Kitchen is all about and we love it! Our favorite is the 'Smokehouse BBQ' which is loaded with beef bacon, fried onions, and hickory BBQ sauce. Service is good but can be a bit slow during weekends and peak hours. Love nachos and want something different? Go for Snow's Nacho Burger' - you will not regret it. For many, this is the absolute king of burgers in Egypt .
        That's what snow's Kitchen is all about and we love it! Our favorite is the 'Smokehouse BBQ' which is loaded with beef bacon, fried onions, and hickory BBQ sauce. Service is good but can be a bit slow during weekends and peak hours. Love nachos and want something different? Go for Snow's Nacho Burger' - you will not regret it. For many, this is the absolute king of burgers in Egypt .
        </p>`
    }
    else {
        fReadMoreBtn.textContent='Read More';
        fParagraph.innerHTML=`<p id="fParagraph">juicy burgers. That's what snow's Kitchen is all about and we love it! Our favorite is the 'Smokehouse BBQ' which is loaded with beef bacon, fried onions, and hickory BBQ sauce. Service is good but can be a bit slow during weekends and peak hours. Love nachos and want something different? Go for Snow's Nacho Burger' - you will not regret it. For many, this is the absolute king of burgers in Egypt .
        </p>`
    }
})

